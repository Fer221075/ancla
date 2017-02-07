<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/02/2017
 * Time: 12:40
 */
$cat = get_term_by('slug', get_query_var('product_cat'), 'product_cat');
if ($cat):
    $title = get_theme_mod('category' . $cat->term_id . '_title') ?: $cat->name;
    ?>

<style>
    header {
        position: absolute;
        background-color: rgba(43,43,42,.8);
        z-index: 2;
    }

    .site-content {
        padding: 0;
    }
</style>

<section class="cover bg-img">
    <img src="<?php echo get_theme_mod('category_' . $cat->term_id . '_banner'); ?>" alt="">
</section>
<div class="red-section-header no-triangle">
    <div class="container">
        <h1><?php echo $title ?></h1>
    </div>
</div>
<?php endif; ?>