<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ancla
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 '); ?>>

    <?php if (has_post_thumbnail()): ?>
    <div class="col-xs-12 post-image">
        <a href="<?php the_permalink(); ?>" rel="bookmark">
            <figure style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?>)">

            </figure>

        </a>
    </div>
    <div class="col-xs-12 post-content" >
        <?php else: ?>
        <div class="col-xs-12">
            <?php endif; ?>

            <div class="post-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
            </div>

            <?php
            $categories = get_the_category();
            if (!empty($categories)) :?>
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"
                   class="post-category category-<?php echo $categories[0]->term_id; ?> category-<?php echo $categories[0]->slug; ?>"><?php echo esc_html($categories[0]->name); ?></a>
            <?php endif; ?>

            <div class="post-meta">
                <?php ancla_posted_on(); ?>
            </div>
            <div class="post-excerpt">
                <?php the_excerpt(2); ?>
                <div class="link-to">
                    <a href="<?php the_permalink(); ?>">Ver más</a>
                </div>
            </div>

            <div class="post-footer">
                <a href="<?php the_permalink(); ?>#comments">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                    <?php comments_number('0', '1', '%'); ?>
                </a>
            </div>

        </div>

</article><!-- #post-## -->

