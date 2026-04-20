<?php get_header(); ?>

<main id="main-category" class="container">
    <h1 class="category-title"><?php single_cat_title(); ?></h1>
    <?php if ( have_posts() ) : ?>
        <div class="categorias row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card">
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        <div class="card-body">
                            <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e( 'No se encontraron publicaciones en esta categoría.', 'gomitatheme' ); ?></p> 
    <?php endif; ?>

</main>

<?php get_footer(); ?>