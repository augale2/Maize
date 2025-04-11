<?php
/**
 * Footer Template
 */
?>
<footer class="bg-white border-t-4 mt-5 border-[#14b02a] py-8 text-gray-600">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Footer Content Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Column 1: Another column -->
      <div>
        <h3 class="text-2xl font-semibold mb-2">Title</h3>
        <p class="text-base">Something &amp; Something</p>
        <p class="text-base">Something Something Something</p>
        <p class="text-base">Something Something Something</p>
      </div>
      <!-- Column 2: Contact -->
      <div>
        <h3 class="text-2xl font-semibold mb-2">Contact</h3>
        <p class="text-base">
          Email: 
          <a href="mailto:maize@uiuc.edu" class="text-[#14b02a] hover:underline">
            maize@uiuc.edu
          </a>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente molestias, officia eaque 
        </p>
        <!-- <p class="text-sm">Phone: (123) 456-7890</p> -->
      </div>
      <!-- Column 3: Some Name -->
      <div>
        <h3 class="text-2xl font-semibold mb-2">Hello</h3>
        <p class="text-base"><strong>Example example example</strong><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente molestias, officia eaque </p>
        <p class="text-base"><strong>Hello</strong><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente molestias, officia eaque </p>
        <p class="text-base"><strong>Hello</strong><br>Loren</p>
        <p class="text-base"><strong>Hello</strong><br>lorem epsum</p>
      </div>
      <!-- Column 4: Location -->
      <div>
        <h3 class="text-2xl font-semibold mb-2">Location</h3>
        <p class="text-base">S 123 Turner Hall</p>
        <p class="text-base">1102 South Goodwin Avenue</p>
        <p class="text-base">Urbana, IL 61801-4730</p>
        <!-- Optional: Map Embed (responsive) -->
        <div class="mt-3 h-48 w-full">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d948.4934817894324!2d-88.22442045261813!3d40.10287899012289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880cd71773969f65%3A0xe666ad76d4a798c6!2sTurner%20Hall!5e1!3m2!1sen!2sus!4v1743788362579!5m2!1sen!2sus"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
    <!-- Footer Bottom -->
    <div class="mt-8 text-center border-t pt-4">
      <p class="text-base">&copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
    </div>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
