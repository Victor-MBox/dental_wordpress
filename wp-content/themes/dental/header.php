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


<!-- Скрипт переадресации меджу табами тк и ссылками моб -->
    <script>
        console.log(document.location.pathname);
        console.log(window.screen.width);
        if (window.screen.width > 769) {

            if (document.location.pathname == '/vrachi/borisenko-inna-vladimirovna/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=1_1#1_1';
            }
            if (document.location.pathname == '/vrachi/zejnalov-zejnal-vilayaddinovich/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=1_2#1_2';
            }
            if (document.location.pathname == '/vrachi/sarybaev-anarbek-muktarbekovich/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=1_3#1_3';
            }
            if (document.location.pathname == '/vrachi/antonovskij-anton-anatolevich/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=2_1#2_1';
            }
            if (document.location.pathname == '/vrachi/igonin-vasilij-valentinovich/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=2_2#2_2';
            }
            if (document.location.pathname == '/vrachi/handogin-anton-olegovich/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=2_3#2_3';
            }
            if (document.location.pathname == '/vrachi/zhurov-ilya-vladimirovich/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=3_1#3_1';
            }
            if (document.location.pathname == '/vrachi/dzhahbarova-rabiyat-magomedgadzhievna/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=4_1#4_1';
            }
            if (document.location.pathname == '/vrachi/bajkulova-asiyat-hamitovna/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=4_2#4_2';
            }
            if (document.location.pathname == '/vrachi/bachulis-marina-aleksandrovna/') {
                location.href = 'https://dental.cg-test.ru/vrachi/?a=5_1#5_1';
            }
        }

        if (window.screen.width < 768) {

            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=1_1#1_1') {
                location.href = 'https://dental.cg-test.ru/vrachi/borisenko-inna-vladimirovna/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=1_2#1_2') {
                location.href = 'https://dental.cg-test.ru/vrachi/zejnalov-zejnal-vilayaddinovich/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=1_3#1_3') {
                location.href = 'https://dental.cg-test.ru/vrachi/sarybaev-anarbek-muktarbekovich/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=2_1#2_1') {
                location.href = 'https://dental.cg-test.ru/vrachi/antonovskij-anton-anatolevich/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=2_2#2_2') {
                location.href = 'https://dental.cg-test.ru/vrachi/igonin-vasilij-valentinovich/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=2_3#2_3') {
                location.href = 'https://dental.cg-test.ru/vrachi/handogin-anton-olegovich/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=3_1#3_1') {
                location.href = 'https://dental.cg-test.ru/vrachi/zhurov-ilya-vladimirovich/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=4_1#4_1') {
                location.href = 'https://dental.cg-test.ru/vrachi/dzhahbarova-rabiyat-magomedgadzhievna/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=4_2#4_2') {
                location.href = 'https://dental.cg-test.ru/vrachi/bajkulova-asiyat-hamitovna/';
            }
            if (document.location.href == 'https://dental.cg-test.ru/vrachi/?a=5_1#5_1') {
                location.href = 'https://dental.cg-test.ru/vrachi/bachulis-marina-aleksandrovna/';
            }
            
        }
    </script>
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
                                <a href="/o-klinike/">О клинике</a>
                                <span></span>
                            </div>

                            <div id="tab-1" class="accordion__content">

                                <a href="/o-klinike/">Лечение в рассрочку</a>

                                <a href="/o-klinike/">Налоговый вычет</a>

                                <a href="/o-klinike/">Гарантии на услуги</a>

                                <a href="/o-klinike/">Наша лаборатория</a>

                                <a href="/voprosy/">Вопросы пациентов</a>

                                <a href="/o-klinike/">Статьи</a>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-2" class="accordion__title">
                                <a href="/uslugi/">Услуги</a>
                                <span></span>
                            </div>


                            <div id="tab-2" class="accordion__content">

                                <div class="sub-accordion">

                                    <div data-tab="sub-tab-2-1" class="sub-accordion__title">
                                        <a href="#">Диагностика</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-1" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-1" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Ортопантомография (ОПТГ)</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-2" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Прицельный снимок</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-3" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Аксиография</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-1-4" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Компьютерная томография (КТ)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-2" class="sub-accordion__title">
                                        <a href="/uslugi/">Протезирование</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-2" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-2-1" class="sub-2-accordion__title">
                                                <a href="#">Съемное протезирование</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-2-1" class="sub-2-accordion__content">
                                                <a href="/uslugi/">Акриловые съемные протезы</a>
                                                <a href="/uslugi/">Бюгельные протезы</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-2-2" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Несъемное протезирование</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-2-2" class="sub-2-accordion__content">
                                                <a href="/uslugi/">Виниры</a>
                                                <a href="/uslugi/">Коронки</a>
                                                <a href="/uslugi/">Абатменты</a>
                                                <a href="/uslugi/">Вкладки</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-3" class="sub-accordion__title">
                                        <a href="/uslugi/">Терапия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-3" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-3-1" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Световые пломбы</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-3-2" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Лечение зубных каналов</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-3-3" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Лечение кариеса</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-4" class="sub-accordion__title">
                                        <a href="/uslugi/">Хирургия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-4" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-4-1" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Удаление зубов</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-4-1" class="sub-2-accordion__content">
                                                <a href="/uslugi/">Простое удаление</a>
                                                <a href="/uslugi/">Сложное удаление</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-4-2" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Имплантация</a>
                                                <span></span>
                                            </div>
                                            <div id="sub-2-tab-2-4-2" class="sub-2-accordion__content">
                                                <a href="/uslugi/">Одномоментная имплантация</a>
                                                <a href="/uslugi/">Двухэтапная имплантация</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-4-3" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Синус-лифтинг</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-5" class="sub-accordion__title">
                                        <a href="/uslugi/">Ортодонтия</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-5" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-5-1" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Лечение брекетами</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-5-2" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Лечение ортодонтическими аппаратами</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-5-3" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Лечение элайнерами</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-6" class="sub-accordion__title">
                                        <a href="/uslugi/">Гигиена и отбеливание зубов</a>
                                        <span></span>
                                    </div>
                                    <div id="sub-tab-2-6" class="sub-accordion__content">

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-6-1" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Профессиональная чистка AirFlow</a>
                                            </div>
                                        </div>

                                        <div class="sub-2-accordion">
                                            <div data-tab="sub-2-tab-2-6-2" class="sub-2-accordion__title">
                                                <a href="/uslugi/">Отбеливание ZOOM</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="sub-accordion">
                                    <div data-tab="sub-tab-2-7" class="sub-accordion__title">
                                        <a href="/uslugi/">Гнатология</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-3" class="accordion__title">
                                <a href="/vrachi/">Врачи</a>
                                <span></span>
                            </div>


                            <div id="tab-3" class="accordion__content">

                                <a href="/vrachi/borisenko-inna-vladimirovna/">Борисенко Инна Владимировна</a>

                                <a href="/vrachi/zejnalov-zejnal-vilayaddinovich/">Зейналов Зейнал Вилаяддинович</a>

                                <a href="/vrachi/sarybaev-anarbek-muktarbekovich/">Сарыбаев Анарбек Муктарбекович</a>

                                <a href="/vrachi/antonovskij-anton-anatolevich/">Антоновский Антон Анатольевич</a>

                                <a href="/vrachi/igonin-vasilij-valentinovich/">Игонин Василий Валентинович</a>

                                <a href="/vrachi/handogin-anton-olegovich/">Хандогин Антон Олегович</a>

                                <a href="/vrachi/zhurov-ilya-vladimirovich/">Журов Илья Владимирович</a>

                                <a href="/vrachi/dzhahbarova-rabiyat-magomedgadzhievna/">Джахбарова Рабият Магомедгаджиевна</a>

                                <a href="/vrachi/bajkulova-asiyat-hamitovna/">Байкулова Асият Хамитовна</a>

                                <a href="/vrachi/bachulis-marina-aleksandrovna/">Бачулис Марина Александровна</a>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-4" class="accordion__title">
                                <a href="/czeny/">Цены</a>
                                <span></span>
                            </div>


                            <div id="tab-4" class="accordion__content">

                                <a href="/czeny/">Диагностика</a>

                                <a href="/czeny/">Протезирование</a>

                                <a href="/czeny/">Терапия</a>

                                <a href="/czeny/">Хирургия</a>

                                <a href="/czeny/">Ортодонтия</a>

                                <a href="/czeny/">Гигиена и отбеливание зубов</a>

                                <a href="/czeny/">Гнатология</a>


                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-5" class="accordion__title">
                                <a href="/akczii/">Акции</a>
                                <span></span>
                            </div>


                            <div id="tab-5" class="accordion__content">

                                <a href="/akczii/#stock-01">При установке 5 виниров – подарок!</a>

                                <a href="/akczii/#stock-02">Профессиональное отбеливание зубов</a>

                                <a href="/akczii/#stock-03">Дарим скидку на терапевтическое лечение</a>

                                <a href="/akczii/#stock-04">Коронка из самого прочного материала</a>

                                <a href="/akczii/#stock-05">Каждый второй имплант со скидкой 50%</a>

                                <a href="/akczii/#stock-06">Имплантация All-on-4 на одну челюсть</a>

                                <a href="/akczii/#stock-07">Съемные протезы от 15000₽</a>

                                <a href="/akczii/#stock-08">Подарок именинникам - скидка 10%</a>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-6" class="accordion__title">
                                <a href="/otzyvy/">Отзывы</a>
                                <span></span>
                            </div>

                            <div id="tab-6" class="accordion__content">

                                <a href="/otzyvy/">Диагностика</a>

                                <a href="/otzyvy/">Протезирование</a>

                                <a href="/otzyvy/">Терапия</a>

                                <a href="/otzyvy/">Хирургия</a>

                                <a href="/otzyvy/">Ортодонтия</a>

                                <a href="/otzyvy/">Гигиена и отбеливание зубов</a>

                                <a href="/otzyvy/">Гнатология</a>

                            </div>
                        </div>

                        <div class="accordion">
                            <div data-tab="tab-7" class="accordion__title">
                                <a href="/galereya/">Галерея</a>
                                <span></span>
                            </div>

                            <div id="tab-7" class="accordion__content">

                                <a href="/galereya/">Диагностика</a>

                                <a href="/galereya/">Протезирование</a>

                                <a href="/galereya/">Терапия</a>

                                <a href="/galereya/">Хирургия</a>

                                <a href="/galereya/">Ортодонтия</a>

                                <a href="/galereya/">Гигиена и отбеливание зубов</a>

                                <a href="/galereya/">Гнатология</a>

                            </div>
                        </div>


                        <div class="accordion">
                            <div data-tab="tab-8" class="accordion__title">
                                <a href="/kontakty/">Контакты</a>
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
                        <a href="https://telegram.im/@zubkivsem1"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon-w.svg" alt=""></a>
                        <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0."><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon-w.svg" alt=""></a>
                        <a href="viber://chat?number=%2B79858883749"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber-w.svg" alt=""></a>
                    </div>

                </div>
            </div>

        </div>

        <div class="container header__container">
            <div class="header__logo">
                <?php the_custom_logo(); ?>
            </div>

            <nav class="header__nav nav">

                <ul class="nav__list">
                    <li>
                        <a class="nav__link" href="/o-klinike/">О клинике</a>
                        <ul class="sub-nav__list">
                            <li>
                                <a class="sub-nav__link" href="#">Лечение в рассрочку</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Налоговый вычет</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гарантии на услуги</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Наша лаборатория</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/voprosy/">Вопросы пациентов</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Статьи</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="nav__link" href="/uslugi/">Услуги</a>
                        <ul class="sub-nav__list">
                            <li>
                                <a class="sub-nav__link" href="#">Диагностика</a>
                                <ul class="sub-sub-nav__list">
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Ортопантомография (ОПТГ)</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Прицельный снимок</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Аксиография</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Компьютерная томография (КТ)</a>
                                    </li>
                                    <div class="sub-sub-nav__btn">
                                        <a class="btn btn_white">Все услуги</a>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Протезирование</a>
                                <ul class="sub-sub-nav__list sub-sub-nav__list_column">
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Съемное протезирование</a>
                                        <ul class="sub-sub-sub-nav__list">
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Акриловые съемные протезы</a>
                                                <ul class="sub4-nav__list">
                                                    <li>
                                                        <a class="sub4-nav__link" href="#">• Полный съемный протез
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="sub4-nav__link" href="#">• Частично съемный протез</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Бюгельные протезы</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Несъемное протезирование</a>
                                        <ul class="sub-sub-sub-nav__list">
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Виниры</a>
                                            </li>
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Коронки</a>
                                            </li>
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Абатменты</a>
                                            </li>
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Вкладки</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <div class="sub-sub-nav__btn">
                                        <a class="btn btn_white">Все услуги</a>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Терапия</a>
                                <ul class="sub-sub-nav__list">
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Световые пломбы</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Лечение зубных каналов</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Лечение кариеса</a>
                                    </li>
                                    <div class="sub-sub-nav__btn">
                                        <a class="btn btn_white">Все услуги</a>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Хирургия</a>
                                <ul class="sub-sub-nav__list sub-sub-nav__list_column">
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Удаление зубов</a>
                                        <ul class="sub-sub-sub-nav__list">
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Простое удаление</a>
                                            </li>
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Сложное удаление</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Имплантация</a>
                                        <ul class="sub-sub-sub-nav__list">
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Одномоментная имплантация</a>
                                            </li>
                                            <li>
                                                <a class="sub-sub-sub-nav__link" href="#">Двухэтапная имплантация</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Синус-лифтинг</a>
                                    </li>
                                    <div class="sub-sub-nav__btn">
                                        <a class="btn btn_white">Все услуги</a>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Ортодонтия</a>
                                <ul class="sub-sub-nav__list">
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Лечение брекетами</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Лечение ортодонтическими аппаратами</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Лечение элайнерами</a>
                                    </li>
                                    <div class="sub-sub-nav__btn">
                                        <a class="btn btn_white">Все услуги</a>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гигиена и отбеливание</a>
                                <ul class="sub-sub-nav__list">
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Профессиональная чистка AirFlow</a>
                                    </li>
                                    <li>
                                        <a class="sub-sub-nav__link" href="#">Отбеливание ZOOM</a>
                                    </li>
                                    <div class="sub-sub-nav__btn">
                                        <a class="btn btn_white">Все услуги</a>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гнатология</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="nav__link" href="/vrachi/">Врачи</a>
                        <ul class="sub-nav__list sub-nav__list_name">

                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=1_1#1_1">Борисенко Инна Владимировна</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=1_2#1_2">Зейналов Зейнал Вилаяддинович</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=1_3#1_3">Сарыбаев Анарбек Муктарбекович</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=2_1#2_1">Антоновский Антон Анатольевич</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=2_2#2_2">Игонин Василий Валентинович</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=2_3#2_3">Хандогин Антон Олегович</a>
                            </li>

                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=3_1#3_1">Журов Илья Владимирович</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=4_1#4_1">Бачулис Марина Александровна</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=4_2#4_2">Джахбарова Рабият Магомедгаджиевна</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/vrachi/?a=5_1#5_1">Байкулова Асият Хамитовна</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a class="nav__link" href="/czeny/">Цены</a>
                        <ul class="sub-nav__list">
                            <li>
                                <a class="sub-nav__link" href="#">Диагностика</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Протезирование</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Терапия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Хирургия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Ортодонтия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гигиена и отбеливание</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гнатология</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="nav__link" href="/akczii/">Акции</a>
                        <ul class="sub-nav__list sub-nav__list_promotion">
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-01">При установке 5 виниров – подарок!</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-02">Профессиональное отбеливание зубов</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-03">Дарим скидку на терапевтическое лечение</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-04">Коронка из самого прочного материала</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-05">Каждый второй имплант со скидкой 50%</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-06">Имплантация All-on-4 на одну челюсть</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-07">Съемные протезы от 15000₽</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="/akczii/#stock-08">Подарок именинникам - скидка 10%</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="nav__link" href="/otzyvy/">Отзывы</a>
                        <ul class="sub-nav__list">
                            <li>
                                <a class="sub-nav__link" href="#">Диагностика</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Протезирование</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Терапия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Хирургия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Ортодонтия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гигиена и отбеливание</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гнатология</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="nav__link" href="/galereya/">Галерея</a>
                        <ul class="sub-nav__list">
                            <li>
                                <a class="sub-nav__link" href="#">Диагностика</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Протезирование</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Терапия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Хирургия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Ортодонтия</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гигиена и отбеливание</a>
                            </li>
                            <li>
                                <a class="sub-nav__link" href="#">Гнатология</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="nav__link" href="/kontakty/">Контакты</a>

                    </li>


                </ul>

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