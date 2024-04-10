<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()) : 
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
            <?php
        endwhile;
    else :
        ?>
        <p><?php _e('Sorry, no posts matched your criteria.', 'oc-itech-services'); ?></p>
        <?php
    endif;
    ?>
</main><!-- #main -->

<?php get_footer(); ?>
