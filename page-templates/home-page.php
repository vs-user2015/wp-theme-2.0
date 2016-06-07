<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Blank Theme
 */

get_header(); ?>
<div id="mobile_layout">
	<header id="mobile_header">
		<div class="container" id="mobile_header_wrapper">
			<div id="mobile_home_logo">
				<a href="/"><img alt="southern trust home services" src="<?php echo get_template_directory_uri() ; ?>/images/southern-trust-mobile-logo.png" title="southern trust home services"></a>
			</div>
			<div>
				<img alt="mobile navigation" class="click-mobile" src="<?php echo get_template_directory_uri() ; ?>/images/mobile-nav.png" title="mobile navigation" rel="mobile-menu">
			</div>
		</div>
	</header>
	<div id="services_icon">
		<div class="container">
			<div id="services_button">	
				<div>
					<a href=""><img alt="service 1" src="<?php echo get_template_directory_uri() ; ?>/images/service-1.png"></a>
				</div>
				<div>
					<a href=""><img alt="service 2" src="<?php echo get_template_directory_uri() ; ?>/images/service-2.png"></a>
				</div>
				<div>
					<a href=""><img alt="service 3" src="<?php echo get_template_directory_uri() ; ?>/images/service-3.png"></a>
				</div>
				<div>
					<a href=""><img alt="service 4" src="<?php echo get_template_directory_uri() ; ?>/images/service-4.png"></a>
				</div>
			</div>
			<div id="view_our_services">
				<a href="#">View Our Services >></a>
			</div>
		</div>
	</div>	
	<div id="call_to_action_mobile">
		<div class="container">
			<div id="cta_mobile">
				<div id="call_now_mobile">
					<a href="tel:1234567890">
						<img alt="call now" title="call now" src="<?php echo get_template_directory_uri() ; ?>/images/call_now.png"><span>CALL NOW</span>
					</a>
				</div>
				<div id="schedule_mobile" class="click-mobile" rel="mobile-contact">
					<div>
						<img alt="schedule" src="<?php echo get_template_directory_uri() ; ?>/images/schedule.png"><span>SCHEDULE</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="coupon_mobile">
		<div class="container">
			<img alt="coupon" title="coupon" src="<?php echo get_template_directory_uri() ; ?>/images/coupon_mobile.png">
		</div>
	</div>
	<div id="newsletter_form_mobile">
		<div class="container">
			<p>Sign up to receive even more great offers!</p>
			<div id="mobile_form_wrapper">
				<form id="form_body">
					<input type="text" name="email" id="email_newsletter" placeholder="Enter your email address" value="">
					<input type="submit" id="submit_newsletter" name="submitNewsletter" value="Submit">
					<div class="clear"></div>
				</form>
			</div>
		</div>
	</div>
	<div id="trust_section">
		<div class="container">
			<div class="trust_rotator">
				<img alt="trust 1" title="trust 1" id="trust_1" src="<?php echo get_template_directory_uri() ; ?>/images/reason1-mobile.png">
				<h3 class="trust_rotator_h3">Family Owned & Operated</h3>
			</div>
			<div class="trust_rotator">
				<img alt="trust 2" title="trust 2" id="trust_2" src="<?php echo get_template_directory_uri() ; ?>/images/reason2-mobile.png">
				<h3 class="trust_rotator_h3">24/7 Emergency Service</h3>
			</div>	
			<div class="trust_rotator">
				<img alt="trust 3" title="trust 3" id="trust_3" src="<?php echo get_template_directory_uri() ; ?>/images/reason3-mobile.png">
				<h3 class="trust_rotator_h3">Upfront Pricing</h3>
			</div>
		</div>
	</div>
	<div id="testimonials_mobile">
		<div class="container">
			<div id="reviews">
				<p class="title">We’re really good, ask our customers!</p>
				<img alt="stars" id="stars" title="stars" src="<?php echo get_template_directory_uri() ; ?>/images/stars.png">
				<p class="customer_review">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius elementum metus. In accumsan orci a tristique auctor. Duis eget maximus erat.”</p>
				<p class="customer_name">- John Smith</p>
			</div>
		</div>
	</div>
</div>
<section id="content">
	<div id="banner-outer">
		<nav>
			<div id="nav-wrapper">
				<?php wp_nav_menu(array("theme_location" => "primary","container_id" => "primary-navigation")) ;?>
			</div>
			<div class="clear"></div>
		</nav>
		<?php get_template_part("template-part/home-banner") ; ?>
	</div>
	<?php get_template_part("template-part/main-form") ; ?>
	<section id="wrapper">
		<!-- 3.4 Three Reasons -->
		<section id="three-reasons">
			<div id="three-reasons-wrapper">
				<div>
					<div class="reason reason-one">
						<div>
							<a title="reason 1" href="<?php echo get_bloginfo() ; ?>/why-choose-us/"><img alt="reason-1" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/reason1.png"></a>
							<h3>Quick, Ontime,<br>Same Day Service</h3>
							
						</div>
					</div>
					<div class="reason reason-two">
						<div>
							<a title="reason 2" href="<?php echo get_bloginfo() ; ?>/why-choose-us/"><img alt="reason-1" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/reason2.png"></a>
							<h3>Winstar Guarantee<br>"You're Happy or it's FREE!"</h3>
						</div>
					</div>
					<div class="reason reason-three">
						<div>
							<a title="reason 3" href="<?php echo get_bloginfo() ; ?>/why-choose-us/"><img alt="reason-1" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/reason3.png"></a>
							<h3>Straight-forward<br>
							Upfront Pricing</h3>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</section>
		
		<!-- 3.5 Coupon-Review -->
		<section id="coupon-review">
			<div id="coupon-review-wrapper">
				<div>
					<div id="coupon-review-inner">
						<div id="coupon-area">
							<img alt="coupon" title="winstar coupons" src="<?php echo get_template_directory_uri(); ?>/images/coupon.png">
						</div>
						<div id="review-area">
							<div id="testimonials">
								<a href="<?php echo get_bloginfo() ; ?>/testimonials/"><h2>Customer Testimonials</h2></a>
								<div id="test_container">
									<div class="testimonial">
										<img alt="star ratings" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png">
										<div class="testimonial_text">"Showed up on time and got the work right...!" <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
										<h3 class="testimonial_name">-Christopher Mason</h3>
									</div>
									<div class="testimonial">
										<img alt="star ratings" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png">
										<div class="testimonial_text">"They have always been professional...!" <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
										<h3 class="testimonial_name">-Jonya Smalls</h3>
									</div>
									<div class="testimonial">
										<img alt="star ratings" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png">
										<div class="testimonial_text">"Pleasant, fast,  and went over and above...!" <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
										<h3 class="testimonial_name">-Judi Lohn</h3>
									</div>
									<div class="clear"></div>
								</div>
								<div id="t_pagers">
									<a class="pagers"></a>
									<a class="pagers"></a>
									<a class="pagers"></a>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<div id="section-wrapper">
		<div>
			<div id="copy">
				<div>
					<?php if(have_posts()): while(have_posts()) : the_post() ; ?>
					<?php the_content() ; ?>
					<?php endwhile ; endif ; ?>
				</div>
			</div>
			<?php get_sidebar() ; ?>
			<div class="clear"></div>
		</div>
	</div>
</section>
<?php get_footer();
