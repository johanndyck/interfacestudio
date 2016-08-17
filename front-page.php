<?php
  /**
   * Template Name: Front Page Template
   *
   * @package The_Interface_Studio
   */

get_header(); ?>

	<div id="primary" class="content-area">
	
		<div class="lead">
			<h2>Building Connection</h2>
			<p>Our online lives are dominated by interfaces. We want to build the best interfaces that not only get the job done, but connect people to you. If you need help with your web project contact us to see how we can help.
			</p>
			<button>Contact</button>
		</div>	
		<div class="welcome">

		</div>
		<section class="features">
			<div class="feature">
				<img src='<?php 
					 echo get_template_directory_uri()
					?>/images/strategy.svg' alt='Strategy' class="icon">
				<h3>Online Strategy Consulting</h3>
				<p>Does your site meet your business goals? We will work with you to connect your business strategy with your online presence.</p>
			</div>
			<div class="feature">
				<img src='<?php 
					 echo get_template_directory_uri()
					?>/images/user.svg' alt='User' class="icon">
				<h3>Creating Memorable Experiences</h3>
				<p>Your user expects a great experience when visiting your site. We’ll make your site perform well, and look like you.</p>
			</div>
			<div class="feature">
				<img src='<?php 
					 echo get_template_directory_uri()
					?>/images/maintenence.svg' alt='Maintenence' class="icon">
				<h3>Maintainable Solutions</h3>
				<p>Let’s work together to develop a solution that is not outdated as soon as it’s launched.</p>
			</div>		
		</section>
		
		<section class="about">
			<div class="iamge"><img src="photo" alt="Johann Dyck"></div>
			<div>Hi. I’m Johann Dyck and I have been designing and developing sites for over 10 years. I started The Interface Studio to help people and businesses have an online presence that they are proud to claim. Contact me to see how we can work together.</div>
		</section>
		
		<?php 	// testimonials go here 
				// free wordpress theme goes here
		?>
		
		<section class="contact">
		
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
