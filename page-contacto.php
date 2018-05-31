<?php
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

<section class="cover bg-img">
  <div id="map"></div>
</section>

<section>

    <div class="red-section-header">
        <div class="container">
            <h3><?php the_title(); ?><span><img src="<?php echo get_template_directory_uri();?>/img/mini_icono_contacto.png"></span></h3>
        </div>
    </div>

    <div class="container products-container">
        <div class="row">
            <div class="col-xs-12 col-md-6 clearfix">
                <?php

                the_content();

                ?>
            </div>
            <div class="col-xs-12 col-md-6 clearfix">

                <div class="contact-data">
                    <h3>Contáctenos</h3>
                    <ul>
                        <FONT SIZE=2><li><img src="http://www.ancla.la/wp-content/uploads/2017/05/icon.png"><b> PBX:</b> <a href="tel:(+571) 3116211">(+571) 3116211 </a></li>
                        <li><img src="http://www.ancla.la/wp-content/uploads/2017/05/icon3.png"><b> Dirección: </b>Carrera 68h # 73a - 29, Bogotá Colombia</li>
                        <li><img src="http://www.ancla.la/wp-content/uploads/2017/05/clock.png"><b> Horario: </b>Lunes a viernes  8:00 a.m. a 6:00 pm. Sábados 8:00 a.m. a 12:00 m.</li>
                        <h3>Escríbanos</h3>
                        <FONT SIZE=2><li><img src="http://www.ancla.la/wp-content/uploads/2017/05/iconsobre.png"><b> Información general:</b> <a href="mailto:">info@ancla.la</a></li>
                        <li><img src="http://www.ancla.la/wp-content/uploads/2017/05/iconsobre.png"><b> Información ventas:</b> <a href="mailto:"><a href="mailto:ventas@cajasfuertesancla.com.co">ventas@cajasfuertesancla.com.co</a></li>
                        <li><img src="http://www.ancla.la/wp-content/uploads/2017/05/iconsobre.png"><b> Servicios:</b> <a href="mailto:servicios@cajasfuertesancla.com.co ">servicios@cajasfuertesancla.com.co</a></li>
                        <li><img src="http://www.ancla.la/wp-content/uploads/2017/05/iconsobre.png"><b> Atención al cliente:</b> <a href="mailto:servicios@cajasfuertesancla.com.co ">servicios@cajasfuertesancla.com.co</a></li>
                                               
                    </ul>

                </div>
            </div>
        </div>
    </div>

</section>

<?php

$lat_long = CFS()->get('lat_long');
$coords = explode(",", $lat_long);

?>

<script>
      function initMap() {

          var myLatLng = {lat: <?php echo $coords[0]; ?>, lng: <?php echo $coords[1]; ?>};

          var contentString = '<div id="content">'+
              '<h3 id="firstHeading" class="firstHeading"><?php echo get_bloginfo( 'name', 'display' ) ?></h3>'+
              '<div id="bodyContent">'+
              'Dirección: <?php echo get_theme_mod('address') ?> </br>'+
              'Teléfono: <?php echo get_theme_mod('contact_phone') ?> </br>'+
              'Email: <?php echo get_theme_mod('contact_email') ?> </br>'+
              '</div>'+
              '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              scrollwheel: false,
              zoom: 15,
              styles: [
                {
                  "featureType": "administrative.locality",
                  "elementType": "labels",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "administrative.neighborhood",
                  "elementType": "labels.text",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "landscape.man_made",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "landscape.man_made",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "lightness": "30"
                    }
                  ]
                },
                {
                  "featureType": "landscape.man_made",
                  "elementType": "geometry.fill",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "landscape.man_made",
                  "elementType": "geometry.stroke",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "landscape.natural.landcover",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "poi",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "poi.attraction",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.business",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.government",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.medical",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    },
                    {
                      "gamma": "4.45"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "labels",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.place_of_worship",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.place_of_worship",
                  "elementType": "labels",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.school",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "poi.sports_complex",
                  "elementType": "all",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    },
                    {
                      "gamma": "1.5"
                    },
                    {
                      "lightness": "34"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "labels",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "road.highway.controlled_access",
                  "elementType": "labels",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "all",
                  "stylers": [
                    {
                      "gamma": "0.50"
                    }
                  ]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "visibility": "on"
                    },
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "road.local",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "visibility": "on"
                    },
                    {
                      "hue": "#ff0000"
                    }
                  ]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels",
                  "stylers": [
                    {
                      "hue": "#ff0000"
                    },
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "labels",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#df464a"
                    }
                  ]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "labels.icon",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station.bus",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station.bus",
                  "elementType": "labels.text",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station.bus",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station.bus",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "transit.station.bus",
                  "elementType": "labels.icon",
                  "stylers": [
                    {
                      "visibility": "on"
                    }
                  ]
                }
              ]
            });


            var marker = new google.maps.Marker({
                position: myLatLng,
                icon: '<?php echo get_template_directory_uri(); ?>/img/map_pin.png',
                map: map
            });

          marker.addListener('click', function() {
              infowindow.open(map, marker);
          });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzLnx3jwbamPXFtl9bsjHtsWxNKgaV-vg&callback=initMap"
    async defer></script>




<?php

endwhile; // End of the loop.

get_footer();
?>