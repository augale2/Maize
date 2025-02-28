<?php
/* Template Name: Home */
get_header();
?>

<main>
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
                    The Maize Genetics Cooperation • Stock Center is operated by USDA/ARS, located at the University of Illinois, Urbana/Champaign, and integrated with the National Plant Germplasm System (NPGS). We serve the maize research community by collecting, maintaining, and distributing seeds of maize genetic stocks. We also provide information about our stocks and the mutations they carry through the Maize Genetics and Genomics Database (MaizeGDB).
                </p>
            </div>
        </div>
    </div>

    <!-- News Section Below the Image Container -->
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-6 mt-10">
        <!-- Main Additional Content (Left) -->
        <div class="w-full md:w-2/3 p-6 bg-white shadow-md rounded-md">
            <h2 class="text-2xl font-semibold">More Information</h2>
            <p class="text-gray-700 mt-2">
                This section can contain additional details, updates, or any other relevant content.
            </p>
        </div>

        <!-- News Section (Right) -->
        <?php include get_template_directory() . '/news.php'; ?>
    </div>
</main>

<?php get_footer(); ?>
