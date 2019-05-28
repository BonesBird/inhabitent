<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>



            <header class="page-header">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
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
            <!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php
                get_template_part('template-parts/content');
                ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>