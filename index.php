<?php
/*
  Plugin Name: Checkout Address Suggestion And Autocomplete For Woocommerce
  Description: Allows your customers to Autocomplete billing and shipping address in checkout page with google places API.
  Author: Magerips
  Author URI: http://www.magerips.com
  Plugin URI: http://www.magerips.com
  Version: 1.3
  Requires at least: 3.0.0
  Tested up to: 4.1 
 */

global $rpaddress_plugin_url, $rpaddress_plugin_dir;

$rpaddress_plugin_dir = dirname(__FILE__) . "/";
$rpaddress_plugin_url = plugins_url()."/" . basename($rpaddress_plugin_dir) . "/";
include_once $rpaddress_plugin_dir.'lib/main.php';

