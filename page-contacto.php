<?php
get_header(); ?>

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
            <div class="col-md-6">
                <?php

                if ( function_exists( 'ccf_output_form' ) ) {
                    ccf_output_form( 113 );
                }

                ?>
<!--                <form action="#" class="form-circle-box">-->
<!--                    <div class="form-group">-->
<!--                         <label>Nombre:</label>-->
<!--                         <input type="text" class="form-control" placeholder="Nombres y apellidos" name="fullName" required />-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>Email:</label>-->
<!--                        <input type="email" class="form-control" placeholder="Email" name="email" required />-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label>Mensaje:</label>-->
<!--                        <textarea rows="3" name="message" class="form-control input-md">Mensaje</textarea>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <button type="submit" class="btn btn-red pull-right">Enviar</button>-->
<!--                    </div>-->
<!--                </form>-->
            </div>
            <div class="col-md-6">
               <div id="map"></div>
            </div>
        </div>
    </div>

</section>

<?php

$lat_long = CFS()->get('lat_long');
$coords = explode(":", $lat_long);

?>

<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $coords[0]; ?>, lng: <?php echo $coords[1]; ?>},
          scrollwheel: false,
          zoom: 8
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzLnx3jwbamPXFtl9bsjHtsWxNKgaV-vg&callback=initMap"
    async defer></script>




<?php
get_footer();
?>
