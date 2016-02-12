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
				
				
				
					<h1><?php the_title(); ?></h1>
					
						
<!-- //////////////////////////////////////////////////////////////////////////////// -->				
				

					<?php
								
								// ACFs
								$events_image = get_field('events_image');
								$events_intro = get_field('events_intro');
								$events_text = get_field('events_text');
								$events_start_date = get_field('events_start_date');
								$events_start_time = get_field('events_start_time');
								$events_end_date = get_field('events_end_date');
								$events_end_time = get_field('events_end_time');
								$events_address_line_1 = get_field('events_address_line_1');
								$events_address_line_2 = get_field('events_address_line_2');
								$events_address_line_3 = get_field('events_address_line_3');
								$events_address_line_4 = get_field('events_address_line_4');
								$events_postcode = get_field('events_postcode');
								$events_country = get_field('events_country');
								
								$events_start_date = get_field('events_start_date');
								$events_end_date = get_field('events_end_date');								
								?>
							
							
											
									
							
														
								
	
	
							<div class="event-details">
							 
							 
							<div class="event-map">
							
							
							<a target="_blank" title="View on Google Maps" href="http://maps.google.com/maps?q=<?php echo urlencode($events_postcode); ?>,+<?php echo $events_country; ?>">
								<img src="http://maps.google.com/maps/api/staticmap?center=<?php echo urlencode($events_postcode); ?>,+<?php echo $events_country; ?>&zoom=14&size=350x250&maptype=roadmap&sensor=true&markers=size:mid|color:0x0388D5|<?php echo urlencode($events_postcode); ?>,+<?php echo $events_country; ?>" />
								
							</a>	
								
							</div> <!-- map -->

							 
							 
							<h2>Event details</h2>
								
								<?php if($events_postcode){ ?>
							
							
							
							<?php } ?>

								
								
								<p>
								
									<div class="event-details__date event-details__date--start">
									<i class="icon-calendar"></i>&nbsp; <strong><?php echo $events_start_date; ?></strong>
									
									<?php
									
									if($events_start_time) {
									
																
									echo " - ".$events_start_time;
									
									}
									
									?>
										
					
									</div> <!-- event-details__date--start -->
									
									
									<div class="event-details__date event-details__date--end">

					
					
					
									<?php if($events_end_date && $events_end_date != $events_start_date) { ?>	
								
								Finishes:  <?php echo $events_end_date ?>
											
																											<?php
									
									if($events_end_time) {
									
									echo " - ".$events_end_time;
									
									}
									
								?>

									
									<?php } ?>
									</div> <!-- event-details__date--end -->
									
									
								<?php
								
									if($events_address_line_1):
								
								?>
								
								<div class="event-details__address">
								
								<?php
								
									echo $events_address_line_1;
									
									if($events_address_line_2){ echo ",<br /> ".$events_address_line_2;}
									if($events_address_line_3){ echo ",<br /> ".$events_address_line_3;}
									if($events_address_line_4){ echo ",<br /> ".$events_address_line_4;}
									if($events_postcode){ echo ",<br /> ".$events_postcode;}
									if($events_country){ echo ",<br /> ".$events_country;}
									
									?>
								
								</div><!-- event-details__address -->
								
								<?php
									
									endif;
									
								?>
								
						
						</div> <!-- event-details -->
	
						<div class="event-description">

							<?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'Square - 300x300' );
							$thumb = $thumb[0];
							?>


 <?php if($thumb): ?>
							<img src="<?php echo $thumb ?>" alt="<?php the_title(); ?>" class="featured-image" />
							<?php endif; ?>

							<?php echo $events_text ?>

						</div> <!-- event-description -->
							
						
						
							
							<!-- /////////// Videos -->
							<!-- ////////////////////////////////////////////////////////////////// -->
								
							<?php
							if(get_field('events_videos')): ?>
							
							<div class="event-videos">
							
							    <?php while(the_repeater_field('events_videos')): ?>
							    
							    <div class="video">
								    
								    <h3><?php the_sub_field('events_video_title') ?></h3>
								    <p>
									    <?php the_sub_field('events_video_description') ?>
								    </p>
								    
								    								
								   	 <?php the_sub_field('events_video_embed_code') ?>
						
								    
							    </div> <!-- video -->
							    
							    <?php endwhile; ?>
							   
							</div> <!-- event-videos --> 
							    
							 <?php endif; ?>


							 <!-- ////////////////////////////////////////////////////////////////// -->
							 <!-- ////////////////////////////////////////////////////////////////// -->

							<!-- /////////// Downloads -->
							<!-- ////////////////////////////////////////////////////////////////// -->
								
							<?php
							if(get_field('events_file_downloads')): ?>
							
							<div class="event-downloads">
							
							<h3>Downloads</h3>
							
							    <?php while(the_repeater_field('events_file_downloads')): ?>
							    
							    <div class="event-downloads__download">
								    
								    <h4><?php the_sub_field('events_file_title') ?></h4>
								    
								    <p>
									    <?php the_sub_field('events_file_description') ?>
								    </p>
								
								    <p>
								    	<a class="button" href="<?php the_sub_field('events_file') ?>">Download</a>
								    </p>
								    
								    
							    </div> <!-- download -->
							    
							</div> <!-- downloads -->  
							    
							    <?php endwhile; ?>
							 <?php endif; ?>


							 <!-- ////////////////////////////////////////////////////////////////// -->
							 <!-- ////////////////////////////////////////////////////////////////// -->

							 <!-- Details panel -->
				
						
						


<!-- //////////////////////////////////////////////////////////////////////////////// -->
				
				<?php edit_post_link(__('Edit this entry'),'','.'); ?>
				
			</article>
	



							<?php endwhile; ?>			
						
							<?php else : ?>
					
					    		<p>Sorry, event info unavailable.</p>
					    	
					    	<?php endif; ?>		


	<?php // comments_template(); ?>




</section>

<?php // post_navigation(); ?>


<div class="sidebar">

	<?php get_template_part('sidenav'); ?>
	
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>