<?php
/*

Template name: Videos

 */


$video_id = isset($_GET['id']) ? $_GET['id'] : NULL;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$json_url ="http://vimeo.com/api/v2/channel/233008/videos.json?page=$page";

if($video_id){
$json = $json_url = "http://vimeo.com/api/v2/video/".$video_id.".json";
}


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

if($video_id){
if($jsonarray[0]["user_name"] != "EIA" ){
header('Location: http://vimeo.com/eia/videos');
exit();
}
}


 get_header(); ?>

<section>

<h1><?php the_title(); ?></h1>

<div class="page-intro"><?php the_content(); ?></div>
<?php

// if id then show video
if($video_id){
////////////////////////////////////////////////////////////////

// Check it's EIA video
if($jsonarray[0]["user_name"] != "EIA" ){
echo"<p>Sorry, that's not one of our videos.</p>";
} else {

echo "<h2>".$jsonarray[0]["title"]."</h2>";
//	foreach ($jsonarray as $value) {
?>

<div class="single-video">
  <iframe src="//player.vimeo.com/video/<?php echo $jsonarray[0]["id"] ?>?color=ffffff&portrait=0" width="500" height="254" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
<!-- latest-video -->
<?php

  //};

  echo"<p>".$jsonarray[0]["description"]."</p>";

    } // end if for username check

}; // end if id





///////////////////////
if (!$video_id){

  $ch = curl_init();
  $timeout = 5; // set to zero for no timeout
  curl_setopt ($ch, CURLOPT_URL, $json_url);
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  $file_contents = curl_exec($ch);
  curl_close($ch);
  $json = $file_contents;
  $jsonarray = json_decode($json, true); //getting the file content as array


// if there is an id (a video showing) show 'more videos' title
//if($video_id){echo"<h4>More videos:</h4>";};


  $i = 0;

  echo "<ul class='videos'>";

  // echo "<pre>";
  // print_r($jsonarray);
  // echo "<pre>";


  foreach ($jsonarray as $value) {
   if ($i<22){

   // if there is no id show big latest one

  ?>
  <li>
    <?php if(is_mobile()){?>
      <iframe src="//player.vimeo.com/video/<?php echo $value["id"] ?>?color=ffffff&portrait=0" width="500" height="254" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    <?php } else { ?>
      <a class="video popup-video" title="<?php echo $value["title"]; ?>" rel="<?php echo $value["id"]; ?>" href="http://vimeo.com/<?php echo $value["id"] ?>" style="background-image:url('<?php echo $value["thumbnail_large"]; ?>');"><div class="overlay"></div> <!-- overlay --></a>
    <?php } ?>


    <p><a href="?id=<?php echo $value["id"]; ?> "><?php echo $value["title"]; ?></a></p>
    <!-- <p><?php // echo $value["description"]; ?></p> -->

  </li>
  <!-- video-big -->




  <!-- video-thumb -->
  <?php





  } //


$i++;
  } // end loop

echo "</ul>";

//echo"</div>"; // end latest-videos-list

  if($i == 0){echo "<p>Sorry, nothing happening...</p>";};


// END OF BIG IF FOR ID
} ?>

<?php

    if($video_id) {echo "<p><a href=\"/media-resources/videos\">&laquo; Main video page</a></p>";};
?>


	<p>	<a target="_blank" href="http://vimeo.com/eia"><i class="icon-vimeo"></i> Watch all of our videos on Vimeo</a></p>


	</section><!-- featured-videos -->
<!-- //////////////////////////////////////////////////////////////////// -->

<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
