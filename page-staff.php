<?php
/* Template Name: Staff */
get_header();
?>

<main class="mx-auto p-4 sm:p-6 lg:p-8 max-w-7xl">
    <!-- Page Heading -->
    <h1 class="text-center text-4xl font-bold mb-6">Current Team Members</h1>
    <hr class="border-gray-300 mb-8">

    <!-- Grid of Staff Cards -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        
        <!-- Example Staff Card -->
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
            <!-- Circular Image -->
            <img
                src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2024/04/sachs1-1.jpg"
                alt="Marty Sachs"
                class="w-32 h-32 object-cover rounded-full mb-4"
            >
            <!-- Name & Title -->
            <h2 class="text-xl font-semibold mb-1">Marty Sachs</h2>
            <p class="text-gray-600 mb-3">Director</p>
            
            <!-- Read More Button -->
            <a
                href="/marty-sachs-2"
                class="inline-block bg-[#14b02a] text-white visited:text-white px-4 py-2 rounded hover:bg-green-700 transition"
            >
                Read More
            </a>

            <!-- Optional Quote/Description -->
            <p class="text-sm text-gray-500 mt-3 italic">
                Also, one of the data curators for 
                <a href="#" class="text-red-600 hover:underline">MaizeGDB</a>.
            </p>
        </div>

        <!-- Repeat for other staff members -->
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
            <img
                src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2024/04/jeff-1.jpg"
                alt="Jeff Gustin"
                class="w-32 h-32 object-cover rounded-full mb-4"
            >
            <h2 class="text-xl font-semibold mb-1">Jeff Gustin</h2>
            <p class="text-gray-600 mb-3">Curator</p>
            <a
                href="/jeff-gustin-2"
                class="inline-block bg-[#14b02a] text-white visited:text-white px-4 py-2 rounded hover:bg-green-700 transition"
            >
                Read More
            </a>
        </div>

        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
            <img
                src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2024/04/shane.jpg"
                alt="Shane Zimmerman"
                class="w-32 h-32 object-cover rounded-full mb-4"
            >
            <h2 class="text-xl font-semibold mb-1">Shane Zimmerman</h2>
            <p class="text-gray-600 mb-3">Ag. Res. Tech.</p>
            <a
                href="/shane-zimmerman-2"
                class="inline-block bg-[#14b02a] text-white visited:text-white px-4 py-2 rounded hover:bg-green-700 transition"
            >
                Read More
            </a>
        </div>
    </div>

    <!-- Optional Memorial / Additional Note -->
    <div class="text-center mt-8">
        <p class="text-gray-700">
            We mourn the loss of our colleague and friend
            <a href="/philip-stinard-2" class="font-semibold hover:underline">
                Philip Stinard
            </a>.
        </p>
    </div>

    <!-- Newsletter or Other Link Section -->
    <div class="border-t border-gray-300 mt-6 pt-4 text-center">
        <h3 class="text-[#14b02a] font-semibold italic text-lg">
            <a href="https://www.maizegdb.org/mnl" target="_blank">
                Maize Genetics Cooperation - Newsletter
            </a>
        </h3>
    </div>
</main>

<?php get_footer(); ?>
