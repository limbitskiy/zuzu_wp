<?php

/**
 * Red separator block.
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

<div class="separator-block separator-black">
    <div class="container">
        <ul class="separator-list">
            <li>
                <?php echo wp_get_attachment_image('283', [30, 30]); ?>
                <div>
                    <p>МИНИМАЛЬНЫЕ</p>
                    <p>Расходы и издержки производства</p>
                </div>
            </li>
            <li>
                <?php echo wp_get_attachment_image('283', [30, 30]); ?>
                <div>
                    <p>ТОЧНО И В СРОК</p>
                    <p>Выполняем полученные заказы</p>
                </div>
            </li>
            <li>
                <?php echo wp_get_attachment_image('283', [30, 30]); ?>
                <div>
                    <p>ПЕРСОНАЛЬНЫЙ</p>
                    <p>Подход к каждому заказу и клиенту</p>
                </div>
            </li>
            <li>
                <?php echo wp_get_attachment_image('283', [30, 30]); ?>
                <div>
                    <p>КРЕАТИВНЫЙ</p>
                    <p>Подход к реализации проектов</p>
                </div>
            </li>
        </ul>
    </div>
</div>