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
			<!-- <a href='project-04-2/images/logos/inhabitent-logo-full.svg'></a> -->
			<img src="project-04-2/images/logos/inhabitent-logo-full.svg" alt="">
		</section>
		<section browse-shop>
			<h2>Shop Stuff<h2>
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

</div>
<!-- end of product terms -->
</section>


</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>