<?php

/**
 * Post query.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


$query = new WP_Query('category_name=service-type');
$posts = $query->posts;

foreach ($posts as $post) : ?>
    <div class="frontpage-post">
        <div class="frontpage-post-content">
            <h2><?php echo $post->post_title; ?></h2>
            <?php echo $post->post_content; ?>
        </div>
        <div>
            <?php
            the_post_thumbnail('full');
            ?>
            <a class="zuzu-btn" href="#">Заказать фрезеровку</a>
        </div>
    </div>
<?php endforeach; ?>