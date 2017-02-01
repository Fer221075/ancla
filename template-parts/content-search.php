<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ancla
 */

?>

<?php

if ( get_post_type() == 'product' ) {
    wc_get_template_part('content', 'product');
}
?>


