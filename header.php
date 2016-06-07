<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html itemscope itemtype="http://schema.org/LocalBusiness" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="robots" content="index, follow">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo home_url() ; ?>/favicon.png?v=1" type="image/x-icon" />
	
	<!-- Icons for iphone,ipad & android -->
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-120.png" rel="apple-touch-icon" sizes="120x120" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-152.png" rel="apple-touch-icon" sizes="152x152" />
	<link href="<?php echo home_url() ; ?>/images/apple-touch-icon-180.png" rel="apple-touch-icon" sizes="180x180" />
	<link href="<?php echo home_url() ; ?>/images/icon-hires.png" rel="icon" sizes="192x192" />
	<link href="<?php echo home_url() ; ?>/images/icon-normal.png" rel="icon" sizes="128x128" />
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Mobile navigation displayed only under screen width of 768px -->
	<?php get_template_part("template-part/mobile","form") ; ?>
	
	<div>
	<!-- 3.1 Header -->
		<header>
			<div id="header-shadow">
				<div id="header-wrapper">
					<div id="company-logo">
						<a href="<?php echo home_url() ; ?>"><img alt="company logo" src="<?php echo get_template_directory_uri(); ?>/images/company-logo.png" title="company-logo"></a>
					</div>
					<div id="call-to-action">
						<div>
							<p>CALL <br>NOW!</p>
							<span>123-456-7890</span>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
			