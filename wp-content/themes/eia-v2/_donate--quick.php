<div class="donate-quick other-ways">

	<ul>
		<li>
				
				<?php if(is_mobile()){ ?>
				<p><a class="button" href="sms://+70070?body=SAVE44">Text SAVE44 &pound;3 to <strong>70070</strong></a></p>
				<?php } else { ?>
				<h3>SMS</h3>
				<p>Text SAVE44 &pound;3 to <strong>70070</strong> to donate via your mobile</p>
				<?php } ?>
				
			</li>		

		
			<li class="donate-justgiving">
				<h3>JustGiving</h3>
				<p>Donate via our JustGiving page</p>
				
				<a href="https://www.justgiving.com/eia/raisemoney/"><img src="<?php bloginfo('template_directory'); ?>/_/img/button--justgiving.png" alt="Donate via Just Giving" /></a>
						
			</li>
		
				<li class="donate-paypal">	
				<h3>PayPal</h3>
				<p>Make a fully secure donation to EIA via PayPal.</p>
			
		
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="HUYUE36326HW2">
				<button class="button" type="submit" value="Donate via PayPal" name="submit"><i class="icon-paypal"></i> Donate via PayPal</button>
				<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
				</form>

				<p class="note">(PayPal account not required)</p>
			
			</li> <!-- donate-paypal -->

	</ul>

</div> <!-- other-ways -->