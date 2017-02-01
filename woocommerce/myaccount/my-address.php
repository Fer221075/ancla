<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 1/02/2017
 * Time: 14:14
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
    $get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
        'billing' => __( 'Billing Address', 'woocommerce' ),
        'shipping' => __( 'Shipping Address', 'woocommerce' )
    ), $customer_id );
} else {
    $get_addresses = apply_filters( 'woocommerce_my_account_get_addresses', array(
        'billing' =>  __( 'Billing Address', 'woocommerce' )
    ), $customer_id );
}

$oldcol = 1;
$col    = 1;
?>

<p>
    <?php echo apply_filters( 'woocommerce_my_account_my_address_description', __( 'The following addresses will be used on the checkout page by default.', 'woocommerce' ) ); ?>
</p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) echo '<div class="u-columns woocommerce-Addresses col2-set addresses">'; ?>

<?php foreach ( $get_addresses as $name => $title ) : ?>

    <div class="u-column<?php echo ( ( $col = $col * -1 ) < 0 ) ? 1 : 2; ?> col-<?php echo ( ( $oldcol = $oldcol * -1 ) < 0 ) ? 1 : 2; ?> woocommerce-Address">

        <h3><?php echo $title; ?></h3>
        <a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit"><?php _e( 'Edit', 'woocommerce' ); ?></a>

        <address>
            <?php
            $address = apply_filters( 'woocommerce_my_account_my_address_formatted_address', array(
                'first_name'  => get_user_meta( $customer_id, $name . '_first_name', true ),
                'last_name'   => get_user_meta( $customer_id, $name . '_last_name', true ),
                'company'     => get_user_meta( $customer_id, $name . '_company', true ),
                'address_1'   => get_user_meta( $customer_id, $name . '_address_1', true ),
                'address_2'   => get_user_meta( $customer_id, $name . '_address_2', true ),
                'city'        => get_user_meta( $customer_id, $name . '_city', true ),
                'state'       => get_user_meta( $customer_id, $name . '_state', true ),
                'postcode'    => get_user_meta( $customer_id, $name . '_postcode', true ),
                'country'     => get_user_meta( $customer_id, $name . '_country', true )
            ), $customer_id, $name );

            $formatted_address = WC()->countries->get_formatted_address( $address );

            if ( ! $formatted_address )
                _e( 'You have not set up this type of address yet.', 'woocommerce' );
            else
                echo $formatted_address;
            ?>
        </address>
    </div>

<?php endforeach; ?>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) echo '</div>'; ?>
