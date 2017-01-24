<?php
get_header(); ?>

<section>
    <img class="full-w" src="<?php echo get_template_directory_uri();?>/img/contacto-banner.jpg" alt="contacto">
</section>

<section>

    <div class="home-products-header">
        <div class="container">
            <h3>CONTÁCTO
                <small>
                    <img src="<?php echo get_template_directory_uri();?>/img/mini_icono_contacto.png">
                </small>
            </h3>
        </div>
    </div>

    <div class="container products-container">
        <div class="col-md-12">
            <div class="col-md-6">
                <form action="#" class="form-circle-box">
                    <div class="form-group">
                         <label>Nombre:</label>
                         <input type="text" class="form-control" placeholder="Nombres y apellidos" name="fullName" required />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label>Mensaje:</label>
                        <textarea rows="3" name="message" class="form-control input-md">Mensaje</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-red pull-right">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
               <div id="map"></div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="support-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/img/soporte_widget_banner.jpg');">
        <div class="container">
            <h5>CONTÁCTO CON SOPORTE TÉCNICO</h5>
        </div>
    </div>
</section>


<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 4.682118, lng: -74.088628},
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
