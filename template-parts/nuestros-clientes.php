<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 10/02/2017
 * Time: 15:34
 */
$loop = new WP_Query( array(
    'post_type' => 'nuestros_clientes',
    'posts_per_page' => 20,
) );
if ( $loop->have_posts() ) : ?>

<section class="nuestros-clientes">
    <div class="parallax-container">
        <div class="container">
            <h3>Nuestros Clientes</h3>
        </div>
        <div class="container container-customers">

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="customer">
                <?php the_post_thumbnail(); ?>
            </div>

<!--            <div class="customer">-->
<!--                --><?php //the_post_thumbnail(); ?>
<!--            </div>-->
<!---->
<!--            <div class="customer">-->
<!--                --><?php //the_post_thumbnail(); ?>
<!--            </div>-->
<!---->
<!--            <div class="customer">-->
<!--                --><?php //the_post_thumbnail(); ?>
<!--            </div>-->
<!---->
<!--            <div class="customer">-->
<!--                --><?php //the_post_thumbnail(); ?>
<!--            </div>-->
<!---->
<!--            <div class="customer">-->
<!--                --><?php //the_post_thumbnail(); ?>
<!--            </div>-->

        <?php endwhile;?>

        </div>
    </div>
</section>

<?php endif;
wp_reset_postdata();

?>

