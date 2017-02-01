<?php
get_header(); ?>

<section class="cover bg-img">
    <img src="<?php echo get_template_directory_uri();?>/img/soporte-banner.jpg" alt="soporte">
</section>

<section>

    <div class="red-section-header">
        <div class="container">
            <h3>Soporte técnico <span><img src="<?php echo get_template_directory_uri();?>/img/mini_icono_soporte.png"></span></h3>
        </div>
    </div>

    <div class="container products-container">
        <div class="row">
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
                <div class="border-box">
                    <h4><span class="red">CHAT</span> EN LÍNEA</h4>
                    <div class="box-icon">
                        <img src="<?php echo get_template_directory_uri();?>/img/icono_chat.png" alt="chat">
                    </div>
                    <div class="text-center">
                        <a href="javascript" class="btn btn-border-red">Iniciar</a>
                     </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="support-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/img/soporte_widget_banner.jpg');">
        <div class="container">
            <a href="#"><h5>Contacto con soporte técnico</h5></a>
        </div>
    </div>
</section>


<?php
get_footer();
?>