<?php 

function calling_resources(){
	//Calling Styles
	wp_enqueue_style('style' , get_stylesheet_uri(), '', '1.0.0' );
}
add_action('wp_enqueue_scripts' , 'calling_resources');





function our_theme_setup(){

	// Register Nav
	register_nav_menus(array(
		'primary' => __( 'Primary Menu' ),
		'footer' => __( 'Footer Menu' ),
	));

	// Thumbnail Image
	add_theme_support('post-thumbnails');
}
add_action('after_theme_setup' , 'our_theme_setup');



// Sidebar Register
function ourWidgetInit(){
	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="sidebar_single_area clear">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="wid_heading">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init' , 'ourWidgetInit');



