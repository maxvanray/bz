<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Barbara_Zanelli_Theme
 */

?>




		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bzanelli_theme' ),
				'after'  => '</div>',
			) );
		?>



