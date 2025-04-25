<?php
/* Template Name: Search Results */
get_header();

$search_name = isset($_GET['stock_name']) 
    ? sanitize_text_field($_GET['stock_name']) : '';
?>

<main class="mx-auto p-4 sm:p-6 lg:p-8 max-w-7xl">

  <form action="" method="get" class="mb-6">
    <input 
      type="text" 
      name="stock_name" 
      value="<?php echo esc_attr($search_name); ?>" 
      placeholder="Search stock…" 
      class="border rounded px-3 py-2 w-full md:w-1/2"
    />
    <button type="submit" class="ml-2 bg-[#14b02a] text-white px-4 py-2 rounded">
      Search
    </button>
  </form>

  <div id="search-results" class="bg-white shadow-md rounded-md p-6">
    <?php if ( ! $search_name ): ?>
      <p class="text-gray-600">Enter a stock name and click “Search” above.</p>
    <?php endif; ?>
  </div>
</main>

<script>
jQuery(document).ready(function($){
  const name = '<?php echo esc_js($search_name); ?>';
  if (!name) return;

  const $res = $('#search-results').html('Loading…');

  $.ajax({
    method: 'POST',
    url: '<?php echo esc_url_raw( rest_url('my/v1/stock-search') ); ?>',
    contentType: 'application/json',
    dataType: 'json',
    data: JSON.stringify({ curation_lvl: 0, name })
  })
  .done(function(data) {
    if (!data.length) {
      $res.html('<p>No results found for “' + name + '”.</p>');
      return;
    }
    console.log(data);
    let html = '<ul class="list-disc pl-5">';
    data.forEach(item => {
      html += `
        <li>
          <a 
            href="https://maizegdb.org/data_center/stock?id=${item.id}" 
            target="_blank"
            class="text-[#14b02a] hover:underline"
          >
            ${item.name}
          </a>
        </li>`;
    });
    html += '</ul>';
    $res.html(html);
  })
  .fail(function() {
    $res.html('<p class="text-red-500">Error fetching data.</p>');
  });
});
</script>

<?php get_footer(); ?>
