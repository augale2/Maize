<?php
/* Template Name: Home */
get_header();
?>

<main>
    <div class="relative flex min-h-screen w-full overflow-hidden">
        <!-- Image Container -->
        <div class="flex items-center w-full justify-between">
            <!-- Left Image -->
            <div class="w-1/3">
                <img src="https://uillinoisedu-my.sharepoint.com/:i:/r/personal/jlgustin_illinois_edu/Documents/NewMaizeWebsite/X13L_kernels_R1mb_1.jpg?csf=1&web=1&e=WivF1p"
                    alt="Left Image" class="w-full h-auto object-contain">
            </div>

            <!-- Right Image -->
            <div class="w-1/3">
                <img src="https://uillinoisedu-my.sharepoint.com/:i:/r/personal/jlgustin_illinois_edu/Documents/NewMaizeWebsite/107F_Kernels_P1vv_1.jpg?csf=1&web=1&e=i3EdJf"
                    alt="Right Image" class="w-full h-auto object-contain">
            </div>
        </div>

        <!-- Content Area (Absolute Positioning) -->
        <div class="absolute inset-0 flex justify-center items-center">
            <div class="bg-white p-10 max-w-2xl text-center shadow-lg rounded-md">
                <h1 class="text-3xl font-semibold text-gray-800">Welcome to the Maize Genetics COOP</h1>
                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    The Maize Genetics Cooperation • Stock Center is operated by 
                    <a href="https://www.ars.usda.gov/" target="_blank" class="text-blue-600 underline">USDA/ARS</a>, located at the 
                    <a href="https://www.illinois.edu/" class="text-blue-600 underline">University of Illinois, Urbana/Champaign</a>, 
                    and integrated with the 
                    <a href="https://www.ars-grin.gov/npgs/" target="_blank" class="text-blue-600 underline">National Plant Germplasm System (NPGS)</a>. 
                    We serve the maize research community by collecting, maintaining, and distributing seeds of maize genetic stocks. 
                    We also provide information about our stocks and the mutations they carry through the 
                    <a href="https://www.maizegdb.org/" target="_blank" class="text-blue-600 underline">Maize Genetics and Genomics Database (MaizeGDB)</a>.
                </p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
