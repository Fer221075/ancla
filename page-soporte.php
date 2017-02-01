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
            <h3><?php the_title(); ?> <span><img src="<?php echo get_template_directory_uri();?>/img/mini_icono_soporte.png"></span></h3>
        </div>
    </div>

    <div class="container products-container">
        <div class="row">
            <div class="col-md-6">
                <?php

                the_content();

                ?>
            </div>
            <div class="col-md-6">
                <div class="border-box">
                    <h4><span class="red">CHAT</span> EN LÍNEA</h4>
                    <div class="box-icon">
                        <img src="<?php echo get_template_directory_uri();?>/img/icono_chat.png" alt="chat">
                    </div>
                    <div class="text-center">
                        <a href="javascript:;" class="btn btn-border-red">Iniciar</a>
                     </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php

endwhile; // End of the loop.
get_footer();
?>
