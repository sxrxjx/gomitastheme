<?php

/*
 * Template Name: Productos
 */

?>

<?php

get_header();

while ( have_posts() ) : the_post();

    get_template_part('template-parts/content','producto');

endwhile;

get_footer();

?>