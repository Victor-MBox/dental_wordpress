<?php
/* 
Template Name: Услуги
*/
?>

<?php
get_header();
?>

<div class="page">
    <section class="page-main-section">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-5.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
        </div>

        <div class="container page-main-section__container">
            <div class="page-main-section__column">
                <div class="page-main-section__name">
                    <div class="page-main-section__subtitle subtitle">Мы – больше чем обычная стоматология!</div>
                    <div class="page-main-section__title title">Наши услуги</div>
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

    <section class="page-second-section">
        <div class="container page-second-section__container">
            <div class="page-second-section__name">
                <div class="page-second-section__subtitle subtitle">И подзаголовок тоже</div>
                <div class="page-second-section__title title">Нужно придумать заголовок</div>
                <div class="page-second-section__description description">Основная специализация клиник МЦДИ «ROOTT» и ReSmile - это восстановление зубного ряда в самых запущенных и сложных случаях, применяя последние методы в области имплантации. Наряду с основным своим направлением
                </div>
            </div>
    </section>

    <section class="page-service-section">
        <div class="page-service-section__container container">

            <div class="page-service-section__column">

                <div class="accordion-page">
                    <div data-tab="page-tab-1" class="accordion-page__tab">

                        <div class="accordion-page__nav-item">
                            <div class="accordion-page__decor"></div>
                            <div class="accordion-page__number">01</div>
                        </div>

                        <div class="accordion-page__nav-column">
                            <div class="accordion-page__nav-title">Консультация и диагностика</div>
                            <div class="accordion-page__nav-subtitle">Консультации online и в клинике
                            </div>
                        </div>
                    </div>
                    <div id="page-tab-1" class="accordion-page__content">

                        <div class="page-tab__nav">

                            <button class="page-tab__nav-btn" type="button" data-tab="#page-tab-1-tab_1">
                                Ортопантомография (ОПТГ)
                            </button>

                            <button class="page-tab__nav-btn" type="button" data-tab="#page-tab-1-tab_2">
                                Прицельный снимок
                            </button>

                            <button class="page-tab__nav-btn" type="button" data-tab="#page-tab-1-tab_3">
                                Аксиография
                            </button>

                            <button class="page-tab__nav-btn" type="button" data-tab="#page-tab-1-tab_4">
                                Компьютерная томография (КТ)
                            </button>

                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-2" class="accordion-page__tab">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_red"></div>
                                <div class="accordion-page__number">02</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Протезирование</div>
                                <div class="accordion-page__nav-subtitle">Съемное протезтирование
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-2" class="accordion-page__content">

                            123 <br> 123 <br> 123
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-3" class="accordion-page__tab">
                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_lilac"></div>
                                <div class="accordion-page__number">03</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Имплантаця</div>
                                <div class="accordion-page__nav-subtitle">Импланты, коронки, мосты
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-3" class="accordion-page__content">

                            123 <br> 123 <br> 123
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-4" class="accordion-page__tab">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor"></div>
                                <div class="accordion-page__number">04</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Лечение зубов, терапия</div>
                                <div class="accordion-page__nav-subtitle">Любые виды лечения зубов
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-4" class="accordion-page__content">

                            123 <br> 123 <br> 123
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-5" class="accordion-page__tab">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_blue"></div>
                                <div class="accordion-page__number">05</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Хирургия</div>
                                <div class="accordion-page__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-5" class="accordion-page__content">

                            123 <br> 123 <br> 123
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-6" class="accordion-page__tab">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_red"></div>
                                <div class="accordion-page__number">06</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Ортодонтия</div>
                                <div class="accordion-page__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-6" class="accordion-page__content">

                            123 <br> 123 <br> 123
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-7" class="accordion-page__tab">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_lilac"></div>
                                <div class="accordion-page__number">07</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Гигиена</div>
                                <div class="accordion-page__nav-subtitle">Любые виды лечения зубов
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-7" class="accordion-page__content">

                            123 <br> 123 <br> 123
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-service-section__column">

                <div class="page-tab__content">
                    <div class="page-tab__item" id="page-tab-1-tab_1">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">
                        <div class="page-tab__btn-calc">
                            <a class="btn-calc" href="#">
                                <div class="btn-calc__img"></div>
                                <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                    <span>1
                                        мин</span>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="page-tab__item" id="page-tab-1-tab_2">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                        <div class="page-tab__btn-call">
                            <a class="btn-call" href="#">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </a>
                        </div>
                    </div>

                    <div class="page-tab__item" id="page-tab-1-tab_3">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                        <div class="page-tab__btn-calc">
                            <a class="btn-calc" href="#">
                                <div class="btn-calc__img"></div>
                                <div class="btn-calc__text">Рассчитать<br>предварительную стоимость<br>за
                                    <span>1
                                        мин</span>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="page-tab__item" id="page-tab-1-tab_4">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">
                        <div class="page-tab__btn-call">
                            <a class="btn-call" href="#">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>