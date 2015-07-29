<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/assets/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/js/jquery.videoBG.js"></script>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/assets/script.js"></script>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/js/skrollr.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/js/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/js/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="/wp-content/themes/twentythirteen/js/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentythirteen/js/jquery.fancybox.css?v=2.1.5" media="screen" />
</head>


