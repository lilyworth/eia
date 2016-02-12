<?php
/*

Template name: Subscribe

 */
 get_header(); ?>

<section>

<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>


  <div id="mc_embed_signup">
  <form action="//eia-international.us3.list-manage.com/subscribe/post?u=b06af4e65cd7163ab8b2af228&amp;id=9704fefe6b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
                  <h2>Subscribe to our mailing list</h2>
  <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
  <div class="mc-field-group">
                  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
  </label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
  </div>
  <div class="mc-field-group">
                  <label for="mce-FNAME">First Name </label>
                  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
  </div>
  <div class="mc-field-group">
                  <label for="mce-LNAME">Last Name </label>
                  <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
  </div>
  <!-- <div class="mc-field-group">
                  <label for="mce-MMERGE3">Serial Number </label>
                  <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
  </div> -->
  <div class="mc-field-group input-group">
      <strong>Select your campaign areas of interest </strong>
      <ul><li><input type="checkbox" value="1" name="group[13037][1]" id="mce-group[13037]-13037-0"><label for="mce-group[13037]-13037-0">Elephants</label></li>
  <li><input type="checkbox" value="2" name="group[13037][2]" id="mce-group[13037]-13037-1"><label for="mce-group[13037]-13037-1">Tigers</label></li>
  <li><input type="checkbox" value="4" name="group[13037][4]" id="mce-group[13037]-13037-2"><label for="mce-group[13037]-13037-2">Oceans</label></li>
  <li><input type="checkbox" value="8" name="group[13037][8]" id="mce-group[13037]-13037-3"><label for="mce-group[13037]-13037-3">Forests</label></li>
  <li><input type="checkbox" value="16" name="group[13037][16]" id="mce-group[13037]-13037-4"><label for="mce-group[13037]-13037-4">Climate Change</label></li>
  </ul>
  </div>
                  <div id="mce-responses" class="clear">
                                  <div class="response" id="mce-error-response" style="display:none"></div>
                                  <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;"><input type="text" name="b_b06af4e65cd7163ab8b2af228_9704fefe6b" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
  </form>
  </div>

  <!--End mc_embed_signup-->


	</section>
<!-- //////////////////////////////////////////////////////////////////// -->

<div class="sidebar">

<?php get_template_part('sidenav'); ?>

<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
