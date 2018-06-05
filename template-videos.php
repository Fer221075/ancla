<?php
/* Template Name: Template Videos */

get_header(); ?>
<style>
    body.page header {
        position: relative;
        background-color: #2b2b2a;
    }

    body.page .site-content {
        padding: 40px 0;
    }
</style>

<?php
while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 prod-cat-banner bg-img force-display">
                <?php the_post_thumbnail(); ?>
                <div class="banner-shadow"></div>
                <div class="category-title">
                    <h1><?php the_title() ?></h1>
                </div>
            </div>
        </div>

        <?php if ( is_user_logged_in() ):

            $user = wp_get_current_user();
            if ( in_array( 'tutoriales', (array) $user->roles ) || in_array( 'administrator', (array) $user->roles ) ): ?>

            <div class="row">

                <?php if ( function_exists('CFS') ):
                    $videos = CFS()->get('videos');

                    if ( $videos !== NULL ): ?>

                    <div class="panel-group video-accordion" id="accordion-videos" role="tablist" aria-multiselectable="true">

                        <?php foreach ( $videos as $index=>$vid ): ?>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-<?php echo $index ?>">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion-videos" href="#collapse-<?php echo $index ?>" aria-expanded="true" aria-controls="collapse-<?php echo $index ?>">
                                        <?php echo $vid['title']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-<?php echo $index ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $index ?>">
                                <div class="panel-body">
                                    <div class="col-xs-12 col-md-5">
                                        <div class="vid-description">
                                            <?php echo $vid['description']; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-7">
                                        <video class="cc-video" width="100%" src="<?php echo $vid['video']; ?>" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>

                    </div>

                <?php endif; endif; ?>

            </div>
        <?php endif; else: ?>
            <div class="restricted-area-login">
                <?php wp_login_form(); ?>
            </div>

        <?php endif; ?>

    </div>


<?php endwhile; // End of the loop.
?>



<?php
get_footer();?>
