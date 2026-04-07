<article id="post-<?php the_id();?>" <?php post_class();?>>
    <div class="entry-header">
        <h1 class="entry-title"> Producto: <?php the_title();?></h1>
    </div>

    <div class="entry-content">
        <?php the_content();?>
    </div>
</article>