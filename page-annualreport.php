<?php
/* Template Name: Annual Report */
get_header();
?>

<main class="mx-auto p-4 sm:p-6 lg:p-8">
    <div class="space-y-12">
        <section class="space-y-6">
            <h2 class="text-3xl font-semibold">Annual Report Summary</h2>
            <div class="text-center mt-4">
                <p class="text-gray-700">
                    S-123 Turner Hall <br>
                    1102 South Goodwin Avenue <br>
                    Urbana, IL 61801-4730
                </p>
                <p class="mt-2 font-semibold text-gray-800">
                    (217) 333-6631 [phone] | (217) 333-6064 [fax] <br>
                    <a href="mailto:maize@uiuc.edu" class="text-blue-600 hover:underline">maize@uiuc.edu</a> [e-mail] <br>
                    <a href="http://maizecoop.cropsci.uiuc.edu/" class="text-blue-600 hover:underline">http://maizecoop.cropsci.uiuc.edu/</a>
                </p>
            </div>
        </section>

        <section class="space-y-6">
            <p class="text-gray-800 leading-relaxed">
                2,333 seed samples have been supplied in response to 207 requests for 2022. These include 94 requests received from 14 foreign countries. Our request numbers are still significantly lower than pre-pandemic years. Interest in reverse genetics tools, such as the UniformMu sequence indexed stocks, remains high and steady. Presently, requests that include UniformMu stocks represent approximately 55% of our total requests. Other popular stock requests include Ac/Ds sequence indexed stocks, haploid-inducing lines, male sterile cytoplasms, Fast-flowering mini-maize, gametophyte factor alleles, kernel starch quality traits, and plant architecture traits.
            </p>
            <p class="text-gray-800 leading-relaxed">
                Approximately 4.0 acres of nursery were grown this summer at the Crop Sciences Research & Education Center located at the University of Illinois. Cool wet, spring weather caused us to delay planting both of our crossing nurseries until mid-May and early June, respectively. Record hot dry weather took over in mid-May through early July, which allowed for good germination in our crossing nurseries. Moderate temperatures dominated the remainder of the growing season allowed a normal pollinations. Near record low precipitation in June forced us to provide overhead irrigate twice. Corn smut was heavier than normal in the later planted nursery, particularly in weaker inbred lines. There were sufficient stands for a good increase in almost all instances.
            </p>
        </section>

        <section class="space-y-6">
            <h2 class="text-3xl font-semibold">Special Plantings were made for the following stocks:</h2>
            <ul class="list-disc pl-6 text-gray-800">
                <li>Plantings were made of recently donated stocks from the collections of Phil Becraft (12 kernel mutants) and Mark Settles (7 ded1 alleles and 209 seed mutants). These stocks will be made available for request once we confirm that sufficient inventory was produced from this season’s nursery.</li>
                <li>Three stock collections have reached our timeline for repropagation. 1) the original Intermated B73xMo17 (IBM) population consisting of 302 Recombinant Inbred Lines (RILs); 2) the rare isozyme collection produce by Major Goodman consisting of 106 stocks; 3) the collection of 129 UniformMu kernel mutants with rough map positions donated by Mark Settles. Over the past two seasons we have propagated 60% of the IBM RILs, 92% of the Goodman collection, and 56% of the Settles’ mapped kernel mutants. The remaining stocks from each collection will be planted in future nurseries.</li>
                <li>Stocks produced from the NSF project "Regulation of maize inflorescence architecture" (see: <a href="http://www.maizegdb.org/MIP/" class="text-blue-600 hover:underline">http://www.maizegdb.org/MIP/</a>) were grown again this summer. Approximately 175 families of M2 materials that were produced between 2006 and 2013 were grown to increase seed supplies and recover previously observed mutations.</li>
                <li>Critical plantings of a limited number of stocks were made in our greenhouse facilities focused on stocks that grow poorly in our summer nurseries.</li>
            </ul>
        </section>

        <section class="space-y-6">
            <h2 class="text-3xl font-semibold">Additional Stock Donations</h2>
            <p class="text-gray-800 leading-relaxed">
                Erik Vollbrecht donated two stocks containing recessive deletions of the knotted1 gene; one of which was linked to the bronze (Bz2) kernel color marker.
            </p>
            <p class="text-gray-800 leading-relaxed">
                Over the past year, we have begun migrating much of our digital infrastructure to a new PostgreSQL architecture created by and supported at MaizeGDB. As part of the MaizeGDB Data Curation toolkit upgrade, MaizeGDB staff is rewriting the internal Stock Center tools for managing pedigree and inventory information, and the public facing webpage for submitting stock requests. Once completed, all records on our current server will be transferred to the new database housed at MaizeGDB.
            </p>
            <p class="text-gray-800 leading-relaxed">
                We have also begun building an image library of all stocks in the collection. Stocks with kernel and ear phenotypes are being imaged a using high resolution Epson V600 flat bed scanner. Seedling and adult plant phenotypes are being imaged using a Samsung Galaxy tablet in the greenhouse and field. These scans and images will be linked to the stock pages so that Stock Center staff have easy access to a picture of the stock as well as the genetic information. The library will be particulary useful for the large number of unmapped â€˜phenotype onlyâ€™ mutants in the collection for which no representative image is available.
            </p>
            <p class="text-gray-800 leading-relaxed">
                Our IT Specialist's time has continued to be diverted toward Urbana location issues, leaving little time for COOP-specific needs.
            </p>
        </section>

        <section class="mt-8 border-t pt-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4 text-center">
                <div>
                    <p class="font-semibold">Marty Sachs</p>
                    <p class="text-sm text-gray-600">Director</p>
                </div>
                <div>
                    <p class="font-semibold">Jeff Gustin</p>
                    <p class="text-sm text-gray-600">Curator</p>
                </div>
                <div>
                    <p class="font-semibold">Shane Zimmerman</p>
                    <p class="text-sm text-gray-600">Agric Sci Res Tech (Plants)</p>
                </div>
                <div>
                    <p class="font-semibold">Josh Tolbert</p>
                    <p class="text-sm text-gray-600">Information Tech Specialist</p>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>