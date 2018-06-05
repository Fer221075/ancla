<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 1/02/2017
 * Time: 13:59
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

do_action( 'woocommerce_before_account_navigation' );

global $wp;
$current_url = home_url( $wp->request ) . '/';
?>

<nav class="woocommerce-MyAccount-navigation">
    <ul>
        <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
            <?php if ( $endpoint != 'dashboard'): ?>
            <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                <a class="<?php if ( $current_url == wc_get_account_endpoint_url( $endpoint ) ): ?>my-account-active<?php endif;?>" href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
