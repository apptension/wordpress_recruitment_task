<?php

/**
 * Plugin Name: MU plugins
 * Description: Custom plugins
 */

function sub_mu_plugins_files()
{
  if (!function_exists('get_plugins')) {
    require ABSPATH . 'wp-admin/includes/plugin.php';
  }

  foreach (get_plugins('/../mu-plugins') as $plugin_dir => $data) {
    if (dirname($plugin_dir) != '.') {
      require WPMU_PLUGIN_DIR . '/' . $plugin_dir;
    }
  }
}

add_action('muplugins_loaded', 'sub_mu_plugins_files');