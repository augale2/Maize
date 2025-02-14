<?php
/* Template Name: Home */
get_header();
?>

<main>
    <div class="relative flex justify-center items-center min-h-screen w-full overflow-hidden">
        <!-- Left Side -->
        <div class="absolute left-0 top-0 h-1/2 w-1/3 bg-cover bg-center"
             style="background-image: url('https://uillinoisedu-my.sharepoint.com/:i:/r/personal/jlgustin_illinois_edu/Documents/NewMaizeWebsite/X13L_kernels_R1mb_1.jpg?csf=1&web=1&e=kvau7Q'); background-position: left;">
        </div>

        <!-- Content Area -->
        <div class="relative z-10 bg-white p-10 max-w-2xl mx-auto text-center shadow-lg rounded-md">
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

        <!-- Right Side -->
        <div class="absolute right-0 top-0 h-1/2 w-1/3 bg-cover bg-center"
             style="background-image: url('https://uillinoisedu-my.sharepoint.com/:i:/r/personal/jlgustin_illinois_edu/Documents/NewMaizeWebsite/107F_Kernels_P1vv_1.jpg?csf=1&web=1&e=i3EdJf'); background-position: right;">
        </div>
    </div>
</main>

<?php get_footer(); ?>
