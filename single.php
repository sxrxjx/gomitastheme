<?php
get_header();
?>

<main class="main-post container">
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post container">
            <div class="post-header">
                <h2 class="post-title"><?php the_title(); ?></h2>
                <div class="category">
                    <?php the_category(', '); ?>
                </div>
            </div>
            
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?></div>
            <div class="post-content">
                <?php the_content(); ?></div>
            
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();