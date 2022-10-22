<?php
/**
 * The main template file.
 */

get_header();
?>
<main class="site_main">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            the_content();
        }

        the_posts_navigation();
    } else {
        echo '<p>No Content Found!</p>';
    }
    ?>
</main>
<?php
get_footer();
