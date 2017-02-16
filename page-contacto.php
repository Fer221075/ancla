<?php
get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

<section class="cover bg-img">
    <?php the_post_thumbnail(); ?>
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
               <div id="map"></div>
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
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $coords[0]; ?>, lng: <?php echo $coords[1]; ?>},
          scrollwheel: false,
          zoom: 13
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzLnx3jwbamPXFtl9bsjHtsWxNKgaV-vg&callback=initMap"
    async defer></script>




<?php

endwhile; // End of the loop.

get_footer();
?>
