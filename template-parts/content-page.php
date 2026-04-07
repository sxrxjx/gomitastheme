<!-- carga el id de la página y carga también una serie de clases del post -->
<article id="post-<?php the_id();?>" <?php post_class();?>>
    <div class="entry-header">
    <h1><?php the_title();?></h1>
    <!-- esta es uan segunda forma de hacerlo ---- <?php the_title('<h1 class="entry-title">','</h1>');?> -->
    </div>
    <!-- cargamos el contenido de la página -->
    <div class="entry-content">
        <?php the_content();?>
    </div>
</article>