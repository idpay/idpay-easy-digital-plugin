<?php
/**
 * Plugin Name: IDPay for Easy Digital Downloads (EDD)
 * Author: IDPay
 * Description: <a href="https://idpay.ir">IDPay</a> secure payment gateway for Easy Digital Downloads (EDD)
 * Version: 2.2.0
 * Author URI: https://idpay.ir
 * Author Email: info@idpay.ir
 *
 * Text Domain: idpay-for-edd
 * Domain Path: languages
 */

if (!defined('ABSPATH')) exit;

/**
 * Load plugin textdomain.
 */
function idpay_for_edd_load_textdomain()
{
    load_plugin_textdomain('idpay-for-edd', false, basename(dirname(__FILE__)) . '/languages');
}

add_action('init', 'idpay_for_edd_load_textdomain');

include_once(plugin_dir_path(__FILE__) . 'includes/edd-idpay-gateway.php');
