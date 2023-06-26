<?php
/* 
Template Name: Контакты
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
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
        </div>

        <div class="container page-main-section__container">
            <div class="page-main-section__column">
                <div class="page-main-section__name">
                    <div class="page-main-section__subtitle subtitle">Мы – больше чем обычная стоматология!</div>
                    <div class="page-main-section__title title">Как нас найти?</div>
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

    <section class="page-contact-second-section">
        <div class="container page-second-section__container">
            <div class="page-about-section__quote">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/accordion-img.jpg" alt="">
                <div class="page-about-section__quote-text">“Каждый зубной техник проходит обучение на уровне хирурга-имплантолога. Без глубинных знаний, в том числе хирургии и строения кости, невозможно изготовить качественное изделие. <br> <br> Без людей станок сам по себе не заработает, поэтому квалифицированные зубные техники - это наша основа”
                </div>
                <div class="page-about-section__quote-label">
                    <span>Меркушев <br> Юрий Вячеславович</span>
                    Руководитель зуботехнической лаборатории
                </div>
            </div>
            <div class="page-second-section__decor">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-10.svg" alt="">
            </div>
        </div>
    </section>

    <section class="page-contact-third-section">
        <div class="page-contact-third-section__container container">

            <div class="page-contact-third-section__column">
                <div class="page-contact-third-section__info">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/contacts/contact-info.svg" alt="">
                </div>
                <div class="page-contact-third-section__title">Контакты</div>
                <div class="page-contact-third-section__phone">
                    <a href="tel:+74951503001">+7 (495) 150-30-01</a>
                </div>
                <div class="page-contact-third-section__map">Москва, 3-я Парковая ул, 41А</div>
                <div class="page-contact-third-section__time">Пн-Сб 10:00-20:00</div>
            </div>
            <div class="page-contact-third-section__column">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2d9b363750c72220ff7e4284c5d40110f449c1cd9f5f73a33665048a7afab7c9&amp;width=100%25&amp;height=342&amp;lang=ru_RU&amp;scroll=true"></script>

                <div class="page-contact-third-section__decor-content decor-lilac"></div>

            </div>
        </div>
    </section>


    <section class="page-contact-fourth-section">
        <div class="page-contact-fourth-section__container container">
            <div class="page-contact-fourth-section__name">
                <div class="page-contact-fourth-section__title title">Проверьте подлинность отзывов</div>
                <div class="page-contact-fourth-section__description description">Мы всегда честны с нашими пациентами, поэтому не забудьте проверить рейтинг и отзывы о нашей клинике
                </div>
            </div>

            <div class="page-contact-fourth-section__companies-rating companies-rating">
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

            <div class="page-about-section__buttons-page">
                <div class="page-contact-fourth-section__title title">Узнайте возможности лечения ;)</div>
                
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

        </div>
        <div class="page-contact-fourth-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-6.svg" alt="">
        </div>


    </section>


</div>

<?php
get_footer();
?>