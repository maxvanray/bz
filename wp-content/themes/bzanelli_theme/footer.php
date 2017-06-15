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


  <?php //wp_footer(); ?>


</div><!-- #page -->

<!-- Javascript Files -->
  <script type="text/javascript" src="<?php echo trailingslashit( get_template_directory_uri() ) .'js/bootstrap.min.js' ?>"></script>
  <script type="text/javascript" src="<?php echo trailingslashit( get_template_directory_uri() ) .'js/isotope.pkgd.min.js' ?>"></script>
  <script type="text/javascript" src="<?php echo trailingslashit( get_template_directory_uri() ) .'js/imagesloaded.pkgd.min.js' ?>"></script>
  <script type="text/javascript" src="<?php echo trailingslashit( get_template_directory_uri() ) .'js/jquery.magnific-popup.min.js' ?>"></script>
  <script type="text/javascript" src="<?php echo trailingslashit( get_template_directory_uri() ) .'js/scrollreveal.min.js' ?>"></script>
  <script type="text/javascript">
    /* ---- Portfolio Isotope ---- */
    $(document).ready(function(){
      var $grid = $('.grid').isotope({
          layoutMode: 'masonry'
      });

      $grid.imagesLoaded().progress( function() {
        $grid.isotope('layout');
      });



      $('.filter-button-group').on('click', 'li', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({
              filter: filterValue
          });
      });
      $(".filter-button-group").each(function(t, e) {
          var i = $(e);
          i.on("click", "li", function() {
              i.find(".active").removeClass("active"), $(this).addClass("active")
          })
      });
    });
  </script>
  <script type="text/javascript" src="<?php echo trailingslashit( get_template_directory_uri() ) .'js/main.js' ?>"></script>



</body>
</html>
