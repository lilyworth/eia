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

 <!--
	<div class="sidebar__nav">
	 	<h4 class="sidebar__nav__title">What you can do</h4>
	 	<?php // wp_nav_menu( array('menu' => 'What you can do', 'container' => '' )); ?>	
 	</div>
--><!-- sidebar__nav -->



<?php get_template_part('sidenav'); ?>
		
		
<?php get_sidebar(); ?>


</div>


<?php get_footer(); ?>

