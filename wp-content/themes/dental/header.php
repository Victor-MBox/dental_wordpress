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
                <div class="burger-nav__menu menu">


                    <div class="menu__wrapper">

                        <div class="accordion">
                            <div data-tab="tab-1" class="accordion__title">
                                <a href="/Dental/o-klinike/">О клинике</a>
                                <span></span>
                            </div>

                            <div id="tab-1" class="accordion__content">

                                <a href="/Dental/o-klinike/">Зуботехническая лаборатория</a>

                                <a href="/Dental/o-klinike/">О лаборатории</a>

                                <a href="/Dental/o-klinike/">Наше оборудование</a>

                                <a href="/Dental/o-klinike/">Технологии</a>

                                <a href="/Dental/o-klinike/">Этапы изготовления протеза</a>

                                <a href="/Dental/o-klinike/">Почему важно?</a>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-2" class="accordion__title">
                                <a href="/Dental/uslugi/">Услуги</a>
                                <span></span>
                            </div>


                            <div id="tab-2" class="accordion__content">

                                <div class="sub-accordion">

                                    <div data-tab="sub-tab-2-1" class="sub-accordion__title">
                                        <a href="#">Консультация и диагностика</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-1" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-1" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Ортопантомография (ОПТГ)</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-1-1" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-2" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Прицельный снимок</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-1-2" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-3" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Аксиография</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-1-3" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-4" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Компьютерная томография (КТ)</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-1-4" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-2" class="sub-accordion__title">
                                        <a href="/Dental/uslugi/">Протезирование</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-2" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-2-1" class="sub-2-accordion__title">
                                                <a href="#">Услуга 1</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-2-1" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-2-2" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 2</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-2-2" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-2-3" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 3</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-2-3" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-2-4" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 4</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-2-4" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-3" class="sub-accordion__title">
                                        <a href="/Dental/uslugi/">Имплантаця</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-3" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-3-1" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 1</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-3-1" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-3-2" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 2</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-3-2" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-3-3" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 3</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-3-3" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-3-4" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 4</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-3-4" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-4" class="sub-accordion__title">
                                        <a href="/Dental/uslugi/">Лечение зубов, терапия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-4" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-4-1" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 1</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-4-1" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-4-2" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 2</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-4-2" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-4-3" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 3</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-4-3" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-4-4" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 4</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-4-4" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-5" class="sub-accordion__title">
                                        <a href="/Dental/uslugi/">Хирургия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-5" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-5-1" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 1</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-5-1" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-5-2" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 2</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-5-2" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-5-3" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 3</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-5-3" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-5-4" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 4</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-5-4" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-6" class="sub-accordion__title">
                                        <a href="/Dental/uslugi/">Ортодонтия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-6" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-6-1" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 1</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-6-1" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-6-2" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 2</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-6-2" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-6-3" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 3</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-6-3" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-6-4" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 4</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-6-4" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-7" class="sub-accordion__title">
                                        <a href="/Dental/uslugi/">Гигиена</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-7" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-7-1" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 1</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-7-1" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-7-2" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 2</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-7-2" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-7-3" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 3</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-7-3" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-7-4" class="sub-2-accordion__title">
                                                <a href="/Dental/uslugi/">Услуга 4</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-7-4" class="sub-2-accordion__content">
                                                <a href="/Dental/uslugi/">Ссылка 1</a>
                                                <a href="/Dental/uslugi/">Ссылка 2</a>
                                                <a href="/Dental/uslugi/">Ссылка 3</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-3" class="accordion__title">
                                <a href="/Dental/vrachi/">Врачи</a>
                                <span></span>
                            </div>


                            <div id="tab-3" class="accordion__content">

                                <div class="sub-accordion">

                                    <div data-tab="sub-tab-3-1" class="sub-accordion__title">
                                        <a href="/Dental/vrachi/">Терапевты</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-3-1" class="sub-accordion__content">

                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>

                                    </div>
                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-3-2" class="sub-accordion__title">
                                        <a href="/Dental/vrachi/">Хирурги-имплантологи</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-3-2" class="sub-accordion__content">

                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-3-3" class="sub-accordion__title">
                                        <a href="/Dental/vrachi/">Ортопеды</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-3-3" class="sub-accordion__content">

                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-3-4" class="sub-accordion__title">
                                        <a href="/Dental/vrachi/">Пародонтологи</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-3-4" class="sub-accordion__content">

                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-3-5" class="sub-accordion__title">
                                        <a href="/Dental/vrachi/">Гигиенисты</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-3-5" class="sub-accordion__content">

                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-3-6" class="sub-accordion__title">
                                        <a href="/Dental/vrachi/">Ортодонты</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-3-6" class="sub-accordion__content">

                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-3-7" class="sub-accordion__title">
                                        <a href="/Dental/vrachi/">Анестезиологи</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-3-7" class="sub-accordion__content">

                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>
                                        <a href="/Dental/vrachi/">Имя Отчество Фамилия</a>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-4" class="accordion__title">
                                <a href="/Dental/czeny/">Цены</a>
                                <span></span>
                            </div>


                            <div id="tab-4" class="accordion__content">

                                <div class="sub-accordion">

                                    <div data-tab="sub-tab-4-1" class="sub-accordion__title">
                                        <a href="/Dental/czeny/">Консультация и диагностика</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-4-1" class="sub-accordion__content">

                                        <a href="/Dental/czeny/">Ортопантомография (ОПТГ)</a>

                                        <a href="/Dental/czeny/">Прицельный снимок</a>

                                        <a href="/Dental/czeny/">Аксиография</a>

                                        <a href="/Dental/czeny/">Компьютерная томография (КТ)</a>

                                    </div>
                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-4-2" class="sub-accordion__title">
                                        <a href="/Dental/czeny/">Протезирование</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-4-2" class="sub-accordion__content">

                                        <a href="/Dental/czeny/">Услуга 1</a>

                                        <a href="/Dental/czeny/">Услуга 2</a>

                                        <a href="/Dental/czeny/">Услуга 3</a>

                                        <a href="/Dental/czeny/">Услуга 4</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-4-3" class="sub-accordion__title">
                                        <a href="/Dental/czeny/">Имплантаця</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-4-3" class="sub-accordion__content">

                                        <a href="/Dental/czeny/">Услуга 1</a>

                                        <a href="/Dental/czeny/">Услуга 2</a>

                                        <a href="/Dental/czeny/">Услуга 3</a>

                                        <a href="/Dental/czeny/">Услуга 4</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-4-4" class="sub-accordion__title">
                                        <a href="#">Лечение зубов, терапия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-4-4" class="sub-accordion__content">

                                        <a href="/Dental/czeny/">Услуга 1</a>

                                        <a href="/Dental/czeny/">Услуга 2</a>

                                        <a href="/Dental/czeny/">Услуга 3</a>

                                        <a href="/Dental/czeny/">Услуга 4</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-4-5" class="sub-accordion__title">
                                        <a href="/Dental/czeny/">Хирургия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-4-5" class="sub-accordion__content">

                                        <a href="/Dental/czeny/">Услуга 1</a>

                                        <a href="/Dental/czeny/">Услуга 2</a>

                                        <a href="/Dental/czeny/">Услуга 3</a>

                                        <a href="/Dental/czeny/">Услуга 4</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-4-6" class="sub-accordion__title">
                                        <a href="/Dental/czeny/">Ортодонтия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-4-6" class="sub-accordion__content">

                                        <a href="/Dental/czeny/">Услуга 1</a>

                                        <a href="/Dental/czeny/">Услуга 2</a>

                                        <a href="/Dental/czeny/">Услуга 3</a>

                                        <a href="/Dental/czeny/">Услуга 4</a>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-4-7" class="sub-accordion__title">
                                        <a href="/Dental/czeny/">Гигиена</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-4-7" class="sub-accordion__content">

                                        <a href="/Dental/czeny/">Услуга 1</a>

                                        <a href="/Dental/czeny/">Услуга 2</a>

                                        <a href="/Dental/czeny/">Услуга 3</a>

                                        <a href="/Dental/czeny/">Услуга 4</a>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-5" class="accordion__title">
                                <a href="Dental/otzyvy/">Отзывы</a>
                                <span></span>
                            </div>

                            <div id="tab-5" class="accordion__content">

                                <a href="Dental/otzyvy/">Имплантация</a>

                                <a href="Dental/otzyvy/">Хирургия</a>

                                <a href="Dental/otzyvy/">Виниры</a>

                                <a href="Dental/otzyvy/">Ортодонтия</a>

                                <a href="Dental/otzyvy/">Гигиена и отбеливание зубов</a>

                                <a href="Dental/otzyvy/">Терапия</a>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-6" class="accordion__title">
                                <a href="/Dental/galereya/">Галерея</a>
                                <span></span>
                            </div>

                            <div id="tab-6" class="accordion__content">

                                <a href="/Dental/galereya/">Имплантация</a>

                                <a href="/Dental/galereya/">Хирургия</a>

                                <a href="/Dental/galereya/">Виниры</a>

                                <a href="/Dental/galereya/">Ортодонтия</a>

                                <a href="/Dental/galereya/">Гигиена и отбеливание зубов</a>

                                <a href="/Dental/galereya/">Терапия</a>

                            </div>
                        </div>


                        <div class="accordion">
                            <div data-tab="tab-7" class="accordion__title">
                                <a href="/Dental/kontakty/">Контакты</a>
                            </div>

                        </div>

                        <div class="accordion">
                            <div data-tab="tab-8" class="accordion__title">
                                <a href="/Dental/voprosy/">FAQ</a>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="burger-nav__btn">

                    <div class="burger-nav__btn-tel">
                        <a class="btn-tel btn-tel_burger" href="tel:<?php the_field('header_phone', 2); ?>">
                            <div class="btn-tel__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-tel.svg" alt=""></div>
                            <?php the_field('header_phone', 2); ?>
                        </a>
                    </div>

                    <div class="burger-nav__social social social_nav">
                        <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/vk_icn-w.svg" alt=""></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon-w.svg" alt=""></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon-w.svg" alt=""></a>
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

            <div class="header__btn-search_mob">
                <button class="btn-search btn-search_mob"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/search.svg" alt=""></button>
            </div>

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
                <div class="header__btn" data-modal="mainModal">
                    <button class="btn">Заказать звонок</button>
                </div>
            </div>

        </div>

    </header>