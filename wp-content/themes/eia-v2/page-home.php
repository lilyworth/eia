<?php
/*

Template name: Homepage

 */
 get_header(); ?>


<div class="home-panels">

	<section class="summary">

			<h1><!-- <i class="icon-doc"></i>&nbsp; -->Latest news</h1>

			<?php $the_query = new WP_Query( array( 'posts_per_page' => 6, 'order' => 'DESC' ) ); ?>


					<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>


								<!-- //////////////////////////////////////////////////////////////////// -->
								<!-- //////////////////////////////////////////////////////////////////// -->



								<article class="summary__post">


									<h2 class="summary__post__title"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>

									    <footer class="byline summary__post__footer">
									        <!-- by <a class="aside-author" href="/author/håkonwiumlie">Håkon Wium Lie</a> -->

									        <!-- TODO: Get UTC time -->
											<time class="pubdate updated summary__post__date-posted"><i class="icon-calendar"></i><?php posted_on(); ?></time>
											 <!-- <a class="comment-count" href="/blog/post/css-regions-considered-harmful#comments">23 Comments</a> -->
										</footer>


										<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), full ); ?>

									<?php if($thumb){ ?>

										<a href="<?php the_permalink() ;?>">
										<?php echo get_the_post_thumbnail($page->ID, 'Large Featured Image - Landscape - 360x185'); ?>
										</a>

									<?php } ?>




									<a class="summary__post__more-link" href="<?php the_permalink() ;?>">Read more<i class="icon-right"></i></a>



								</article>

			<?php endwhile; endif; wp_reset_postdata(); ?>





			<a class="summary__view-all" href="/category/news">View all news<i class="icon-right"></i></a>





	</section><!-- news-summary -->


<!-- //////////////////////////////////////////////////////////////////// -->

	<section class="featured-videos">

		<h1><!-- <i class="icon-video"></i>&nbsp; -->Featured films</h1>

		<ul>

		<?php
		$json_url ="https://vimeo.com/api/v2/channel/240708/videos.json";

		$ch = curl_init();
		$timeout = 5; // set to zero for no timeout
		curl_setopt ($ch, CURLOPT_URL, $json_url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$file_contents = curl_exec($ch);
		curl_close($ch);
		// display file
		$json = $file_contents;
		$jsonarray = json_decode($json, true);

		$i = 0;

		foreach ($jsonarray as $value) {

		if ($i<8){
		?>



		<?php if($i==0){ ?>

		<!-- //////////////////////////////////////////////////////////////////// -->
		<!-- Featured  -->
		<!-- //////////////////////////////////////////////////////////////////// -->

		<li class="featured-videos__video-latest">


			<a class="video popup-video" title="<?php echo $value["title"]; ?>" rel="<?php echo str_replace('channels/240708#','',$value["id"]) ?>" href="http://vimeo.com/<?php echo $value["id"] ?>">

				<div class="overlay"></div> <!-- overlay -->

					<img class="featured-videos__video__thumb" src="<?php echo $value["thumbnail_large"]; ?>" />


			</a>

			<h2 class="featured-videos__video-latest__title"><?php echo $value["title"] ?></h2>

		</li>

		<!-- //////////////////////////////////////////////////////////////////// -->

		<?php } else { ?>

		<!-- //////////////////////////////////////////////////////////////////// -->

		<li class="featured-videos__video">


			<a class="popup-video" title="<?php echo $value["title"]; ?>" rel="<?php echo str_replace('channels/240708#','',$value["id"]) ?>" href="http://vimeo.com/<?php echo $value["id"] ?>">

				<div class="overlay"></div> <!-- overlay -->

					<img class="featured-videos__video__thumb" src="<?php echo $value["thumbnail_large"]; ?>" />

			</a>

			<h2 class="featured-videos__video__title"><?php echo $value["title"] ?></h2>

		</li>

		<?php } ?>

<?php


	} // end if 5 counter


$i++;

	} // end for each


?>
		</ul>

		<p><a class="featured-videos__view-all" href="/media-resources/videos">View more videos<i class="icon-right"></i></a></p>


	</section><!-- featured-videos -->


<!-- //////////////////////////////////////////////////////////////////// -->

<div class="sidebar">
	<?php get_sidebar(); ?>
</div> <!-- sidebar -->


</div> <!-- home-panels -->


<?php // get_sidebar(); ?>

<?php get_footer(); ?>
