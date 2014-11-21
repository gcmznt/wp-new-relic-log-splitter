<?php
/*
Plugin Name: New Relic log splitter
Plugin URI: https://giko.it
Description: Configures New Relic to split log data in admin, cron, and website.
Author: Giko
Author URI: https://giko.it
Version: 1.0
*/

function wp_newrelic_appname() {
  if (defined('DOING_CRON') && DOING_CRON) {
    return 'cron';
  }
  if (defined('WP_ADMIN') && WP_ADMIN) {
    return 'admin';
  }
  return 'website';
}

if (extension_loaded('newrelic')) {
  $current_name = ini_get('newrelic.appname');
  $format = '%1$s %2$s;%1$s';
  newrelic_set_appname(sprintf($format, $current_name, wp_newrelic_appname()));
}
