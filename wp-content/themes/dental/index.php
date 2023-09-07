<?php
get_header();
?>

<!-- Page -->
<main class="page-all">
    <!-- Главный экран -->
    <section class="main-section">
        <div class="container main-section__container">

            <div id="loader">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/ajax-loader.gif" alt="Loading..." />
            </div>

            <div class="main-section__slick-slider" id="slickSlider">

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://t.me/zubkivsem" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt="" loading="lazy"></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt="" loading="lazy"></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt="" loading="lazy"></a>
                        </div>

                        <div class="main-section__content">
                            <h1 class="main-section__title"> <?php the_field('title_slide-1'); ?> </h1>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-1'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="<?php the_field('btn_slide-1'); ?>" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-1'); ?>" alt="" loading="lazy">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://t.me/zubkivsem" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt="" loading="lazy"></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt="" loading="lazy"></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt="" loading="lazy"></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-2'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-2'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="<?php the_field('btn_slide-2'); ?>" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-2'); ?>" alt="" loading="lazy">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://t.me/zubkivsem" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt="" loading="lazy"></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt="" loading="lazy"></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt="" loading="lazy"></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-3'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-3'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="<?php the_field('btn_slide-3'); ?>" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-3'); ?>" alt="" loading="lazy">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://t.me/zubkivsem" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt="" loading="lazy"></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt="" loading="lazy"></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt="" loading="lazy"></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-4'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-4'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="<?php the_field('btn_slide-4'); ?>" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-4'); ?>" alt="" loading="lazy">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://t.me/zubkivsem" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt="" loading="lazy"></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt="" loading="lazy"></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt="" loading="lazy"></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-5'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-5'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="<?php the_field('btn_slide-5'); ?>" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-5'); ?>" alt="" loading="lazy">

                    </div>
                </div>
            </div>

            <div class="main-section__absolut-btn">
                <div class="main-section__btn-calc">
                    <button class="btn-calc" data-modal="botModal">
                        <div class="btn-calc__img"></div>
                        <div class="btn-calc__text">Рассчитать <br> предварительную стоимость <br> за
                            <span>1
                                мин</span>
                        </div>
                    </button>
                </div>

                <div class="main-section__btn-call">
                    <button class="btn-call" data-modal="mainModal">
                        <div class="btn-call__img"></div>
                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Наши Преимущества -->
    <section class="second-section">
        <div class="container second-section__container">
            <div class="second-section__name">
                <div class="second-section__subtitle subtitle"><?php the_field('advantages_podzagolovok'); ?></div>
                <div class="second-section__title title"><?php the_field('advantages_zagolovok'); ?></div>
            </div>

            <?php
            get_template_part('widget-preimushchestva');
            ?>

        </div>
    </section>

    <!-- О нашей клинике -->
    <section class="about-section">
        <div class="container about-section__container">
            <div class="about-section__column">
                <div class="about-section__subtitle subtitle"><?php the_field('home-about_podzagolovok') ?></div>
                <div class="about-section__title title"><?php the_field('home-about_zagolovok') ?></div>
                <div class="about-section__description description"><?php the_field('home-about_text') ?>
                </div>
                <div class="about-section__list list">
                    <ul>
                        <?php while (have_rows('home-about_list')) : the_row(); ?>
                            <li><?php the_sub_field('element_spiska') ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>

                <div id="textHiddenHome" class="text-hiddenHome">
                    <p><?php the_field('home-about_text-scryt') ?></p>
                </div>

                <button id="textHiddenBtnHome" class="btn">Подробнее</button>
            </div>

            <div class="about-section__column">

                <div class="about-section__image">
                    <div class="about-section__decor-red decor-red"></div>
                    <img src="<?php the_field('home-about_img') ?>" alt="" loading="lazy">
                    <div class="about-section__decor-yellow decor-yellow"></div>
                </div>


            </div>


            <div class="about-section__form">
                <div class="feedback-form">
                    <div class="feedback-form__title">
                        Записаться на консультацию
                    </div>
                    <div class="feedback-form__form">

                        <form action="#" class="form-about" id="form-1">

                            <input type="hidden" name="form_name" value="Общая на Главной странице">

                            <div class="form-about__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-about__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-about__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-about__item">
                                <div class="checkbox">
                                    <input id="checkbox" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkbox" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-about__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Наши Услуги -->
    <section class="services-section">
        <div class="container services-section__container">
            <div class="services-section__name">
                <div class="services-section__subtitle subtitle"><?php the_field('home-service_podzagolovok') ?></div>
                <div class="services-section__title title"><?php the_field('home-service_zagolovok') ?></div>
            </div>
            <div class="services-section__tabs">

                <div class="services-section__decor">
                    <div class="services-sectionn__decor-yellow decor-yellow decor-yellow_0deg"></div>
                    <div class="services-section__decor-lilac decor-lilac"></div>
                </div>

                <div class="tabs">

                    <div class="tabs__content">
                        <div class="tabs__item" id="tab_1">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-01.jpg" alt="" loading="lazy">
                            <div class="tabs__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>

                            <div class="tabs__list">
                                <ul>
                                    <li><a href="/uslugi/?a=1_2#1_2" class="tabs__link">Ортопантомография (ОПТГ)</a></li>
                                    <li><a href="/uslugi/?a=1_3#1_3" class="tabs__link">Прицельный снимок</a></li>
                                    <li><a href="/uslugi/?a=1_4#1_4" class="tabs__link">Аксиография</a></li>
                                    <li><a href="/uslugi/?a=1_5#1_5" class="tabs__link">Компьютерная томография (КТ)</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="tabs__item" id="tab_2">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-02.jpg" alt="" loading="lazy">

                            <div class="tabs__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>

                            <div class="tabs__list">
                                <div class="tabs__list-wrapper">
                                    <ul>
                                        <li><a href="/uslugi/?a=2_2#2_2" class="tabs__link">Съемное протезирование</a>
                                            <ul>
                                                <li><a href="/uslugi/?a=2_3#2_3" class="tabs__link-sub">Акриловые съемные протезы</a>
                                                </li>
                                                <li><a href="/uslugi/?a=2_4#2_4" class="tabs__link-sub">Бюгельные протезы</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tabs__list-wrapper">
                                    <ul>
                                        <li><a href="/uslugi/?a=2_5#2_5" class="tabs__link">Несъемное протезирование</a>
                                            <ul>
                                                <li><a href="/uslugi/?a=2_6#2_6" class="tabs__link-sub">Виниры</a></li>
                                                <li><a href="/uslugi/?a=2_7#2_7" class="tabs__link-sub">Коронки</a></li>
                                                <li><a href="/uslugi/?a=2_8#2_8" class="tabs__link-sub">Абатменты</a></li>
                                                <li><a href="/uslugi/?a=2_9#2_9" class="tabs__link-sub">Вкладки</a></li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tabs__item" id="tab_3">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-03.jpg" alt="" loading="lazy">

                            <div class="tabs__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>

                            <div class="tabs__list">
                                <ul>
                                    <li><a href="/uslugi/?a=3_2#3_2" class="tabs__link">Световые пломбы</a></li>
                                    <li><a href="/uslugi/?a=3_3#3_3" class="tabs__link">Лечение зубных каналов</a></li>
                                    <li><a href="/uslugi/?a=3_4#3_4" class="tabs__link">Лечение кариеса</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs__item" id="tab_4">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-04.jpg" alt="" loading="lazy">
                            <div class="tabs__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>

                            <div class="tabs__list">
                                <div class="tabs__list-wrapper">
                                    <ul>
                                        <li><a href="/uslugi/?a=4_2#4_2" class="tabs__link">Удаление зубов</a>
                                            <ul>
                                                <li><a href="/uslugi/?a=4_3#4_3" class="tabs__link-sub">Простое удаление</a></li>
                                                <li><a href="/uslugi/?a=4_4#4_4" class="tabs__link-sub">Сложное удаление</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tabs__list-wrapper">
                                    <ul>
                                        <li><a href="/uslugi/?a=4_5#4_5" class="tabs__link">Имплантация</a>
                                            <ul>
                                                <li><a href="/uslugi/?a=4_6#4_6" class="tabs__link-sub">Одномоментная имплантация</a></li>
                                                <li><a href="/uslugi/?a=4_7#4_7" class="tabs__link-sub">Двухэтапная имплантация</a></li>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tabs__list-wrapper">
                                    <ul>
                                        <li><a href="/uslugi/?a=4_8#4_8" class="tabs__link">Синус-лифтинг</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tabs__item" id="tab_5">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-05.jpg" alt="" loading="lazy">

                            <div class="tabs__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>

                            <div class="tabs__list">
                                <ul>
                                    <li><a href="/uslugi/?a=5_2#5_2" class="tabs__link">Лечение брекетами</a></li>
                                    <li><a href="/uslugi/?a=5_3#5_3" class="tabs__link">Лечение ортодонтическими аппаратами</a></li>
                                    <li><a href="/uslugi/?a=5_4#5_4" class="tabs__link">Лечение элайнерами</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs__item" id="tab_6">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-06.jpg" alt="" loading="lazy">

                            <div class="tabs__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>

                            <div class="tabs__list">
                                <ul>
                                    <li><a href="/uslugi/?a=6_2#6_2" class="tabs__link">Профессиональная чистка AirFlow</a></li>
                                    <li><a href="/uslugi/?a=6_3#6_3" class="tabs__link">Отбеливание ZOOM</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs__item" id="tab_7">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="" loading="lazy">

                            <div class="tabs__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tabs__nav">

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_1" onclick="window.location.href = '/uslugi/?a=1_1#1_1';">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Диагностика</div>
                                <div class="tabs__nav-subtitle">Предварительная консультация, выявление проблемы
                                </div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_yellow"></div>
                                <div class="tabs__nav-number">01</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_2" onclick="window.location.href = '/uslugi/?a=2_1#2_1';">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Протезирование</div>
                                <div class="tabs__nav-subtitle">Съемное и несъемное протезтирование</div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_red"></div>
                                <div class="tabs__nav-number">02</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_3" onclick="window.location.href = '/uslugi/?a=3_1#3_1';">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Терапия</div>
                                <div class="tabs__nav-subtitle">Любые виды лечения зубов</div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_lilac"></div>
                                <div class="tabs__nav-number">03</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_4" onclick="window.location.href = '/uslugi/?a=4_1#4_1';">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Хирургия</div>
                                <div class="tabs__nav-subtitle">Любые хирургические операции</div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_yellow"></div>
                                <div class="tabs__nav-number">04</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_5" onclick="window.location.href = '/uslugi/?a=5_1#5_1';">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Ортодонтия</div>
                                <div class="tabs__nav-subtitle">Исправление прикуса</div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_blue"></div>
                                <div class="tabs__nav-number">05</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_6" onclick="window.location.href = '/uslugi/?a=6_1#6_1';">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Гигиена и отбеливание зубов</div>
                                <div class="tabs__nav-subtitle">Сохранить крепость и здоровье зубов</div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_red"></div>
                                <div class="tabs__nav-number">06</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_7" onclick="window.location.href = '/uslugi/?a=7_1#7_1';">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Гнатология</div>
                                <div class="tabs__nav-subtitle">Лечение элементов зубочелюстной системы</div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_lilac"></div>
                                <div class="tabs__nav-number">07</div>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="accordion-home-page">

                    <div class="accordion-home">
                        <div data-tab="home-tab-1" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Диагностика</div>
                                <div class="accordion-home__nav-subtitle">Предварительная консультация, выявление проблемы
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-01.jpg" alt="" loading="lazy">

                            <div class="accordion-home__btn-calc">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                            <a class="accordion-home__btn" href="/uslugi/">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-2" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Протезирование</div>
                                <div class="accordion-home__nav-subtitle">Съемное и несъемное протезтирование
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-2" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-02.jpg" alt="" loading="lazy">

                            <div class="accordion-home__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                            <a class="accordion-home__btn" href="/uslugi/">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-3" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Терапия</div>
                                <div class="accordion-home__nav-subtitle">Любые виды лечения зубов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-3" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-03.jpg" alt="" loading="lazy">

                            <div class="accordion-home__btn-calc">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                            <a class="accordion-home__btn" href="/uslugi/">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-4" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Хирургия</div>
                                <div class="accordion-home__nav-subtitle">Любые хирургические операции</div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-4" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-04.jpg" alt="" loading="lazy">

                            <div class="accordion-home__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                            <a class="accordion-home__btn" href="/uslugi/">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-5" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Ортодонтия</div>
                                <div class="accordion-home__nav-subtitle">Исправление прикуса</div>
                            </div>
                            <div class="accordion-home__strip strip strip_turquoise"></div>
                        </div>
                        <div id="home-tab-5" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-05.jpg" alt="" loading="lazy">

                            <div class="accordion-home__btn-calc">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                            <a class="accordion-home__btn" href="/uslugi/">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-6" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Гигиена и отбеливание зубов</div>
                                <div class="accordion-home__nav-subtitle">Сохранить крепость и здоровье зубов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-6" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-06.jpg" alt="" loading="lazy">

                            <div class="accordion-home__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                            <a class="accordion-home__btn" href="/uslugi/">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-7" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Гнатология</div>
                                <div class="accordion-home__nav-subtitle">Лечение элементов зубочелюстной системы</div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-7" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="" loading="lazy">

                            <div class="accordion-home__btn-calc">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                            <a class="accordion-home__btn" href="/uslugi/">Узнать больше</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Рейтинг независимых стоматологий -->
    <section class="rating-section">
        <div class="container rating-section__container">
            <div class="rating-section__name">
                <div class="rating-section__title title"><?php the_field('home-reviews_zagolovok') ?></div>
                <div class="rating-section__description description"><?php the_field('home-reviews_podzagolovok') ?></div>
            </div>

            <div class="rating-section__companies-rating companies-rating">
                <script src="https://res.smartwidgets.ru/app.js" defer></script>
                <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
            </div>
        </div>
    </section>

    <!-- Наши работы -->
    <section class="portfolio-section">
        <div class="container portfolio-section__container">
            <div class="portfolio-section__name">
                <div class="portfolio-section__subtitle subtitle"><?php the_field('home-portfolio_podzagolovok') ?></div>
                <div class="portfolio-section__title title"><?php the_field('home-portfolio_zagolovok') ?></div>
            </div>

            <div class="portfolio-section__wrapper">

                <div class="portfolio-section__column">

                    <?php
                    get_template_part('widget-before-after');
                    ?>

                    <div class="slider-arrows">
                        <button class="slider-arrows__left" id="introSliderPrev" type="button"></button>
                        <button class="slider-arrows__right" id="introSliderNext" type="button"></button>
                    </div>

                </div>

                <div class="portfolio-section__column">
                    <a href="/galereya/">Больше работ</a>
                    <div class="portfolio-section__decor-blue decor-blue"></div>

                </div>

                <div class="portfolio-section__column">
                    <div class="feedback-form-portfolio">
                        <div class="feedback-form-portfolio__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form-portfolio__form">

                            <form action="#" class="form-portfolio" id="form-2">

                                <input type="hidden" name="form_name" value="Общая на Главной странице">

                                <div class="form-portfolio__input">
                                    <input type="text" name="name" placeholder="Имя" class="input">
                                </div>
                                <div class="form-portfolio__input email-input">
                                    <input type="email" name="email" placeholder="Email" class="input">
                                </div>
                                <div class="form-portfolio__input phone-input">
                                    <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                                </div>

                                <div class="form-portfolio__textarea">
                                    <textarea name="texterea" placeholder="Задать вопрос"></textarea>
                                </div>

                                <div class="form-about__item">
                                    <div class="checkbox">
                                        <input id="checkbox-2" checked type="checkbox" name="agreement" class="checkbox__input">
                                        <label for="checkbox-2" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                    </div>
                                </div>

                                <div class="form-portfolio__submit">
                                    <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="portfolio-section__column">
                    <div class="portfolio-section__decor-red decor-red"></div>
                    <div class="portfolio-section__decor-blue decor-blue"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Наши специалисты -->
    <section class="specialists-section">
        <div class="container specialists-section__container">
            <div class="specialists-section__name">
                <div class="specialists-section__subtitle subtitle"><?php the_field('home-spec_podzagolovok') ?></div>
                <div class="specialists-section__title title"><?php the_field('home-spec_zagolovok') ?></div>
            </div>

            <div class="specialists-section__carousel carousel" id="slickCarousel">

                <?php while (have_rows('carousel_doktor', 'option')) : the_row(); ?>

                    <div class="carousel__wrapper">
                        <div class="carousel__photo">
                            <img src="<?php the_sub_field('foto') ?>" alt="" loading="lazy">
                            <div class="carousel__label <?php the_sub_field('czvet') ?>" alt="" loading="lazy">
                                <p>Опыт</p> <span><?php the_sub_field('stazh') ?></span>
                            </div>
                        </div>
                        <div class="carousel__name"><?php the_sub_field('fio') ?></div>
                        <div class="carousel__text"><?php the_sub_field('dolzhnost') ?></div>
                        <button class="btn btn_entry" data-modal="<?php the_sub_field('modal') ?>">Записаться</button>
                    </div>

                <?php endwhile; ?>

            </div>

            <div class="slider-arrows">
                <button class="slider-arrows__left" id="slickCarouselPrev" type="button"></button>
                <button class="slider-arrows__right" id="slickCarouselNext" type="button"></button>
            </div>

            <div class="specialists-section__buttons">
                <a href="/vrachi/" class="btn">Все специалисты</a>
                <div class="specialists-section__decor-red decor-red"></div>
            </div>

        </div>
    </section>

    <!-- Наша лаборатория -->
    <section class="laboratory-section">
        <div class="container laboratory-section__container">
            <div class="laboratory-section__column">
                <div class="laboratory-section__subtitle subtitle"><?php the_field('home-lab_podzagolovok') ?></div>
                <div class="laboratory-section__title title"><?php the_field('home-lab_zagolovok') ?></div>
                <div class="laboratory-section__description description"><?php the_field('home-lab_text') ?>
                </div>
                <div class="laboratory-section__list list">
                    <ul>

                        <?php while (have_rows('home-lab_list')) : the_row(); ?>
                            <li><?php the_sub_field('element_spiska') ?></li>
                        <?php endwhile; ?>

                    </ul>
                </div>
            </div>

            <div class="laboratory-section__column">
                <div class="laboratory-section__image">
                    <div class="laboratory-section__decor-red decor-red"></div>
                    <img src="<?php the_field('home-lab_img') ?>" alt="" loading="lazy">                                  
                    <div class="laboratory-section__decor-yellow decor-yellow"></div>

                </div>
                <div class="laboratory-section__decor-yellow-lab decor-yellow decor-yellow_90deg"></div>
            </div>

            <div class="laboratory-section__form">
                <div class="feedback-form-laboratory">
                    <div class="feedback-form-laboratory__title">
                        Записаться на консультацию
                    </div>
                    <div class="feedback-form-laboratory__form">

                        <form action="#" class="form-laboratory" id="form-3">

                            <input type="hidden" name="form_name" value="Общая на Главной странице">

                            <div class="form-laboratory__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-laboratory__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-laboratory__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-about__item">
                                <div class="checkbox">
                                    <input id="checkbox-3" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkbox-3" class="checkbox__label checkbox__label_white"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-laboratory__submit">
                                <input class="btn btn_submit btn_white" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="laboratory-section__decor-footer"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bg/footer.svg" alt="" loading="lazy"></div>
        </div>
    </section>
</main>

<?php
get_footer();
?>