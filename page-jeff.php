<?php
/* Template Name: Jeff */
get_header();
?>

<main class="mx-auto p-4 sm:p-6 lg:p-8">
    <!-- Banner Section -->
    <section class="relative w-full h-22 bg-gray-800 flex items-center justify-center text-white text-center rounded-lg">
        <div>
            <h1 class="text-4xl font-semibold italic">Jeff Gustin</h1>
            <p class="text-lg mt-2"></p>
        </div>
    </section>

    <!-- Profile Picture & Basic Info -->
    <section class="flex flex-col items-center text-center">
        <img src="https://maizecoopsc.web.illinois.edu/wp-content/uploads/2024/04/jeff-1.jpg" alt="Profile Picture" class="rounded-lg shadow-lg border-4 border-white h-80 w-80 object-cover">
        <h2 class="text-2xl font-semibold mt-4">Curator</h2>
        <p class="text-gray-600 mt-2">Email: <a href="jlgustin@illinois.edu" class="text-blue-500 hover:underline">jlgustin@illinois.edu</a></p>
        
        <!-- Social Media Links -->
        <div class="flex space-x-4 mt-4">
            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook text-2xl"></i></a>
            <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-linkedin text-2xl"></i></a>
            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter text-2xl"></i></a>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-3xl font-semibold">Background</h2>
        <ul class="list-disc list-inside mt-4 text-gray-700 space-y-2">
            <li>Postdoc and Research Faculty at the University of Florida 2008-2020</li>
            <li>Ph.D. Purdue University 2008</li>
            <li>BA Pennsylvania State University at Erie (The Behrend College) 2001</li>
        </ul>
    </section>

    <!-- Research Section -->
    <section class="bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-3xl font-semibold">About</h2>
        <p class="text-gray-700 mt-4">
            As Curator of the Maize Genetics Cooperation - Stock Center, my role is to collect novel genetic stocks for inclusion into the Center's collection and to propagate the large and diverse collection for maintenance and distribution to Maize Genetics community. The vast array of genetic stocks is the living inheritance from generations of maize geneticists and I'm honored to be entrusted with their care.
        </p>
        <p class="text-gray-700 mt-4">
            My background and interests loosely align around investigation of the genetic mechanisms that govern maize kernel development and biochemical composition. I am also interested in developing tools for efficient capture of kernel phenotypes. Machine vision tools such as cameras, flat-bed scanners and near-infrared spectroscopy (NIRS) are excellent tools for capturing external and internal kernel traits in a rapid and non-destructive manner. I am working to incorporate imaging tools into the Center's operations to enrich stock information beyond textual descriptions.
        </p>
        <p class="text-gray-700 mt-4">
            Stock center employees have a long history of not only maintaining stocks, but also generating useful and interesting material for general study and use. In this tradition, I am developing new haploid inducing maize lines for use in doubled haploid breeding including high oil haploid induction lines. High oil maize has a long history at the University of Illinois, and I look forward to continuing the tradition by developing materials that will be of value to maize genetics community.
        </p>
        <p class="text-gray-700 mt-4">
            Feel free to contact me with your stock requests or questions. Please also consider contributing your genetic stocks to the collection for study by future generations of maize geneticists.
        </p>
        <p class="text-gray-700 mt-4">
            OrcID: https://orcid.org/0000-0002-5913-0200
        </p>
        <p class="text-gray-700 mt-4">
        Further information and publications can be found <a href="https://maizegdb.org/person?id=1191755#">here.</a>.
        </p>

    
    </section>

    <!-- Role & Responsibilities -->
    <!-- <section class="bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-3xl font-semibold">Role & Responsibilities</h2>
        <p class="text-gray-700 mt-4">
            Acting as a liaison between commercial blueberry growers and university researchers.
            Communicating new developments in breeding, pathology, and horticultural sciences to the community.
        </p>
    </section> -->
</main>

<?php get_footer(); ?>
