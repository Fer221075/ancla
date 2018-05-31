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
      <div class="container service">
        <h3><?php the_title(); ?> <span><img
              src="<?php echo get_template_directory_uri(); ?>/img/mini_icono_soporte.png"></span></h3>
      </div>
    </div>

    <div class="container products-container">
      <div class="col-xs-12 col-md-12 clearfix">
		  <?php echo the_content() ?>
      </div>
  </section>

<?php

endwhile; // End of the loop.
get_footer();
?>
