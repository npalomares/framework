<?php 
define( 'TEMPPATH', get_bloginfo('stylesheet_directory' ) );
define( 'IMAGES', TEMPPATH. "/images" );
<<<<<<< HEAD
?>
=======



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
>>>>>>> f10d58a32954f7b5e3d055ac95e2956ef258a92c
