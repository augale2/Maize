<?php
/* Template Name: Home */
get_header();

$search_name = isset($_GET['stock_name']) ? sanitize_text_field($_GET['stock_name']) : '';
?>

<main>
    <!-- top of home.php, just inside <main>… -->
    <!-- <div id="search-results" class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-md mb-8"></div> -->


    <!-- Image Container with Overlay -->
    <div class="relative">
        <!-- Images -->
        <div class="flex min-h-screen w-full overflow-hidden">
            <div class="flex items-center w-full justify-between">
                <div class="w-1/3 overflow-hidden relative">
                    <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2025/02/107B_Kernels_P1rr_1.jpg"
                         alt="Left Image"
                         class="w-[200%] h-auto object-cover -translate-x-1/4">
                </div>
                <div class="w-1/3 overflow-hidden relative">
                    <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2025/02/107B_Kernels_P1rr_1.jpg"
                         alt="Right Image"
                         class="w-[200%] h-auto object-cover translate-x-1/4">
                </div>
            </div>
        </div>

        <!-- Centered Content Overlay -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="bg-white p-10 max-w-2xl text-center rounded-md">
                <h1 class="text-3xl font-semibold text-gray-800">Welcome to the Maize Genetics COOP</h1>
                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    The Maize Genetics Cooperation <br> Stock Center is operated by <a href="https://www.ars.usda.gov/" target="_blank" class="hover:underline">USDA/ARS</a>, located at the <a href="https://www.illinois.edu/" target="_blank" class="hover:underline">University of Illinois, Urbana/Champaign</a>, and integrated with the National Plant Germplasm System <a href="https://www.ars-grin.gov/npgs/" target="_blank" class="hover:underline">(NPGS)</a>. We serve the maize research community by collecting, maintaining, and distributing seeds of maize genetic stocks. We also provide information about our stocks and the mutations they carry through the Maize Genetics and Genomics Database <a href="https://www.maizegdb.org/" target="_blank" class="hover:underline">(MaizeGDB)</a>.
                </p>
            </div>
        </div>
    </div>

    <!-- News Section Below the Image Container -->
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6 mt-10">
        <!-- Main Additional Content (Left) -->
        <div class="w-full md:w-2/3 p-6 bg-white shadow-md rounded-md">
            <!-- <h2 class="text-2xl font-semibold">More Information</h2> -->
            <h2 class="text-2xl font-semibold border-b-2 border-[#14b02a] pb-2">More Information</h2>
            <p class="text-lg text-gray-600 mt-2">
                This section can contain additional details, updates, or any other relevant content.
            </p>
        </div>

        <!-- News Section (Right) -->
        <?php include get_template_directory() . '/news.php'; ?>
    </div>
</main>

<?php get_footer(); ?>
