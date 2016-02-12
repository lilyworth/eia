<?php
/*

Template name: Our Work

 */
 get_header(); ?>


<section>


	<h1>Our Work</h1>


	<?php // the_content(); ?>

	<ul class="our-work-overview">

		<li class="our-work-overview__work-area our-work-overview__work-area--crime">

		<a href="/our-work/environmental-crime-and-governance">
			<div class="our-work-overview__work-area__caption">

				<h2>Environmental Crime &amp; Governance</h2>

					<p>Learn more about Illegal Wildlife Trade, Forest Loss, Habitat Destruction, e-Waste and Skills Sharing<i class="icon-right"></i></p>

			</div> <!-- our-work-overview__work-area__caption -->

			</a>

		</li>

		<li class="our-work-overview__work-area our-work-overview__work-area--biodiversity">

			<a href="/our-work/ecosystems-biodiversity">

			<div class="our-work-overview__work-area__caption">

				<h2>Ecosystems &amp; Biodiversity</h2>

					<p>Learn more about Forest Loss, Oceans & Cetaceans and Habitat Destruction<i class="icon-right"></i></p>

			</div> <!-- our-work-overview__work-area__caption -->

			</a>


		</li>


		<li class="our-work-overview__work-area our-work-overview__work-area--climate">

			<a href="/our-work/climate">

			<div class="our-work-overview__work-area__caption">

				<h2>Climate</h2>

					<p>Learn more about Hydrofluorocarbons (HFCs), the F-Gas Regulation, Ozone-Depleting Substances and Forest Loss<i class="icon-right"></i></p>

			</div> <!-- our-work-overview__work-area__caption -->

			</a>


		</li>



	</ul>



	<?php // the_content(); ?>



</section> <!-- section -->







<!-- //////////////////////////////////////////////////////////////////// -->

<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
