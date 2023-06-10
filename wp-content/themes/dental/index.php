<?php
get_header();
?>

<!-- Page -->
<main class="page">
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
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/vk_icn.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h1 class="main-section__title"> <?php the_field('title_slide-1'); ?> </h1>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-1'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="#" class="btn">Узнать больше</a>
                            <button class="btn-play"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-1'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/vk_icn.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-2'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-2'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="#" class="btn">Узнать больше</a>
                            <button class="btn-play"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-2'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/vk_icn.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-3'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-3'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="#" class="btn">Узнать больше</a>
                            <button class="btn-play"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-3'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/vk_icn.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-4'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-4'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="#" class="btn">Узнать больше</a>
                            <button class="btn-play"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-4'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/vk_icn.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-5'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-5'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="#" class="btn">Узнать больше</a>
                            <button class="btn-play"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-5'); ?>" alt="">

                    </div>
                </div>
            </div>

            <div class="main-section__absolut-btn">
                <div class="main-section__btn-calc">
                    <a class="btn-calc" href="#">
                        <div class="btn-calc__img"></div>
                        <div class="btn-calc__text">Рассчитать <br> предварительную стоимость <br> за
                            <span>1
                                мин</span>
                        </div>
                    </a>
                </div>

                <div class="main-section__btn-call">
                    <a class="btn-call" href="#">
                        <div class="btn-call__img"></div>
                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Наши Преимущества -->
    <section class="second-section">
        <div class="container second-section__container">
            <div class="second-section__name">
                <div class="second-section__subtitle subtitle">Мы – больше чем обычная стоматология!</div>
                <div class="second-section__title title">Наши Преимущества</div>
            </div>
            <div class="second-section__item">
                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-1.svg" alt=""></div>
                    <div class="second-section__column-title">Своя <span>лаборатория</span></div>
                    <div class="second-section__column-text">У нас собственное производство, которое оснащено
                        современным оборудованием</div>
                </div>

                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-2.svg" alt=""></div>
                    <div class="second-section__column-title">Расширенная <span>гарантия</span></div>
                    <div class="second-section__column-text">Мы контролируем производство
                        и установку протезов, поэтому даем дополнительную гарантию</div>
                </div>

                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-3.svg" alt=""></div>
                    <div class="second-section__column-title">Фиксированная <span>цена</span></div>
                    <div class="second-section__column-text">В нашей клинике нет скрытых платежей и услуг. Все
                        просто и прозрачно</div>
                </div>

                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-4.svg" alt=""></div>
                    <div class="second-section__column-title">Опытные <span>врачи</span></div>
                    <div class="second-section__column-text">Мы тщательно выбираем стоматологов и контролируем их на
                        каждом этапе</div>
                </div>
            </div>
        </div>
    </section>

    <!-- О нашей клинике -->
    <section class="about-section">
        <div class="container about-section__container">
            <div class="about-section__column">
                <div class="about-section__subtitle subtitle">Мы – больше чем стоматология!</div>
                <div class="about-section__title title">О нашей клинике</div>
                <div class="about-section__description description">Первая программа доступной стоматологии под
                    контролем зуботехнической лаборатории. Мы объединили лучших врачей и зубных техников
                    <br>
                    <br>
                    Первая программа доступной стоматологии под контролем зуботехнической лаборатории. Мы объединили
                    лучших
                </div>
                <div class="about-section__list list">
                    <ul>
                        <li><a href="#">Какой-то важный факт/ страница перехода</a></li>
                        <li><a href="#">Какой-то важный факт / мб серт, лицзю smth else</a></li>
                    </ul>
                </div>
                <button class="btn">Узнать больше</button>
            </div>

            <div class="about-section__column">

                <div class="about-section__image">
                    <div class="about-section__decor-red decor-red"></div>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">
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
                                    <label for="checkbox" class="checkbox__label"><span>Согласие с обработкой персональных данных</span></label>
                                </div>
                            </div>
                            <div class="form-about__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше">
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
                <div class="services-section__subtitle subtitle">Мы – больше чем обычная стоматология!</div>
                <div class="services-section__title title">Наши услуги</div>
            </div>
            <div class="services-section__tabs">

                <div class="services-section__decor">
                    <div class="services-sectionn__decor-yellow decor-yellow decor-yellow_0deg"></div>
                    <div class="services-section__decor-lilac decor-lilac"></div>
                </div>

                <div class="tabs">

                    <div class="tabs__content">
                        <div class="tabs__item" id="tab_1">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">
                            <div class="tabs__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="tabs__item" id="tab_2">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                            <div class="tabs__btn-call">
                                <a class="btn-call" href="#">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </a>
                            </div>
                        </div>

                        <div class="tabs__item" id="tab_3">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                            <div class="tabs__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="tabs__item" id="tab_4">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">
                            <div class="tabs__btn-call">
                                <a class="btn-call" href="#">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </a>
                            </div>

                        </div>

                        <div class="tabs__item" id="tab_5">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                            <div class="tabs__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="tabs__item" id="tab_6">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                            <div class="tabs__btn-call">
                                <a class="btn-call" href="#">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </a>
                            </div>
                        </div>

                        <div class="tabs__item" id="tab_7">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                            <div class="tabs__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tabs__nav">

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_1">
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

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_2">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Протезирование</div>
                                <div class="tabs__nav-subtitle">Съемное протезтирование
                                </div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_red"></div>
                                <div class="tabs__nav-number">02</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_3">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Имплантаця</div>
                                <div class="tabs__nav-subtitle">Импланты, коронки, мосты
                                </div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_lilac"></div>
                                <div class="tabs__nav-number">03</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_4">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Лечение зубов, терапия</div>
                                <div class="tabs__nav-subtitle">Любые виды лечения зубов
                                </div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_yellow"></div>
                                <div class="tabs__nav-number">04</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_5">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Хирургия</div>
                                <div class="tabs__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_blue"></div>
                                <div class="tabs__nav-number">05</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_6">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Ортодонтия</div>
                                <div class="tabs__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-decor tabs__nav-decor_red"></div>
                                <div class="tabs__nav-number">06</div>
                            </div>
                        </button>

                        <button class="tabs__nav-btn" type="button" data-tab="#tab_7">
                            <div class="tabs__nav-column">
                                <div class="tabs__nav-title">Гигиена</div>
                                <div class="tabs__nav-subtitle">Любые хирургические операции
                                </div>
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
                                <div class="accordion-home__nav-subtitle">Консультация, выявление проблемы
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                            <div class="accordion-home__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>
                            <a class="accordion-home__btn" href="#">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-2" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Протезирование</div>
                                <div class="accordion-home__nav-subtitle">Съемное протезтирование
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-2" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                            <div class="accordion-home__btn-call">
                                <a class="btn-call" href="#">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </a>
                            </div>
                            <a class="accordion-home__btn" href="#">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-3" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Имплантаця</div>
                                <div class="accordion-home__nav-subtitle">Импланты, коронки, мосты
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-3" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                            <div class="accordion-home__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>
                            <a class="accordion-home__btn" href="#">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-4" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Лечение зубов, терапия</div>
                                <div class="accordion-home__nav-subtitle">Любые виды лечения зубов
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-4" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                            <div class="accordion-home__btn-call">
                                <a class="btn-call" href="#">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </a>
                            </div>
                            <a class="accordion-home__btn" href="#">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-5" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Хирургия</div>
                                <div class="accordion-home__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_turquoise"></div>
                        </div>
                        <div id="home-tab-5" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                            <div class="accordion-home__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>
                            <a class="accordion-home__btn" href="#">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-6" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Ортодонтия</div>
                                <div class="accordion-home__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-6" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                            <div class="accordion-home__btn-call">
                                <a class="btn-call" href="#">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </a>
                            </div>
                            <a class="accordion-home__btn" href="#">Узнать больше</a>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-7" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Гигиена</div>
                                <div class="accordion-home__nav-subtitle">Любые виды лечения зубов
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-7" class="accordion-home__content">

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                            <div class="accordion-home__btn-calc">
                                <a class="btn-calc" href="#">
                                    <div class="btn-calc__img"></div>
                                    <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                        <span>1
                                            мин</span>
                                    </div>
                                </a>
                            </div>
                            <a class="accordion-home__btn" href="#">Узнать больше</a>
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
                <div class="rating-section__subtitle subtitle">Мы – больше чем стоматология!</div>
                <div class="rating-section__title title">Рейтинг независимых стоматологий</div>
            </div>

            <div class="rating-section__companies-rating companies-rating">
                <div class="companies-rating__column">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/rating-yandex.png" alt="">
                    <div class="companies-rating__number">
                        4,5 <span>/5</span>
                    </div>
                </div>

                <div class="companies-rating__column">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/rating-prodoctorov.png" alt="">
                    <div class="companies-rating__number">
                        4,5 <span>/5</span>
                    </div>
                </div>

                <div class="companies-rating__column">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/rating-zoon.png" alt="">
                    <div class="companies-rating__number">
                        4,5 <span>/5</span>
                    </div>
                </div>

                <div class="companies-rating__column">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/rating-2gis.png" alt="">
                    <div class="companies-rating__number">
                        4,5 <span>/5</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Наши работы -->
    <section class="portfolio-section">
        <div class="container portfolio-section__container">
            <div class="portfolio-section__name">
                <div class="portfolio-section__subtitle subtitle">Мы – больше чем стоматология!</div>
                <div class="portfolio-section__title title">Наши работы</div>
            </div>

            <div class="portfolio-section__wrapper">

                <div class="portfolio-section__column">
                    <div class="portfolio-section__before-after" id="beforeAfterSlider">


                        <div class="before-after">
                            <span id="before" class="before__btn">ДО</span>
                            <span id="after" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-after.jpg" alt="" class="before-after__img">
                                <div class="before-after__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-before.jpg" alt="" class="before-after__img">
                                </div>
                            </div>
                            <div class="before-after__procedure procedure">
                                <div class="procedure__img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                </div>
                                <div class="procedure__subtitle">процедура</div>
                                <div class="procedure__title">Протезирование</div>
                                <div class="procedure__text">Были установлены 4 импланта.</div>
                                <div class="procedure__prise">Стоимость: <span>150 000 ₽</span></div>
                                <button class="btn btn_lilac">Больше работ</button>
                            </div>
                        </div>

                        <div class="before-after2">
                            <span id="before2" class="before__btn">ДО</span>
                            <span id="after2" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after2__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-before.jpg" alt="" class="before-after2__img">
                                <div class="before-after2__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-after.jpg" alt="" class="before-after2__img">
                                </div>
                            </div>
                            <div class="before-after2__procedure procedure">
                                <div class="procedure__img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                </div>
                                <div class="procedure__subtitle">процедура</div>
                                <div class="procedure__title">Имплантаця</div>
                                <div class="procedure__text">Были установлены 4 импланта.</div>
                                <div class="procedure__prise">Стоимость: <span>100 000 ₽</span></div>
                                <button class="btn btn_lilac">Больше работ</button>
                            </div>
                        </div>

                    </div>


                    <div class="before-after-arrows">
                        <button class="before-after-arrows__left" id="introSliderPrev" type="button"></button>
                        <button class="before-after-arrows__right" id="introSliderNext" type="button"></button>
                    </div>

                </div>

                <div class="portfolio-section__column">
                    <a href="#">Больше работ</a>
                    <div class="portfolio-section__decor-blue decor-blue"></div>

                </div>

                <div class="portfolio-section__column">
                    <div class="feedback-form-portfolio">
                        <div class="feedback-form-portfolio__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form-portfolio__form">

                            <form action="#" class="form-portfolio" id="form-2">
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
                                        <label for="checkbox-2" class="checkbox__label"><span>Согласие с обработкой персональных данных</span></label>
                                    </div>
                                </div>

                                <div class="form-portfolio__submit">
                                    <input class="btn btn_submit" type="submit" value="Узнать больше">
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
                <div class="specialists-section__subtitle subtitle">Мы – больше обычная чем стоматология!</div>
                <div class="specialists-section__title title">Наши специалисты</div>
            </div>

            <div class="specialists-section__carousel carousel" id="slickCarousel">

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                        <div class="carousel__label">
                            <p>Опыт</p> <span>15 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name">Мария <span>Петрова</span></div>
                    <div class="carousel__text">Мария специализиурется на гигиене и протезировании. Имеет большой
                        опыт работы в лучших клиниках мира.</div>
                    <button class="btn btn_entry">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                        <div class="carousel__label carousel__label_red">
                            <p>Опыт</p> <span>15 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name">Мария <span>Петрова</span></div>
                    <div class="carousel__text">Мария специализиурется на гигиене и протезировании. Имеет большой
                        опыт работы в лучших клиниках мира.</div>
                    <button class="btn btn_entry">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img2.jpg" alt="">
                        <div class="carousel__label carousel__label_lilac">
                            <p>Опыт</p> <span>15 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name">Мария <span>Петрова</span></div>
                    <div class="carousel__text">Мария специализиурется на гигиене и протезировании. Имеет большой
                        опыт работы в лучших клиниках мира.</div>
                    <button class="btn btn_entry">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                        <div class="carousel__label carousel__label_yellow">
                            <p>Опыт</p> <span>15 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name">Мария <span>Петрова</span></div>
                    <div class="carousel__text">Мария специализиурется на гигиене и протезировании. Имеет большой
                        опыт работы в лучших клиниках мира.</div>
                    <button class="btn btn_entry">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                        <div class="carousel__label">
                            <p>Опыт</p> <span>15 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name">Мария <span>Петрова</span></div>
                    <div class="carousel__text">Мария специализиурется на гигиене и протезировании. Имеет большой
                        опыт работы в лучших клиниках мира.</div>
                    <button class="btn btn_entry">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                        <div class="carousel__label carousel__label_red">
                            <p>Опыт</p> <span>15 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name">Мария <span>Петрова</span></div>
                    <div class="carousel__text">Мария специализиурется на гигиене и протезировании. Имеет большой
                        опыт работы в лучших клиниках мира.</div>
                    <button class="btn btn_entry">Записаться</button>
                </div>

            </div>

            <div class="specialists-section__buttons">
                <a href="#" class="btn">Все спеиалисты</a>
                <div class="specialists-section__decor-red decor-red"></div>
            </div>

        </div>
    </section>


    <!-- Наша лаборатория -->
    <section class="laboratory-section">
        <div class="container laboratory-section__container">
            <div class="laboratory-section__column">
                <div class="laboratory-section__subtitle subtitle">Мы – больше чем стоматология!</div>
                <div class="laboratory-section__title title">Наша лаборатория</div>
                <div class="laboratory-section__description description">Первая программа доступной стоматологии под
                    контролем зуботехнической лаборатории. Мы объединили лучших врачей и зубных техников
                    <br>
                    <br>
                    Первая программа доступной стоматологии под контролем зуботехнической лаборатории. Мы объединили
                    лучших
                </div>
                <div class="laboratory-section__list list">
                    <ul>
                        <li><a href="#">Какой-то важный факт/ страница перехода</a></li>
                        <li><a href="#">Какой-то важный факт / мб серт, лицзю smth else</a></li>
                    </ul>
                </div>
                <button class="btn">Узнать больше</button>
            </div>

            <div class="laboratory-section__column">
                <div class="laboratory-section__image">
                    <div class="laboratory-section__decor-red decor-red"></div>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">
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
                                    <label for="checkbox-3" class="checkbox__label"><span>Согласие с обработкой персональных данных</span></label>
                                </div>
                            </div>
                            <div class="form-laboratory__submit">
                                <input class="btn btn_submit btn_white" type="submit" value="Узнать больше">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="laboratory-section__decor-footer"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bg/footer.svg" alt=""></div>
        </div>
    </section>
</main>

<?php
get_footer();
?>