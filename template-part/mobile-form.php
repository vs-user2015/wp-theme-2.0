<section id="main-container">
	<!-- div id="header-mobile">
		<div id="header-mobile-wrapper">
			<div>
				<div id="logo-mobile">
					<img alt="nav-button-mobile" class="click-mobile" id="nav-button-mobile" src="<?php echo get_template_directory_uri(); ?>/images/nav-button-mobile.png" title="mobile-menu" rel="mobile-menu">
					<a href="<?php echo home_url() ?>"><img alt="company logo" id="company-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/images/winstar-mobile-button.png" title="company-logo"></a>
				</div>		
				<div id="call-to-action-mobile">
					<a href="tel:12532923995"><img alt="company logo" id="phone-button-mobile" src="<?php echo get_template_directory_uri(); ?>/images/phone-button.png" title="company-logo"></a>
					<img alt="company logo" class="click-mobile" id="email-button-mobile" src="<?php echo get_template_directory_uri(); ?>/images/email-button.png" rel="mobile-contact" title="mobile-contact">
				</div>		
				<div class="clear"></div>
			</div>
		</div>
	</div -->
	<!-- Off canvas menu -->
	<!-- initialy left position is -100% off screen -->
	<div class="off-canvas" title="mobile-contact">
		<div class="close-off-canvas">
			<img alt="close button" src="<?php echo get_template_directory_uri() ; ?>/images/close_off_canvas_white.png"><span>Close Menu</span>
		</div>
		<div id="contact-form-mobile">
			<form id="form82" name="form82" class="wufoo rightLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" validate action="https://vitalstorm.wufoo.com/forms/x11ftqkz004fbsv/#public">
				<div id="type_of_service">
					<label>Type:</label>
					<input id="radioDefault_7" name="Field7" type="hidden" value=""/>
					<div>
						<input id="Field7_0" name="Field7" type="radio" class="field radio" value="Maintenance" tabindex="1" checked="checked"/>
						<label>Maintenance</label>
					</div>
					<div>
						<input id="Field7_1" name="Field7" type="radio" class="field radio" value="Service" tabindex="2"/>
						<label>Service</label>
					</div>
					<div>
						<input id="Field7_2" name="Field7" type="radio" class="field radio" value="Need an estimate" tabindex="3"/>
						<label id="need_an_estimate">Need an estimate</label>
					</div>
				</div>
				<div id="mobile_form_body">
					<div>
						<div class="input-fields">
							<input id="Field1" name="Field1" type="text" class="field text medium" value="" maxlength="255" placeholder="Name*" tabindex="4" onkeyup="" required />
							<input id="Field2" name="Field2" type="text" class="field text medium" value="" maxlength="255" placeholder="Phone Number*" tabindex="5" onkeyup="" required />
							<input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" placeholder="Email*" value="" maxlength="255" tabindex="6" required />
							<div class="clear"></div>
						</div>
						<div class="input-fields">
							<input id="Field4" name="Field4" type="text" class="field text medium" placeholder="Address*" value="" maxlength="255" tabindex="7" onkeyup="" required />
							<textarea id="Field6" name="Field6" class="field textarea medium" spellcheck="true" placeholder="Service needed*" rows="10" cols="50" tabindex="8" onkeyup="" required></textarea>
							<input id="Field9" name="Field9" type="hidden" class="field text medium" value="1234" maxlength="255" tabindex="9" onkeyup="" />
							<div class="clear"></div>
						</div>
					</div>
					<div class="submit">
						<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value=""/>
						<div class="hide">
							<label for="comment">Do Not Fill This Out</label>
							<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
							<input type="hidden" id="idstamp" name="idstamp" value="lQA2RoH2YvD8+guyn+Tal9N9txtJ05GQzEz83GGy+8k=" />
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	</div>
	<div class="off-canvas" title="mobile-menu">
		<div class="close-off-canvas">
			<img alt="close button" src="<?php echo get_template_directory_uri() ; ?>/images/close_off_canvas_white.png"><span>Close Menu</span>
		</div>
		<?php wp_nav_menu(array("theme_location" => "mobile-menu","container_id" => "mobile-navigation")) ; ?>
	</div>
</section>