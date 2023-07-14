<?php
/* 
Template Name: Контакты
*/
?>

<?php
get_header();
?>

<div class="page">
    <section class="page-main-section page-main-section_about">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-8.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">Как до нас добраться?</div>
                        <div class="page-main-section__description description"><b>От метро «Измайловская»:</b> <br>
                            Первый вагон из центра, выход к улице 3-я Парковая.<br>
                            От метро автобус № 97 - до остановки Верхняя Первомайская улица, далее 3 минуты пешком. <br>
                            Или автобус № Т51 - до остановки 1-я Прядильная, далее 5 мин пешком. <br><br>
                            <b>От метро «Щёлковская»:</b> <br>
                            Последний вагон из центра. <br>
                            От метро автобус № 97 - до остановки Верхняя Первомайская улица, далее 3 минуты пешком.<br>
                            Или автобусы № 257, 52, Т32, Т41 - до остановки 3-я Парковая улица, далее 15 мин. пешком.
                            
                        </div>

                        <div id="textHidden" class="text-hidden">
                        <b>От метро «Первомайская»:</b> <br>
                            Выход из метро к Первомайской улице. <br>
                            От метро любой трамвай или автобусы № Т22, 634, 974, 223 - до остановки 3-я Парковая улица. <br>
                            Далее 10 минут пешком. <br> <br>

                        <b>От метро «Преображенская площадь»:</b> <br>
                            Первый вагон из центра. <br>
                            От метро автобус № 230 - до остановки 3-я Парковая улица, далее 3 минуты пешком. <br>
                            Или автобусы № Т83, 449, 52 - до остановки Монтажная улица, далее 12 мин пешком. <br> <br>

                            <b>От метро «Черкизовская»:</b> <br>
                            Автобус № 230, 52, 716, Т32, Т41, Т83 - до остановки Монтажная улица, далее 12 минут пешком. <br>
                            Или автобус № 34К - до остановки Школа, далее 8 мин пешком. <br>
                            Или автобус № 974 - до остановки 3-я Парковая улица, далее 4 мин пешком.

                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                        </div>

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
                <script src="https://res.smartwidgets.ru/app.js" defer></script>
                <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
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