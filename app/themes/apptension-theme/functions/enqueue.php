<?php

function mytheme_enqueue_scripts() {

  // Only use this method is we"re not in wp-admin
  if ( ! is_admin() ) {

    /**
     * jQuery
     * We want to use the modern CDN version of jQuery, not the version shipped with WordPress
     */
    wp_deregister_script("jquery");

    /**
     * Development & Production styles and scripts
     * Use when in development mode (using `yarn start`)
     * Comment out when in production mode
     */

    if (getenv('ENVIRONMENT') == 'development') {
      $localPath = getenv('LOCAL_HOST').':'.getenv('LOCAL_PORT');
      wp_enqueue_script('theme-bundle-js', $localPath.'/app.js', array(), "", true);
      wp_enqueue_style('theme-bundle-css', $localPath.'/app.css', array(), "", "all");
    } else {
      $jsFilePath = get_stylesheet_directory() . '/assets/app.js';
      $cssFilePath = get_stylesheet_directory() . '/assets/app.css';

      wp_enqueue_script('theme-bundle-js', get_template_directory_uri() . "/assets/app.js", array(), filemtime($jsFilePath), true);
      wp_enqueue_style('theme-bundle-css', get_template_directory_uri() . "/assets/app.css", array(), filemtime($cssFilePath), "all" );
    }

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap', false );

    wp_localize_script('theme-bundle-js', 'themeData', array(
      'no_search_results' => __('No results found. Try again.', 'apptension')
    ));
  }
}
add_action("wp_enqueue_scripts", "mytheme_enqueue_scripts", 999);

function inc_manifest_file() {
  echo (getenv('ENVIRONMENT') == 'development') ? '<link rel="manifest" href='.getenv('LOCAL_HOST').':'.getenv('LOCAL_PORT').'/asset-manifest.json>'
    : '<link rel="manifest" href='.get_template_directory_uri().'/assets/asset-manifest.json>';
}
add_action( 'wp_head', 'inc_manifest_file' );