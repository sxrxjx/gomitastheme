<!-- este archivo es obligatorio, junto al style.css. Se debe llamar index.php, no puede tener otra nomenclatura -->
<?php
get_header();

// LOOP DE WORDPRESS para comprobar que hay contenido en la página indicada
while ( have_posts() ) : the_post();

// esto se refiere a la caja de texto que aparece al editar la página
    the_content();
    
endwhile;

get_footer();
?>