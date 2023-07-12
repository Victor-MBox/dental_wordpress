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

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
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
                                <div class="accordion-home__nav-subtitle">3 Специалиста</div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">
                            <div data-tab="tab1-faq-tab-1" class="faq__tab">Борисенко Инна Владимировна</div>
                            <div id="tab1-faq-tab-1" class="faq__content">
                                <div class="page-content__banner page-content__banner_borisenko">
                                    <div class="page-content__label">стаж <span>11 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт, хирург</span></div>
                                    <a href="borisenko-inna-vladimirovna/" class="btn-uncover">Подробнее</a>
                                </div>
                            </div>

                            <div data-tab="tab1-faq-tab-2" class="faq__tab">Зейналов Зейнал Вилаяддинович</div>
                            <div id="tab1-faq-tab-2" class="faq__content">
                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>12 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="zejnalov-zejnal-vilayaddinovich/" class="btn-uncover">Подробнее</a>
                                </div>
                            </div>

                            <div data-tab="tab1-faq-tab-3" class="faq__tab">Сарыбаев Анарбек Муктарбекович</div>
                            <div id="tab1-faq-tab-3" class="faq__content">
                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>12 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт</span></div>
                                    <a href="sarybaev-anarbek-muktarbekovich/" class="btn-uncover">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-2" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Ортопеды</div>
                                <div class="accordion-home__nav-subtitle">3 Специалиста</div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-2" class="accordion-home__content">
                            <div data-tab="tab2-faq-tab-1" class="faq__tab">Антоновский Антон Анатольевич</div>

                            <div id="tab2-faq-tab-1" class="faq__content">
                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>32 года</span></div>
                                    <div class="page-content__label-prof"><span>Стоматолог-ортопед, главный врач</span></div>
                                    <a href="antonovskij-anton-anatolevich/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-2" class="faq__tab">Игонин Василий Валентинович</div>

                            <div id="tab2-faq-tab-2" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>13 лет</span></div>
                                    <div class="page-content__label-prof"><span>Ортопед, хирург</span></div>
                                    <a href="igonin-vasilij-valentinovich/" class="btn-uncover">Подробнее</a>

                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-3" class="faq__tab">Хандогин Антон Олегович</div>

                            <div id="tab2-faq-tab-3" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>7 лет</span></div>
                                    <div class="page-content__label-prof"><span>Ортопед</span></div>
                                    <a href="handogin-anton-olegovich/" class="btn-uncover">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-3" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Хирурги-имплантологи</div>
                                <div class="accordion-home__nav-subtitle">1 Специалист</div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-3" class="accordion-home__content">

                            <div data-tab="tab3-faq-tab-1" class="faq__tab">Журов Илья Владимирович</div>

                            <div id="tab3-faq-tab-1" class="faq__content">

                                <div class="page-content__banner">
                                    <div class="page-content__label">стаж <span>12 лет</span></div>
                                    <div class="page-content__label-prof"><span>Хирург имплантолог</span></div>
                                    <a href="zhurov-ilya-vladimirovich/" class="btn-uncover">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-4" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Гигиенисты</div>
                                <div class="accordion-home__nav-subtitle">2 Специалиста</div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-4" class="accordion-home__content">

                            <div data-tab="tab4-faq-tab-1" class="faq__tab">Джахбарова Рабият Магомедгаджиевна</div>

                            <div id="tab4-faq-tab-1" class="faq__content">

                                <div class="page-content__banner page-content__banner_borisenko">
                                    <div class="page-content__label">стаж <span>18 лет</span></div>
                                    <div class="page-content__label-prof"><span>Гигиенист, ассистент стоматолога</span></div>
                                    <a href="dzhahbarova-rabiyat-magomedgadzhievna/" class="btn-uncover">Подробнее</a>
                                </div>
                            </div>

                            <div data-tab="tab4-faq-tab-2" class="faq__tab">Байкулова Асият Хамитовна</div>

                            <div id="tab4-faq-tab-2" class="faq__content">

                                <div class="page-content__banner page-content__banner_borisenko">
                                    <div class="page-content__label">стаж <span>10 лет</span></div>
                                    <div class="page-content__label-prof"><span>Гигиенист</span></div>
                                    <a href="bajkulova-asiyat-hamitovna/" class="btn-uncover">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-5" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Ортодонты</div>
                                <div class="accordion-home__nav-subtitle">1 Специалист</div>
                            </div>
                            <div class="accordion-home__strip strip strip_turquoise"></div>
                        </div>
                        <div id="home-tab-5" class="accordion-home__content">

                            <div data-tab="tab5-faq-tab-1" class="faq__tab">Бачулис Марина Александровна</div>

                            <div id="tab5-faq-tab-1" class="faq__content">

                                <div class="page-content__banner page-content__banner_borisenko">
                                    <div class="page-content__label">стаж <span>2 года</span></div>
                                    <div class="page-content__label-prof"><span>Ортодонт, гигиенист</span></div>
                                    <a href="bachulis-marina-aleksandrovna/" class="btn-uncover">Подробнее</a>
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
                                <div class="accordion-page__nav-subtitle">3 Специалиста</div>
                            </div>
                        </div>
                        <div id="page-tab-1" class="accordion-page__content">
                            <div class="accordion-page__content-decor"></div>

                            <div class="page-tab__nav">

                                <ul>
                                    <li><button class="link-page active-tab" href="borisenko-inna-vladimirovna/" onclick="toggleActiveClass(this)">Борисенко Инна Владимировна</button></li>
                                    <li><button class="link-page" href="zejnalov-zejnal-vilayaddinovich/" onclick="toggleActiveClass(this)">Зейналов Зейнал Вилаяддинович</button></li>
                                    <li><button class="link-page" href="sarybaev-anarbek-muktarbekovich/" onclick="toggleActiveClass(this)">Сарыбаев Анарбек Муктарбекович</button></li>
                                </ul>
                            </div>
                        </div>


                        <div class="accordion-page">
                            <div data-tab="page-tab-3" class="accordion-page__tab">
                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_lilac"></div>
                                    <div class="accordion-page__number">02</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Ортопеды</div>
                                    <div class="accordion-page__nav-subtitle">3 Специалиста</div>
                                </div>
                            </div>
                            <div id="page-tab-3" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_lilac"></div>

                                <div class="page-tab__nav">

                                    <ul>
                                        <li><button class="link-page" href="antonovskij-anton-anatolevich/" onclick="toggleActiveClass(this)">Антоновский Антон Анатольевич</button></li>
                                        <li><button class="link-page" href="igonin-vasilij-valentinovich/" onclick="toggleActiveClass(this)">Игонин Василий Валентинович</button></li>
                                        <li><button class="link-page" href="handogin-anton-olegovich/" onclick="toggleActiveClass(this)">Хандогин Антон Олегович</button></li>
                                    </ul>

                                </div>

                            </div>
                        </div>

                        <div class="accordion-page">
                            <div data-tab="page-tab-2" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_red"></div>
                                    <div class="accordion-page__number">03</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Хирурги-имплантологи</div>
                                    <div class="accordion-page__nav-subtitle">1 Специалист</div>
                                </div>
                            </div>
                            <div id="page-tab-2" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                                <div class="page-tab__nav">

                                    <ul>
                                        <li><button class="link-page" href="zhurov-ilya-vladimirovich/" onclick="toggleActiveClass(this)">Журов Илья Владимирович</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-page">
                            <div data-tab="page-tab-5" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_blue"></div>
                                    <div class="accordion-page__number">04</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Гигиенисты</div>
                                    <div class="accordion-page__nav-subtitle">2 Специалиста</div>
                                </div>
                            </div>
                            <div id="page-tab-5" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_blue"></div>
                                <div class="page-tab__nav">
                                    <ul>
                                        <li><button class="link-page" href="dzhahbarova-rabiyat-magomedgadzhievna/" onclick="toggleActiveClass(this)">Джахбарова Рабият Магомедгаджиевна</button></li>
                                        <li><button class="link-page" href="bajkulova-asiyat-hamitovna/" onclick="toggleActiveClass(this)">Байкулова Асият Хамитовна</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-page">
                            <div data-tab="page-tab-6" class="accordion-page__tab">

                                <div class="accordion-page__nav-item">
                                    <div class="accordion-page__decor accordion-page__decor_red"></div>
                                    <div class="accordion-page__number">05</div>
                                </div>

                                <div class="accordion-page__nav-column">
                                    <div class="accordion-page__nav-title">Ортодонты</div>
                                    <div class="accordion-page__nav-subtitle">1 Специалист</div>
                                </div>
                            </div>
                            <div id="page-tab-6" class="accordion-page__content">
                                <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                                <div class="page-tab__nav">
                                    <ul>
                                        <li><button class="link-page" href="bachulis-marina-aleksandrovna/" onclick="toggleActiveClass(this)">Бачулис Марина Александровна</button></li>
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
                                <div class="page-content__banner page-content__banner_borisenko">
                                    <div class="page-content__name">Борисенко <br> Инна <br> Владимировна</div>
                                    <div class="page-content__label">стаж <span>11 лет</span></div>
                                    <div class="page-content__label-prof"><span>Терапевт, хирург</span></div>
                                    <div class="page-content__btn-call">
                                        <button class="btn-call" data-modal="mainModal">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Записаться на прием <br> к <span>Инне Владимировне</span></div>
                                        </button>
                                    </div>

                                    <div class="page-content__btn-accordion btn-accordion">
                                        <div class="btn-accordion__header">
                                            <div class="btn-accordion__img"></div>
                                            <div class="btn-accordion__text">Задать вопрос <br> <span>Инне Владимировне</span></div>
                                        </div>
                                        <div class="btn-accordion__content">

                                            <form action="#" class="form-portfolio" id="form-2">
                                                <div class="form-portfolio__input">
                                                    <input type="text" name="name" placeholder="Имя" class="input">
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
                                                    <input class="btn btn_submit" type="submit" value="Узнать больше">
                                                </div>
                                            </form>

                                        </div>

                                    </div>


                                </div>
                                <div class="page-content__first-decor">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
                                </div>

                                <div class="page-content__chapter">
                                    <div class="page-content__title">Опыт, обрабование</div>
                                    <div class="page-content__text">ФГБОУВО "Пензенский государственный университет" 2013-2019 Первичная аккредитация "Стоматология общей практики" профессиональный стандарт врач-стоматолог 2019г. <br> <br>
                                        ГБОУ СПОРО" Ростовский базовый медицинский колледж" диплом с отличием квалификация Зубной врач 2008-2012
                                    </div>
                                </div>

                                <div class="page-content__chapter">
                                    <div class="page-content__title">Повышение квалификации</div>
                                    <div class="page-content__text">2010 г. «Просто об эстетике» 3мESPE, доктор Карлос Фернандес Вилларес<br> <br>
                                        2012 г. «Принципы профилактики переимплантита с использованием современных технологий» Swiss Dental Academy EMS, Дмитриева А.С.<br> <br>
                                        2012 г. «Эффективное применение ультразвука в эндодонтии» Swiss Dental Academy EMS Дмитриева А.С.<br> <br>
                                        2014 г. «Мир высокой эстетики в стоматологии» Tokugawa Dental -Proteco<br> <br>
                                        2015 г. «Icon-Infiltration Concept» DMG Валлекс М , Скатова Е.А.<br> <br>
                                        2017 г. « Восстановление безнадежных Зубов» Dentsly Sirona, Алиев Р.О.<br> <br>
                                        2018 г. "Эстетико-функциональные реставрации, простые решения на каждый день. Композиты IDS» Dental Academy Павлов А.А. Ростов-на-Дону<br> <br>
                                        2018 г. «Система имплантат SKY Fast&Fixed. Имплантация с немедленной нагрузкой» Bredent medical Эдуард Бреленко и Роланд Бенц Ростов-на-Дону<br> <br>
                                        2019 г. «Orthodontic Congress» HiOHI-S , Daniela Storino, Andre Horn, Birte Melsen, Giorgio Fiorelli, Jeong-IL Kim, Paris<br> <br>
                                        2019 г. «Временные и постоянные дискомфорты. От простого к сложному» KavoKerr Москва<br> <br>
                                        2019 г. «Анализ ошибок и осложнений 2 класса по Блэку. Инновации в решении проблем» KavoKerr Воробьева Ю.Б.<br> <br>
                                        2019 г. «Цифровая окклюзия и Сплинт-терапия» HiOHI-S Кочкаров П.Г. Москва<br> <br>
                                        2020 г. «Диагностика, лечение, профилактика новой коронавирусной инфекции в первичной медико-санитарной помощи на дому» Москва ПМ и ФО МзРФ<br> <br>
                                        2020 г. «Организация медицинской помощи при новой коронавирусной инфекции» Москва<br> <br>
                                        2020 г. «Рентгенологические признаки некоторых патологических процессов по типу рарефикации в зубочелюстной системе» KavoKerr Фролов С. Москва<br> <br>
                                        2021 г. «Современные концепции профилактики кариеса у детей и взрослых» Dental Academy Ванин А.В. Москва<br> <br>
                                        2021 г. «Post & Core. 16 шагов идеальной post-эндодонтии. Ортопедический протокол для терапевтов. Подрезала А.М. Москва.
                                    </div>
                                </div>

                        </section>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="page-reviews-section">
        <div class="page-reviews-section__container container">
            <script src="https://res.smartwidgets.ru/app.js" defer></script>
            <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
        </div>
    </section>
</div>






<?php
get_footer();
?>