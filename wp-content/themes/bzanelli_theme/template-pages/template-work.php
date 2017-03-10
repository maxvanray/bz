<?php
/**
 * Template Name: Work Page
 *
 */
?>


<?php get_header( 'work' ); ?>



<section id="work" class="section-padding-work section-border-bottom">
    <div class="container">

      <!-- Title -->
      <div class="row mb50">
        <div class="col-sm-12 col-md-6 col-md-offset-3 text-center filter-button-group">
          <h2>Work</h2>
          <span class="divider divider-center divider-dark mb30"></span>
          <span>Filter :</span>
          <ul class="list-work-filter list-unstyled list-inline">
            <li class="active" data-filter="*">All</li>
            <?php if( have_rows('categories') ): ?>
                  <?php while ( have_rows('categories') ) : the_row();
                    $galleryTitlefilter = get_sub_field('gallery_label');
                    $galleryCollectionfilter = preg_replace('/\s*/', '', $galleryTitlefilter);
                    $galleryCollectionfilter = strtolower($galleryCollectionfilter);

                    echo "<li data-filter='.$galleryCollectionfilter'>$galleryTitlefilter</li>";
                  endwhile;
                endif; ?>
          </ul>
        </div><!-- /.column -->
      </div><!-- /.row -->




      <!-- Masonry Portfolio -->
      <div class="row grid">


          <?php if( have_rows('categories') ): ?>
            <?php while ( have_rows('categories') ) : the_row();

              $galleryTitle = get_sub_field('gallery_label');
              $galleryCollection = preg_replace('/\s*/', '', $galleryTitle);
              $galleryCollection = strtolower($galleryCollection);
              $images = get_sub_field('gallery');

                if( $images ):
                  foreach( $images as $image ): ?>

                  <div class="col-md-2 <?php echo $galleryCollection; ?>">
                    <a href="<?php echo $image['url']; ?>" class="zoom">
                      <div class="grid-item" >
                        <div class="overlay">
                          <div class="inner-overlay">
                            <h4><?php echo $image['title']; ?></h4>
                            <span><?php echo $galleryCollection; ?></span>
                          </div>
                        </div>
                        <img src="<?php echo $image['sizes']['medium']; ?>" class="img-responsive" alt="<?php echo $image['title']; ?>">
                      </div>
                    </a>
                  </div><!-- /.column -->

                  <?php
                  endforeach;
                endif;
              endwhile;
          endif; ?>

      </div>


    </div><!-- /.container -->
</section>





<?php bzanelli_theme_entry_footer(); ?>

<?php get_footer(); ?>



