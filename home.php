<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 2/02/2017
 * Time: 14:16
 */

get_header(); ?>
    <div class="container">

        <?php
        if (have_posts()) :

            if (is_home() && !is_front_page()) : ?>
                <div class="row">
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </div>
            <?php endif; ?>
            <div class="row  ">
                <div class="row col-lg-10 blog-posts">
                    <?php
                    $query = new WP_Query('cat=-87');
                    /* Start the Loop */
                    while ($query->have_posts()) : $query->the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('template-parts/content', get_post_format());

                    endwhile;
                    ?>
                </div>
                <div class=" col-lg-2">
                    <?php dynamic_sidebar('sidebar-blog');?>

                    <?php  dynamic_sidebar('sidebar-news'); ?>

                </div>
            </div>
            <?php
            ancla_pagination();
        else :
            get_template_part('template-parts/content', 'none');
        endif; ?>
    </div>

<?php
get_footer();
