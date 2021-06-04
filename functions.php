<?php
if ( ! defined( 'NOVELICS_VERSION' ) ) {

	define( 'NOVELICS_VERSION', '1.0.0' );
};
if ( ! function_exists( 'coltman_novelics_setup' ) ) :
    function coltman_novelics_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
     
        add_theme_support( 'custom-logo', $defaults);
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_post_type_support( 'post', 'excerpt' );
        add_theme_support( 'excerpt' );
        add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
        register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'novelics' ),
                'menu-2' => esc_html__( 'footer', 'novelics' ),
			)
		); 
    }
endif;
add_action( 'after_setup_theme', 'coltman_novelics_setup' );
function coltman_novelics_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar 1', 'novelics' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'novelics' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
   
}
add_action( 'widgets_init', 'coltman_novelics_widgets_init' );

function coltman_novelics_scripts(){
    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array('bootstrap','bootstrap-icon'),NOVELICS_VERSION );
   //phpproyects\novelics\wp-content\themes\novelics\assets\libs\bootstrap\bootstrap-icons\bootstrap-icons.css
   wp_enqueue_style('bootstrap-icon', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap-icons/bootstrap-icons.css', array(),NOVELICS_VERSION);
   wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap.min.css', array(),NOVELICS_VERSION );
  
   wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap/bootstrap.min.js', array(),NOVELICS_VERSION, true );
   wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery','bootstrap'), NOVELICS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'coltman_novelics_scripts' );

function pietergoosen_custom_excerpts($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '...');
}