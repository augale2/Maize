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
<header class="bg-green-800 text-white p-4">
    <div class="flex justify-between items-center">
        <!-- Logo Section -->
        <div class="logo flex items-center">
            <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2024/05/maizesm-45-1.png" alt="logo" class="h-12 mr-3">
            <h1 class="text-xl font-bold"><?php bloginfo('name'); ?></h1>
        </div>

        <!-- Navigation Menu (Hamburger on mobile) -->
        <nav class="text-white hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:underline text-white">Home</a></li>

                <!-- About MGCSC Dropdown -->
                <li class="relative group">
                    <a href="#" class="hover:underline">About MGCSC</a>
                    <ul class="absolute left-0 bg-green-700 text-white w-48 shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300">
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-600">General Information</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-600">MGCSC Annual Report</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-600">Maize COOP Staff</a></li>
                    </ul>
                </li>

                <!-- Our Collection Dropdown -->
                <li class="relative group">
                    <a href="#" class="hover:underline">Our Collection</a>
                    <ul class="absolute left-0 bg-green-700 text-white w-56 shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300">
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-600">About Our Collection</a></li>
                        <li><a href="https://www.maizegdb.org/stock_catalog" class="block px-4 py-2 hover:bg-green-600">Stock Catalog (at MaizeGDB)</a></li>
                        <li><a href="https://www.maizegdb.org/data_center/stock#simple_search" class="block px-4 py-2 hover:bg-green-600">Simple Stock Query Form (at MaizeGDB)</a></li>
                        <li><a href="https://www.maizegdb.org/data_center/stock#advanced_search" class="block px-4 py-2 hover:bg-green-600">Advanced Stock Query (at MaizeGDB)</a></li>
                    </ul>
                </li>

                <!-- Request Stocks Dropdown (Aligned to the Right) -->
                <li class="relative group">
                    <a href="#" class="hover:underline">Request Stocks</a>
                    <ul class="absolute right-0 bg-green-700 text-white w-56 shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300">
                        <li><a href="https://maizegdb.org/ordering/coop_order" class="block px-4 py-2 hover:bg-green-600">Request Form</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-600">Contact Us</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-600">E-mail Us</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-green-600">Related Websites</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Hamburger Menu for Mobile (hidden on larger screens) -->
        <div class="md:hidden flex items-center">
            <button id="hamburger-menu" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <nav id="mobile-menu" class="md:hidden bg-green-800 text-white hidden">
        <ul class="space-y-4 p-4">
            <li><a href="/" class="hover:underline text-white">Home</a></li>
            <li><button class="text-white w-full text-left" onclick="toggleDropdown('about-dropdown')">About MGCSC</button>
                <ul id="about-dropdown" class="hidden bg-green-700 text-white">
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-600">General Information</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-600">MGCSC Annual Report</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-600">Maize COOP Staff</a></li>
                </ul>
            </li>

            <li><button class="text-white w-full text-left" onclick="toggleDropdown('collection-dropdown')">Our Collection</button>
                <ul id="collection-dropdown" class="hidden bg-green-700 text-white">
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-600">About Our Collection</a></li>
                    <li><a href="https://www.maizegdb.org/stock_catalog" class="block px-4 py-2 hover:bg-green-600">Stock Catalog (at MaizeGDB)</a></li>
                    <li><a href="https://www.maizegdb.org/data_center/stock#simple_search" class="block px-4 py-2 hover:bg-green-600">Simple Stock Query Form (at MaizeGDB)</a></li>
                    <li><a href="https://www.maizegdb.org/data_center/stock#advanced_search" class="block px-4 py-2 hover:bg-green-600">Advanced Stock Query (at MaizeGDB)</a></li>
                </ul>
            </li>

            <li><button class="text-white w-full text-left" onclick="toggleDropdown('request-dropdown')">Request Stocks</button>
                <ul id="request-dropdown" class="hidden bg-green-700 text-white">
                    <li><a href="https://maizegdb.org/ordering/coop_order" class="block px-4 py-2 hover:bg-green-600">Request Form</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-600">Contact Us</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-600">E-mail Us</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-green-600">Related Websites</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<script>
    // Toggle mobile menu visibility
    const hamburger = document.getElementById("hamburger-menu");
    const mobileMenu = document.getElementById("mobile-menu");

    hamburger.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });

    // Function to toggle dropdown visibility on mobile
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle("hidden");
    }
</script>

</body>
</html>
