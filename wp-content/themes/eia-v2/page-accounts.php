<?php
/*

Template name: Accounts

 */



 get_header(); ?>


<section>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<?php if(the_field('accounts__intro')){?>
			<div class="intro">
				<?php the_field('accounts__intro'); ?>
			</div> <!-- intro -->
			<?php } ?>
		
		<?php
			$rows = get_field('accounts_downloads');
			if($rows)
			{
				echo '<ul class="accounts">';
			 
				foreach($rows as $row)
				{
				
				$accounts__file_download = $row['accounts__file_download']['url'];
				
				
				/*
echo"<pre>";
				print_r($row['accounts__file_download']);
				echo"</pre>";
*/

										
				?>
				
					
					<li>
						<p><a href="<?php echo $accounts__file_download; ?>"><?php echo $row['accounts__year']; ?></a></p>
					</li>
					
				<?php }
			 
				echo '</ul>';
			}
		?>

		
							
			<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>

		</article>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>

</section> <!-- section -->

	
<!-- //////////////////////////////////////////////////////////////////// -->

<div class="sidebar">

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

