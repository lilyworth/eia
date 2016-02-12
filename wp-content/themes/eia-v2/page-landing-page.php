<?php
/*

Template name: Landing page

 */
 get_header(); ?>



<section>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
	
	<?php
	
	
	
	 // the_content(); ?>
	
		
					
		<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'Landing Page' );
		$image = $image[0];
		?>
						
											
			
		<div class="landing-page-header" style="background-image:url('<?php echo $image ?>?778')">
		
		
			<div class="landing-page-header__caption">
				
				<h2><?php the_title(); ?></h2>
					
			</div> <!-- our-work-overview__work-area__caption -->
			
		</div>
		
	
	<article class="landing-page-content">


			<div class="landing-page-intro">
				
				<?php the_field('landing_page__intro'); ?>
				
			</div><!-- landing-page-intro -->


		<?php the_content(); ?>

	</article><!-- landing-page-content -->
	
	<div class="find-out-more">
		
		<?php $more_links = get_field('landing_page__find_out_more_links'); ?>
		<?php $more_custom_links = get_field('landing_page__custom_find_out_more_links'); ?>
		<?php if( $more_links || $more_custom_links ): ?>
		
		<h2>Find out more:</h2>
		
		<ul>
		
		<?php
		if($more_links):
		// relationship links frst
		foreach( $more_links as $more_link ): ?>
		
			<?php
				/*
echo"<pre>";
				print_r($more_link);
				echo"</pre>";
*/
			?>
		
			<li>
				<a href="<?php echo get_permalink($more_link->ID); ?>">
					<?php echo $more_link->post_title ?>
				</a>
			</li>
		
		<?php endforeach; ?>
		<?php endif; ?>
		
		<?php
		// now the custom links repeater
		$rows = get_field('landing_page__custom_find_out_more_links');
		if($rows)
		{
					 
			foreach($rows as $row)
			{ ?>
				<li>
					<a href="<?php echo $row['landing_page__custom_find_out_more_links__link_url'] ?>">
						<?php echo $row['landing_page__custom_find_out_more_links__link_text'] ?>
					</a>
				</li>
		<?php	}
		 
			
		}
		?>
		
		
		</ul>
		
		<?php endif; ?>
		
		
		
		
	</div><!-- find-out-more -->
	
	
	<?php endwhile; endif; ?>
	
</section> <!-- section -->






	
<!-- //////////////////////////////////////////////////////////////////// -->
	
<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
