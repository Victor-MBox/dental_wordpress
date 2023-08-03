<?php
/* 
Template Name: О клинике
*/
?>

<?php
get_header();
?>

<div class="page-all">
    <section class="page-main-section page-main-section_about">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-6.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">О нашей клинике</div>
                        <div class="page-main-section__description description">Стоматологическая клиника "Зубки всем" предлагает высококачественные услуги в области стоматологии, используя в своей работе современное оборудование и новейшие технологии. Одним из главных преимуществ клиники является наличие собственного производства, что позволяет контролировать все этапы работы, начиная от создания материалов и заканчивая непосредственно лечением. Это гарантирует высокое качество предоставляемых услуг и исключает возможность использования некачественных материалов.
                            <br> <br>
                            Важным аспектом работы клиники "Зубки всем" является прозрачность ценообразования. В нашей клинике отсутствуют скрытые платежи и непредвиденные дополнительные расходы. При этом цены в клинике остаются разумными, что делает высококачественную стоматологию доступной для широкого круга пациентов.
                        </div>

                        <div id="textHidden" class="text-hidden">
                            Особое внимание в "Зубки всем" уделяется квалификации врачей. В нашей команде работают только опытные специалисты, регулярно повышающие свою квалификацию и следующие за последними новинками в области стоматологии. Благодаря этому пациенты могут быть уверены, что их здоровье находится в надежных руках.
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>

                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-05.jpg" alt="">
                    </div>
                </div>

                <div class="page-main-section__form page-main-section_about__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">

                                <input type="hidden" name="form_name" value="Общая на странице О Компании">

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
        </div>
    </section>

    <section class="page-second-section">
        <div class="container page-second-section__container">
            <div class="page-second-section__name">
                <div class="page-second-section__subtitle subtitle">Мы больше, чем просто стоматология!</div>
                <div class="page-second-section__title title">О нашей клинике</div>
                <div class="page-second-section__description description">Клиника "Зубки Всем" - место, где забота о здоровье вашей улыбки становится нашим главным приоритетом! Мы обеспечим вас высококвалифицированными услугами, сделаем посещение максимально комфортным и поможем в вопросах достижения безупречной улыбки!
                </div>
            </div>
    </section>
</div>

<section class="page-about-section">
    <div class="page-about-section__container container">
        <div class="page-about-section__column">

            <div class="page-about-section__buttons-page">

                <a class="buttons-page-1" href="/o-klinike/lechenie-v-rassrochku/">
                    <div class="buttons-page-1__img"></div>
                    <div class="buttons-page-1__text">Лечение в рассрочку</div>
                </a>

                <a class="buttons-page-2" href="/o-klinike/nalogovyj-vychet/">
                    <div class="buttons-page-2__img"></div>
                    <div class="buttons-page-2__text">Налоговый вычет</div>
                </a>

                <a class="buttons-page-3" href="/o-klinike/garantiya-na-uslugi/">
                    <div class="buttons-page-3__img"></div>
                    <div class="buttons-page-3__text">Гарантия на услуги</div>
                </a>

            </div>


            <div class="page-service-section__form">
                <div class="page-content__title">Запись <br>на консультацию</div>
                <div class="page-content__text">Обратите внимание, все наши консультации – бесплатные</div>

                <div class="feedback-form-laboratory">

                    <div class="page-about-section__decor-lilac decor-lilac"></div>
                    <div class="page-about-section__decor-blue decor-blue"></div>

                    <div class="feedback-form-laboratory__form">

                        <form action="#" class="form-laboratory" id="form-3">

                            <input type="hidden" name="form_name" value="Общая на странице О компании">

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
                                <input class="btn btn_submit" type="submit" value="Записаться" data-callback="onSubmit">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="page-about-section__column">

            <div class="page-about-section__chapter" id="start-link">

                <div class="page-about-section__banner">
                    <div class="page-about-section__label"><span>12 + </span>Квалифицированных специалистов</div>
                    <div class="page-about-section__label page-about-section__label_lilac"><span>23 + </span>лет работы на базе лаборатории АЛВАДЕНТ</div>
                    <div class="page-about-section__label page-about-section__label_yellow"><span>20 000 + </span>Изготовленных
                        протезов</div>
                </div>

                <div class="page-about-section__text">Московская клиника «Зубки. Всем» поможет решить любые проблемы с вашими зубами. Мы используем наработки ведущих мировых центров стоматологии, чтобы сделать улыбку наших пациентов ослепительной. <br><br>
                    О компании «Зубки Всем» можно уверенно сказать, что здесь работает сплоченная команда профессионалов, влюбленная в свое дело. Самые сложные случаи, благодаря высокой квалификации наших стоматологов-терапевтов, хирургов, ортопедов и ортодонтов решаются быстро, качественно, с максимальным комфортом для пациента.<br><br>

                    Для точной диагностики у нас имеется высокотехнологичное оборудование – цифровые томографы, ортопантомографы и радиовизиографы. Полную диагностику можно пройти за одно обращение в клинику.<br><br>

                    Компания имеет собственную зуботехническую лабораторию АЛВАДЕНТ, оснащенную по последнему слову стоматологической науки. Передовая аппаратура позволяет быстро и качественно моделировать и изготовлять любые типы протезов, имплантов, ортодонтических конструкций.<br><br>

                    Качество стоматологического материала и успешная работа наших врачей позволяют предоставлять пациентам гарантию на оказанные услуги.<br><br>

                    Каждый пациент для нас ,прежде всего, личность. Приоритетом для врача клиники является индивидуальный подход и забота о безопасности для здоровья пациентов. Для вас мы создали программу лояльности, предоставляем скидки и бонусы, регулярно проводим акции.<br><br>

                    Чтобы убедиться в высоком уровне компании Зубки всем стоит просто прийти на прием, и вы сразу почувствуете, что очутились в надежных, заботливых руках настоящих профессионалов.<br><br>
                </div>

                <div class="page-about-section__slider">
                    <div id="loader">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/ajax-loader.gif" alt="Loading..." />
                    </div>

                    <div class="page-about-section__slider-wrapper" id="aboutLaboratorySlider">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-01.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-02.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-03.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-01.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-02.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-03.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-01.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-02.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-03.jpg" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/slider/about-slider-02.jpg" alt="">
                    </div>
                    <div class="slider-arrows">
                        <button class="slider-arrows__left" id="aboutLaboratorySliderPrev" type="button"></button>
                        <button class="slider-arrows__right" id="aboutLaboratorySliderNext" type="button"></button>
                    </div>
                    <div class="slider-counter">
                        <span class="current-slide">1</span>/<span class="total-slides"></span>
                    </div>
                </div>


            </div>

            <div class="page-about-section__chapter">
                <div class="page-about-section__quote">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/yuliya-igorevna.jpeg" alt="">
                    <div class="page-about-section__quote-text">“Мы не просто делаем зубы, мы помогаем людям обрести уверенность и повысить свой уровень жизни!”
                    </div>
                    <div class="page-about-section__quote-label">
                        <span>Замура <br> Юлия Игоревна</span>
                        Руководитель зуботехнической лаборатории
                    </div>
                </div>
            </div>

            <div class="page-content__chapter">
                <div class="page-content__title">Проверьте подлинность отзывов</div>
                <div class="rating-section__companies-rating companies-rating">
                    <script src="https://res.smartwidgets.ru/app.js" defer></script>
                    <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
                </div>
            </div>

        </div>

    </div>
</section>


<?php
get_footer();
?>