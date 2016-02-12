<?php

require( get_template_directory() . '/_/inc/custom-post-types.php' );
require( get_template_directory() . '/_/inc/breadcrumbs.php' );
require( get_template_directory() . '/_/inc/gravity-forms-confirm.php' );


	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}



// Clean up the <head>, if you so desire.
		function removeHeadLinks() {
	   	remove_action('wp_head', 'rsd_link');
	    	remove_action('wp_head', 'wlwmanifest_link');
	    }
	    add_action('init', 'removeHeadLinks');

			// remove emoji code
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' );

			// remove generator
			remove_action('wp_head', 'wp_generator');


	// Navigation - update coming from twentythirteen
	function post_navigation() {
		echo '<div class="navigation">';
		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';
		echo '	<div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';
		echo '</div>';
	}


// easy get slug in the loop - or just use $post->post_name
function the_slug() {
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug;
}

// get parent slug
function the_parent_slug() {
  global $post;
  if($post->post_parent == 0) return '';
  $post_data = get_post($post->post_parent);
  return $post_data->post_name;
}
// echo the_parent_slug();


// disable single post views on certain CPT - useful if using CPTs to build a single page
// http://wordpress.stackexchange.com/questions/128636/how-to-disable-the-single-view-for-a-custom-post-type

/*
add_action( 'template_redirect', 'wpse_128636_redirect_post' );

function wpse_128636_redirect_post() {
  $queried_post_type = get_query_var('post_type');
  if ( is_single() && 'sample_post_type' ==  $queried_post_type ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}
*/



function posted_on(){

		 the_time('jS F, Y');

	}


// Custom excerpt length + format
function new_excerpt_more( $more ) {
	return '&hellip;';
}

add_filter('excerpt_more', 'new_excerpt_more');


function custom_excerpt_length( $length ) {
	return 30; // words
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




// Automatically link Twitter names in content
function content_twitter_mention($content) {
	return preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/', "$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>", $content);
}

add_filter('the_content', 'content_twitter_mention');
add_filter('comment_text', 'content_twitter_mention');


// Pagination

function pagination() {

global $wp_query;

$big = 999999999; // need an unlikely integer

echo'<div class="pagination">';

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );


echo "</div>";


}


// =================================================================
// ====== Custom admin + menus
// =================================================================


/* Theme support for menus */
add_theme_support( 'menus' );

// Remove width and height attributes from images via WYSIWYG/admin
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


// Image link default = none
update_option('image_default_link_type','none');


// logo link
function wpc_url_login(){
     return "/";
}
add_filter('login_headerurl', 'wpc_url_login');


// logo
// add own css file
function login_css() {
     wp_enqueue_style( 'login_css', get_template_directory_uri() . '/_/css/login.css?2' );
}
add_action('login_head', 'login_css');


//change the menu items label Posts to News
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News Item';
    $submenu['edit.php'][15][0] = 'News Category'; // Change name for categories
    //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

// ================================================

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News Item';
        $labels->add_new_item = 'Add News Item';
        $labels->edit_item = 'Edit News Item';
        $labels->new_item = 'News Item';
        $labels->view_item = 'View News Item';
        $labels->search_items = 'Search News';
        $labels->not_found = 'Nothing found';
        $labels->not_found_in_trash = 'Nothing found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );


// ================================================
/**
 * Hide ACF menu item from the admin menu
 */

function remove_acf_menu()
{

    // provide a list of usernames who can edit custom field definitions here
    $admins = array(
        'paulburgess',
        'admin'
    );

    // get the current user
    $current_user = wp_get_current_user();

    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf');
    }

}

add_action( 'admin_menu', 'remove_acf_menu' );


// ================================================

