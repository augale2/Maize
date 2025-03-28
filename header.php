<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body <?php body_class(); ?>>

<header class="bg-white shadow-md relative z-50 border-b-4 border-[#14b02a]">
    <div class="max-w-full px-6 flex justify-between items-center py-6 md:py-8">
        <!-- Logo Section -->
        <div class="flex items-center">
            <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2025/03/MaizeCOOPIcon_Background_Final.png" alt="logo" class="h-12 md:h-16 w-auto">
        </div>

        <!-- Desktop Navigation Menu -->
        <nav class="hidden md:block">
            <ul class="flex space-x-8 text-gray-800 font-medium">
                <li class="relative group">
                    <a href="/" class="pb-2 text-gray-900 group-hover:text-[#14b02a] relative <?php echo is_front_page() ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">
                        Home
                    </a>
                </li>
                
                <!-- About MGCSC Dropdown -->
                <li class="relative group">
                    <a href="#" class="pb-2 text-gray-900 group-hover:text-[#14b02a] relative">
                        About MGCSC
                        <span class="absolute left-0 right-0 -top-1 h-1 bg-[#14b02a] opacity-0 group-hover:opacity-50 transition-opacity duration-300"></span>
                    </a>
                    <ul class="absolute left-0 mt-1 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 z-50">
                        <li><a href="/about" class="block px-4 py-2 hover:bg-[#14b02a] <?php echo is_page('about') ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">General Information</a></li>
                        <li><a href="/annual-report-2" class="block px-4 py-2 hover:bg-[#14b02a]">MGCSC Annual Report</a></li>
                        <li><a href="/staff" class="block px-4 py-2 hover:bg-[#14b02a] <?php echo is_page('staff') ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">Maize COOP Staff</a></li>
                    </ul>
                </li>

                <!-- Our Collection Dropdown -->
                <li class="relative group">
                    <a href="#" class="pb-2 text-gray-900 group-hover:text-[#14b02a] relative">
                        Our Collection
                        <span class="absolute left-0 right-0 -top-1 h-1 bg-[#14b02a] opacity-0 group-hover:opacity-50 transition-opacity duration-300"></span>
                    </a>
                    <ul class="absolute right-0 mt-1 w-56 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 z-50">
                        <li><a href="/about-our-collection" class="block px-4 py-2 hover:bg-[#14b02a] <?php echo is_page('about-our-collection') ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">About Our Collection</a></li>
                        <li><a href="https://www.maizegdb.org/stock_catalog" class="block px-4 py-2 hover:bg-[#14b02a]">Stock Catalog</a></li>
                        <li><a href="https://www.maizegdb.org/data_center/stock#simple_search" class="block px-4 py-2 hover:bg-[#14b02a]">Simple Stock Query</a></li>
                        <li><a href="https://www.maizegdb.org/data_center/stock#advanced_search" class="block px-4 py-2 hover:bg-[#14b02a]">Advanced Stock Query</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-toggle" class="text-gray-800 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-8 w-8">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <nav id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-4">
        <ul class="space-y-4 px-6 text-gray-800 font-medium">
            <li>
                <a href="/" class="block pb-2 <?php echo is_front_page() ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">
                    Home
                </a>
            </li>
            <li>
                <button class="w-full text-left hover:text-[#14b02a]" onclick="toggleDropdown('mobile-about')">About MGCSC</button>
                <ul id="mobile-about" class="hidden pl-4">
                    <li><a href="/about" class="block px-4 py-2 hover:bg-[#14b02a] <?php echo is_page('about') ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">General Information</a></li>
                    <li><a href="/annual-report-2" class="block px-4 py-2 hover:bg-[#14b02a]">MGCSC Annual Report</a></li>
                    <li><a href="/staff" class="block px-4 py-2 hover:bg-[#14b02a] <?php echo is_page('staff') ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">Maize COOP Staff</a></li>
                </ul>
            </li>
            <li>
                <button class="w-full text-left hover:text-[#14b02a]" onclick="toggleDropdown('mobile-collection')">Our Collection</button>
                <ul id="mobile-collection" class="hidden pl-4">
                    <li><a href="/about-our-collection" class="block px-4 py-2 hover:bg-[#14b02a] <?php echo is_page('about-our-collection') ? 'border-b-4 border-[#14b02a] font-semibold' : ''; ?>">About Our Collection</a></li>
                    <li><a href="https://www.maizegdb.org/stock_catalog" class="block px-4 py-2 hover:bg-[#14b02a]">Stock Catalog</a></li>
                    <li><a href="https://www.maizegdb.org/data_center/stock#simple_search" class="block px-4 py-2 hover:bg-[#14b02a]">Simple Stock Query</a></li>
                    <li><a href="https://www.maizegdb.org/data_center/stock#advanced_search" class="block px-4 py-2 hover:bg-[#14b02a]">Advanced Stock Query</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<script>
    document.getElementById("mobile-menu-toggle").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
    
    function toggleDropdown(id) {
        document.getElementById(id).classList.toggle("hidden");
    }
</script>

</body>
</html>
