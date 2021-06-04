<?php
function minimalist_setup_theme(){

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag' );

    add_image_size( 'thumbnail',false );

    the_time( get_option( 'date_format' ) );

    register_nav_menus( array(
        'main' => 'Menu principal',
        'footer' => 'Bas de page',
        'social' => 'Réseaux sociaux',
    ) );

};

add_action('after_setup_theme', 'minimalist_setup_theme');

function minimalist_remove_menu_pages() {

    remove_menu_page( 'edit-comments.php' );

}
add_action ('admin_menu', 'minimalist_remove_menu_pages');


function minimalist_register_post_types() {

    $labels = array(
        'name' => 'Projects',
        'all_items' => 'All projets',  
        'singular_name' => 'Project',
        'add_new_item' => 'Add a project',
        'edit_item' => 'Edit projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-welcome-learn-more',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'minimalist_register_post_types' );

function minimalist_enqueue_scripts_and_styles(){
    
    
    //link dynamique du css et de la base 
    wp_enqueue_style(
        'base',
        get_template_directory_uri().'/css/base.css'
    );

    wp_enqueue_style(
        'style',
        get_template_directory_uri().'/css/style.css',
        ['base']
    );
    // link du fichier JS dynamiquement dans le footer pour éviter les soucis de chargement du JS 
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'nav',
        get_template_directory_uri().'/js/navigation.js',
        array('jquery'),
        '1.0',
        true
    );
    wp_enqueue_script(
        'form',
        get_template_directory_uri().'/js/form-validation.js',
        array('jquery'),
        '1.0',
        true
    );
}

//il faut deux paremetre pour une fonction add_action ? 
add_action('wp_enqueue_scripts','minimalist_enqueue_scripts_and_styles');

add_action( 'init', 'minimalist_register_post_types' );

function dwwm_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'minimalist_custom_excerpt_length');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
};