function remove_menus () {

// leave the itmes in that you want removed

global $menu;
	$restricted = array( __('Links'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}

add_action('admin_menu', 'remove_menus');


// ================================================

function remove_footer_admin () {
echo '<p>EIA</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


// ================================================

function annointed_admin_bar_remove() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

// ================================================


// Remove all those widgets
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');
function wpc_dashboard_widgets() {
     global $wp_meta_boxes;
     // Today widget
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
     // Last comments
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
     // Incoming links
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
     // Plugins
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_quick_press']);
     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}


// Add a widget in WordPress Dashboard
function add_dashboard_widget_function() {
	// Entering the text between the quotes
	echo "<p>EIA</p>";
}



function wpc_add_dashboard_widgets() {
	wp_add_dashboard_widget('wp_dashboard_widget', 'Admin', 'add_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets' );

// ================================================


// remove theme editor menu
function remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);


// ================================================


// HIDE ALL THEME OPTIONS
function hide_menu() {
        // To remove the whole Appearance admin menu
        //remove_menu_page( 'themes.php' );

        // remove the theme editor and theme options submenus

        remove_submenu_page( 'themes.php', 'themes.php' );
        remove_submenu_page( 'themes.php', 'theme-editor.php' );
        remove_submenu_page( 'themes.php', 'customize.php' );
        remove_submenu_page( 'themes.php', 'theme_options' );
        remove_submenu_page( 'themes.php', 'options-framework' );

}

add_action('admin_head', 'hide_menu');

// ================================================

// remove Wdigets menu in admin
// http://codex.wordpress.org/Function_Reference/remove_submenu_page#Examples
add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );
function adjust_the_wp_menu() {
  $page = remove_submenu_page( 'themes.php', 'widgets.php' );
  // $page[0] is the menu title
  // $page[1] is the minimum level or capability required
  // $page[2] is the URL to the item's file
}





// =================================================================
// ====== DEVICE DETECTION
// =================================================================


// Device functions
require_once '_/inc/Mobile_Detect.php';
$detect = new Mobile_Detect();
$GLOBALS['device'] = ($detect->isMobile() ? ($detect->isTablet() ? 'desktop' : 'mobile') : 'desktop');
$GLOBALS['device'] = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');

//$GLOBALS['device'] = 'mobile';

if (isset($_GET['fdev'])) $GLOBALS['device'] = $_GET['fdev'];

function get_device() { return $GLOBALS['device'];  }
function the_device() { echo get_device(); }
function is_mobile() { return $GLOBALS['device']=='mobile';}
function is_tablet() { return $GLOBALS['device']=='tablet';}


//
function get_device_image($url_or_id,$device_sizes,$class="") {
    if (is_string($device_sizes)) $device_sizes = deserialize_device_sizes($device_sizes);
    $device = get_device();
    if (!isset($device_sizes[$device])) return;
    return get_image($url_or_id,$device_sizes[$device][0],$device_sizes[$device][1],$device_sizes[$device][2],$class);
}


/**
 * the_device_image($id,array('desktop'=>array(120,130,1),'mobile'=>array(120,130,1),'mobile'=>array(120,130,1)))
 * the_device_image($id,'desktop:120x130c,mobile:120x130c,tablet:120x130')
 */
function the_device_image($url_or_id,$device_sizes,$class="") {
    if (is_string($device_sizes)) $device_sizes = deserialize_device_sizes($device_sizes);
    $device = get_device();
    if (!isset($device_sizes[$device])) return;
    the_image($url_or_id,$device_sizes[$device][0],$device_sizes[$device][1],$device_sizes[$device][2],$class);
}

function deserialize_device_sizes($serialized_sizes) {
    $serialized_sizes = explode(',',$serialized_sizes);
    $device_sizes = array();
    foreach ($serialized_sizes as $size_string) {
        preg_match('/(\w+):(\d+)x(\d+)(c)?/i', $size_string,$matches);
        $name = $matches[1];
        $crop = isset($matches[4]);
        $device_sizes[$name] = array($matches[2],$matches[3],$crop);
    }
    return $device_sizes;
}


// Now add the_device(); to the html class to return desktop | tablet | mobile
// <html class="desktop">

/* =============================================
=============================================
============================================= */

// =================================================================
// ====== Gravity Forms
// =================================================================

// Allow editor access

// Setup access to Gravity Forms for Editors
function gravity_forms_for_user()
{
    $role = get_role('editor');
    $role->add_cap('gform_full_access');
}
add_action('admin_init','gravity_forms_for_user');


// this works on most fields
// http://pbrg.es/image/2u0L3X0Q1w17

add_filter( 'gform_merge_tag_filter', 'filter_fields', 10, 4 );
function filter_fields( $value, $merge_tag, $modifier, $field ) {


		//return $value;
		if(class_exists('GDS_Encryption_Class'))
		{
			return GDS_Encryption_Class::decrypt($value);
		}

}


/* Custom Gravity forms spinner */

add_filter( 'gform_ajax_spinner_url', 'cwwp_custom_gforms_spinner' );
function cwwp_custom_gforms_spinner( $src ) {
    return 'https://cdnjs.cloudflare.com/ajax/libs/select2/3.2/spinner.gif';

}

/* Remove main/large validation message at top of form */

add_filter("gform_validation_message", "change_message", 10, 2);
function change_message($message, $form){
  return "<div class='validation_message validation_message--check-form'>Please check your form&hellip;</div>"; // <-- add message here
}

/* Stop page/anchor jump on submission */
//add_filter("gform_confirmation_anchor", create_function("","return false;"));

/* Enable scroll on submission */
//add_filter( 'gform_confirmation_anchor', '__return_true' );
add_filter( 'gform_confirmation_anchor', function() {
    return -50;
} );

// =================================================================
// ====== Yoast SEO
// =================================================================

// remove comment
function remove_yoast(){
  global $wpseo_front;
  remove_action( 'wpseo_head', array($wpseo_front, 'debug_marker') , 2 );
}

add_action('wp_enqueue_scripts','remove_yoast');


// remove Yoast columns from admin
add_filter( 'wpseo_use_page_analysis', '__return_false' );



// =================================================================
// ====== Custom image sizes
// =================================================================


/*
Default sizes are:
the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Full resolution (original size uploaded)
*/


// Add new image sizes
function custom_image_sizes( $image_sizes ) {
  // get the custom image sizes
  global $_wp_additional_image_sizes;
  // if there are none, just return the built-in sizes
  if ( empty( $_wp_additional_image_sizes ) )
    return $image_sizes;

  // add all the custom sizes to the built-in sizes
  foreach ( $_wp_additional_image_sizes as $id => $data ) {
    // take the size ID (e.g., 'my-name'), replace hyphens with spaces,
    // and capitalise the first letter of each word
    if ( !isset($image_sizes[$id]) )
      $image_sizes[$id] = ucfirst( str_replace( '-', ' ', $id ) );
    }

  return $image_sizes;
}


function custom_image_setup () {
add_theme_support( 'post-thumbnails' );
//add_image_size('Mini Square - 70x70', 70, 70, TRUE);
add_image_size('Large Featured Image - Portrait - 320x377', 320, 377, TRUE);
add_image_size('Large Featured Image - Landscape - 360x185', 360, 185, TRUE);
add_image_size('Landing Page', 762, 290, TRUE);

add_image_size('1400w', 1400);
add_image_size('700w', 700);
add_image_size('450w', 450);

add_image_size('Square - 300x300', 300, 300, TRUE);
add_image_size('Square - 175x175', 175, 175, TRUE);
add_image_size('Icon - 46x46', 46, 46, TRUE);
add_image_size('175w', 175);

// To hide these sizes from the admin area, comment out line below
//add_filter( 'image_size_names_choose', 'custom_image_sizes' );
}
add_action( 'after_setup_theme', 'custom_image_setup' );

// ACF Options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'edit_posts',
		//'icon_url' => 'dashicons-chart-area',
		'redirect'		=> false
	));


}


