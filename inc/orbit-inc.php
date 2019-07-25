<?php

add_filter( 'orbit_post_type_vars', function( $post_types ){

	$post_types['statistics'] = array(
		'slug' 		=> 'statistics',
		'labels'	=> array(
			'name' 			     => 'Statistics',
			'singular_name'  => 'Statistic',
		),
		'public'	   => true,
		'supports'	 => array('title', 'editor', 'author', 'thumbnail')
	);

	$post_types['advocacy-team'] = array(
		'slug' 		=> 'advocacy-team',
		'labels'	=> array(
			'name' 			     => 'Advocacy Team',
			'singular_name'  => 'Advocacy Member',
		),
		'menu_icon'	=> 'dashicons-buddicons-buddypress-logo',
		'public'	   => true,
		'supports'	 => array('title', 'editor', 'excerpt', 'thumbnail')
	);


	$post_types['alliance-alert'] = array(
		'slug' 		=> 'alliance-alert',
		'labels'	=> array(
			'name' 			     => 'Alliance Alerts',
			'singular_name'  => 'Alliance Alert',
		),
		'menu_icon'	=> 'dashicons-format-aside',
		'public'	   => true,
		'supports'	 => array('title', 'editor', 'author', 'thumbnail')
	);


	return $post_types;
} );


/* PUSH INTO THE GLOBAL VARS OF ORBIT TAXNOMIES */
add_filter( 'orbit_taxonomy_vars', function( $orbit_tax ){

	$orbit_tax[ 'department' ]	= array(
		'label'			  => 'Department',
		'slug' 			  => 'department',
		'post_types'	=> array( 'advocacy-team' )
	);

  return $orbit_tax;

} );

//Creates a meta field for citation information
add_filter( 'orbit_meta_box_vars', function( $meta_box ){
	$meta_box['advocacy-team'] = array(
		array(
			'id'			=> 'advocacy-team-meta-fields',
			'title'		=> 'Additional Fields',
			'fields'	=> array(
				'team-position' => array(
					'type' => 'text',
					'text' => 'Position'
				),
				'twitter-handle' => array(
					'type' => 'text',
					'text' => 'Twitter Handle'
				),
			)
		)
	);
	return $meta_box;
});
