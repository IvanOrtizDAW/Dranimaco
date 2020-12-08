<?php
/**
 * Plugin Name: Skrill - WooCommerce
 * Plugin URI:  http://www.skrill.com/
 * Description: WooCommerce with Skrill payment gateway
 * Author:      Skrill
 * Author URI:  hhttp://www.skrill.com/
 * Version:     1.0.36
 *
 * @package Skrill
 */

/**
 * Copyright (c) Skrill
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

require_once dirname(__FILE__) . '/skrill-install.php';
register_activation_hook(__FILE__, 'skrill_activate_plugin');
register_uninstall_hook(__FILE__, 'skrill_uninstall_plugin');
add_action('plugins_loaded', 'skrill_init_payment_gateway', 0);

define('SKRILL_PLUGIN_VERSION', '1.0.36');
define('SKRILL_PAYMENT_HOST', 'pay.skrill.com');

/**
 * Skrill get notice when woocommerce not active.
 */
function skrill_get_notice_woocommerce_activation() 
{
    echo '<div id="notice" class="error"><p>';
    echo '<a href="http://www.woothemes.com/woocommerce/" style="text-decoration:none" target="_new">WooCommerce </a>';
    echo esc_attr(__('must be active for the plugin', 'wc-skrill')) . '<b> Skrill Payment Gateway for WooCommerce</b>';
    echo '</p></div>';
}

/**
 * Add Skrill configuration link at plugin installation
 *
 * @param array $links - links.
 */
function skrill_add_configuration_links( $links ) 
{
    $configuration_links = array(
    '
        <a href="' . admin_url('admin.php?page=wc-settings&tab=skrill_settings') . '">' .
                    __('Skrill Settings', 'wc-skrill') . '</a>
    ',
    );
    return array_merge($configuration_links, $links);
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'skrill_add_configuration_links');

/**
 * Init Skrill payment gateway
 */
function skrill_init_payment_gateway() 
{
    /* load plugin language */
    load_plugin_textdomain('wc-skrill', false, dirname(plugin_basename(__FILE__)) . '/i18n/languages/');

    if (! class_exists('WC_Payment_Gateway') ) {
        add_action('admin_notices', 'skrill_get_notice_woocommerce_activation');
        return;
    }

    include_once dirname(__FILE__) . '/includes/core/class-skrill-configuration.php';
    include_once dirname(__FILE__) . '/includes/core/class-skrill-payment.php';
    include_once dirname(__FILE__) . '/includes/admin/class-skrill-payment-configuration.php';
    include_once dirname(__FILE__) . '/includes/admin/class-skrill-settings.php';
    include_once dirname(__FILE__) . '/models/class-skrill-transactions-model.php';

    if (! class_exists('Skrill_Payment_Gateway') ) {
        include_once dirname(__FILE__) . '/class-skrill-payment-gateway.php';
    }

    /**
     * Add Skrill Payment Methods to WooCommerce
     *
     * @param  array $payment_methods - payment methods.
     * @return array
     */
    function skrill_add_payment_methods( $payment_methods ) 
    {
        $payment_methods[] = 'Gateway_Skrill_Flexible';
        $payment_methods[] = 'Gateway_Skrill_WLT';
        $payment_methods[] = 'Gateway_Skrill_PSC';
        $payment_methods[] = 'Gateway_Skrill_ACC';
        $payment_methods[] = 'Gateway_Skrill_VSA';
        $payment_methods[] = 'Gateway_Skrill_MSC';
        $payment_methods[] = 'Gateway_Skrill_MAE';
        $payment_methods[] = 'Gateway_Skrill_GCB';
        $payment_methods[] = 'Gateway_Skrill_DNK';
        $payment_methods[] = 'Gateway_Skrill_PSP';
        $payment_methods[] = 'Gateway_Skrill_CSI';
        $payment_methods[] = 'Gateway_Skrill_OBT';
        $payment_methods[] = 'Gateway_Skrill_GIR';
        $payment_methods[] = 'Gateway_Skrill_SFT';
        $payment_methods[] = 'Gateway_Skrill_EBT';
        $payment_methods[] = 'Gateway_Skrill_IDL';
        $payment_methods[] = 'Gateway_Skrill_NPY';
        $payment_methods[] = 'Gateway_Skrill_PLI';
        $payment_methods[] = 'Gateway_Skrill_PWY';
        $payment_methods[] = 'Gateway_Skrill_EPY';
        $payment_methods[] = 'Gateway_Skrill_ALI';
        $payment_methods[] = 'Gateway_Skrill_NTL';
        $payment_methods[] = 'Gateway_Skrill_ADB';
        $payment_methods[] = 'Gateway_Skrill_AOB';
        $payment_methods[] = 'Gateway_Skrill_ACI';
        $payment_methods[] = 'Gateway_Skrill_AUP';
        $payment_methods[] = 'Gateway_Skrill_PCH';

        return $payment_methods;
    }

    add_filter('woocommerce_payment_gateways', 'skrill_add_payment_methods');

    /**
     * Add Skrill Redirect Host to WordPress
     *
     * @param  array $content - content.
     * @return array
     */
    function skrill_add_redirect_hosts( $content ) 
    {
        $content[] = SKRILL_PAYMENT_HOST;

        return $content;
    }

    add_filter('allowed_redirect_hosts', 'skrill_add_redirect_hosts');

    foreach ( glob(dirname(__FILE__) . '/includes/gateways/*.php') as $filename ) {
        include_once $filename;
    }



    add_action('woocommerce_subscription_status_cancelled', 'cancel_sub');

    function cancel_sub($subscription) 
    {   
        $order_id = $subscription->get_parent_id();
        $transaction_log = Skrill_Transactions_Model::get_transaction_by_order_id($order_id);
        $cancel_subscription_parameters['email'] = get_option('skrill_merchant_account', '');
        $cancel_subscription_parameters['password'] = get_option('skrill_api_passwd', '');
        $cancel_subscription_parameters['action'] = 'cancel_rec';
        $cancel_subscription_parameters['trn_id'] = $transaction_log['transaction_id'];
        $cancel_status = Skrill_Payment::cancel_recurring_payment($cancel_subscription_parameters, $payment_result);
    }
}
