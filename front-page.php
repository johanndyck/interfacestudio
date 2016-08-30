<?php
  /**
   * Template Name: Front Page Template
   *
   * @package The_Interface_Studio
   */

get_header(); ?>

	<div id="primary" class="content-area">
	
		<div class="hero">
			<div class="container">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Front Page Welcome") ) : ?>
			<?php endif;?>
			</div>
		</div>	

		<section class="services container">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Front Page Services") ) : ?>
			<?php endif;?>	
		</section>
		
		<section class="about">
			<div class="container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/johanndyck.jpg" alt="Johann Dyck">
				<p>Hi. I’m Johann Dyck and I have been designing and developing sites for over 10 years. I started The Interface Studio to help people and businesses have an online presence that they are proud to claim. Contact me to see how we can work together.</p>		
			</div>

		</section>
		
		<?php 	// testimonials go here 
				// free wordpress theme goes here
		?>
		
		<section class="contact container">
		
			<?php
				if ( have_posts() ) :
			
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php
			the_content();


		?>
	</div><!-- .entry-content -->

</article><!-- #post-## --> 
		<?php

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

	
		</section>
		
	
	</div><!-- #primary -->

<?php
get_footer();