// // Sort search results by date
// function my_search_query( $query ) {
// 	// not an admin page and is the main query
// 	if ( !is_admin() && $query->is_main_query() ) {
// 		if ( is_search() ) {
// 			$query->set( 'orderby', 'date' );
// 		}
// 	}
// }
// add_action( 'pre_get_posts', 'my_search_query' );

// ALWAYS return search results ordered by date
add_filter( 'searchwp_return_orderby_date', '__return_true' );

/* Custom templates for posts */

add_action('template_include', 'load_single_template');
  function load_single_template($template) {
    $new_template = '';

    // single post template
    if( is_single() ) {
      global $post;
      // 'cat-1' and 'cat-2' are category slugs

      if( has_term('campaign', 'category', $post) ) {
        // use template file single-template-cat-1.php
        $new_template = locate_template(array('single-template-custom.php' ));
      }

      // if( has_term('cat-2', 'category', $post) ) {
      //   $new_template = locate_template(array('single-template-cat-2.php' ));
      // }

    }
    return ('' != $new_template) ? $new_template : $template;
  }

	//Page Slug Body Class
	function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {

		if(in_category('campaign')){

	$classes[] = 'custom-template--' . $post->post_name;

		} else {


	$classes[] = $post->post_type . '-' . $post->post_name;

}

	}
	return $classes;
	}
	add_filter( 'body_class', 'add_slug_body_class' );






?>
