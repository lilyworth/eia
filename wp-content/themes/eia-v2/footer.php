</main>

		<div class="footer-wrapper">
		<footer id="footer" class="source-org vcard copyright" role="contentinfo">

			<nav>
				<ul>

					<!-- ///////////////////////////////////////////// -->

					<li>


					<h4>About EIA</h4>
						<ul>
							<li><a href="/about-eia">About EIA</a></li>
							<li><a href="/about-eia/our-partners">Our partners</a></li>
							<li><a href="/about-eia/vacancies">Vacancies</a></li>
							<li><a href="/about-eia/about-eia-our-successes">Our successes</a></li>
							<li><a href="/about-eia/how-we-are-funded">How we are funded</a></li>
						</ul>
					</li>

					<!-- ///////////////////////////////////////////// -->

					<li> <h4>Our Work</h4>
						<ul>
							<li><a href="/our-work/ecosystems-biodiversity">Ecosystems &amp; Biodiversity</a></li>
							<li><a href="/our-work/environmental-crime-and-governance">Crime &amp; Governance</a></li>
							<li><a href="/our-work/climate">Global Climate</a></li>
						</ul>
					</li>

					<!-- ///////////////////////////////////////////// -->

					<li> <h4>What you can do</h4>

						<ul>
							<li><a href="/what-you-can-do">Get involved</a></li>
							<li><a href="/donate">Donate</a></li>
							<li><a href="/subscribe">Sign up</a></li>
						</ul>

					</li>

					<!-- ///////////////////////////////////////////// -->

					<li> <h4>Media &amp; Resources</h4>

						<ul>
							<li><a href="/media-resources">Media &amp; Resources</a></li>
							<li><a href="/reports">Reports</a></li>
							<li><a href="/category/press-releases">Press Releases</a></li>
							<li><a href="/category/blog">Blog</a></li>
							<li><a href="/category/news">News</a></li>
						</ul>

					</li>


					<!-- ///////////////////////////////////////////// -->

					<li> <h4>Contact</h4>

						<ul>
							<li><a href="/contact">Contact us</a></li>

							<li>
								<p>You are on EIA's UK site. Please <a href="http://www.eia-global.org/">visit our US site</a> for additional information on our work</p>



							</li>
						</ul>

					</li>



					<!-- ///////////////////////////////////////////// -->

				</ul>
			</nav>



			<div>
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/_/img/main-logo-100x100.png" alt="EIA logo"></a>
				<small><a href="mailto:ukinfo@eia-international.org">ukinfo@eia-international.org</a> <br /> &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>

			</div>

		</footer>
		</div> <!-- footer-wrapper -->

	<?php wp_footer(); ?>




<script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script src="//cdn.jsdelivr.net/fitvids/1.0/jquery.fitvids.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$("iframe[src*='vimeo'], iframe[src*='youtube']").wrap( "<div class='video-wrap'></div>" );
$(".video-wrap, .video").fitVids();
$(".embed").fitVids({ customSelector: "iframe"});
});
</script>


<?php if(is_front_page() || is_page('our-work')){ ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/jquery.flexslider-min.js"></script>
<?php } ?>

<?php if(is_front_page()){ ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/homepage.js?2"></script>
<?php } ?>

<?php if(is_page('our-work')){ ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/our-work.js?2"></script>
<?php } ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.1/jquery.slicknav.min.js"></script>

<?php if (is_page('donate')): ?>
<script src="https://getaddress.io/js/jquery.getAddress-2.0.0.min.js"></script>
<script>
jQuery(document).bind('gform_post_render', function(){
$('#postcode_lookup').getAddress({
    api_key: 'q_cL9SKBHUmddjAzlQugkw1761',
    output_fields:{
        line_1: '#input_2_6',
        line_2: '#input_2_7',
        line_3: '#input_2_8',
        post_town: '#input_2_9',
        county: '#input_2_10',
        postcode: '#input_2_11'
    },

});

});
</script>
<?php endif; ?>



<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js?1fZigxmLZkRS"></script>

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16156241-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>
