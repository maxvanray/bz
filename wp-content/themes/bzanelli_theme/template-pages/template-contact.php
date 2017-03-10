<?php
/**
 * Template Name: Contact Page
 *
 */
?>


<?php get_header( 'work' ); ?>

<style>

       #map {
        height: 300px;
        width: 100%;
       }
    </style>



<!-- Begin Map -->
<div id="map"></div>

<!-- Begin Contact -->
<section id="contact" class="section-padding section-border-top">
	<div class="container">

		<!-- Title -->
		<div class="row mb40">
			<div class="col-xs-12 text-center">
				<h2>Contact</h2>
				<span class="divider divider-center divider-dark no-margin-bottom"></span>
			</div><!-- /.column -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-6 col-md-offset-3">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'bz' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
			</div>
		</div>
	</div>
</section>

<script>
      function initMap() {
        var uluru = {lat: 40.6700, lng: -73.9400};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          disableDefaultUI: true,
          styles: [
		    {
		        "featureType": "all",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#cdc79c"
		            }
		        ]
		    },
		    {
		        "featureType": "all",
		        "elementType": "geometry.fill",
		        "stylers": [
		            {
		                "saturation": "0"
		            },
		            {
		                "lightness": "0"
		            }
		        ]
		    },
		    {
		        "featureType": "all",
		        "elementType": "labels.text.fill",
		        "stylers": [
		            {
		                "gamma": 0.01
		            },
		            {
		                "lightness": 20
		            }
		        ]
		    },
		    {
		        "featureType": "all",
		        "elementType": "labels.text.stroke",
		        "stylers": [
		            {
		                "saturation": -31
		            },
		            {
		                "lightness": -33
		            },
		            {
		                "weight": 2
		            },
		            {
		                "gamma": 0.8
		            }
		        ]
		    },
		    {
		        "featureType": "all",
		        "elementType": "labels.icon",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "landscape",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "lightness": 30
		            },
		            {
		                "saturation": 30
		            }
		        ]
		    },
		    {
		        "featureType": "poi",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "saturation": 20
		            }
		        ]
		    },
		    {
		        "featureType": "poi.park",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "lightness": 20
		            },
		            {
		                "saturation": -20
		            }
		        ]
		    },
		    {
		        "featureType": "road",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "lightness": 10
		            },
		            {
		                "saturation": -30
		            }
		        ]
		    },
		    {
		        "featureType": "road",
		        "elementType": "geometry.stroke",
		        "stylers": [
		            {
		                "saturation": 25
		            },
		            {
		                "lightness": 25
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "all",
		        "stylers": [
		            {
		                "lightness": -20
		            }
		        ]
		    }]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvfTIihCSMVziTck6uIWPt7JccDCAByS0&callback=initMap">
</script>


<?php bzanelli_theme_entry_footer(); ?>
<?php get_footer(); ?>

