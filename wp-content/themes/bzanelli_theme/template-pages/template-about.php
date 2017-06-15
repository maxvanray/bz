<?php
/**
 * Template Name: About Page
 *
 */
?>


<?php get_header( 'work' ); ?>
<section id="about" class="section-padding-about section-border-bottom">
	<div class="container">

			<!-- Title -->
			<div class="row title">
				<div class="col-xs-12 text-center">
					<h2>About</h2>
					<span class="divider divider-center divider-dark no-margin-bottom"></span>
				</div><!-- /.column -->
			</div><!-- /.row -->

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'bz' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>



	 </div><!-- /.container -->
</section>

<?php bzanelli_theme_entry_footer(); ?>

<?php get_footer(); ?>
