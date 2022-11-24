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

        <div class="site-logo"><?php the_custom_logo(); ?></div>

        <div class="contacts">
            <p><?php the_field('adress', 'option'); ?></p>
            <div class="cta">
                <div>
                    <?php echo wp_get_attachment_image('248', [25, 25]); ?>
                    <p><?php the_field('telephone', 'option'); ?></p>
                </div>

                <div>
                    <?php echo wp_get_attachment_image('249', [25, 25]); ?>
                    <p><?php the_field('mail', 'option'); ?></p>
                </div>

            </div>
            <div class="contact-btns">
                <a class="contact-btn-telegram" href="<?php echo esc_url(get_field('telegram', 'option')); ?>"><?php echo wp_get_attachment_image('245', [25, 25]); ?></a>
                <a class="contact-btn-whatsapp" href="<?php echo esc_url(get_field('whatsapp', 'option')); ?>"><?php echo wp_get_attachment_image('246', [25, 25]); ?></a>
                <a class="contact-btn-youtube" href="<?php echo esc_url(get_field('youtube', 'option')); ?>"><?php echo wp_get_attachment_image('247', [25, 25]); ?></a>
            </div>
        </div>
        <!-- <div>
            <?php wp_nav_menu(array('theme_location' => 'footer-services', 'container_class' => 'footer-services')); ?>
        </div>
        <div>
            <?php wp_nav_menu(array('theme_location' => 'footer-extra-links', 'container_class' => 'footer-extra-links')); ?>
            <?php get_zuzu_btn('Заказать звонок', '#', 'small'); ?>
        </div> -->
    </div>
</footer>