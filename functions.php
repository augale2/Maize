<?php
function my_theme_enqueue_styles() {
    // Load main theme stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time(), 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function load_custom_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap', false);
}
add_action('wp_enqueue_scripts', 'load_custom_fonts');

add_action('rest_api_init', function(){
    register_rest_route('my/v1','stock-search', [
      'methods'  => 'POST',
      'callback' => function(\WP_REST_Request $req){
        $body       = $req->get_body();
        $remote     = wp_remote_post('https://curation2.maizegdb.org/wsgi/stock/search', [
          'headers' => ['Content-Type'=>'application/json'],
          'body'    => $body,
        ]);
        $remote_bdy = wp_remote_retrieve_body($remote);
        $decoded    = json_decode($remote_bdy, true);   // ← decode to PHP array
        return rest_ensure_response($decoded);         // ← return array, not string
      },
      'permission_callback' => '__return_true',
    ]);
  });
  
  

?>
