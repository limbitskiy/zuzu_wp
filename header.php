<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php zuzu_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

		<div class="hero-bg" style="background: center / cover no-repeat url('<?php echo wp_get_attachment_image_url('260', 'large'); ?>') "></div>

		<?php get_template_part('template-parts/header/site-header'); ?>

		<!-- <?php wp_nav_menu(array('theme_location' => 'top-menu', 'container_class' => 'top-menu')); ?> -->

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">