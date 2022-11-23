<?php get_header(); ?>

<?php $args = [
	'orderby' => 'id',
	'order' => 'ASC',
	'cat' => 9
]; ?>

<?php $query = new WP_Query($args);

// pprint_r($query)

if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
?>
		<?php the_content() ?>
	<?php
	}
} else { ?>
	<h1>Постов не найдено</h1>
<?php }

wp_reset_postdata();
?>

<?php get_footer(); ?>