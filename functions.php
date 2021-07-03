<?php
function minimalist_setup_theme()
{

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_image_size('thumbnail', false);
    add_image_size('portfolio_hero', false);
    add_image_size('previews', false);

    the_time(get_option('date_format'));

    register_nav_menus(array(
        'main' => 'Menu principal',
        'footer' => 'Bas de page',
    ));

    register_sidebar( array(
        'id' => 'portfolio-footer',
        'name' => 'Footer socials',
        'before-widget' => '<ul class="menu">',
        'after-widget'=> '</ul>'
    ) );
};

add_action('after_setup_theme', 'minimalist_setup_theme');

function minimalist_remove_menu_pages()
{
    remove_menu_page('edit-comments.php');
    remove_menu_page('edit.php');
    remove_menu_page('tools.php');
}
add_action('admin_menu', 'minimalist_remove_menu_pages');


function minimalist_register_post_types()
{
    // Custom Post Type for portfolio purposes
    $labels = array(
        'name' => 'Projects',
        'all_items' => 'Portfolio',
        'singular_name' => 'Project',
        'add_new_item' => 'Add a project',
        'edit_item' => 'Edit projet',
        'menu_name' => 'Portfolio',
        'order' => 'DESC'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'taxonomies', 'archive'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
    );
    register_post_type('portfolio', $args);

    //Language tags - taxonomies  - to further describe the specificity of each project
    $labels = array(
        'name' => 'Project types',
        'new_item_name' => 'New project type',
        'parent_item' => 'Used in project',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    );

    register_taxonomy('type', 'portfolio', $args);

    $labels = array(
        'name' => 'Language',
        'new_item_name' => 'New programming language',
        'parent_item' => 'Used in project',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    );

    register_taxonomy('language', 'portfolio', $args);
}
add_action('init', 'minimalist_register_post_types');

function minimalist_enqueue_scripts_and_styles()
{


    //link dynamique du css et de la base
    wp_enqueue_style(
        'base',
        get_template_directory_uri() . '/css/base.css'
    );

    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/css/style.css',
        ['base']
    );
    // link du fichier JS dynamiquement dans le footer pour éviter les soucis de chargement du JS
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'nav',
        get_template_directory_uri() . '/js/navigation.js',
        array('jquery'),
        '1.0',
        true
    );
    wp_enqueue_script(
        'form',
        get_template_directory_uri() . '/js/form-validation.js',
        array('jquery'),
        '1.0',
        true
    );
}

//il faut deux paremetre pour une fonction add_action ?
add_action('wp_enqueue_scripts', 'minimalist_enqueue_scripts_and_styles');

add_action('init', 'minimalist_register_post_types');

function dwwm_custom_excerpt_length($length)
{
    return 10;
}
add_filter('excerpt_length', 'minimalist_custom_excerpt_length');

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
};
