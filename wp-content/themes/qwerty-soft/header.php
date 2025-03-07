<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://dev.qwerty-soft.com/wp-content/uploads/2024/06/fav-small.svg">

</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <!-- Contact Form Start -->
    <div id="modal_mask" class="modal_mask">
        <div id="modal_wrapper" class="modal_wrapper">
            <img width="32" height="32" src="<?= get_template_directory_uri() ?>/assets/dist/images/arrow-close.svg" alt="Close Arrow" class="modal_wrapper_closer" id="modal_wrapper_closer">
            <?= do_shortcode('[contact-form-7 id="11af2fc" title="Contact form"]') ?>
            <div class="form_message" id="formMessage">
                <img src="<?= get_template_directory_uri() ?>/assets/dist/images/message.svg" alt="">
                <span>Thank you to getting in touch, you’ll hear from us shortly</span>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <header id="header" class="header">
        <div class="header-container">
            <div class="header-top">
                <section class="header-block">

                    <div class="header-logo">
                        <a href="<?= site_url() ?>" class="header-logo-text"><span class="header-logo-text__qwerty">qwerty</span> <span>|</span> soft</a>
                    </div>
                    <div class="header__menu menu">
                        <button id="burger" type="button" class="menu__icon icon-menu" aria-label="Menu trigger"><span></span></button>
                        <nav class="menu__body">
                            <ul class="menu__list">
                                <?php foreach (get_field('header_menu', 'option') as $menu_item) { ?>
                                    <li class="menu__item">
                                        <a href="<?= strpos($menu_item['link'], '#') === 0 ? get_home_url() . '/' . $menu_item['link'] : $menu_item['link']; ?>" class="menu__link"><?= $menu_item['label']; ?></a>

                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <button id="sb_header" class="header-button"><?= get_field('header_button_label', 'option'); ?></button>

                </section>

                <section class="header-block-fixed">
                    <div class="header-logo header-logo-link">
                        <div class="header-logo-text"><span class="header-logo-text__qwerty">qwerty</span> <span>|</span> soft</div>
                    </div>
                    <div class="header__menu menu">
                        <button type="button" class="menu__icon icon-menu" aria-label="Menu trigger"><span></span></button>
                        <nav class="menu__body">
                            <ul class="menu__list">
                                <?php foreach (get_field('header_menu', 'option') as $menu_item) { ?>
                                    <li class="menu__item">
                                        <a href="<?= strpos($menu_item['link'], '#') === 0 ? get_home_url() . '/' . $menu_item['link'] : $menu_item['link']; ?>" class="menu__link"><?= $menu_item['label']; ?></a>

                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <button id="sb_header_sticky" class="header-button"><?= get_field('header_button_label', 'option'); ?></button>
                </section>
            </div>
        </div>
    </header>