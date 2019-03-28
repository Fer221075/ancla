<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 31/01/2017
 * Time: 15:33
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $wp_query;
if ( ! woocommerce_products_will_display() )
    return;
?>

<p class="woocommerce-result-count">
    <?php
    $paged    = max( 1, $wp_query->get( 'paged' ) );
    $per_page = $wp_query->get( 'posts_per_page' );
    $total    = $wp_query->found_posts;
    $first    = ( $per_page * $paged ) - $per_page + 1;
    $last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

    if ( $total <= $per_page || -1 === $per_page ) {
        printf( _n( 'Mostrando el único resultado', 'Mostrando todos los resultados (%d)', $total, 'woocommerce' ), $total );
    } else {
        printf( _nx( 'Mostrando el único resultado', 'Mostrando %1$d&ndash;%2$d de %3$d', $total, '%1$d = first, %2$d = last, %3$d = total', 'woocommerce' ), $first, $last, $total );
    }
    ?>
</p>
