<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 25/10/17
 * Time: 01:09 م
 */

?>

    <?php /* Template Name:custom-page-contact-us.php*/ ?>



    <?php

get_header();

$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
    $col = 'col-md-9';
} ?>


        <!---------------------------------Start Section Head-------------------------------->
        <section class="head contact-page" data-src="<?php echo get_template_directory_uri(); ?>/img/quality2.png">
            <div class="overlay">
                <h2 class="uppercase">
                    <?php pll_e('Star Of Export')?>
                </h2> 
               <!--  <h3 class="uppercase">Stars of Export International</h3> -->
               <ul class="info">
                    <li><? echo get_option('address'); ?></li>
                   <li>Email : <a href="mailto:<? echo get_option('email'); ?>"><? echo get_option('email'); ?></a></li>
                   <li>tel : <? echo get_option('phone1'); ?> </li>
                   <li>fax : <? echo get_option('phone2'); ?> </li>
                </ul>


                <ul class="link">
                    <li><a href="#form-contact" class="uppercase">CONTACT FORM</a></li>
                    <li><a href="#location" class="uppercase">location</a></li>
                </ul>
                <span>For English: Laurens Borg – Tel <? echo get_option('phone1'); ?> – email <a href="mailto:<? echo get_option('email'); ?>"><? echo get_option('email'); ?></a></span><br>
                <span>Für Deutsch: Tom Radder – Tel <? echo get_option('phone1'); ?> – email <a href="mailto:<? echo get_option('email'); ?>"><? echo get_option('email'); ?></a></span>


            </div>

        </section>

        <!---------------------------------End Section Head---------------------------------->

        <!-------------Start Section Of Products--------------->

        <section id="form-contact">
            <div class="container">
                <h2 class="uppercase title"><? pll_e("Contact Form") ?></h2>
                <div class="title-star">
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                </div>

                <style>
                    .form-contact-us p,
                    .form-contact-us label,
                    .form-contact-us input {
                        text-align: left !important;
                    }

                </style>
             
                            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]')?>
                        
                
            </div>
        </section>



        <section class="map" id="location">

            <div class="map-block acf-map">
<?php 

$location = get_field('map', 22);

if( !empty($location) ):
?>
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
<?php endif; ?>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: new google.maps.LatLng(-33.91722, 151.23064),
          mapTypeId: 'roadmap'
        });

        var icons = {
          info: {
            icon: {url:'<?php echo get_template_directory_uri(); ?>/img/black-logo.png',
scaledSize: new google.maps.Size(50, 50), // scaled size
}
          }
        };

        var features = [
          {
            position: new google.maps.LatLng(-33.91721, 151.22630),
            type: 'info'
          }
        ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCklGxOC2xKjaE_fUBYR1N9tvm8QK-GsR4"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
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
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
        var icon       =  {
            url:'<?php echo get_template_directory_uri(); ?>/img/black-logo.png',
            scaledSize :  new google.maps.Size(90, 107),
           }
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		icon			: icon,
	});

var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Star of Experts</h1>'+
            '<div id="bodyContent">'+
            '<p><?=get_option('address')?></p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
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
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
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

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){
	var lat = $(this).attr('data-lat');
	var lng = $(this).attr('data-lng');
	var latlng = new google.maps.LatLng( $(this).attr('data-lat'), $(this).attr('data-lng') );
		// create map
		map = new_map( $(this) );
google.maps.event.trigger(map, 'resize');
        var icons = {
          info: {
            icon       :  {
            url:'<?php echo get_template_directory_uri(); ?>/img/black-logo.png',
            scaledSize :  new google.maps.Size(50, 50),
           }
          }
        };
        var features = [
          {
            position: latlng,
            type: 'info'
          }
        ];



	});

});

})(jQuery);
</script>

            </div>

        </section>


        <!------------------End Section Get In Toutch----------------------------->


        <?php get_footer(); ?>
        <script>
            $(document).ready(function() {
                $('.navbar-bg').addClass('navbar-head');
            })

        </script>
