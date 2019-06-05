<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="home-hero">
			<img src="<?php echo get_template_directory_uri() . ('/project-04-2/images/logos/inhabitent-logo-full.svg') ?>">
		</section>

		<section browse-shop>
			<h2>shop stuff</h2>
			<?php
			$terms = get_terms(
				array('taxonomy' => 'product-type', 'hide_empty' => 0)
			); ?>
			<!-- begining of product terms -->
			<div class='product-terms'>
				<ul>
					<?php
					foreach ($terms as $term) : ?>
						<li class="product-term" style="list-style-type: none;">
							<img src="<?php echo get_template_directory_uri() .
											'/project-04-2/images/product-type-icons/' .
											$term->slug . '.svg'
										?>" />
							<!-- links of products -->
							<p><?php echo $term->description; ?></p>
							<p>
								<a href="<?php echo get_term_link($term); ?>">
									<?php echo $term->name; ?>
								</a>
							</p>
						</li>
					<?php
				endforeach;
				?>
				</ul>
			</div>
		</section>

		<section class="new-entrys">
			<h2>Inhabitent Journal</h2>
			<article class="journal-3">
				<?php
				$args = array(
					'post_type' => 'post',
					'numberposts' => '3',
				);
				$journal_posts = get_posts($args);
				?>
				<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>

					<div class="grid-item newContent">
						<?php if (has_post_thumbnail()) : ?>
							<a class="journal-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
								<?php the_post_thumbnail('large'); ?>
							</a>

						<?php endif; ?>

						<!-- post author and date -->
						<div class="grid-item entryTitle-btn">
							<div class="fp-post-meta">
								<?php echo get_the_date(); ?>
								<?php echo get_comments_number(); ?> Comments
							</div>

							<!-- post title -->

							<h3>
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							</h3>
							<div class="grid-item readMore-btn">
								<a href="<?php the_permalink(); ?>">Read Entry</a>
							</div>
						</div>
					</div>
				<?php endforeach;
			wp_reset_postdata(); ?>
			</article>

		</section>
		<section class="new-entrys">
			<h2>Adventures</h2>
			<div class="grid-container">
				<div class="bg-image"></div>
				<div class="bg-image"></div>
				<div class="bg-image"></div>
				<div class="bg-image"></div>
			</div>
			<div class="adv-btn">
				<button type="button" class="tocos-too-are-a-great-adventure" onclick="alert('no adventures tocos for you!')">MORE ADVENTURES</button>
			</div>
		</section>

</div>


</div>




</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>