<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
</div> <!-- #content -->

<footer id="colophon" class="site-footer footer-container" role="contentinfo">

	<div class="footer-block">


		<div class="contact-info">
			<h3>Contact Info</h3>
			<p style="display: flex;"><i class="fa fa-envelope"></i>
				info@inhabitent.com</p>
			<p><i class="fa fa-phone"></i>
				778-456-7891</p>
		</div>

		<div class="hours-info">
			<h3>Business Hours</h3>
			<p><span class="bold-hours">Monday-Friday:</span>9am to 5pm</p>
			<p><span class="bold-hours">Saturday:</span> 10am to 2pm</p>
			<p><span class="bold-hours">Sunday:</span> Closed</p>
		</div>


		<div class="copyright-container">
			<p>COPYRIGHT © 2019 INHABITENT</p>
		</div>

		<div class="footer-image">
			<img src="<?php echo get_template_directory_uri(); ?>/project-04-2/images/logos/inhabitent-logo-text.svg" alt="no picture">
		</div>
		<!-- add footer logo -->
	</div>
</footer><!-- #colophon -->

</div><!-- end of page -->
</body>
<?php wp_footer(); ?>

</html>