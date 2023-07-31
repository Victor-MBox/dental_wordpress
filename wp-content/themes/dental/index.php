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
                            <a href="https://telegram.im/@zubkivsem1" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h1 class="main-section__title"> <?php the_field('title_slide-1'); ?> </h1>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-1'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="/o-klinike/" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-1'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://telegram.im/@zubkivsem1" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-2'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-2'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="/uslugi/?a=2_6#2_6" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-2'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://telegram.im/@zubkivsem1" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-3'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-3'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="/uslugi/?a=4_5#4_5" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-3'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://telegram.im/@zubkivsem1" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-4'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-4'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="/uslugi/?a=6_3#6_3" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-4'); ?>" alt="">

                    </div>
                </div>

                <div class="main-section__slide">

                    <div class="main-section__column">
                        <div class="main-section__social social">
                            <a href="https://telegram.im/@zubkivsem1" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                            <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                            <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt=""></a>
                        </div>

                        <div class="main-section__content">
                            <h2 class="main-section__title"> <?php the_field('title_slide-5'); ?> </h2>
                            <p class="main-section__subtitle"> <?php the_field('subtitle_slide-5'); ?> </p>
                        </div>

                        <div class="main-section__buttons">
                            <a href="/uslugi/?a=2_7#2_7" class="btn">Узнать больше</a>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>

                    <div class="main-section__column">

                        <img class="main-section__img" src="<?php the_field('img_slide-5'); ?>" alt="">

                    </div>
                </div>
            </div>

            <div class="main-section__absolut-btn">
                <div class="main-section__btn-calc">
                    <button class="btn-calc" data-modal="mainModal">
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
                <div class="second-section__subtitle subtitle">МЫ БОЛЬШЕ, ЧЕМ ПРОСТО СТОМАТОЛОГИЯ!</div>
                <div class="second-section__title title">Наши Преимущества</div>
            </div>
            <div class="second-section__item">
                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-1.svg" alt=""></div>
                    <div class="second-section__column-title">Своя <span>лаборатория</span></div>
                    <div class="second-section__column-text">Собственное производство, оснащенное современным оборудованием</div>
                </div>

                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-2.svg" alt=""></div>
                    <div class="second-section__column-title">Расширенная <span>гарантия</span></div>
                    <div class="second-section__column-text">Мы контролируем производство и установку протезов, поэтому даем на них дополнительную гарантию</div>
                </div>

                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-3.svg" alt=""></div>
                    <div class="second-section__column-title">Фиксированная <span>цена</span></div>
                    <div class="second-section__column-text">Никаких скрытых платежей и услуг. Все прозрачно</div>
                </div>

                <div class="second-section__column">
                    <div><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/icon-property-4.svg" alt=""></div>
                    <div class="second-section__column-title">Опытные <span>врачи</span></div>
                    <div class="second-section__column-text">Мы тщательно отбираем стоматологов и контролируем их на каждом этапе работы</div>
                </div>
            </div>
        </div>
    </section>

    <!-- О нашей клинике -->
    <section class="about-section">
        <div class="container about-section__container">
            <div class="about-section__column">
                <div class="about-section__subtitle subtitle">СОВРЕМЕННОЕ ОБОРУДОВАНИЕ И ТЕХНОЛОГИИ</div>
                <div class="about-section__title title">О нашей клинике</div>
                <div class="about-section__description description">Добро пожаловать в стоматологический центр «ЗубкиВсем» на Парковой! Наша клиника - это место, где каждый пациент может получить качественную и профессиональную помощь в уходе за своими зубами.
                    <br> <br>
                    Наша команда состоит из опытных и высококвалифицированных специалистов, которые используют современное методики и проверенные временем материалы. Мы предлагаем широкий спектр услуг, начиная от профилактики и лечения зубов, заканчивая имплантацией и ортодонтией.
                </div>
                <div class="about-section__list list">
                    <ul>
                        <li>Собственная зуботехническая лаборатория</li>
                        <li>Современные методики и проверенные временем материалы</li>
                    </ul>
                </div>

                <div id="textHiddenHome" class="text-hiddenHome">
                    <p>Руководство клиники осуществляет Бачулис Олег Евгеньевич (отец был стоматологом ортопедом), который является владельцем Зуботехнической лаборатории АЛВАДЕНТ, а также президентом Первой ассоциации зуботехнических лабораторий ПАЗЛ. Вместе с Генеральным директором Клиники и руководителем Мастерской улыбок АЛВАДЕНТ Замурой Юлией Игоревной, мы сделали полностью автономное место, где каждый пациент сможет получить качественную услугу по доступной цене. Стоматологический центр " ЗубкиВсем" на Парковой, работает под началом зуботехнической лаборатории Alvadent, которая успешно функционирует с 1999 года. На сайте alvadent.ru вы можете ознакомиться с подробной информацией о лаборатории. Мы гарантируем индивидуальный подход к каждому пациенту, высокое качество услуг и дружелюбную атмосферу в нашей клинике. Приходите к нам и убедитесь в этом сами! Наш слоган “Зубки Всем”, Мы больше чем стоматология!</p>
                </div>

                <button id="textHiddenBtnHome" class="btn">Подробнее</button>
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
                <div class="services-section__subtitle subtitle">ВСЁ ДЛЯ ЗДОРОВОЙ И КРАСИВОЙ УЛЫБКИ</div>
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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-01.jpg" alt="">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-02.jpg" alt="">

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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-03.jpg" alt="">

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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-04.jpg" alt="">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-05.jpg" alt="">

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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-06.jpg" alt="">

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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

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

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-01.jpg" alt="">

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

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-02.jpg" alt="">

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

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-03.jpg" alt="">

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

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-04.jpg" alt="">

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

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-05.jpg" alt="">

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

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services-06.jpg" alt="">

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

                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

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
                <div class="rating-section__title title">Проверьте подлинность отзывов</div>
                <div class="rating-section__description description">Мы всегда честны с нашими пациентами, поэтому не забудьте <br> проверить рейтинг и отзывы о нашей клинике</div>
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
                <div class="portfolio-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                <div class="portfolio-section__title title">Наши работы</div>
            </div>

            <div class="portfolio-section__wrapper">

                <div class="portfolio-section__column">
                    <div class="portfolio-section__before-after" id="beforeAfterSlider">


                        <div class="before-after">
                            <span id="before" class="before__btn">ДО</span>
                            <span id="after" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-after.jpg" alt="" class="before-after__img">
                                <div class="before-after__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-before.jpg" alt="" class="before-after__img">
                                </div>
                            </div>

                            <div class="before-after__procedure procedure">
                                <div class="procedure__column">
                                    <div class="procedure__row-all">

                                        <div class="procedure__img">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                        </div>

                                        <div class="procedure__row-wrapper">
                                            <div class="procedure__row">
                                                <div class="procedure__subtitle">Процедура</div>
                                            </div>
                                            <div class="procedure__row">
                                                <div class="procedure__title">Виниры</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn_lilac" href="/galereya/">Больше работ</a>

                                </div>
                                <div class="procedure__text">Были установлены виниры</div>
                            </div>

                        </div>

                        <div class="before-after2">
                            <span id="before2" class="before__btn">ДО</span>
                            <span id="after2" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after2__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-09-after.jpg" alt="" class="before-after2__img">
                                <div class="before-after2__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-09-before.jpg" alt="" class="before-after2__img">
                                </div>
                            </div>
                            <div class="before-after__procedure procedure">
                                <div class="procedure__column">
                                    <div class="procedure__row-all">

                                        <div class="procedure__img">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                        </div>

                                        <div class="procedure__row-wrapper">
                                            <div class="procedure__row">
                                                <div class="procedure__subtitle">Процедура</div>
                                            </div>
                                            <div class="procedure__row">
                                                <div class="procedure__title">Гигиена полости рта</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn_lilac" href="/galereya/">Больше работ</a>

                                </div>
                                <div class="procedure__text">Механическое удаление зубного камня и бактериального налета</div>
                            </div>
                        </div>

                        <div class="before-after3">
                            <span id="before3" class="before__btn">ДО</span>
                            <span id="after3" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after3__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-after.jpg" alt="" class="before-after3__img">
                                <div class="before-after3__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-before.jpg" alt="" class="before-after3__img">
                                </div>
                            </div>
                            <div class="before-after__procedure procedure">
                                <div class="procedure__column">
                                    <div class="procedure__row-all">

                                        <div class="procedure__img">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                        </div>

                                        <div class="procedure__row-wrapper">
                                            <div class="procedure__row">
                                                <div class="procedure__subtitle">Процедура</div>
                                            </div>
                                            <div class="procedure__row">
                                                <div class="procedure__title">Установка импланта</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn_lilac" href="/galereya/">Больше работ</a>

                                </div>
                                <div class="procedure__text">Установка импланта</div>
                            </div>
                        </div>

                    </div>

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
                <div class="specialists-section__subtitle subtitle">КАЧЕСТВЕННЫЙ СЕРВИС И ИНДИВИДУАЛЬНЫЙ ПОДХОД</div>
                <div class="specialists-section__title title">Наши специалисты</div>
            </div>

            <div class="specialists-section__carousel carousel" id="slickCarousel">

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-08.jpg" alt="">
                        <div class="carousel__label">
                            <p>Опыт</p> <span>11 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Борисенко</span> <br>Инна Владимировна</div>
                    <div class="carousel__text">Врач стоматолог: <br>терапевт, хирург</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo carousel__photo_01">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-09.jpg" alt="">
                        <div class="carousel__label carousel__label_red">
                            <p>Опыт</p> <span>12 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Зейналов</span> <br>Зейнал Вилаяддинович</div>
                    <div class="carousel__text">Врач стоматолог: <br>терапевт</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo carousel__photo_02">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-04.jpg" alt="">
                        <div class="carousel__label carousel__label_lilac">
                            <p>Опыт</p> <span>12 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Сарыбаев</span> <br>Анарбек Муктарбекович</div>
                    <div class="carousel__text">Врач стоматолог: <br>терапевт</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo carousel__photo_03">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-010.jpg" alt="">
                        <div class="carousel__label carousel__label_yellow">
                            <p>Опыт</p> <span>32 года</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Антоновский</span> <br>Антон
                        Анатольевич</div>
                    <div class="carousel__text">Врач стоматолог: <br>ортопед, главный врач</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo carousel__photo_03">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-06.jpg" alt="">
                        <div class="carousel__label carousel__label_yellow">
                            <p>Опыт</p> <span>13 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Игонин</span> <br>Василий Валентинович</div>
                    <div class="carousel__text">Врач стоматолог: <br>ортопед, хирург</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-01.jpg" alt="">
                        <div class="carousel__label">
                            <p>Опыт</p> <span>7 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Хандогин</span> <br>Антон Олегович</div>
                    <div class="carousel__text">Врач стоматолог: <br>ортопед</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo carousel__photo_01">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-03.jpg" alt="">
                        <div class="carousel__label carousel__label_red">
                            <p>Опыт</p> <span>12 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Журов</span> <br>Илья Владимирович</div>
                    <div class="carousel__text">Врач стоматолог: <br>хирург имплантолог</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo carousel__photo_02">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-05.jpg" alt="">
                        <div class="carousel__label">
                            <p>Опыт</p> <span>2 года</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Бачулис</span> <br>Марина Александровна</div>
                    <div class="carousel__text">Врач стоматолог: <br>ортодонт, гигиенист</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo carousel__photo_03">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-07.jpg" alt="">
                        <div class="carousel__label carousel__label_yellow">
                            <p>Опыт</p> <span>18 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Джахбарова</span> <br>Рабият Магомедгаджиевна</div>
                    <div class="carousel__text">Гигиенист, <br>ассистент стоматолога</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

                <div class="carousel__wrapper">
                    <div class="carousel__photo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-02.jpg" alt="">
                        <div class="carousel__label carousel__label_lilac">
                            <p>Опыт</p> <span>10 лет</span>
                        </div>
                    </div>
                    <div class="carousel__name"><span>Байкулова</span> <br>Асият Хамитовна</div>
                    <div class="carousel__text">Врач стоматолог: <br>гигиенист</div>
                    <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                </div>

            </div>

            <div class="specialists-section__buttons">
                <a href="/vrachi/" class="btn">Все спеиалисты</a>
                <div class="specialists-section__decor-red decor-red"></div>
            </div>

        </div>
    </section>

    <!-- Наша лаборатория -->
    <section class="laboratory-section">
        <div class="container laboratory-section__container">
            <div class="laboratory-section__column">
                <div class="laboratory-section__subtitle subtitle">СОБСТВЕННАЯ ЗУБОТЕХНИЧЕСКАЯ ЛАБОРАТОРИЯ</div>
                <div class="laboratory-section__title title">Наша лаборатория</div>
                <div class="laboratory-section__description description">Зуботехническая лаборатория Мастерская улыбок АЛВАДЕНТ создана в 1999 году, входит в топ 10 лабораторий Москвы. Нет текучки. Лаборатория полного цикла. Контроль качества на каждом участке осуществляют старшие техники отделения. Специалисты из всех областей зубного протезирования (съемное отделение, несъемное отделение, ортодонтическое отделение, Cad/cam и 3D отделение, литейное отделение с применением драг сплавов)
                </div>
                <div class="laboratory-section__list list">
                    <ul>
                        <li>Основана в 1999 году</li>
                        <li>Контроль качества на каждом участке</li>
                    </ul>
                </div>
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
            <div class="laboratory-section__decor-footer"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/bg/footer.svg" alt=""></div>
        </div>
    </section>
</main>

<?php
get_footer();
?>