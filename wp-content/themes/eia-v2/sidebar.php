<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>




	 <?php if(is_front_page()){ ?>
	 	<div class="statement">
			<div>
				<h1>Environmental &amp; wildlife protection</h1>

				<p>The Environmental Investigation Agency (EIA) is an independent campaigning organisation committed to bringing about change that protects the natural world from environmental crime and abuse.</p>

				<p>Our vision is a future where humanity respects, protects and celebrates the natural world for the benefit of all.</p>

				<a href="/about-eia/">Read more about us<i class="icon-right-open-mini"></i></a>
			</div>
	</div>
 <!-- statement -->
	 <?php } ?>




		<?php if(!is_front_page()) {?>
		<div class="donate donate__sidebar">
			<a href="/donate">Donate</a>
		</div> <!-- donate -->
		<?php } ?>



	 <div class="social">

				<ul>
					<li><a title="Find us on Facebook" href="http://www.facebook.com/environmentalinvestigationagency"><i class="icon-facebook"></i> <span>Facebook</span></a></li>
					<li><a title="Follow us on Twitter" href="https://twitter.com/Eiainvestigator"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
					<li><a title="Find us on Google+" href="https://plus.google.com/107721176350563999362"><i class="icon-gplus"></i> <span>Google+</span></a></li>
					<li><a title="See our videos on Vimeo" href="http://vimeo.com/eia"><i class="icon-vimeo"></i> <span>Vimeo</span></a></li>
					<li><a title="See our photos on Flickr" href="http://www.flickr.com/photos/eia1984/"><i class="icon-flickr"></i> <span>Flickr</span></a></li>
				</ul>

			</div><!-- social -->




	 <div class="subscribe">

		 <!-- <h3><i class="icon-mail"></i> Subscribe</h3> -->
		 <p>Receive email updates about EIA straight to your&nbsp;inbox.</p>
		 <a href="/subscribe">Sign up now</a>

	 </div> <!-- subscribe -->


<?php if(!is_mobile()){ ?>
	 <div class="twitter-box">

		 <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/EIAinvestigator" data-widget-id="395321402531647489">Tweets by @EIAinvestigator</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	 </div> <!-- twitter-box -->


	 <div class="facebook-box">


		<?php echo do_shortcode('[custom-facebook-feed]'); ?>


	 </div> <!-- facebook-box -->
<?php } // end if mobile ?>
