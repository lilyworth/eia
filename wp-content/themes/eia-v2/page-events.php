<?php
/*

Template name: Events

*/

$past = isset($_GET['past']) ? $_GET['past'] : NULL;



if ($past == 1){
 $time_query = "<";
 $event_order = "DESC";
 $sort_on_date = 'events_start_date';

   } else {
 $time_query = ">=";
 $event_order = "ASC";
     if(get_field('events_end_date')) {
       $sort_on_date = 'events_end_date';
     } else {
       $sort_on_date = 'events_start_date';
     }

   };

$today = date("Ymd");

 get_header(); ?>

<section>


<?php

	global $paged;
	/* $paged = (empty($wp_query->query_vars['paged'])) ? 1 : $wp_query->query_vars['paged']; */

		//	$the_query = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => 10, 'paged' => $paged, 'meta_key' => 'events_start_date', 'orderby' => 'meta_value_num', 'order' => 'ASC' ) );

		$the_query = new WP_Query( array( 'post_type' => 'events', 'posts_per_page' => 10, 'paged' => $paged, 'meta_key' => $sort_on_date, 'meta_compare' => $time_query, 'meta_value' => $today, 'orderby' => 'meta_value_num', 'order' => $event_order ) );

?>

<h1><?php if ($past == 1){ ?>Previous<?php } ?> Events</h1>

	<?php if ($the_query->have_posts()) :  while ($the_query->have_posts()) : $the_query->the_post(); ?>


			<article class="summary__post summary__post--main-listing">

				<?php
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'Square - 175x175' );
						$thumb = $thumb[0];
				?>

				<?php if($thumb){ ?>

            <a href="<?php the_permalink(); ?>">
							<img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>" class="featured-image" />
            </a>
				<?php } ?>


				<h2 class="summary__post__title"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

				    <div class="byline summary__post__footer">

						<time class="pubdate updated summary__post__date-posted summary__post__date-posted--event"><i class="icon-calendar"></i><?php the_field('events_start_date') ?></time>

					</div>


				   <p><?php the_field('events_intro'); ?></p>


				<a class="summary__post__more-link" href="<?php the_permalink() ;?>">Read more<i class="icon-right"></i></a>

			</article>

	<?php endwhile; ?>

	<?php pagination(); ?>

	<?php else : ?>

		<h2>No upcoming events currently planned</h2>
    <p>You can <a href="?past=1">view our previous events</a>.</p>

	<?php endif; wp_reset_postdata(); ?>

</section>

<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
