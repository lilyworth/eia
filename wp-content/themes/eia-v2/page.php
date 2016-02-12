<?php



 get_header(); ?>


<section>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<?php // posted_on(); ?>



				<?php the_content(); ?>

				<?php // wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>


			<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>

		</article>

		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>

</section> <!-- section -->


<!-- //////////////////////////////////////////////////////////////////// -->

<div class="sidebar">

<?php

// Check parent - get menu
//echo wp_get_post_parent_id( $post->ID);

//if ( $post->post_parent ) {
/* ---------------------------- */

/*
  if (the_parent_slug() == 'our-work') {
	   wp_nav_menu( array('menu' => 'Our work', 'container' => '' ));
  }

  elseif (the_parent_slug() == 'what-you-can-do') {
	   wp_nav_menu( array('menu' => 'What you can do', 'container' => '' ));


	  }
*/

/* ---------------------------- */
//}



?>



<?php
if(is_page('donate')){
get_template_part('donate-sidebar');
} else {
get_template_part('sidenav');
}
?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
