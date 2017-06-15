<?php
/**
 * Template Name: Home Page
 *
 */
?>


<?php get_header( 'home' ); ?>

<style type="text/css">

.acf-map {
  width: 100%;
  height: 400px;
  border: #ccc solid 1px;
  margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvfTIihCSMVziTck6uIWPt7JccDCAByS0"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $el (jQuery element)
*  @return  n/a
*/

function new_map( $el ) {

  // var
  var $markers = $el.find('.marker');


  // vars
  var args = {
    zoom    : 16,
    center    : new google.maps.LatLng(0, 0),
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };


  // create map
  var map = new google.maps.Map( $el[0], args);


  // add a markers reference
  map.markers = [];


  // add markers
  $markers.each(function(){

      add_marker( $(this), map );

  });


  // center map
  center_map( map );


  // return
  return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $marker (jQuery element)
*  @param map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {

  // var
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  // create marker
  var marker = new google.maps.Marker({
    position  : latlng,
    map     : map
  });

  // add to array
  map.markers.push( marker );

  // if marker contains HTML, add it to an infoWindow
  if( $marker.html() )
  {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html()
    });

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function() {

      infowindow.open( map, marker );

    });
  }
}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param map (Google Map object)
*  @return  n/a
*/

function center_map( map ) {

  // vars
  var bounds = new google.maps.LatLngBounds();

  // loop through all markers and create bounds
  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });

  // only 1 marker?
  if( map.markers.length == 1 )
  {
    // set center of map
      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
  }
  else
  {
    // fit to bounds
    map.fitBounds( bounds );
  }
}
var map = null;

$(document).ready(function(){

  $('.acf-map').each(function(){

    // create map
    map = new_map( $(this) );

  });

});

})(jQuery);
</script>

<div id="exhibits">

  <div class="jumbotron" style="background: url('<?php the_field('hero_background_image'); ?>')">
    <div class="container">
      <h1><?php the_field('hero_title'); ?></h1>
      <p><em><?php the_field('hero_subtitle'); ?></em></p>
      <p><a class="btn btn-primary btn-lg" href="/contact" role="button">Contact &raquo;</a></p>
    </div>
  </div>



<h2 class="sect-title">News &amp; Exhibitions</h2>

<!-- Begin Exhibits -->
<?php if( have_rows('exhibits') ): ?>

<div class="container">
    <div class="row">

<?php

$row = 1;
while( have_rows('exhibits') ): the_row();
      // vars
      $title        = get_sub_field('title');
      $date         = get_sub_field('date');
      $location     = get_sub_field('location');
      $description  = get_sub_field('description');
      $link         = get_sub_field('link');
      $bg_image     = get_sub_field('background_image');
      ?>

      <div class= "col-md-4 exhibit">
          <?php if($bg_image ): ?>
            <img src="<?php echo $bg_image[url]; ?>">
          <?php endif; ?>

          <?php if($title ): ?>
            <h2 class=""><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php if($date): ?>
              <p class=""><?php echo $date; ?></p>
          <?php endif; ?>

          <?php if( $description ): ?>
              <p class=""><?php echo $description; ?></p>
          <?php endif; ?>


          <?php if( $link ): ?>
            <span class="divider"></span>
            <p class="no-margin">
              <a class="btn btn-primary btn-lg scroll-link" data-id="about" href="<?php echo $link; ?>" target="_blank" role="button">Link to Event</a>
            </p>
          <?php endif; ?>

          <?php if( $location ): ?>
            <span class="divider"></span>

            <div class="acf-map">
              <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
          <?php /*  <p class="no-margin">
              <a class="btn btn-primary btn-lg scroll-link" href="<?php echo $location; ?>" target="_blank" role="button">Map</a>
            </p> */ ?>
          <?php endif; ?>

        </div><!-- /.container -->

    <?php
    ++$row;
    endwhile; ?>

    </div><!-- /.carousel inner -->
</div>
<!-- End Main Carousel -->

    <?php endif; ?>


</div>

<?php get_footer(); ?>
