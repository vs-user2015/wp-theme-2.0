<?php
/**
 * Template Name: City Page
 *
 * @package WordPress
 * @subpackage Blank Theme
 */
 ?>

<?php get_header(); ?>
<section id="content">
	<div id="banner-outer" style="padding: 0"></div>
	<nav>
		<div id="nav-wrapper">
			<?php wp_nav_menu(array("theme_location" => "primary","container_id" => "primary-navigation")) ;?>
		</div>
		<div class="clear"></div>
	</nav>
	<?php get_template_part("template-part/city-banner") ; ?>
	<?php get_template_part("template-part/main-form") ; ?>
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