<?php
namespace Woocommerce\InfinitePay\Fields;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

class ConfigurationsFields
{
	public static function fields() {
	
        $fields = apply_filters( 'wc_infinitepay_form_fields', array(
			'title'                 => array(
				'title'		  => __( 'Payment Title', 'infinitepay-woocommerce' ),
				'type'		  => 'text',
				'description' => __( 'Title that will be shown for the customers on your checkout page', 'infinitepay-woocommerce' ),
				'default'     => __( 'Payment Method', 'infinitepay-woocommerce' ),
				'desc_tip'    => true,
			),
			'enabled_logo'	  => array(
				'title'   => __( 'Enable InfinitePay Logo?', 'infinitepay-woocommerce' ),
				'type'    => 'checkbox',
				'label'   => __( 'Enable Logo', 'infinitepay-woocommerce' ),
				'default' => 'yes',
			),
			'status_aproved' => array(
				'title'   => __( 'Payment aproved', 'infinitepay-woocommerce' ),
				'type'    => 'select',
				'label'   => __( 'Payment aproved', 'infinitepay-woocommerce' ),
				'default' => 'yes',
				'options' =>  wc_get_order_statuses()
			),
			'status_canceled' => array(
				'title'   => __( 'Payment canceled', 'infinitepay-woocommerce' ),
				'type'    => 'select',
				'label'   => __( 'Payment canceled', 'infinitepay-woocommerce' ),
				'default' => 'yes',
				'options' =>  wc_get_order_statuses()
			),
			'enabled'	  => array(
				'title'   => __( 'Enable logs?', 'infinitepay-woocommerce' ),
				'type'    => 'checkbox',
				'label'   => __( 'Enable logs', 'infinitepay-woocommerce' ),
				'default' => 'yes',
				'description' => __( 'Avaliable on <a href="admin.php?page=wc-status&tab=logs">"WooCommerce > Status > Logs"</a>', 'infinitepay-woocommerce' ),
			),
		) );

		return $fields;
	}
}
