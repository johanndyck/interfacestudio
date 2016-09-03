<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Interface_Studio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<p>
				&copy; <?php echo date("Y") ?> The Interface Studio.  All rights reserved.
			</p>
			<p>
				<i class="fa fa-envelope" aria-hidden="true"></i> The Interface Studio, LLC<br>
				955 E Campbell Rd, Ste 300-541<br>
				Richardson, TX 75081
			</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:19723167333">(972)316-7333</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
