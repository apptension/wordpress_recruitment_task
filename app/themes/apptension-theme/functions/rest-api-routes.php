<?php
function get_search_data($param) {
  $queryParams = explode("=", $param['q']);

  $queryArgs = array(
    'post_type' => array('post', 'page'),
    'posts_per_page' => 5,
    's' => sanitize_text_field($queryParams[1])
  );

  $queryData = new WP_Query($queryArgs);

  $restData = array();

  while($queryData->have_posts()) {
    $queryData->the_post();

    array_push($restData, array(
      'id' => get_the_ID(),
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'post_type' => get_post_type(),
      'date' => get_the_date()
    ));
  }

  return $restData;
}

function register_custom_search_route() {
  register_rest_route('v1', 'search-preview', array(
    'methods' => WP_REST_Server::READABLE,
    'callback' => 'get_search_data',
    'permission_callback' => '__return_true'
  ));
}

add_action('rest_api_init', 'register_custom_search_route');
