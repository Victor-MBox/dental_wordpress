<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title><?php bloginfo('name');
            echo " | ";
            bloginfo('description'); ?></title>

    <?php
    wp_head();

    ?>


</head>

<body>

    <!-- Header -->
    <header class="header">
    <div class="main-overlay" id="mainOverlay" onclick="removeClasses()"></div>
        <!-- Бургер -->
        <div class="header__burger">

            <div class="burger" onclick="changeClass(this)">
                <div class="burger__wrapper">
                    <div class="burger__item"></div>
                    <div class="burger__item"></div>
                    <div class="burger__item"></div>
                </div>
            </div>

            <div class="burger-nav" id="burgerNav">
                <div class="burger-nav__logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/main-logo.svg" alt="">
                </div>
                <div class="burger-nav__menu">

                    <div class="teeest">

                    </div>

                </div>
            </div>

        </div>

        <div class="container header__container">
            <div class="header__logo">
                <?php the_custom_logo(); ?>
            </div>

            <nav class="header__nav nav">

                <?php

                wp_nav_menu([
                    'menu'            => 'Main',
                    'container'       => false,
                    'menu_class'      => 'nav',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="nav">%3$s</ul>',
                    'depth'           => 1,
                ]);

                ?>

            </nav>

            <div class="header__wrapper">

                <div class="header__btn-search">
                    <button class="btn-search"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/search.svg" alt=""></button>
                </div>

                <div class="header__btn-tel">
                    <a class="btn-tel" href="tel:<?php the_field('header_phone', 2); ?>">
                        <div class="btn-tel__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-tel.svg" alt=""></div>
                        <?php the_field('header_phone', 2); ?>
                    </a>
                </div>
                <div class="header__btn">
                    <button class="btn">Заказать звонок</button>
                </div>
            </div>

        </div>

    </header>