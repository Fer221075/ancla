<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ancla
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="row">
        <div class="col-md-4 post-image">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="col-md-8">

            <div class="post-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
            </div>
            <div class="post-meta">
                <?php ancla_posted_on(); ?>
            </div>
            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>

            <div class="post-footer">
                <a href="<?php the_permalink(); ?>#comments">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                    <?php comments_number( '0', '1', '%' ); ?>
                </a>
            </div>

        </div>
    </div>
</article><!-- #post-## -->

