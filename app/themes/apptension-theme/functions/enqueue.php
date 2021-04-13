<?php

function theme_enqueue_scripts() {
  if (!is_admin() ) {
    wp_deregister_script('jquery');

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

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts', 999);

function include_manifest_file() {
  echo (getenv('ENVIRONMENT') == 'development') ? '<link rel="manifest" href='.getenv('LOCAL_HOST') . ':' . getenv('LOCAL_PORT') . '/asset-manifest.json>'
    : '<link rel="manifest" href=' . get_template_directory_uri() . '/assets/asset-manifest.json>';
}

add_action('wp_head', 'include_manifest_file');
