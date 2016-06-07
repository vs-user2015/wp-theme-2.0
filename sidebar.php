<div id="sidebar">
	<div>
		<ul id="quick-menu">
			<?php wp_nav_menu(array("theme_location" => "sidebar-menu","container_id" => "side-menu")) ; ?>
		</ul>
		<?php if(is_active_sidebar("home_right_1") ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar("home_right_1") ; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
