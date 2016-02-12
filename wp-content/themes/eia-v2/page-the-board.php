<?php
/*

Template name: The Board

 */
 get_header(); ?>



<section>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	

		<h1><?php the_title(); ?></h1>

		
		<?php if(get_field('board__page_intro')){ ?>
		<div class="page-intro">
			
			<?php the_field('board__page_intro'); ?>
			
		</div> <!-- page-intro -->
		<?php } ?>
	
	<?php endwhile; endif; ?>
	
		
<?php
$rows = get_field('trustees');
if($rows)
{
	echo '<ul class="trustees">';
 
	foreach($rows as $row)
	{ ?>
		<li>
			<img src="<?php echo $row['trustees__image'][sizes]["Square - 300x300"] ?>" alt="<?php echo $row['trustees__name'] ?>" />
			
			<div class="trustees__info">
				<h2><?php echo $row['trustees__name'] ?></h2>
				<h3><?php echo $row['trustees__title_position'] ?></h3>
				<p><?php echo $row['trustees__bio']; ?></p>
			</div>
		</li>
		
	<?php }
 
	echo '</ul>';
}
?>
		

	
	
</section> <!-- section -->






	
<!-- //////////////////////////////////////////////////////////////////// -->
	
<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
