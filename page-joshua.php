<?php
/* Template Name: Joshua */
get_header();
?>

<main class="mx-auto p-4 sm:p-6 lg:p-8">
    <!-- Banner Section -->
    <section class="relative w-full h-22 bg-gray-800 flex items-center justify-center text-white text-center rounded-lg">
        <div>
            <h1 class="text-4xl font-semibold italic">Joshua P. Tolbert</h1>
            <p class="text-lg mt-2"></p>
        </div>
    </section>

    <!-- Profile Picture & Basic Info -->
    <section class="flex flex-col items-center text-center">
        <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2024/04/Josh1.png" alt="Profile Picture" class="rounded-lg shadow-lg border-4 border-white h-60 w-60 object-cover">
        <h2 class="text-2xl font-semibold mt-4">IT Specialist</h2>
        <p class="text-gray-600 mt-2">Email: <a href="jtolbert@uiuc.edu" class="text-blue-500 hover:underline">jtolbert@uiuc.edu</a></p>
        
        <!-- Social Media Links -->
        <div class="flex space-x-4 mt-4">
            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook text-2xl"></i></a>
            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin text-2xl"></i></a>
            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter text-2xl"></i></a>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-3xl font-semibold">About</h2>
        <p class="text-gray-700 mt-4">
        I joined the Maize Genetics COOP Stock Center in December of 2005. My primary responsibilities include maintaining/updating our data storage and retrieval system for Cooperation stocks, performing system maintenance tasks such as backups, user account management and upgrades, along with working closely with the Maize Genome DataBase (MaizeGDB) in Ames, IA to insure that our curation tools play well together.
        </p>
       
    </section>

</main>

<?php get_footer(); ?>
