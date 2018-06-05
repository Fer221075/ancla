<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/02/2017
 * Time: 12:20
 */
/*
$cat = get_term_by('slug', get_query_var('product_cat'), 'product_cat');
if ($cat):
    $title = get_theme_mod('category' . $cat->term_id . '_title') ?: $cat->name;
    $subtitle = get_theme_mod('category' . $cat->term_id . '_subtitle');
    */?><!--

    <div class="container">
        <div class="row">
            <div class="col-xs-12 prod-cat-banner bg-img force-display">
                <img src="<?php /*echo get_theme_mod('category_' . $cat->term_id . '_banner'); */?>" alt="">
                <div class="banner-shadow"></div>
                <div class="category-title">
                    <h1><?php /*echo $title; */?></h1>
                    <?php /*if ($subtitle): */?><h2><?php /*echo $subtitle; */?></h2><?php /*endif; */?>
                </div>
            </div>
        </div>
    </div>
--><?php /*endif; */?>