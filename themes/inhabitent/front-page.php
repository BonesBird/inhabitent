<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class='d-journal'>
			<h2>Inhabitnet Journal</h2>

			<!-- loop with get post -->

			<?php $args = array('post_type' => 'post', 'order' => 'ASC', 'post_per_page' => 3);
			$journal_posts = get_posts($args); // returns an array of posts
			?>
			<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>

				<div class='journal-entry'>
					<!-- post title -->
					<?php if (has_post_thumbnail()) : ?>
						<div class="thumb-wrapper">
							<?php the_post_thumbnail('Large'); ?>
						</div>
					<?php endif; ?>
					<!-- end of post title -->
					<!-- showing number of comments for content -->
					<div class='fp-post-meta'>
						<?php echo get_the_date(); ?>
						<?php echo get_comments_number(); ?>Comments
					</div>
					<!-- end of comment show code -->

					<!-- button for linked content to title -->
					<a href="<?php echo get_the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
					<!-- end of content -->
					
					<!-- for more details coded botton -->
					<a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">More detail</a>
					<!-- end of coded button -->

					


				<?php endforeach;
			wp_reset_postdata();
			?>
				<!-- end of loop -->
		</section>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>