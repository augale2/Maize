<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body <?php body_class(); ?>>

<header class="bg-white shadow-md relative z-50 border-b-4 border-[#14b02a]">
  <div class="max-w-full px-6 flex justify-between items-center py-6 md:py-8">
    <div class="flex items-center">
      <a href="<?php echo esc_url( home_url('/') ); ?>">
        <img
          src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2025/03/MaizeCOOPIcon_Background_Final.png"
          alt="logo"
          class="h-12 md:h-16 w-auto cursor-pointer"
        />
      </a>
    </div>

    <div class="hidden md:flex items-center space-x-8">
      <nav>
        <ul class="flex space-x-6 text-gray-800 font-medium">
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="pb-2 hover:text-[#14b02a] <?php if(is_front_page()) echo 'border-b-4 border-[#14b02a]'; ?>">
              Home
            </a>
          </li>
          <li class="relative group">
            <a href="#" class="pb-2 hover:text-[#14b02a]">
              About MGCSC
            </a>
            <ul class="absolute left-0 mt-1 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 z-50">
              <li><a href="/about" class="block px-4 py-2 hover:bg-[#14b02a]">General Information</a></li>
              <li><a href="/annual-report-2" class="block px-4 py-2 hover:bg-[#14b02a]">Annual Report</a></li>
              <li><a href="/staff" class="block px-4 py-2 hover:bg-[#14b02a]">Staff</a></li>
            </ul>
          </li>
          <li class="relative group">
            <a href="#" class="pb-2 hover:text-[#14b02a]">
              Our Collection
            </a>
            <ul class="absolute right-0 mt-1 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 z-50">
              <li><a href="/about-our-collection" class="block px-4 py-2 hover:bg-[#14b02a]">About</a></li>
              <li><a href="https://www.maizegdb.org/stock_catalog" target="_blank" class="block px-4 py-2 hover:bg-[#14b02a]">Stock Catalog</a></li>
              <li><a href="https://www.maizegdb.org/data_center/stock#simple_search" target="_blank" class="block px-4 py-2 hover:bg-[#14b02a]">Simple Query</a></li>
              <li><a href="https://www.maizegdb.org/data_center/stock#advanced_search" target="_blank" class="block px-4 py-2 hover:bg-[#14b02a]">Advanced Query</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <form action="<?php echo esc_url( home_url('/search-results/') ); ?>" method="get" class="relative">
        <input
          type="text"
          name="stock_name"
          placeholder="Search stock…"
          class="border border-gray-300 rounded-full pl-4 pr-10 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-[#14b02a]"
        />
        <button type="submit" class="absolute inset-y-0 right-4 flex items-center justify-center text-gray-600 rounded-full p-2 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
          </svg>
        </button>
      </form>
    </div>

    <div class="md:hidden flex items-center space-x-4">
      <button id="mobile-search-toggle" class="text-gray-800 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
        </svg>
      </button>
      <button id="mobile-menu-toggle" class="text-gray-800 focus:outline-none">
        
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <div id="mobile-search" class="hidden px-6 pb-4 md:hidden">
    <form action="<?php echo esc_url( home_url('/search-results/') ); ?>" method="get" class="relative">
      <input
        type="text"
        name="stock_name"
        placeholder="Search stock…"
        class="border border-gray-300 rounded-full pl-4 pr-10 py-2 w-full focus:outline-none focus:ring-2 focus:ring-[#14b02a]"
      />
      <button type="submit" class="absolute inset-y-0 right-4 flex items-center justify-center text-gray-600 hover:text-white hover:bg-[#14b02a] rounded-full w-6 h-6 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/>
        </svg>
      </button>
    </form>
  </div>


  <nav id="mobile-menu" class="md:hidden hidden bg-white shadow-md pb-4">
    <ul class="space-y-4 px-6 text-gray-800 font-medium">
      <li><a href="<?php echo esc_url(home_url('/')); ?>" class="block hover:text-[#14b02a] <?php if(is_front_page()) echo 'font-semibold'; ?>">Home</a></li>
      <li><a href="/about" class="block hover:text-[#14b02a]">About MGCSC</a></li>
      <li><a href="/about-our-collection" class="block hover:text-[#14b02a]">Our Collection</a></li>
      <li><a href="/staff" class="block hover:text-[#14b02a]">Staff</a></li>
    </ul>
  </nav>
</header>

<script>
  document.getElementById('mobile-menu-toggle').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
  document.getElementById('mobile-search-toggle').addEventListener('click', () => {
    document.getElementById('mobile-search').classList.toggle('hidden');
  });
</script>
