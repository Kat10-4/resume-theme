<?php
function resume_theme_enqueue_styles() {
    wp_enqueue_style('resume-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'resume_theme_enqueue_styles');
