<?php

function custom_posts() {

//////////////////////////////////////////////////



	/* ********************************************************************************* */
	/* ********************************************************************************* */



	register_post_type( 'events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'post type general name'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'post type singular name'), /* This is the individual type */
			'add_new' => __('Add Event', 'custom post type item'), /* The add new menu item */
			'add_new_item' => __('Add Event'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit Event'), /* Edit Display Title */
			'new_item' => __('New Event'), /* New Display Title */
			'view_item' => __('View Event'), /* View Display Title */
			'search_items' => __('Search Events'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'EIA Events' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			//'menu_position' => 12, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-calendar', /* the icon for the custom post type menu */
			'rewrite' => true,
			'capability_type' => 'post',
			//'rewrite' => array( 'slug' => 'faq', 'with_front' => false ),
			'hierarchical' => false,
			'has_archive' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail',)
	 	) /* end of options */
	); /* end of register post type */


	register_post_type( 'report', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Reports', 'post type general name'), /* This is the Title of the Group */
			'singular_name' => __('Reports', 'post type singular name'), /* This is the individual type */
			'add_new' => __('Add Report', 'custom post type item'), /* The add new menu item */
			'add_new_item' => __('Add Report'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit Report'), /* Edit Display Title */
			'new_item' => __('New Report'), /* New Display Title */
			'view_item' => __('View Report'), /* View Display Title */
			'search_items' => __('Search Reports'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'EIA Reports' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			//'menu_position' => 12, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-media-document', /* the icon for the custom post type menu */
			'rewrite' => true,
			'capability_type' => 'post',
			'rewrite' => array( 'slug' => 'report', 'with_front' => true ),
			'hierarchical' => false,
			'has_archive' => 'reports',
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor','author', 'page-attributes', 'thumbnail',)
		) /* end of options */
	); /* end of register post type */





//////////////////////////////////////////////////
//register_taxonomy_for_object_type('category', 'report');
register_taxonomy_for_object_type('post_tag', 'report');



	//register_taxonomy_for_object_type('category', 'team');


}




	// adding the function to the Wordpress init
	add_action( 'init', 'custom_posts');


	register_taxonomy( 'report-category',
		array('report'),
		array('hierarchical' => true,
			'labels' => array(
				'name' => __( 'Report Categories' ),
				'singular_name' => __( 'Report Category' ),
				'search_items' =>  __( 'Search Report Categories' ),
				'all_items' => __( 'All Report Categories' ),
				'parent_item' => __( 'Parent Report Category' ),
				'parent_item_colon' => __( 'Parent Report Category:' ),
				'edit_item' => __( 'Edit Report Category' ),
				'update_item' => __( 'Update Report Category' ),
				'add_new_item' => __( 'Add Report Category' ),
				'new_item_name' => __( 'New Report Category Name' )
			),
			'show_ui' => true,
			'query_var' => true,
		)
	);



?>
