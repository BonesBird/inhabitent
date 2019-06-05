<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="header-contanment">
            <header class="page-header">
                <?php if (have_posts()) : ?>



                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    ?>
                    <?php
                    $terms = get_terms(
                        array('taxonomy' => 'product-type', 'hide_empty' => 0)
                    ); ?>
                    <!-- begining of product terms -->
                    <div class='product-terms'>

                        <?php
                        foreach ($terms as $term) : ?>

                            <li class="product-term" style="list-style-type: none;">
                                <p>
                                    <a href="<?php echo get_term_link($term); ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </p>
                            <?php
                        endforeach;
                        ?>

                    </div>
                    <!-- ending of product-terms -->
                </header>
            </div>

            <!-- .page-header -->
            <div class="shop-containment">
                <?php /* Start the Loop */ ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>

                            <?php endif; ?>

                            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                        </header><!-- .entry-header -->
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