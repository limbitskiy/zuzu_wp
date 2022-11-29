<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>
<!-- <div class="mobile-menu hidden">
	<div class="container">
		<span class="close-mobile-menu"><?php echo wp_get_attachment_image('338'); ?></span>
		<?php wp_nav_menu(array('theme_location' => 'top-menu')); ?>
	</div>
</div> -->

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?> mobile-header">
	<div class="site-logo mobile-header-logo"><?php the_custom_logo(); ?></div>
	<p class="header-seo-text"><?php the_field('short_adress', 'option'); ?></p>
	<div class="mobile-header-contacts">
		<div>
			<?php echo wp_get_attachment_image('248', [25, 25]); ?>
			<p><?php the_field('telephone', 'option'); ?></p>
		</div>

		<div>
			<?php echo wp_get_attachment_image('249', [25, 25]); ?>
			<p><?php the_field('mail', 'option'); ?></p>
		</div>
	</div>
	<!-- <span class="mobile-menu-open"><?php echo wp_get_attachment_image('337'); ?></span> -->
</header>
<!-- #masthead -->

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?> desktop-header">

	<div class="container">

		<div class="site-logo"><?php the_custom_logo(); ?></div>

		<p class="header-seo-text"><?php the_field('header_seo_text', 'option'); ?></p>

		<div class="header-contacts">
			<p><?php the_field('adress', 'option'); ?></p>
			<div class="contact-btns">
				<a class="contact-btn-telegram" href="<?php echo esc_url(get_field('telegram', 'option')); ?>"><?php echo wp_get_attachment_image('245', [25, 25]); ?></a>
				<a class="contact-btn-whatsapp" href="<?php echo esc_url(get_field('whatsapp', 'option')); ?>"><?php echo wp_get_attachment_image('246', [25, 25]); ?></a>
				<a class="contact-btn-youtube" href="<?php echo esc_url(get_field('youtube', 'option')); ?>"><?php echo wp_get_attachment_image('247', [25, 25]); ?></a>
			</div>
		</div>
		<div class="cta">
			<div>
				<?php echo wp_get_attachment_image('248', [25, 25]); ?>
				<p><?php the_field('telephone', 'option'); ?></p>
			</div>

			<div>
				<?php echo wp_get_attachment_image('249', [25, 25]); ?>
				<p><?php the_field('mail', 'option'); ?></p>
			</div>

			<?php get_zuzu_btn('Заказать звонок', '#', 'small'); ?>
		</div>

	</div>

</header><!-- #masthead -->