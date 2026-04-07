<!-- este primer comentario es obligatorio para nombrar un plantilla específica. Wordpress lo reconoce y la añade al desplegable de plantillas de la interfaz. Ahora solo hay que decirle a la página desde ese desplegable que la monte en la página.-->

<?php

/*
 * Template Name: Categorías
 */

?>

<!-- luego cargamos nuestro contenido, donde el archivo que se carga se llamará de manera concreta (content-categoria) -->
<?php
get_header();

// LOOP DE WORDPRESS para comprobar que hay contenido en la página indicada
while ( have_posts() ) : the_post();
    // esto carga el content-page al page: suma la ruta 'template-parts/content' al page 'categoria'
    get_template_part('template-parts/content','categoria');
    
endwhile;

get_footer();
?>