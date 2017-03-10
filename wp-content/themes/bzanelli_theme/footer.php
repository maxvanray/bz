<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barbara_Zanelli_Theme
 */

?>

	</div><!-- #content -->


	<!-- Start Footer -->
  <footer id="colophon" class="page-footer" role="contentinfo">
    <div class="container site-info">
      <!-- Contact Information -->
      <div class="row">
        <div class="col-md-12 text-center">
          &copy; <?php echo date(Y); ?> <a href="mailto:barbarazanelli@gmail.com" target="_blank"> Barbara Zanelli</a>. All Rights Reserved.
        </div><!-- /.column -->
      </div><!-- /.row -->
    </div><!-- /.container -->

  </footer>


  <?php wp_footer(); ?>


</div><!-- #page -->



</body>
</html>
