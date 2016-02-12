<?php

$v = isset($_GET['v']) ? $_GET['v'] : NULL;

 get_header(); ?>


<section>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<h1><?php the_title(); ?></h1>

			<p>To continue our vital work, we rely on people like you.</p>


<div class="other-ways">
<?php get_template_part('_donate--quick');?>
</div>



		<article class="post donate-forms" id="post-<?php the_ID(); ?>">



			<!-- <div class="form-info">

				<ol>
				<li class="current">Your details</li>
				<li>Payment</li>
				<li>Thank you</li>
				</ol>

			</div>
       --> <!-- form-info -->


			<ul id="tabs">
				<li class="current regular"><a href="#regular">Regular Giving</a></li>
				<li class="single"><a href="#single">Single Donation</a></li>

			</ul>

					<!-- TAB CONTENT -->
					<div id="content" class="tab-content">





<!-- //////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////// -->



<div id="regular" class="current tab-content--regular">



<?php gravity_form('Regular Giving', false, false, false, '', true); ?>

</div> <!-- #regular -->


<!-- //////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////// -->




						<div id="single" class="tab-content--single">

						<form action="https://payments.securetrading.net/process/payments/choice" name="posty" method="post" class="single">

<a href="http://www.securetrading.com/"><img alt="Online Payments by SecureTrading" src="https://www.securetrading.com/images/logos3/safepayments_amex_no3D_noborderv2.jpg" class="alignright form-intro-logo" style="border:8px #FFF solid" width="182" height="119" border="0" /></a>

						<h3>Donate via Credit Card</h3>

							<p>I would like to donate:</p>

							<ul class="donation-amounts">
								<li class="amount" data-amount="5">&pound;5</li>
								<li class="amount" data-amount="10">&pound;10</li>
								<li class="amount" data-amount="20">&pound;20</li>
								<li class="amount" data-amount="50">&pound;50</li>
								<li class="amount" data-amount="100">&pound;100</li>
								<li class="amount" data-amount="250">&pound;250</li>
							</ul>


							<span class="donate-pound">&pound;</span><input placeholder="Other amount" type="text" required="required" class="required number" id="inputamount" name="mainamount" value="">







	<!-- <h2>Personal Details</h2> -->



	<fieldset>

	<div>

	<label for="billingprefixname">Title</label>
	<select name="billingprefixname">
	<option value="">-</option>
	<option value="Mr">Mr</option>
	<option value="Mrs">Mrs</option>
	<option value="Miss">Miss</option>
	<option value="Dr">Dr</option>
  <option value="Ms">Ms</option>
  <option value="Prof">Prof</option>
  <option value="Rev">Rev</option>
	</select>

	</div>




	<div>
		<label for="billingfirstname">First name <span>*</span></label>
		<input type="text" name="billingfirstname" class="required" required>
	</div>

  <div>
		<label for="billinglastname">Last name <span>*</span></label>
		<input type="text" name="billinglastname" class="required" required>
	</div>


	<div>
		<label for="billingpremise">House number / name <span>*</span></label>
		<input type="text" name="billingpremise" class="required" required>
	</div>

  <div>
		<label for="billingstreet">Street name <span>*</span></label>
		<input type="text" name="billingstreet" class="required" required>
	</div>

	<div>
		<label for="billingtown">Town/City <span>*</span></label>
		<input type="text" name="billingtown" class="required" required>
	</div>

	<div>
		<label for="billingcounty">County/Region <span>*</span></label>
		<input type="text" name="billingcounty" class="required" required>
	</div>

	<div>
		<label for="billingpostcode">Postal/Zip code <span>*</span></label>
		<input type="text" name="billingpostcode" class="required" required>
	</div>



	<input type="hidden" name="billingcountryiso2a" value="GB">


	<div>
		<label for="billingtelephone">Telephone</label>
		<input type="text" name="billingtelephone" maxlength="35">
	</div>


	<div>
		<label for="customeremail">Email <span>*</span></label>
		<input type="email" name="customeremail" class="required">
	</div>





	</fieldset>



<INPUT TYPE=hidden NAME="orderreference" VALUE="Donation <?php echo date('dmYHs') ?>">
<INPUT TYPE=hidden NAME="orderinfo" VALUE="NO GIFTAID">
<INPUT TYPE=hidden NAME="childcss" VALUE="custom">
<INPUT TYPE=hidden NAME="zero" VALUE=".00">
<INPUT TYPE=hidden NAME="currencyiso3a" VALUE="GBP">
<!-- <INPUT TYPE=hidden NAME="requiredfields" VALUE="name,address,town,country,postcode,email"> -->
<INPUT TYPE="Hidden" NAME="sitereference" VALUE="eia54059"><!--  test_eia54058 -->

<INPUT TYPE=hidden NAME="merchantemail" VALUE="supporterservices@eia-international.org">

<input type=hidden name="version" value="1">
<!-- change to 2 when upgrading -->

		<button type="submit">Next Step</button>


    <div class="continue-note">
    <p class="note">Donation continues on securetrading.net</p>
    <img alt="Payment Gateway by SecureTrading" src="https://www.securetrading.com/images/logocenter/logos-shadow.png" />
    </div>

			</form>


		</div> <!-- #single -->


<!-- //////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////// -->





					</div> <!-- #content -->



			<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>

		</article>


		<?php endwhile; endif; ?>



		<div id="other-ways" class="other-ways">

			<h2>Other ways to donate</h2>

		<ul>


			<li>
				<h3>Phone</h3>
				<p>Give us a call on <strong>0207 3547960</strong> to make a donation today.</p>
			</li>


			<li>

				<h3>Donate by post</h3>
				<p><a href="/wp-content/uploads/EIA-Single-Donation-Form.pdf" class="pdf icon">Download and print this form</a> PDF<br>to make a one-off donation by post
		and send it to us at:
    Freepost RTLK-EZZJ-UACC<br />
Environmental Investigation Agency<br />
62 Upper Street<br />
London<br />
N1 0NY</p>

			</li>


			<li>
				<h3>Donate by CAF</h3>
				<p>If you have a <abbr title="Charities Aid Foundation">CAF</abbr> account, you can <a href="https://www.cafonline.org/my-personal-giving/start-giving/donate-now.aspx">donate online</a></p>

			</li>




		</ul>

		</div>


</section> <!-- section -->


<!-- //////////////////////////////////////////////////////////////////// -->

<div class="sidebar">

<?php

// Check parent - get menu
//echo wp_get_post_parent_id( $post->ID);

//if ( $post->post_parent ) {
/* ---------------------------- */

/*
  if (the_parent_slug() == 'our-work') {
	   wp_nav_menu( array('menu' => 'Our work', 'container' => '' ));
  }

  elseif (the_parent_slug() == 'what-you-can-do') {
	   wp_nav_menu( array('menu' => 'What you can do', 'container' => '' ));


	  }
*/

/* ---------------------------- */
//}



?>



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
