<!-- este archivo es obligatorio no puede tener otra nomenclatura -->
<?php
get_header();

// LOOP DE WORDPRESS para comprobar que hay contenido en la página indicada
while ( have_posts() ) : the_post();
    // esto carga el content-page al page: suma la ruta 'template-parts/content' al page 'page'
    get_template_part('template-parts/content','page');
    
endwhile;

get_footer();
?>