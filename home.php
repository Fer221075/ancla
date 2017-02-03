<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 2/02/2017
 * Time: 14:16
 */

get_header(); ?>

    <div class="container">

        <div class="row">

            <div class="col-xs-12 row">

                <?php
                if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) : ?>
                            <div class="col-xs-12 row">
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </div>

                        <?php
                    endif;

                    ?>
                    <div class="col-xs-12 row blog-posts">
                    <?php

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;
                    ?>
                    </div>
                    <?php

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

                </div>

            </div>

        </div>

<?php
get_footer();
