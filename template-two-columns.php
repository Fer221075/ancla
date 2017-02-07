<?php

/* Template Name: Content 2 columns */

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
                <?php echo CFS()->get('left_col'); ?>
            </div>
            <div class="col-md-6">
                <?php echo CFS()->get('right_col'); ?>
            </div>
        </div>
    </div>

</section>

<?php

endwhile; // End of the loop.
get_footer();
?>
