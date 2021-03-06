<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>


            <?php /* Start the Loop */ ?>
            <div class="product-container">
                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php endif; ?>



                            <?php if ('post' === get_post_type()) : ?>
                                <div class="entry-meta">
                                    <?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php red_starter_posted_by(); ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                            <span class="price"><?php echo CFS()->get('product_price');  ?></span>
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->
                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>