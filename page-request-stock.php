<?php
/* Template Name: Request Stock */
get_header();
?>

<main>
    <h1>Request Stock</h1>
    <form action="#" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
</main>

<?php get_footer(); ?>
