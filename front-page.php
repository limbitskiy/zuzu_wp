<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<section class="container" style="position: relative">
	<div class="stanok-bg"><?php echo wp_get_attachment_image('282', 'large'); ?></div>
	<h1>ФРЕЗЕРНАЯ РЕЗКА И ОБРАБОТКА<br>НА СТАНКАХ С ЧПУ В МОСКВЕ<br>И МОСКОВСКОЙ ОБЛАСТИ</h1>

	<p>На нашем производстве имеются современные станки для<br>фрезерной резки с ЧПУ и мы гарантируем: </p>

	<ul class="zuzu-list">
		<li>сверхточную фрезеровку на современном оборудовании высшего качества;</li>
		<li>резку материалов на большой скорости;</li>
		<li>фрезерную обработку 2D и 3D любого объема и сложности;</li>
		<li>разработку чертежа для Вашего заказа или резку по предоставленной Вами проектной документации;</li>
		<li>выполнение заказа строго в оговоренные сроки;</li>
		<li>выгодные цены на фрезерную резку дерева и пластика</li>
	</ul>

	<?php get_section_header('примеры фрезеровки на чпу и фрезерных работ'); ?>
	<p class="text-center">С примерами наших работ Вы можете ознакомиться подробнее в нашей <a href="#" style="text-decoration: underline">галерее проектов</a></p>


	<?php get_template_part('template-parts/slider'); ?>

</section>

<?php get_template_part('template-parts/separator-block-red'); ?>
<section class="container">

	<?php get_template_part('template-parts/post-query'); ?>

</section>

<?php get_template_part('template-parts/separator-block-black'); ?>

<section class="price-calc" style="background: center / cover no-repeat url('<?php echo wp_get_attachment_image_url('298'); ?>')">
	<div class="container-small">
		<?php get_section_header('Цены на фрезеровку в москве', 'white'); ?>

		<div class="mt-50" style="display: flex; justify-content: space-between">
			<?php get_zuzu_btn('Калькулятор', '#', 'medium', 'accent'); ?>
			<?php get_zuzu_btn('Прайс-лист', '#', 'medium', 'white'); ?>
		</div>

		<div class="calc-box mt-50">
			<p class="text-small">Заполните необходимые поля, чтобы узнать стоимость работы. Для более точного определения стоимости <a href="#">свяжитесь с нами</a></p>
			<div class="red-frame">
				<form>
					<input type="text" placeholder="Ваше имя">
					<input type="text" placeholder="Телефон">
					<input type="text" placeholder="Тип материала">
					<input type="text" placeholder="Длина реза, мм">
					<!-- <div class="form-agreement"> -->
					<input id="agreement-checkbox" type="checkbox" value="true">
					<label for="agreement-checkbox">Я принимаю условия передачи информации</label>
					<!-- </div> -->
				</form>
			</div>
			<?php echo wp_get_attachment_image('299', 'large'); ?>
		</div>
		<div class="mt-50" style="text-align: center">
			<?php get_zuzu_btn('ПОЛУЧИТЬ РАСЧЁТ СТОИМОСТИ', '#', 'large', 'accent'); ?>
		</div>
	</div>

</section>

// echo pprint_r($query['posts']);


get_footer();