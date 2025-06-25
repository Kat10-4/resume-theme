<?php
function resume_theme_assets() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'resume_theme_assets');

// ACF Support Example
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
function register_projects_post_type() {
    $labels = [
        'name' => 'Projects',
        'singular_name' => 'Project',
        'add_new' => 'Add Project',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'new_item' => 'New Project',
        'view_item' => 'View Project',
        'search_items' => 'Search Projects',
        'not_found' => 'No Projects Found',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ];

    register_post_type('project', $args);
}
add_action('init', 'register_projects_post_type');
function disable_project_single_pages() {
    if ( is_singular('project') ) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'disable_project_single_pages');

?>

