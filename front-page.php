<?php
  /**
   * Template Name: Front Page Template
   *
   * @package The_Interface_Studio
   */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<?php if ( is_active_sidebar( 'welcome' ) ) : ?>
			<div id="welcome" role="welcome">
				<?php dynamic_sidebar( 'welcome' ); ?>
			</div><!-- #welcome -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'services' ) ) : ?>
			<div id="services" role="services">
				<?php dynamic_sidebar( 'services' ); ?>
			</div><!-- #services -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'products' ) ) : ?>
			<div id="products" role="products">
				<?php dynamic_sidebar( 'products' ); ?>
			</div><!-- #products -->
		<?php endif; ?>

		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
