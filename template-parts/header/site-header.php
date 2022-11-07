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

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>">

	<div class="container">

		<div class="site-logo"><?php the_custom_logo(); ?></div>

		<p class="header-seo-text"><?php the_field('header_seo_text'); ?></p>

		<?php
		$contacts = get_field('contacts');
		if ($contacts) : ?>

			<div class="header-contacts">
				<p><?php echo $contacts['adress']; ?></p>
				<div class="contact-btns">
					<a class="contact-btn-telegram" href="<?php echo esc_url($contacts['telegram']); ?>"><?php echo wp_get_attachment_image('245', [25, 25]); ?></a>
					<a class="contact-btn-whatsapp" href="<?php echo esc_url($contacts['whatsapp']); ?>"><?php echo wp_get_attachment_image('246', [25, 25]); ?></a>
					<a class="contact-btn-youtube" href="<?php echo esc_url($contacts['youtube']); ?>"><?php echo wp_get_attachment_image('247', [25, 25]); ?></a>
				</div>
			</div>
			<div class=" header-cta">
				<div>
					<?php echo wp_get_attachment_image('248', [25, 25]);
					echo "<p>{$contacts['telephone']}</p>" ?>
				</div>

				<div>
					<?php echo wp_get_attachment_image('249', [25, 25]);
					echo "<p>{$contacts['mail']}</p>" ?>
				</div>

				<a class="zuzu-btn" href="#">Заказать звонок</a>
			</div>

		<?php endif; ?>

	</div>

</header><!-- #masthead -->