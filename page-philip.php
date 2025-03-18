<?php
/* Template Name: Phillip */
get_header();
?>

<main class="mx-auto p-4 sm:p-6 lg:p-8">
    <!-- Banner Section -->
    <section class="relative w-full h-64 bg-gray-800 flex items-center justify-center text-white text-center rounded-lg">
        <div>
            <h1 class="text-4xl font-semibold italic">Philip Stinard</h1>
            <p class="text-lg mt-2">(1958 - 2019)</p>
        </div>
    </section>

    <!-- Profile Picture & Basic Info -->
    <section class="flex flex-col items-center text-center">
        <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2024/04/phil.jpg" alt="Profile Picture" class="rounded-lg shadow-lg border-4 border-white h-40 w-40 object-cover">
        <!-- <h2 class="text-2xl font-semibold mt-4">IT Specialist</h2>
        <p class="text-gray-600 mt-2">Email: <a href="jtolbert@uiuc.edu" class="text-blue-500 hover:underline">jtolbert@uiuc.edu</a></p> -->
        
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
            Philip was the Curator of the Maize Genetics Cooperation - Stock Center (1993-2019). His duties included collecting, documenting, and propagating the thousands of mutants that have been discovered by corn geneticists, breeders, 
            and farmers over the years. In addition, Phil has made his own contributions to the field of corn genetics by discovering and characterizing new mutants. This research was started in the laboratory of Dr. Donald S. Robertson at Iowa State University in 1982 and continued in the laboratory of Dr. Patrick Schnable at Iowa State beginning in 1991. Phil joined the Maize Genetics Cooperation - Stock Center in 1993, and continued his research in starch biosynthetic mutants (sugary3 and amylose extender1), aleurone color mutants (dilute aleurone1, brown aleurone1, and John Deere Corn), and various other seedling, kernel, and mature plant mutants. Further information and publications can be found here.
        </p>
       
    </section>

</main>

<?php get_footer(); ?>
