<?php
/* 
Template Name: Врачи
*/
?>

<?php
get_header();
?>

<div class="page">
    <section class="page-main-section">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-8.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-7.svg" alt="">
        </div>

        <div class="container page-main-section__container">
            <div class="page-main-section__column">
                <div class="page-main-section__name">
                    <div class="page-main-section__subtitle subtitle">Мы – больше чем обычная стоматология!</div>
                    <div class="page-main-section__title title">Наши специалисты</div>
                    <div class="page-main-section__description description">Основная специализация клиник МЦДИ «ROOTT» и ReSmile - это восстановление зубного ряда в самых запущенных и сложных случаях, применяя последние методы в области имплантации. Наряду с основным своим направлением, клиника осуществляет все виды стоматологических услуг в области терапии, ортопедии, ортодонтии, хирургии и т.п.
                        <br> <br>
                        Уникальность клиники заключается в том, что все виды обследования, необходимые для решения проблем пациента, можно сделать за один визит непосредственно в клинике на первичной консультации. Также в клинике есть своя стоматологическая лаборатория, что сокращает время на изготовление протезов. © Тексты, опубликованные на сайте dentalroott, защищаются законом об авторском праве.
                    </div>
                    <button class="btn">Узнать о нашем производстве</button>
                </div>
            </div>

            <div class="page-main-section__column">
                <div class="page-main-section__img">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-img.jpg" alt="">
                </div>
            </div>

            <div class="page-main-section__form">
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
                                    <label for="checkbox" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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

    <section class="page-second-section">
        <div class="container page-second-section__container">
            <div class="page-second-section__name">
                <div class="page-second-section__subtitle subtitle">И подзаголовок тоже</div>
                <div class="page-second-section__title title">Нужно придумать заголовок</div>
                <div class="page-second-section__description description">Основная специализация клиник МЦДИ «ROOTT» и ReSmile - это восстановление зубного ряда в самых запущенных и сложных случаях, применяя последние методы в области имплантации. Наряду с основным своим направлением
                </div>
            </div>
    </section>

    <section class="page-doctors-section">
        <div class="page-service-section">
            <div class="page-service-section__container container">

                <div class="page-service-section__column-mob">

                    <div class="accordion-home">
                        <div data-tab="home-tab-1" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Терапевты</div>
                                <div class="accordion-home__nav-subtitle">17 Специалистов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <div data-tab="tab1-faq-tab-1" class="faq__tab">Виктор Петрович Иванов</div>

                            <div id="tab1-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab1-faq-tab-2" class="faq__tab">Пётр Петрович Петров</div>

                            <div id="tab1-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab1-faq-tab-3" class="faq__tab">Олег Иванович Веслос</div>

                            <div id="tab1-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab1-faq-tab-4" class="faq__tab">Имя Отчество Фамилия</div>

                            <div id="tab1-faq-tab-4" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="accordion-home">
                        <div data-tab="home-tab-2" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Протезирование</div>
                                <div class="accordion-home__nav-subtitle">17 Специалистов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-2" class="accordion-home__content">

                            <div data-tab="tab2-faq-tab-1" class="faq__tab">Виктор Петрович Иванов</div>

                            <div id="tab2-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-2" class="faq__tab">Пётр Петрович Петров</div>

                            <div id="tab2-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-3" class="faq__tab">Олег Иванович Веслос</div>

                            <div id="tab2-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-4" class="faq__tab">Имя Отчество Фамилия</div>

                            <div id="tab2-faq-tab-4" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-3" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Имплантаця</div>
                                <div class="accordion-home__nav-subtitle">17 Специалистов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-3" class="accordion-home__content">

                            <div data-tab="tab3-faq-tab-1" class="faq__tab">Виктор Петрович Иванов</div>

                            <div id="tab3-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-2" class="faq__tab">Пётр Петрович Петров</div>

                            <div id="tab3-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-3" class="faq__tab">Олег Иванович Веслос</div>

                            <div id="tab3-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-4" class="faq__tab">Имя Отчество Фамилия</div>

                            <div id="tab3-faq-tab-4" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-4" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Лечение зубов, терапия</div>
                                <div class="accordion-home__nav-subtitle">17 Специалистов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-4" class="accordion-home__content">

                            <div data-tab="tab4-faq-tab-1" class="faq__tab">Виктор Петрович Иванов</div>

                            <div id="tab4-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab4-faq-tab-2" class="faq__tab">Пётр Петрович Петров</div>

                            <div id="tab4-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab4-faq-tab-3" class="faq__tab">Олег Иванович Веслос</div>

                            <div id="tab4-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab4-faq-tab-4" class="faq__tab">Имя Отчество Фамилия</div>

                            <div id="tab4-faq-tab-4" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-5" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Хирургия</div>
                                <div class="accordion-home__nav-subtitle">17 Специалистов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_turquoise"></div>
                        </div>
                        <div id="home-tab-5" class="accordion-home__content">

                            <div data-tab="tab5-faq-tab-1" class="faq__tab">Виктор Петрович Иванов</div>

                            <div id="tab5-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab5-faq-tab-2" class="faq__tab">Пётр Петрович Петров</div>

                            <div id="tab5-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab5-faq-tab-3" class="faq__tab">Олег Иванович Веслос</div>

                            <div id="tab5-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab5-faq-tab-4" class="faq__tab">Имя Отчество Фамилия</div>

                            <div id="tab5-faq-tab-4" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-6" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Ортодонтия</div>
                                <div class="accordion-home__nav-subtitle">17 Специалистов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-6" class="accordion-home__content">

                            <div data-tab="tab6-faq-tab-1" class="faq__tab">Виктор Петрович Иванов</div>

                            <div id="tab6-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab6-faq-tab-2" class="faq__tab">Пётр Петрович Петров</div>

                            <div id="tab6-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab6-faq-tab-3" class="faq__tab">Олег Иванович Веслос</div>

                            <div id="tab6-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab6-faq-tab-4" class="faq__tab">Имя Отчество Фамилия</div>

                            <div id="tab6-faq-tab-4" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-7" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Гигиена</div>
                                <div class="accordion-home__nav-subtitle">17 Специалистов</div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-7" class="accordion-home__content">

                            <div data-tab="tab7-faq-tab-1" class="faq__tab">Виктор Петрович Иванов</div>

                            <div id="tab7-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab7-faq-tab-2" class="faq__tab">Пётр Петрович Петров</div>

                            <div id="tab7-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab7-faq-tab-3" class="faq__tab">Олег Иванович Веслос</div>

                            <div id="tab7-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab7-faq-tab-4" class="faq__tab">Имя Отчество Фамилия</div>

                            <div id="tab7-faq-tab-4" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="viktor-petrovich-ivanov/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="page-service-section__column">

                    <div class="accordion-page">
                        <div data-tab="page-tab-1" class="accordion-page__tab">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor"></div>
                                <div class="accordion-page__number">01</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Терапевты</div>
                                <div class="accordion-page__nav-subtitle">17 Специалистов</div>
                            </div>
                        </div>
                        <div id="page-tab-1" class="accordion-page__content">
                            <div class="accordion-page__content-decor"></div>

                            <div class="page-tab__nav">

                                <ul>
                                    <li><button class="link-page active-tab" href="viktor-petrovich-ivanov/" onclick="toggleActiveClass(this)">Виктор Петрович Иванов</button></li>
                                    <li><button class="link-page" href="viktor-petrovich-ivanov/" onclick="toggleActiveClass(this)">Пётр Петрович Петров</button></li>
                                    <li><button class="link-page" href="viktor-petrovich-ivanov/" onclick="toggleActiveClass(this)">Олег Иванович Веслос</button></li>
                                    <li><button class="link-page" href="viktor-petrovich-ivanov/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                </ul>

                            </div>
                        </div>
                        <div class="accordion-page">
                            <div data-tab="page-tab-2" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_red"></div>
                                    <div class="accordion-page__number">02</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Хирурги-имплантологи</div>
                                    <div class="accordion-page__nav-subtitle">17 Специалистов</div>
                                </div>
                            </div>
                            <div id="page-tab-2" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                                <div class="page-tab__nav">

                                    <ul>
                                        <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-page">
                            <div data-tab="page-tab-3" class="accordion-page__tab">
                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_lilac"></div>
                                    <div class="accordion-page__number">03</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Ортопеды</div>
                                    <div class="accordion-page__nav-subtitle">17 Специалистов</div>
                                </div>
                            </div>
                            <div id="page-tab-3" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_lilac"></div>

                                <div class="page-tab__nav">

                                    <ul>
                                        <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                        <div class="accordion-page">
                            <div data-tab="page-tab-4" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor"></div>
                                    <div class="accordion-page__number">04</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Пародонтологи</div>
                                    <div class="accordion-page__nav-subtitle">17 Специалистов</div>
                                </div>
                            </div>
                            <div id="page-tab-4" class="accordion-page__content">
                                <div class="accordion-page__content-decor"></div>
                                <div class="page-tab__nav">
                                    <ul>
                                        <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="accordion-page">
                            <div data-tab="page-tab-5" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_blue"></div>
                                    <div class="accordion-page__number">05</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Гигиенисты</div>
                                    <div class="accordion-page__nav-subtitle">17 Специалистов</div>
                                </div>
                            </div>
                            <div id="page-tab-5" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_blue"></div>
                                <div class="page-tab__nav">
                                    <ul>
                                        <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-page">
                            <div data-tab="page-tab-6" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_red"></div>
                                    <div class="accordion-page__number">06</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Ортодонты</div>
                                    <div class="accordion-page__nav-subtitle">17 Специалистов</div>
                                </div>
                            </div>
                            <div id="page-tab-6" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                                <div class="page-tab__nav">
                                    <ul>
                                        <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-page">
                            <div data-tab="page-tab-7" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_lilac"></div>
                                    <div class="accordion-page__number">07</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Анестезиологи</div>
                                    <div class="accordion-page__nav-subtitle">17 Специалистов</div>
                                </div>
                            </div>
                            <div id="page-tab-7" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_lilac"></div>
                                <div class="page-tab__nav">
                                    <ul>
                                        <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                        <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Имя Отчество Фамилия</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-service-section__buttons-page">

                        <a class="buttons-page-1" href="#">
                            <div class="buttons-page-1__img"></div>
                            <div class="buttons-page-1__text">Лечение в рассрочку</div>
                        </a>

                        <a class="buttons-page-2" href="#">
                            <div class="buttons-page-2__img"></div>
                            <div class="buttons-page-2__text">Налоговый вычет</div>
                        </a>

                        <a class="buttons-page-3" href="#">
                            <div class="buttons-page-3__img"></div>
                            <div class="buttons-page-3__text">Гарантия на услуги</div>
                        </a>

                    </div>

                    <div class="page-service-section__form">
                        <div class="page-content__title">Запись <br>на консультацию</div>
                        <div class="page-content__text">Обратите внимание, все наши консультации – бесплатные</div>

                        <div class="feedback-form-laboratory">

                            <div class="page-service-section__decor decor-red"></div>
                            <div class="page-service-section__decor decor-blue"></div>

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
                                            <label for="checkbox-3" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                        </div>
                                    </div>
                                    <div class="form-laboratory__submit">
                                        <input class="btn btn_submit" type="submit" value="Записаться">
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                </div>

                <!-- Содержимое ajax -->
                <div class="page-service-section__column">

                    <div id="loader-page"></div>

                    <div class="page-service-section__decor-wrapper">
                        <div class="page-service-section__decor-content decor-lilac"></div>
                        <div class="page-service-section__decor-content decor-yellow"></div>
                    </div>

                    <div class="page-doctors-content">
                        <section class="page-contetn__wrapper" id="content-page">

                            <div class="page-content__chapter">
                                <div class="page-content__banner">
                                    <div class="page-content__name">Виктор <br> Петрович <br> Иванов</div>
                                    <div class="page-content__label">стаж <span>16 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <div class="page-content__btn-call">
                                        <a class="btn-call" href="#">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Записаться на прием <br> к <span>Виктору Иванову</span></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="page-content__first-decor">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
                                </div>

                                <div class="page-content__text">Рентген зубов является очень популярным, безболезненным и часто проводимым обследованием в стоматологии. Особенностью диагностики зубочелюстной системы является тот факт, что значительная часть зуба находится вне зоны визуальной доступности, то есть – скрыта под десной и в челюстной кости.</div>

                                <div class="page-content__list">
                                    <ul>
                                        <li>Терапевтическим лечением</li>
                                        <li>Удалением</li>
                                    </ul>
                                    <ul>
                                        <li>Эндодонтическим лечением</li>
                                        <li>Для диагностики кариеса, пульпита и других заболеваний</li>
                                    </ul>
                                </div>

                                <div class="page-content__chapter">
                                    <div class="page-content__title">Образование</div>
                                    <div class="page-content__text">Окончил УГМА По специальности Стоматология в 2004г., присвоена квалификация «Врач-стоматолог». Диплом – ВСВ №0553943.

                                        <br><br>• Прошел подготовку в клинической ординатуре при УГМА и закончил полный курс по специальности «Стоматология терапевтическая» в 2007 г. Удостоверение №117.

                                        <br><br>• Получил сертификат А №3187222 по специальности Стоматология терапевтическая в 2007 г. (Действителен до 2022г.)

                                        <br><br>• Получил сертификат А №3944961 по специальности Стоматология детская в 2010 г. (Действителен до декабря 2025 г.)

                                        <br><br>• Решением диссертационного совета при УГМА присуждена ученая степень Кандидата медицинских наук. 28.08.2013г. Решением аттестационной комиссии при Министерстве Здравоохранения Свердловской области присвоена первая категория по специальности Стоматология терапевтическая.
                                    </div>
                                </div>

                                <div class="page-content__chapter">
                                    <div class="page-content__title">Сертификаты</div>

                                    <div class="page-content__certificates">
                                        <div class="page-content__certificates-item">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/certificate-01.jpg" alt="">
                                            <div class="page-content__certificates-title">Институт стоматологии</div>
                                        </div>

                                        <div class="page-content__certificates-item">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/certificate-02.jpg" alt="">
                                            <div class="page-content__certificates-title">Пикассо</div>
                                        </div>

                                        <div class="page-content__certificates-item">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/certificate-03.jpg" alt="">
                                            <div class="page-content__certificates-title">IAPD Regional Moscow</div>
                                        </div>

                                        <div class="page-content__certificates-item">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/certificate-04.jpg" alt="">
                                            <div class="page-content__certificates-title">Институт стоматологии</div>
                                        </div>
                                    </div>
                                    <button class="btn-uncover">Показать все</button>

                                </div>

                                <div class="page-content__chapter">
                                    <div class="page-content__title">Примеры работ Виктора Петровича Иванова</div>
                                    <div class="page-content__text">Рентген зубов является очень популярным, безболезненным и часто проводимым обследованием в стоматологии. Особенностью диагностики зубочелюстной системы является тот факт, что значительная часть зуба находится вне зоны визуальной доступности, то есть – скрыта под десной и в челюстной кости.</div>

                                    <div class="page-content__before-after" id="beforeAfterSlider">


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

                                    <div class="slider-arrows">
                                        <button class="slider-arrows__left" id="introSliderPrev" type="button"></button>
                                        <button class="slider-arrows__right" id="introSliderNext" type="button"></button>
                                    </div>

                                    <button class="btn-uncover">Показать все</button>

                                </div>

                                <div class="page-content__chapter">
                                    <div class="page-content__title">Отзывы о работе доктора</div>

                                    <div class="page-content__wrapper">

                                        <div class="page-content__review-page review-page">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/avatar.jpg" alt="">
                                            <div class="review-page__name">Мария Петрова</div>
                                            <div class="review-page__text">Всё прекрасно, доктор Петров сделал мне хороший имплант. Я в восторге</div>
                                            <a href="#">Проверить отзыв</a>

                                        </div>

                                        <div class="page-content__review-page review-page">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/avatar.jpg" alt="">
                                            <div class="review-page__name">Мария Петрова</div>
                                            <div class="review-page__text">Всё прекрасно, доктор Петров сделал мне хороший имплант. Я в восторге</div>
                                            <a href="#">Проверить отзыв</a>

                                        </div>

                                        <div class="page-content__review-page review-page">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/avatar.jpg" alt="">
                                            <div class="review-page__name">Мария Петрова</div>
                                            <div class="review-page__text">Всё прекрасно, доктор Петров сделал мне хороший имплант. Я в восторге</div>
                                            <a href="#">Проверить отзыв</a>

                                        </div>

                                        <div class="page-content__review-page review-page">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/avatar.jpg" alt="">
                                            <div class="review-page__name">Мария Петрова</div>
                                            <div class="review-page__text">Всё прекрасно, доктор Петров сделал мне хороший имплант. Я в восторге</div>
                                            <a href="#">Проверить отзыв</a>

                                        </div>

                                    </div>

                                    <button class="btn-uncover">Показать все</button>

                                </div>

                        </section>
                    </div>
                </div>



            </div>
        </div>
    </section>


</div>






<?php
get_footer();
?>