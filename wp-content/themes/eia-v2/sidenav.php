<div class="sidenav">

<?php
// Search within...

if(is_category() || is_post_type_archive('report')) {
get_template_part('side-searchform');
}
?>

<?php
// Events side nav
 if ( is_singular('events') || is_page('Events') ) { ?>

	<ul class="menu">
	<li>
		<a href="<?php echo get_page_link(8814); ?>">Upcoming events</a>
	</li>

	<li>
		<a href="<?php echo get_page_link(8814); ?>?past=1">Previous events</a>
	</li>
	</ul>

<?php } ?>


	<?php if(is_home() || is_archive() || is_tag() || is_single() ){ ?>

		<!-- ////////////////////////////////////////////////////////////////// -->
		<!-- ////////////////////////////////////////////////////////////////// -->


	<?php if ( is_singular('report') || is_post_type_archive('report')) { ?>

	<ul class="menu">
	<li>
	<h3>Reports</h3>

<?php

		$terms = get_terms( 'report-category' );

		echo '<ul>';

		foreach ( $terms as $term ) {

				// The $term is an object, so we don't need to specify the $taxonomy.
				$term_link = get_term_link( $term );

				// If there was an error, continue to the next term.
				if ( is_wp_error( $term_link ) ) {
						continue;
				}

				// We successfully got a link. Print it out.
				echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
		}

		echo '</ul>';
?>

</li></ul>

<?php
	// end if reports

	// if is one of the 3 main landing areas Blog / News/ Press Releases - we wnat the Quick search
} elseif (is_category( array( 'Blog', 'News', 'Press Releases' ) )) {


	$current_cat = get_category(get_query_var('cat'))->slug;


	// loop through site settings
	 if(get_field('quick_search_words', 'option')): ?>
	<h3>Quick search</h3>
	<ul>

		<?php while(has_sub_field('quick_search_words', 'option')): ?>

			<li><a href="/?s=<?php the_sub_field('quick_search_words__search_word'); ?>&amp;category_name=<?php echo $current_cat; ?>"><?php the_sub_field('quick_search_words__search_word'); ?></a></li>

		<?php endwhile; ?>

	<?php endif; ?>

	</ul>

	<?php
}  //else {

?>

	<!-- ////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////// -->


	<?php


	// don't show categiries if is Reports or events
 if ( !is_page('events') && 'events' != get_post_type() && 'report' != get_post_type() && !is_post_type_archive('report') ) {

    $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '1,12,2,16',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( '<h3>Categories</h3>' ),
	'show_option_none'   => __( 'No categories' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
    );

    ?>
    <ul class="menu">
    <?php
    wp_list_categories( $args );
?>
    </ul>

	<?php

 } // end if not reports

	// end if(is_home() || is_archive() || is_tag() || is_single()
//	} ?>



		<?php
		// exclude side menu from some pages
		if (!is_page( array( 2942 ))) {;
		?>

	 <?php

	 // get to top level page - so we can then get children of that
	 $parent = array_reverse(get_post_ancestors($post->ID));
	$first_parent = get_page($parent[0]);
	//echo $first_parent->ID;



	 $args = array(
	'authors'      => '',
	'child_of'     => $first_parent->ID,
	'date_format'  => get_option('date_format'),
	'depth'        => 0,
	'echo'         => 1,
	'exclude'      => '2497',
	'include'      => '',
	'link_after'   => '',
	'link_before'  => '',
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'show_date'    => '',
	'sort_column'  => 'menu_order, post_title',
        'sort_order'   => '',
	'title_li'     => __('<h3>'.$first_parent->post_title.'</h3>'),
	'walker'       => ''
); ?>


	<ul class="menu">
	<?php wp_list_pages( $args ); ?>
	</ul>


	<?php
	// end pages exclude if
	} ?>



	<?php } ?>


</div> <!-- sidenav -->
