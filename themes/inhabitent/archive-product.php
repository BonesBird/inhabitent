<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php red_starter_posted_by(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->




<section>
    <h2>Shop Stuff<h2>
            <?php
            $terms = get_terms(
                array('taxonomy' => 'product-type', 'hide_empty' => 0)
            ); ?>
            <!-- begining of product terms -->
            <div class='product-terms'>
                <?php
                foreach ($terms as $term) : ?>
                    <li class="product-term">
                        <p><?php echo $term->description; ?></p>
                        <p>
                            <a href="<?php echo get_term_link($term); ?>">
                                <?php echo $term->name; ?> Stuff
                            </a>
                        </p>
                    <?php
                endforeach;
                ?>
            </div>
            <!-- end of product terms -->
</section>

<?php get_footer(); ?>