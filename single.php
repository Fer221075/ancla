<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ancla
 */

get_header();

while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if ( has_post_thumbnail() ) : ?>
            <style>
                body.single.single-post header {
                    position: absolute;
                    z-index: 2;
                    background-color: rgba(43,43,42,0.8);
                }

                body.single.single-post .site-content {
                    padding-top: 0;
                }
            </style>
            <section class="cover bg-img">
                <?php the_post_thumbnail(); ?>
                <div class="cover-shadow"></div>
                <div class="container full-h pos-r">
                    <div class="cover-post-text row">
                        <h1><?php the_title(); ?></h1>
                        <div class="post-meta">
                            <?php ancla_posted_on(); ?>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <aside class="blog-sidebar clearfix">
                            <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                        </aside>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="post-meta">
                            <?php ancla_posted_on(); ?>
                        </div>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <aside class="blog-sidebar clearfix">
                            <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                        </aside>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </article><!-- #post-## -->

    <?php

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php comments_template(); ?>
                </div>
            </div>
        </div>
    <?php endif;

endwhile; // End of the loop.
?>

<?php
get_footer();
