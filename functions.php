<?php
/**
 * New Staff Privacy Training — Theme Functions
 */

// Theme setup
function privacy_training_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'privacy-training'),
    ));
}
add_action('after_setup_theme', 'privacy_training_setup');

// Enqueue styles
function privacy_training_scripts() {
    wp_enqueue_style('privacy-training-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'privacy_training_scripts');

// Register pages on theme activation
function privacy_training_activate() {
    $pages = array(
        'home'                => array('title' => 'Privacy Training Home',            'template' => 'page-home.php'),
        'privacy-principles'  => array('title' => 'Privacy Principles',            'template' => 'page-privacy-principles.php'),
        'respect-privacy'     => array('title' => 'Respect Privacy When Publishing', 'template' => 'page-respect-privacy.php'),
        'confidential-sources' => array('title' => 'Protect Confidential Sources',  'template' => 'page-confidential-sources.php'),
        'verify-information'   => array('title' => 'Verify Information Before Publication', 'template' => 'page-verify-information.php'),
        'data-transparency'    => array('title' => 'Be Transparent About Data Use', 'template' => 'page-data-transparency.php'),
        'compliance-checklist' => array('title' => 'Privacy Compliance Checklist', 'template' => 'page-compliance-checklist.php'),
        'references'           => array('title' => 'References',                   'template' => 'page-references.php'),
    );

    foreach ($pages as $slug => $page) {
        if (!get_page_by_path($slug)) {
            wp_insert_post(array(
                'post_title'    => $page['title'],
                'post_name'     => $slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'page_template' => $page['template'],
            ));
        }
    }
}
add_action('after_switch_theme', 'privacy_training_activate');
