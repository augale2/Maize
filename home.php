<?php
/* Template Name: Home */
get_header();
?>

<main>
    <div class="relative flex min-h-screen w-full overflow-hidden">
        <!-- Image Container -->
        <div class="flex items-center w-full justify-between">
            <div class="w-1/3 overflow-hidden relative">
                <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2025/02/107B_Kernels_P1rr_1.jpg"
                    alt="Left Image" class="w-[200%] h-auto object-cover -translate-x-1/4">
            </div>

            <div class="w-1/3 overflow-hidden relative">
                <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2025/02/107B_Kernels_P1rr_1.jpg"
                    alt="Right Image" class="w-[200%] h-auto object-cover translate-x-1/4">
            </div>
        </div>

        <!-- Content Area (Absolute Positioning) -->
        <div class="absolute inset-0 flex justify-center items-center">
            <div class="bg-white p-10 max-w-2xl text-center rounded-md">
                <h1 class="text-3xl font-semibold text-gray-800">Welcome to the Maize Genetics COOP</h1>
                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    The Maize Genetics Cooperation • Stock Center is operated by 
                    <a href="https://www.ars.usda.gov/" target="_blank" class="underline">USDA/ARS</a>, located at the 
                    <a href="https://www.illinois.edu/" class="underline">University of Illinois, Urbana/Champaign</a>, 
                    and integrated with the 
                    <a href="https://www.ars-grin.gov/npgs/" target="_blank" class="underline">National Plant Germplasm System (NPGS)</a>. 
                    We serve the maize research community by collecting, maintaining, and distributing seeds of maize genetic stocks. 
                    We also provide information about our stocks and the mutations they carry through the 
                    <a href="https://www.maizegdb.org/" target="_blank" class="underline">Maize Genetics and Genomics Database (MaizeGDB)</a>.
                </p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
