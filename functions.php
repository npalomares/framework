<?php 
define( 'TEMPPATH', get_bloginfo('stylesheet_directory' ) );
define( 'IMAGES', TEMPPATH. "/images" );



add_image_size(200, 150, true); 

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Primary',
		'id' => 'primary_sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="inner-widget">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2 class="block-title">',
		'after_title' => '</h2>',
	));
}