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

            <div class="page-service-section__column-mob">

                <div class="accordion-service-page">

                    <div class="accordion-home">
                        <div data-tab="home-tab-1" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Консультация и диагностика</div>
                                <div class="accordion-home__nav-subtitle">Консультации online и в клинике</div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>1000₽</span>
                                </div>


                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="#">Ортопантомография (ОПТГ)</a></li>
                                    <li><a href="#">Прицельный снимок</a></li>
                                    <li><a href="#">Аксиография</a></li>
                                    <li><a href="#">Компьютерная томография (КТ)</a></li>
                                </ul>
                                <div class="accordion-home__link-decor"></div>

                            </div>
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

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>2000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="#">Услуга - 1</a></li>
                                    <li><a href="#">Услуга - 2</a></li>
                                    <li><a href="#">Услуга - 3</a></li>
                                    <li><a href="#">Услуга - 4</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_red"></div>

                            </div>

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

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>3000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="#">Услуга - 1</a></li>
                                    <li><a href="#">Услуга - 2</a></li>
                                    <li><a href="#">Услуга - 3</a></li>
                                    <li><a href="#">Услуга - 4</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_lilac"></div>

                            </div>

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

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>4000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="#">Услуга - 1</a></li>
                                    <li><a href="#">Услуга - 2</a></li>
                                    <li><a href="#">Услуга - 3</a></li>
                                    <li><a href="#">Услуга - 4</a></li>
                                </ul>
                                <div class="accordion-home__link-decor"></div>

                            </div>

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

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>1000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="#">Услуга - 1</a></li>
                                    <li><a href="#">Услуга - 2</a></li>
                                    <li><a href="#">Услуга - 3</a></li>
                                    <li><a href="#">Услуга - 4</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_blue"></div>

                            </div>

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

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>2000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="#">Услуга - 1</a></li>
                                    <li><a href="#">Услуга - 2</a></li>
                                    <li><a href="#">Услуга - 3</a></li>
                                    <li><a href="#">Услуга - 4</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_red"></div>
                            </div>

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

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-services.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>3000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="#">Услуга - 1</a></li>
                                    <li><a href="#">Услуга - 2</a></li>
                                    <li><a href="#">Услуга - 3</a></li>
                                    <li><a href="#">Услуга - 4</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_lilac"></div>
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
                            <div class="accordion-page__nav-title">Консультация и диагностика</div>
                            <div class="accordion-page__nav-subtitle">Консультации online и в клинике
                            </div>
                        </div>
                    </div>
                    <div id="page-tab-1" class="accordion-page__content">
                        <div class="accordion-page__content-decor"></div>

                        <div class="page-tab__nav">

                            <ul>
                                <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Ортопантомография (ОПТГ)</button></li>
                                <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Прицельный снимок</button></li>
                                <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Аксиография</button></li>
                                <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Компьютерная томография (КТ)</button></li>
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
                                <div class="accordion-page__nav-title">Протезирование</div>
                                <div class="accordion-page__nav-subtitle">Съемное протезтирование
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-2" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                            <div class="page-tab__nav">

                                <ul>
                                    <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Услуга - 1</button></li>
                                    <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Услуга - 2</button></li>
                                    <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Услуга - 3</button></li>
                                    <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Услуга - 4</button></li>
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
                                <div class="accordion-page__nav-title">Имплантаця</div>
                                <div class="accordion-page__nav-subtitle">Импланты, коронки, мосты
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-3" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_lilac"></div>

                            <div class="page-tab__nav">

                                <ul>
                                    <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Услуга - 1</button></li>
                                    <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Услуга - 2</button></li>
                                    <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Услуга - 3</button></li>
                                    <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Услуга - 4</button></li>
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
                                <div class="accordion-page__nav-title">Лечение зубов, терапия</div>
                                <div class="accordion-page__nav-subtitle">Любые виды лечения зубов
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-4" class="accordion-page__content">
                            <div class="accordion-page__content-decor"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Услуга - 1</button></li>
                                    <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Услуга - 2</button></li>
                                    <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Услуга - 3</button></li>
                                    <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Услуга - 4</button></li>
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
                                <div class="accordion-page__nav-title">Хирургия</div>
                                <div class="accordion-page__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-5" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_blue"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Услуга - 1</button></li>
                                    <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Услуга - 2</button></li>
                                    <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Услуга - 3</button></li>
                                    <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Услуга - 4</button></li>
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
                                <div class="accordion-page__nav-title">Ортодонтия</div>
                                <div class="accordion-page__nav-subtitle">Любые хирургические операции
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-6" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Услуга - 1</button></li>
                                    <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Услуга - 2</button></li>
                                    <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Услуга - 3</button></li>
                                    <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Услуга - 4</button></li>
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
                                <div class="accordion-page__nav-title">Гигиена</div>
                                <div class="accordion-page__nav-subtitle">Любые виды лечения зубов
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-7" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_lilac"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page active-tab" href="ortopantomografiya-optg/" onclick="toggleActiveClass(this)">Услуга - 1</button></li>
                                    <li><button class="link-page" href="priczelnyi-snimok/" onclick="toggleActiveClass(this)">Услуга - 2</button></li>
                                    <li><button class="link-page" href="aksiografiya/" onclick="toggleActiveClass(this)">Услуга - 3</button></li>
                                    <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" onclick="toggleActiveClass(this)">Услуга - 4</button></li>
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
                                        <label for="checkbox-3" class="checkbox__label"><span>Согласие с обработкой персональных данных</span></label>
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

                <section class="page-contetn__wrapper" id="content-page">

                    <div class="page-content__chapter">
                        <div class="page-content__banner">
                            <div class="page-content__name">Ортопантомография <br>(ОПТГ)</div>
                            <div class="page-content__label">от <span>2 000₽</span></div>
                            <div class="page-content__btn-call">
                                <a class="btn-call" href="#">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </a>
                            </div>
                        </div>
                        <div class="page-content__text">Рентген зубов является очень популярным, безболезненным и часто проводимым обследованием в стоматологии. Особенностью диагностики зубочелюстной системы является тот факт, что значительная часть зуба находится вне зоны визуальной доступности, то есть – скрыта под десной и в челюстной кости. Для визуализации этих участков, а также внутренних тканей зуба необходима современная рентгенография. <br> <br>

                            На прицельном снимке отчетливо видны отдельные зубы, повреждения корней, полости, запломбированные корневые каналы, корни, сверхкомплектные зубы, зачатки зубов, кисты и новообразования. На одном снимке визуализируется 2-3 соседних зуба, максимум 4 (в зависимости от расположения зуба на дуге). Прицельные снимки зубов отличаются высоким разрешением, обеспечивая врачу максимально корректную информацию о клинической картине на выбранном участке обследования. © Тексты, опубликованные на сайте dentalroott.ru, защищаются законом об авторском праве. </div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Показания для рентгена в стоматологии</div>
                        <div class="page-content__text">Прицельный рентген зуба может потребоваться перед: © Тексты, опубликованные на сайте dentalroott.ru, защищаются законом об авторском праве.</div>

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

                        <div class="page-content__text">Помимо ОПТГ также может потребоваться прицельный снимок перед имплантацией, особенно – одномоментной, когда зуб будет удален и восстановлен имплантов в один прием врача. Важно иметь точную информацию о расположении корней, чтобы провести максимально щадящее удаление и не повредить ткани альвеолярного отростка. © Тексты, опубликованные на сайте dentalroott.ru, защищаются законом об авторском праве.</div>
                    </div>

                    <div class="page-content__chapter">

                        <div class="page-content__title">Показания для рентгена в стоматологии</div>
                        <div class="page-content__banner">
                        </div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Преимущества прицельной рентгенографии зубов</div>
                        <div class="page-content__text">Востребованность данного вида аппаратной диагностики определяется ее множественными достоинствами: © Тексты, опубликованные на сайте dentalroott.ru, защищаются законом об авторском праве.</div>
                        <div class="page-content__column-wrapper">
                            <div class="page-content__column">
                                <div class="page-content__list">
                                    <ul>
                                        <li>Обследование проводится абсолютно безболезненно, не вызывая даже малейшего дискомфорта, является неинвазивным;</li>
                                        <li>обеспечивает точную информацию о состоянии интересующего врача участка челюсти;</li>
                                        <li>не требует подготовки</li>
                                        <li>является срочным – результат пациент (врач) получает на руки буквально через 10-15 минут после диагностики.</li>
                                    </ul>
                                </div>
                                <div class="page-content__btn-calc">
                                    <a class="btn-calc" href="#">
                                        <div class="btn-calc__img"></div>
                                        <div class="btn-calc__text">Рассчитать <br> предварительную стоимость <br> за
                                            <span>1
                                                мин</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="page-content__column">
                                <div class="page-content__img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-mimi-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">До/После</div>

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



                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Рентген зубов во время беременности</div>
                        <div class="page-content__text">Многие беременные женщины задаются вопросом, может ли рентген зуба причинить вред плоду. Важно понимать, что доза, необходимая для совершения снимка, составляет всего 1-2 мкВ. Это в тысячу раз меньше, чем доза, которую мы получаем от окружающих нас источников излучения в течение года. Кроме того, уровень облучения современного рентгенологического оборудования значительно ниже, чем в ранее используемых аналоговых камерах.</div>
                        <div class="page-content__infobox">Многие беременные женщины задаются вопросом, может ли рентген зуба причинить вред плоду. Важно понимать, что доза, необходимая для совершения снимка, составляет всего 1-2 мкВ. Это в тысячу раз меньше, чем доза, которую мы получаем от окружающих нас источников излучения в течение года. Кроме того, уровень облучения современного рентгенологического оборудования значительно ниже, чем в ранее используемых аналоговых камерах.</div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">3D видео</div>
                        <div class="page-content__banner-video">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-video.jpg" alt="">
                            <img class="page-content__rotate" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-rotate.svg" alt="">
                        </div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Сделать прицельный снимок зубов в ROOTT</div>
                        <div class="page-content__text">Рентгенологические снимки зубов помогают врачу распознать проблему, поставить диагноз и провести правильное лечение. В московском МЦДИ ROOTT пациенты могут пройти рентгенографию платно на современном оборудовании в любое удобное время. Цены на прицельный снимок зуба в нашей стоматологии указаны в нашем прайсе.</div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Цены</div>

                        <div class="page-content__table">

                            <div class="page-content__column-table">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-price.svg" alt="">
                                <p>Услуга</p>
                            </div>

                            <div class="page-content__column-table">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-price-2.svg" alt="">
                                <p>Стоимость</p>
                            </div>
                        </div>

                        <table class="table-service">
                            <tr>
                                <td class="table-service__name">Первичная консультация и осмотр у терапевта, ортопеда, хирурга, ортодонта, имплантолога, составление плана и расчет стоимости лечения (включая всю необходимую диагностику)</td>
                                <td class="table-service__price">1 000₽</td>
                            </tr>
                            <tr>
                                <td class="table-service__name">Первичная консультация и осмотр у терапевта, ортопеда, хирурга, ортодонта, имплантолога, составление плана и расчет стоимости лечения (включая всю необходимую диагностику)</td>
                                <td class="table-service__price">1 000₽</td>
                            </tr>
                        </table>

                        <div class="table-service__btn">
                            <a href="#" class="btn">Прайс-лист</a>
                            <a href="#" class="btn">Акции</a>
                        </div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Наши специалисты</div>

                        <div class="page-content__carousel">

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                                </div>
                                <div class="carousel__name">Мария <span>Петрова</span></div>
                                <div class="carousel__text">Мария специализиурется на гигиене и протезировании.</div>
                                <button class="btn btn_entry">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                                </div>
                                <div class="carousel__name">Мария <span>Петрова</span></div>
                                <div class="carousel__text">Мария специализиурется на гигиене и протезировании.</div>
                                <button class="btn btn_entry">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img2.jpg" alt="">
                                </div>
                                <div class="carousel__name">Мария <span>Петрова</span></div>
                                <div class="carousel__text">Мария специализиурется на гигиене и протезировании.</div>
                                <button class="btn btn_entry">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/doctor-img.jpg" alt="">
                                </div>
                                <div class="carousel__name">Мария <span>Петрова</span></div>
                                <div class="carousel__text">Мария специализиурется на гигиене и протезировании.</div>
                                <button class="btn btn_entry">Записаться</button>
                            </div>

                        </div>
                        <a href="#" class="btn">Все специалисты</a>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Отзывы</div>
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
                        <a href="#" class="btn">Все отзывы</a>

                    </div>
                </section>
            </div>



        </div>
    </section>

</div>


<?php
get_footer();
?>