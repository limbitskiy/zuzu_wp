<?php

/**
 * zuzu footer.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<footer class="desktop-footer" style="background: center / cover no-repeat url('<?php echo wp_get_attachment_image_url('495', 'large'); ?>')">
    <div class="container">
        <div class="first-subfooter">
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
        <div class="mobile-sub-footer">
            <div class="contact-btns">
                <a class="contact-btn-telegram" href="<?php echo esc_url(get_field('telegram', 'option')); ?>"><?php echo wp_get_attachment_image('245', [25, 25]); ?></a>
                <a class="contact-btn-whatsapp" href="<?php echo esc_url(get_field('whatsapp', 'option')); ?>"><?php echo wp_get_attachment_image('246', [25, 25]); ?></a>
                <a class="contact-btn-youtube" href="<?php echo esc_url(get_field('youtube', 'option')); ?>"><?php echo wp_get_attachment_image('247', [25, 25]); ?></a>
            </div>
            <?php get_zuzu_btn('Заказать звонок', '#', 'small'); ?>
        </div>
    </div>
</footer>