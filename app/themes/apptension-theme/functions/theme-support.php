<?php

function setup_theme_support() {
  add_theme_support('editor-styles');
  add_editor_style(get_template_directory_uri() . '/assets/editor.css');
  add_editor_style('https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i');

  add_theme_support( 'title-tag' );

  add_theme_support('post-thumbnails');

  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ));
}

add_action('after_setup_theme', 'setup_theme_support');
