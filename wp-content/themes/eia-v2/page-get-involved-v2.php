<?php
/*
Template name: Get Involved
*/

get_header(); ?>

<section>

  <div class="banner">
    <h1 class="banner__title"><?php the_title(); ?></h1>
  </div>
  <!-- banner -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

		  <ul class="get-involved">

        <li>
          <a class="get-involved__donate" href="/donate">

<svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48"><g transform="translate(0, 0)">
<line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="2" y1="10" x2="46" y2="10" stroke-linejoin="miter"></line>
<line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="2" y1="18" x2="46" y2="18" stroke-linejoin="miter"></line>
<path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M26,34H5c-1.7,0-3-1.3-3-3
	V5c0-1.7,1.3-3,3-3h27h11c1.7,0,3,1.3,3,3v25c0,2.2-1.8,4-4,4" stroke-linejoin="miter"></path>
<line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="10" y1="26" x2="20" y2="26" stroke-linejoin="miter"></line>
<rect data-color="color-2" x="26" y="32" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="16" height="14" stroke-linejoin="miter"></rect>
<path data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,32v-4
	c0-2.2,1.8-4,4-4l0,0c2.2,0,4,1.8,4,4v4" stroke-linejoin="miter"></path>
<line data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="34" y1="38" x2="34" y2="40" stroke-linejoin="miter"></line>
</g></svg>

            Donate

        </a>
        </li>

        <!-- ////////////////////////////////////////////////////////////////// -->


        <li>
          <a class="get-involved__legacy" href="/get-involved/leaving-a-legacy-to-eia">


  <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48"><g transform="translate(0, 0)">
  <polyline fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="42,18 42,46 6,46
  	6,18 " stroke-linejoin="miter"></polyline>
  <rect x="2" y="10" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="44" height="8" stroke-linejoin="miter"></rect>
  <path data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M12,6
  	c0-2.2,1.8-4,4-4c5.9,0,8,8,8,8s-5.8,0-8,0S12,8.2,12,6z" stroke-linejoin="miter"></path>
  <path data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M36,6
  	c0-2.2-1.8-4-4-4c-5.9,0-8,8-8,8s5.8,0,8,0S36,8.2,36,6z" stroke-linejoin="miter"></path>
  <line data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="20" y1="10" x2="20" y2="46" stroke-linejoin="miter"></line>
  <line data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="28" y1="10" x2="28" y2="46" stroke-linejoin="miter"></line>
  </g></svg>
            Gift in Your Will
          </a>
        </li>

        <!-- ////////////////////////////////////////////////////////////////// -->

        <li>
          <a class="get-involved__partnerships" href="/get-involved/corporate-partners">



    <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48">
    <g transform="translate(0, 0)">
    <path data-cap="butt" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="M6,25.1C2.3,19.6,2.8,12,7.7,7.1
    	c4.4-4.4,10.9-5.3,16.1-2.7" stroke-linejoin="miter" stroke-linecap="butt"></path>
    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M40.3,27.2
    	c5.5-5.5,5.5-14.5,0-20s-14.5-5.5-20,0l-10,10c0,0,4.8,3.2,10-2c0,0,8.9,5,13.9,0" stroke-linejoin="miter"></path>
    <path data-cap="butt" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="M33.1,28.6l3.6,3.6
    	c1.1,1.1,2.9,1.1,4,0l0.1-0.1c1.1-1.1,1.1-2.8,0.1-3.9l-10.4-11" stroke-linejoin="miter" stroke-linecap="butt"></path>
    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M27.7,7.1" stroke-linejoin="miter"></path>
    <path data-cap="butt" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="M21.9,41.3l2.8,2.8
    	c1.1,1.1,2.9,1.1,4,0l0,0c1.1-1.1,1.1-2.9,0-4l-3.6-3.6" stroke-linejoin="miter" stroke-linecap="butt"></path>
    <path data-cap="butt" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="M24.6,36.1l4.1,4.1
    	c1.1,1.1,2.9,1.1,4,0l0,0c1.1-1.1,1.1-2.9,0-4l-3.6-3.6" stroke-linejoin="miter" stroke-linecap="butt"></path>
    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M29.1,32.6l3.6,3.6
    	c1.1,1.1,2.9,1.1,4,0l0,0c1.1-1.1,1.1-2.9,0-4l-3.6-3.6" stroke-linejoin="miter"></path>
    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M24,35.2L24,35.2
    	c1.1,1.1,1.1,2.9,0,4l-3,3c-1.1,1.1-2.9,1.1-4,0l0,0c-1.1-1.1-1.1-2.9,0-4l3-3C21.1,34.1,22.9,34.1,24,35.2z" stroke-linejoin="miter"></path>
    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M16,27.2L16,27.2
    	c1.1,1.1,1.1,2.9,0,4l-3,3c-1.1,1.1-2.9,1.1-4,0l0,0c-1.1-1.1-1.1-2.9,0-4l3-3C13.1,26.1,14.9,26.1,16,27.2z" stroke-linejoin="miter"></path>
    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M12,23.2L12,23.2
    	c1.1,1.1,1.1,2.9,0,4l-3,3c-1.1,1.1-2.9,1.1-4,0l0,0c-1.1-1.1-1.1-2.9,0-4l3-3C9.1,22.1,10.9,22.1,12,23.2z" stroke-linejoin="miter"></path>
    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M20,31.2L20,31.2
    	c1.1,1.1,1.1,2.9,0,4l-3,3c-1.1,1.1-2.9,1.1-4,0l0,0c-1.1-1.1-1.1-2.9,0-4l3-3C17.1,30.1,18.9,30.1,20,31.2z" stroke-linejoin="miter"></path>
    </g>
    </svg>

      Corporate Partnerships

          </a>
        </li>

        <!-- ////////////////////////////////////////////////////////////////// -->

        <li>
          <a class="get-involved__events" href="/get-involved/events">


  <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48"><g transform="translate(0, 0)">
  <polyline fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="46,16 46,46 2,46
  	2,16 " stroke-linejoin="miter"></polyline>
  <rect x="2" y="6" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="44" height="10" stroke-linejoin="miter"></rect>
  <line data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="24" y1="2" x2="24" y2="10" stroke-linejoin="miter"></line>
  <line data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="10" stroke-linejoin="miter"></line>
  <line data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="36" y1="2" x2="36" y2="10" stroke-linejoin="miter"></line>
  <polygon data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="
  	28,22 20,22 12,22 12,30 12,38 20,38 28,38 28,30 36,30 36,22 " stroke-linejoin="miter"></polygon>
  <line data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="20" y1="22" x2="20" y2="38" stroke-linejoin="miter"></line>
  <polyline data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="
  	28,22 28,30 12,30 " stroke-linejoin="miter"></polyline>
  </g></svg>


            Events
          </a>
        </li>

        <!-- ////////////////////////////////////////////////////////////////// -->

        <li>
          <a class="get-involved__organise" href="/get-involved/organise-your-own">



  <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48"><g transform="translate(0, 0)">
  <path data-cap="butt" data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="M20,30l6,9
  	c1.1,1.6,0.6,3.8-1,4.9l0,0c-1.7,1.1-3.9,0.6-5-1.1L12,30" stroke-linejoin="miter" stroke-linecap="butt"></path>
  <path data-color="color-2" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M10,28
  	c-3.3,0-6-2.7-6-6s2.7-6,6-6" stroke-linejoin="miter"></path>
  <polyline data-cap="butt" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="26,14 44,4 44,40 26,30 " stroke-linejoin="miter" stroke-linecap="butt"></polyline>
  <rect x="10" y="14" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="16" height="16" stroke-linejoin="miter"></rect>
  </g></svg>


            Organise Your Own
          </a>
        </li>

        <!-- ////////////////////////////////////////////////////////////////// -->

        <li>
          <a class="get-involved__volunteer" href="/get-involved/volunteer">


  <svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48"><g transform="translate(0, 0)">
  <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M34,2
  	c-4.2,0-7.9,2.1-10,5.4C21.9,4.1,18.2,2,14,2C7.4,2,2,7.4,2,14c0,12,22,30,22,30s22-18,22-30C46,7.4,40.6,2,34,2z" stroke-linejoin="miter"></path>
  </g></svg>


            Volunteer
          </a>
        </li>

        <!-- ////////////////////////////////////////////////////////////////// -->



      </ul>

      <?php the_content(); ?>

		</article>


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
