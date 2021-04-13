<?php
get_header();

$template = 'index';
$data = [];

$logoUrl = get_theme_mod('custom_logo') ? wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0] : '';

$headerData = array(
    'body_class' => get_body_class(),
    'home_url' => esc_url(home_url('/')),
    'site_name' => get_bloginfo('name'),
    'logo_url' => $logoUrl,
    'theme_dir' => get_template_directory_uri(),
    'menu_items' => wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'main-menu__list',
        'echo' => false
    )),
);

$footer_data = array(
    'current_year' => date('Y'),
    'site_name' => get_bloginfo('name'),
    'footer_widget' => is_active_sidebar('footer-column-1'),
);

function getPosts()
{
    $posts = [];

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $values = array(
                'author_name' => get_the_author_meta('display_name'),
                'author_link' => esc_url(get_the_author_meta('user_url')),
                'post_link' => esc_url(get_permalink()),
                'categories' => get_the_category(),
                'image' => get_the_post_thumbnail(),
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt()
            );
            array_push($posts, $values);
        }
    }

    return $posts;
}

function getPostsCount()
{
    global $wp_query;
    return $wp_query->found_posts;
}

function getPagination()
{
    return get_the_posts_pagination(array(
        'class' => '',
        'screen_reader_text' => ' '
    ));
}

$data = array(
    'page_title' => get_the_title(get_option('page_for_posts', true)),
    'posts_data' => getPosts(),
    'post_pagination' => getPagination()
);


?>
  <div class="site-content section--spacingTop80 section--spacingBottom80">
    YOUR CONTENT GOES HERE
  </div>

<?php get_footer(); ?>
