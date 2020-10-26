<?php

// THEME FEATURES
//*************************************************************************
function register_theme_features()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
            array(
                    'comment-list',
                    'comment-form',
                    'search-form',
                    'gallery',
                    'caption'
            ));
    add_theme_support('custom-logo', array(
            'width' => '512',
            'height' => '512',
            'flex-width' => false,
            'flex-height' => false
    ));
}

add_action('after_setup_theme', 'register_theme_features');

// REMOVE MENUS
//*************************************************************************
function wpdocs_remove_menus()
{

    // remove_menu_page( 'index.php' );                     // Dashboard
    // remove_menu_page('jetpack');                         // Jetpack*
    // remove_menu_page( 'edit.php' );                      // Posts
    // remove_menu_page( 'upload.php' );                    // Media
    // remove_menu_page( 'edit.php?post_type=page' );       // Pages
    // remove_menu_page( 'edit-comments.php' );             // Comments
    // remove_menu_page( 'themes.php' );                    // Appearance
    // remove_menu_page('plugins.php');                     // Plugins
    // remove_menu_page( 'users.php' );                     // Users
    // remove_menu_page('tools.php');                       // Tools
    // remove_menu_page('options-general.php');             // Settings

    remove_submenu_page('themes.php', 'themes.php');

}

add_action('admin_menu', 'wpdocs_remove_menus');

// REGISTER MENU
//*************************************************************************
register_nav_menus(
        array(
                'top-menu' => __('Header Menu', 'wordpress-starter-theme'),
                'footer-menu' => __('Footer Menu', 'wordpress-starter-theme'),
        )
);

// EXCERPT LENGTH
//*************************************************************************
function custom_excerpt_length($length)
{
    return 35;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

// MISC
//*************************************************************************
add_theme_support('automatic-feed-links');

if (!isset($content_width)) {
    $content_width = '100%';
}
