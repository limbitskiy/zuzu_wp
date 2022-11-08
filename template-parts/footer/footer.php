<?php

/**
 * zuzu footer.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<footer>
    <div class="container">

        <div class="site-logo"><?php the_custom_logo(); ?></div>

        <?php
        $post_id = get_queried_object_id();
        $contacts = get_field('contacts', $post_id);
        if ($contacts) : ?>

            <div class="contacts">
                <p><?php echo $contacts['adress']; ?></p>
                <div class="cta">
                    <div>
                        <?php echo wp_get_attachment_image('248', [25, 25]);
                        echo "<p>{$contacts['telephone']}</p>" ?>
                    </div>

                    <div>
                        <?php echo wp_get_attachment_image('249', [25, 25]);
                        echo "<p>{$contacts['mail']}</p>" ?>
                    </div>

                </div>
                <div class="contact-btns">
                    <a class="contact-btn-telegram" href="<?php echo esc_url($contacts['telegram']); ?>"><?php echo wp_get_attachment_image('245', [25, 25]); ?></a>
                    <a class="contact-btn-whatsapp" href="<?php echo esc_url($contacts['whatsapp']); ?>"><?php echo wp_get_attachment_image('246', [25, 25]); ?></a>
                    <a class="contact-btn-youtube" href="<?php echo esc_url($contacts['youtube']); ?>"><?php echo wp_get_attachment_image('247', [25, 25]); ?></a>
                </div>
            </div>
        <?php endif; ?>
        <div>
            <?php wp_nav_menu(array('theme_location' => 'footer-services', 'container_class' => 'footer-services')); ?>
        </div>
        <div>
            <?php wp_nav_menu(array('theme_location' => 'footer-extra-links', 'container_class' => 'footer-extra-links')); ?>
            <?php get_zuzu_btn('Заказать звонок', '#', 'small'); ?>
        </div>
    </div>
</footer>