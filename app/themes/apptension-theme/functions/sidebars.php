<?php
function register_footer_widget_area()
{
  register_sidebar([
    'name' => __('Footer Column 1', 'apptension'),
    'id' => 'footer-column-1',
    'description' => __('Area for content in the footer', 'apptension'),
    'before_widget' => '',
    'after_widget' => '',
  ]);
}

add_action('widgets_init', 'register_footer_widget_area');
