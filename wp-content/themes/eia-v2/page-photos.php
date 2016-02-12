<?php
/*

Template name: Photos

 */
 get_header(); ?>

<section>

<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
<?php

//Grab the feed
$json_feed = file_get_contents("https://api.flickr.com/services/feeds/photos_public.gne?id=34821648@N05&format=json&nojsoncallback=1");

//Decode it
$photos_array = json_decode($json_feed);

  // echo "<pre>";
  // print_r($photos_array);
  // echo "<pre>";

//Specific info if needed
/*
echo $photos_array->title;
echo $photos_array->url;
echo $photos_array->items[0]->title;
*/


echo "<ul class='photos'>";
foreach($photos_array->items as $item) { //foreach element in $arr
   
	echo "<li>";   
    echo "<a style='background-image:url(".$item->media->m.")' title='".$item->title."' class='popup-image' href='".str_replace('_m', '_b', $item->media->m)."'>";
	//echo "<img src='".$item->media->t."' />";  
	//echo "<img src='".$item->media->m."' />";
	echo "<span>";
	echo $item->title;
	echo "</span>";
	echo "</a>";
	echo "</li>";

}

echo "</ul>";

?>
		<a class="button button--blue" target="_blank" href="http://www.flickr.com/photos/eia1984/"><i class="icon-flickr"></i> View our photos on Flickr</a>


	</section><!-- featured-videos -->
<!-- //////////////////////////////////////////////////////////////////// -->
	
<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>