<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<section>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">



				<?php
				//$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'Square - 300x300' );
				//$thumb = $thumb[0];
				?>

				<!-- <img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>" class="featured-image" /> -->





			<h1><?php the_title(); ?></h1>

			<time><i class="icon-calendar"></i> <?php posted_on(); ?></time>


				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>



				<div class="post-tags">
				<?php the_tags( __('Tags: '), ', ', ''); ?>
				</div>




			<?php edit_post_link(__('Edit this entry'),'','.'); ?>

		</article>

	<?php // comments_template(); ?>

	<?php endwhile; endif; ?>


</section>

<?php // post_navigation(); ?>


<div class="sidebar">

	<?php get_template_part('sidenav'); ?>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
