<?php

add_theme_support( 'post-thumbnails' );

function menu_superior() {
  register_nav_menus(
    array(
      'menu_superior' => __( 'Men煤 de navegaci贸n' )
    )
  );
}
add_action( 'init', 'menu_superior' );

function theme_styles(){ 
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}

add_action('wp_enqueue_scripts', 'theme_styles');


function theme_script(){ 
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js' );
}

add_action('wp_enqueue_scripts', 'theme_script');

function fawesome_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', 
  					array(), 
  					'6.1.1'
  					); 
}
add_action( 'wp_enqueue_scripts', 'fawesome_css');



