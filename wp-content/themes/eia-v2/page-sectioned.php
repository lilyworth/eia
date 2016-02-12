<?php
/*

Template name: Sectioned page

 */
 get_header(); ?>



<section>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
		<h1><?php the_title(); ?></h1>
	
		
		<?php
		$rows = get_field('sectioned-page__section');
		if($rows)
		{
			//echo '<ul>';
		 
		foreach($rows as $row)
		{ ?>
		
			<div class="section">
		
				<?php 
				if($row['sectioned-page__section__image']){				
				?>
		
				<?php 
				if($row['sectioned-page__section__read-more-button-link']){
				?>
				<a href="<?php echo $row['sectioned-page__section__read-more-button-link'] ?>">
				<?php } ?>
				
					<img src="<?php echo $row['sectioned-page__section__image'][sizes]['Square - 175x175'] ?>" alt="<?php echo $row['sectioned-page__section__section-title']; ?>" />
				

				<?php 
				if($row['sectioned-page__section__read-more-button-link']){
				?>
				</a>
				<?php } ?>


				
				<?php } ?>
		
				<h2><?php echo $row['sectioned-page__section__section-title']; ?></h2>
		
				<?php echo $row['sectioned-page__section__section-text']; ?>
		
				<?php 
				if($row['sectioned-page__section__show-button']){
				?>
				
				<p>
					<a class="read-more" href="<?php echo $row['sectioned-page__section__read-more-button-link'] ?>">
						<?php echo $row['sectioned-page__section__read-more-button-text'] ?>
					</a>
				</p>
				
				
				<?php } ?>
				
		
			</div> <!-- section -->
				
		<?php
		
		}
		 
			//echo '</ul>';
		}
		?>
	
		
	
	
	<?php endwhile; endif; ?>
	
</section> <!-- section -->






	
<!-- //////////////////////////////////////////////////////////////////// -->
	
<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
