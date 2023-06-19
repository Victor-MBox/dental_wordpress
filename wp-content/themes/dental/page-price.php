<?php
/* 
Template Name: Цены
*/
?>

<?php
get_header();
?>

<div class="page">
    <section class="page-main-section">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-3.svg" alt="">
        </div>

        <div class="container page-main-section__container">
            <div class="page-main-section__column">
                <div class="page-main-section__name">
                    <div class="page-main-section__subtitle subtitle">Мы – больше чем обычная стоматология!</div>
                    <div class="page-main-section__title title">Наши цены</div>
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

    <section class="page-price-section">
        <div class="page-price-section__container container">
            <div class="page-price-section__column">

                <div class="page-price-section__buttons-page">

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

                    <img class="page-price-section__buttons-decor" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">

                </div>

                <div class="page-service-section__form">
                    <div class="page-content__title">Запись <br>на консультацию</div>
                    <div class="page-content__text">Обратите внимание, все наши консультации – бесплатные</div>

                    <div class="feedback-form-laboratory">

                        <div class="page-service-section__decor decor-red"></div>
                        <div class="page-price-section__decor decor-lilac"></div>

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

            <div class="page-price-section__column">

                <div class="accordion-price-page">

                    <div class="accordion-home">
                        <div data-tab="home-tab-1" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor"></div>

                                <div class="accordion-home__nav-title">Консультация и диагностика</div>
                                <div class="accordion-home__nav-subtitle">Консультации online и в клинике</div>
                            </div>

                            <div class="accordion-home__decor-wrapper">
                                <div class="accordion-home__arrow"></div>
                                <div class="accordion-home__strip strip strip_yellow"></div>
                            </div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/price-page-img.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>1 000₽</span>
                                </div>


                                <div class="accordion-home__btn-call">
                                    <a class="btn-call" href="#">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </a>
                                </div>
                            </div>

                            <div class="accordion-home__price">
                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>#1</span> <br>
                                        Применение обогащенной тромбоцитами аутоплазмы (плазмолифтинг)
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">6 000 ₽</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>#2</span> <br>
                                        Удаление классического импланта, установленного в другой клинике
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">7 000 ₽</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>#3</span> <br>
                                        Мембрана BioGide 25*25 (1 шт.)
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">25 000 ₽</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>#4</span> <br>
                                        Удаление пластинчатого импланта, установленного в другой клинике
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">35 000 ₽</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>#5</span> <br>
                                        Установка классического имплантата ROOTT FORM (Швейцария, Trate AG)
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">35 000 ₽</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>#6</span> <br>
                                        Синус-лифтинг (без учета стоимости материала)
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">35 000 ₽</div>
                                </div>

                            </div>
                        </div>
                        <div class="accordion-home">
                            <div data-tab="home-tab-2" class="accordion-home__tab">
                                <div class="accordion-home__nav-column">
                                    <div class="accordion-home__decor accordion-home__decor_red"></div>

                                    <div class="accordion-home__nav-title">Протезирование</div>
                                    <div class="accordion-home__nav-subtitle">Съемное протезтирование
                                    </div>
                                </div>
                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_red"></div>
                                </div>
                            </div>
                            <div id="home-tab-2" class="accordion-home__content">

                                <div class="accordion-home__img-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/price-page-img.jpg" alt="">

                                    <div class="accordion-home__label">
                                        от <span>2 000₽</span>
                                    </div>


                                    <div class="accordion-home__btn-call">
                                        <a class="btn-call" href="#">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#1</span> <br>
                                            Применение обогащенной тромбоцитами аутоплазмы (плазмолифтинг)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">6 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#2</span> <br>
                                            Удаление классического импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#3</span> <br>
                                            Мембрана BioGide 25*25 (1 шт.)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">25 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#4</span> <br>
                                            Удаление пластинчатого импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#5</span> <br>
                                            Установка классического имплантата ROOTT FORM (Швейцария, Trate AG)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#6</span> <br>
                                            Синус-лифтинг (без учета стоимости материала)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="accordion-home">
                            <div data-tab="home-tab-3" class="accordion-home__tab">
                                <div class="accordion-home__nav-column">
                                    <div class="accordion-home__decor accordion-home__decor_lilac"></div>

                                    <div class="accordion-home__nav-title">Имплантаця</div>
                                    <div class="accordion-home__nav-subtitle">Импланты, коронки, мосты
                                    </div>
                                </div>
                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_lilac"></div>
                                </div>
                            </div>
                            <div id="home-tab-3" class="accordion-home__content">

                                <div class="accordion-home__img-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/price-page-img.jpg" alt="">

                                    <div class="accordion-home__label">
                                        от <span>3 000₽</span>
                                    </div>


                                    <div class="accordion-home__btn-call">
                                        <a class="btn-call" href="#">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#1</span> <br>
                                            Применение обогащенной тромбоцитами аутоплазмы (плазмолифтинг)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">6 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#2</span> <br>
                                            Удаление классического импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#3</span> <br>
                                            Мембрана BioGide 25*25 (1 шт.)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">25 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#4</span> <br>
                                            Удаление пластинчатого импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#5</span> <br>
                                            Установка классического имплантата ROOTT FORM (Швейцария, Trate AG)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#6</span> <br>
                                            Синус-лифтинг (без учета стоимости материала)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="accordion-home">
                            <div data-tab="home-tab-4" class="accordion-home__tab">
                                <div class="accordion-home__nav-column">
                                    <div class="accordion-home__decor"></div>

                                    <div class="accordion-home__nav-title">Лечение зубов, терапия</div>
                                    <div class="accordion-home__nav-subtitle">Любые виды лечения зубов
                                    </div>
                                </div>
                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_yellow"></div>
                                </div>
                            </div>
                            <div id="home-tab-4" class="accordion-home__content">

                                <div class="accordion-home__img-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/price-page-img.jpg" alt="">

                                    <div class="accordion-home__label">
                                        от <span>4 000₽</span>
                                    </div>


                                    <div class="accordion-home__btn-call">
                                        <a class="btn-call" href="#">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#1</span> <br>
                                            Применение обогащенной тромбоцитами аутоплазмы (плазмолифтинг)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">6 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#2</span> <br>
                                            Удаление классического импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#3</span> <br>
                                            Мембрана BioGide 25*25 (1 шт.)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">25 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#4</span> <br>
                                            Удаление пластинчатого импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#5</span> <br>
                                            Установка классического имплантата ROOTT FORM (Швейцария, Trate AG)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#6</span> <br>
                                            Синус-лифтинг (без учета стоимости материала)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="accordion-home">
                            <div data-tab="home-tab-5" class="accordion-home__tab">
                                <div class="accordion-home__nav-column">
                                    <div class="accordion-home__decor accordion-home__decor_blue"></div>

                                    <div class="accordion-home__nav-title">Хирургия</div>
                                    <div class="accordion-home__nav-subtitle">Любые хирургические операции
                                    </div>
                                </div>
                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_turquoise"></div>
                                </div>
                            </div>
                            <div id="home-tab-5" class="accordion-home__content">

                                <div class="accordion-home__img-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/price-page-img.jpg" alt="">

                                    <div class="accordion-home__label">
                                        от <span>5 000₽</span>
                                    </div>


                                    <div class="accordion-home__btn-call">
                                        <a class="btn-call" href="#">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#1</span> <br>
                                            Применение обогащенной тромбоцитами аутоплазмы (плазмолифтинг)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">6 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#2</span> <br>
                                            Удаление классического импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#3</span> <br>
                                            Мембрана BioGide 25*25 (1 шт.)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">25 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#4</span> <br>
                                            Удаление пластинчатого импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#5</span> <br>
                                            Установка классического имплантата ROOTT FORM (Швейцария, Trate AG)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#6</span> <br>
                                            Синус-лифтинг (без учета стоимости материала)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="accordion-home">
                            <div data-tab="home-tab-6" class="accordion-home__tab">
                                <div class="accordion-home__nav-column">
                                    <div class="accordion-home__decor accordion-home__decor_red"></div>

                                    <div class="accordion-home__nav-title">Ортодонтия</div>
                                    <div class="accordion-home__nav-subtitle">Любые хирургические операции
                                    </div>
                                </div>
                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_red"></div>
                                </div>
                            </div>
                            <div id="home-tab-6" class="accordion-home__content">

                                <div class="accordion-home__img-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/price-page-img.jpg" alt="">

                                    <div class="accordion-home__label">
                                        от <span>6 000₽</span>
                                    </div>


                                    <div class="accordion-home__btn-call">
                                        <a class="btn-call" href="#">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#1</span> <br>
                                            Применение обогащенной тромбоцитами аутоплазмы (плазмолифтинг)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">6 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#2</span> <br>
                                            Удаление классического импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#3</span> <br>
                                            Мембрана BioGide 25*25 (1 шт.)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">25 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#4</span> <br>
                                            Удаление пластинчатого импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#5</span> <br>
                                            Установка классического имплантата ROOTT FORM (Швейцария, Trate AG)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#6</span> <br>
                                            Синус-лифтинг (без учета стоимости материала)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-home">
                            <div data-tab="home-tab-7" class="accordion-home__tab">
                                <div class="accordion-home__nav-column">
                                    <div class="accordion-home__decor accordion-home__decor_lilac"></div>

                                    <div class="accordion-home__nav-title">Гигиена</div>
                                    <div class="accordion-home__nav-subtitle">Любые виды лечения зубов
                                    </div>
                                </div>
                            <div class="accordion-home__decor-wrapper">
                                <div class="accordion-home__arrow"></div>
                                <div class="accordion-home__strip strip strip_lilac"></div>
                            </div>
                            </div>
                            <div id="home-tab-7" class="accordion-home__content">

                                <div class="accordion-home__img-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/price-page-img.jpg" alt="">

                                    <div class="accordion-home__label">
                                        от <span>6 000₽</span>
                                    </div>


                                    <div class="accordion-home__btn-call">
                                        <a class="btn-call" href="#">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#1</span> <br>
                                            Применение обогащенной тромбоцитами аутоплазмы (плазмолифтинг)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">6 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#2</span> <br>
                                            Удаление классического импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#3</span> <br>
                                            Мембрана BioGide 25*25 (1 шт.)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">25 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#4</span> <br>
                                            Удаление пластинчатого импланта, установленного в другой клинике
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#5</span> <br>
                                            Установка классического имплантата ROOTT FORM (Швейцария, Trate AG)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>#6</span> <br>
                                            Синус-лифтинг (без учета стоимости материала)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">35 000 ₽</div>
                                    </div>

                                </div>

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