<?php
add_theme_support( 'post-thumbnails' );


add_action('init', function() {
	register_post_type('eventos',
		array(
		   'labels'      => array(
		       'name'          => __('Eventos'),
		       'singular_name' => __('Evento'),
		   ),
		   'supports'	=> ['title', 'thumbnail', 'editor'],
		   'public'      => true,
		   'has_archive' => true,
		)
	);
});