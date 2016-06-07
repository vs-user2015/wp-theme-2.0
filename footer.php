	<!-- 3.7 Footer -->
			<footer>
				<div id="footer-wrapper">
					<div>
						<div id="left-footer">
							<div class="footer-navigation">
								<?php wp_nav_menu(array("theme_location" => "branding-footer","container_id"=> "branding-footer")) ; ?>
							</div>
							<div class="footer-navigation">
								<?php wp_nav_menu(array("theme_location" => "service-footer","container_id"=> "service-footer")) ; ?>
							</div>
						</div>
						<div id="right-footer">
							<p>Follow Us</p>
							<div id="social-media">
								<ul>
									<li><a href="#" id="facebook"></a></li>
									<li><a href="#" id="twitter"></a></li>
									<li><a href="#" id="linkedin"></a></li>
									<li><a href="#" id="gplus"></a></li>
								</ul>
							</div>
							<div id="address">
								<address>
									<p>Company Name</p>
									<p>1601 Sesame Str.<br>City, ST 12345</p>
								</address>
								<div id="license-number">
									<p>License #'s</p>
									<p class="licenses">MD XXXX</p>
									<p class="licenses">VA XXXX</p>
									<p class="licenses">DC XXXX</p>
								</div>
								<p><span>&copy;</span> <?php echo date("Y") ; ?> All Rights Reserved.  Company Name</p>
								<p id="vitalstorm_signature"><a target="_blank" href="http://vitalstorm.com">Marketing for Home Services</a> by Vitalstorm.</p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div id="service-location">
						<p>We Proudly Serve These Local Areas:</p>
						<?php wp_nav_menu(array("theme_location" => "city-pages","container-id" => "service-cities")) ; ?>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>