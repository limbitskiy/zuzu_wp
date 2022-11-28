<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<section class="feedback-section no-margin" id="order-form" style="background: center / cover no-repeat url('<?php echo wp_get_attachment_image_url('260', 'large'); ?>')">
    <div class="container">
        <?php get_section_header('отправить на заказ'); ?>
        <div class="order-form-box mb-3">
            <!-- <div class="form-and-button"> -->
            <div class="red-form inverted">
                <form id="feedback-form" class="order-form">
                    <label>Ваше имя:<sup class="asterisk">*</sup></label>
                    <input type="text" id="name">
                    <label>Телефон:<sup class="asterisk">*</sup></label>
                    <input type="text" id="phoneNumber">
                    <label>Файл:</label>
                    <div class="input-wrap">
                        <label id="upload-file">
                            <div>
                                <button id="load-file-btn">Выберите файл</button>
                                <span id="file-desc">(jpg, jpeg, png)</span>
                            </div>
                        </label>
                    </div>
                    <label>Комментарий:</label>
                    <input type="text" id="commentary">
                </form>
            </div>
            <!-- <div class="mt-50"> -->
            <!-- </div> -->
            <!-- </div> -->
            <?php echo wp_get_attachment_image('312', 'large'); ?>
        </div>
        <div class="text-center">
            <?php get_zuzu_btn('Отправить', '#'); ?>
        </div>
    </div>
    <input id="hidden-load-file-btn" name="file" type="file" accept=".jpg, .jpeg, .png">
</section>

<section class="map">
    <?php echo wp_get_attachment_image('497', 'large'); ?>
</section>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer'); ?>

<div id="overlay" class="overlay hidden">
    <div class="dialog">
        <span class="close-dialog">+</span>
        <h3>Заказать обратный звонок</h3>
        <form class="order-form">
            <label>Ваше имя:<sup class="asterisk">*</sup></label>
            <input type="text" id="callback-name">
            <label>Ваш телефон:<sup class="asterisk">*</sup></label>
            <input type="tel" id="callback-phone-number" value="+7">
        </form>
        <div class="text-center">
            <?php get_zuzu_btn('Отправить', '#', 'medium'); ?>
        </div>
    </div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>