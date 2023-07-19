<?php
/* 
Template Name: О клинике
*/
?>

<?php
get_header();
?>

<div class="page">
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
                            Важным аспектом работы клиники "Зубки всем" является прозрачность ценообразования. В нашей клинике отсутствуют скрытые платежи и непредвиденные дополнительные расходы. Все услуги и их стоимость обсуждаются с пациентом заранее, что позволяет избежать неприятных сюрпризов при оплате. При этом цены в клинике остаются разумными, что делает высококачественную стоматологию доступной для широкого круга пациентов.
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
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-img.jpg" alt="">
                    </div>
                </div>

                <div class="page-main-section__form page-main-section_about__form">
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
                <div class="page-second-section__subtitle subtitle">Мы больше, чем просто стоматология!</div>
                <div class="page-second-section__title title">О нашей клинике</div>
                <div class="page-second-section__description description">Клиника "Зубки Всем" - место, где забота о здоровье вашей улыбки становится нашим главным приоритетом! Мы обеспечим вас высококвалифицированными услугами, сделаем посещение максимально комфортным и поможем в вопросах достижения безупречной улыбки!
                </div>
            </div>
    </section>

    <section class="page-about-section">
        <div class="page-about-section__container container">
            <div class="page-about-section__column">

                <div class="page-about-section__btn-wrapper">

                    <a class="btn-wrapper" href="#start-link">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor"></div>
                            <div class="btn-wrapper__number">01</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Зуботехническая лаборатория</div>
                            <div class="btn-wrapper__subtitle">Работает с 1999 года</div>
                        </div>
                    </a>

                    <a class="btn-wrapper" href="#o-laboratorii">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_red"></div>
                            <div class="btn-wrapper__number">02</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">О лаборатории</div>
                            <div class="btn-wrapper__subtitle">Входит в ТОП-10 лабораторий Москвы</div>
                        </div>
                    </a>

                    <a class="btn-wrapper" href="#oborudovaniye">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_lilac"></div>
                            <div class="btn-wrapper__number">03</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Наше оборудование</div>
                            <div class="btn-wrapper__subtitle">В клинике имеется все необходимое оборудование</div>
                        </div>
                    </a>

                    <a class="btn-wrapper" href="#tekhnologii">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor"></div>
                            <div class="btn-wrapper__number">04</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Технологии</div>
                            <div class="btn-wrapper__subtitle">Используем передовые технологии</div>
                        </div>
                    </a>

                    <a class="btn-wrapper" href="#etapy">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_blue"></div>
                            <div class="btn-wrapper__number">05</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Этапы изготовления протеза</div>
                            <div class="btn-wrapper__subtitle">4 важных этапа</div>
                        </div>
                    </a>

                    <a class="btn-wrapper" href="#pochemu-vazhno">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_red"></div>
                            <div class="btn-wrapper__number">06</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Почему важно?</div>
                            <div class="btn-wrapper__subtitle">Клиника имеет собственную зуботехническую лабораторию</div>
                        </div>
                    </a>

                </div>

                <div class="page-about-section__buttons-page">

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

                        <div class="page-about-section__decor-lilac decor-lilac"></div>
                        <div class="page-about-section__decor-blue decor-blue"></div>

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

            <div class="page-about-section__column">
                <div class="page-service-section__decor-wrapper">
                    <div class="page-service-section__decor-content decor-lilac"></div>
                    <div class="page-service-section__decor-content decor-yellow"></div>
                </div>

                <div class="page-about-section__chapter" id="start-link">

                    <div class="page-about-section__banner">
                        <div class="page-about-section__label"><span>12 + </span>Квалифицированных специалистов</div>
                        <div class="page-about-section__label page-about-section__label_lilac"><span>23 + </span>лет работы на базе лаборатории АЛВАДЕНТ</div>
                        <div class="page-about-section__label page-about-section__label_yellow"><span>20 000 + </span>Изготовленных
                            протезов</div>
                    </div>

                    <div class="page-about-section__text">В 2021 году после модернизации оборудования и расширения производственных площадей наша зуботехническая лаборатория стала принимать заказы и обслуживать крупные стоматологические центры в Москве, Подмосковье и других городов России.</div>
                </div>

                <div class="page-about-section__chapter" id="o-laboratorii">
                    <div class="page-about-section__title">О лаборатории</div>
                    <div class="page-about-section__text">В клинике «ROOTT» работает своя высокотехнологичная лаборатория полного цикла, оснащенная современным оборудованием, в том числе системами 3D-моделирования, и материалами европейского производства. Мы располагаем всем необходимым, чтобы создать ортопедическую конструкцию любой сложности: культевые вкладки, коронки, несъемные и съемные протезы, каркасы, мосты, виниры и многое другое. Наличие собственной лаборатории в разы ускоряет процесс лечения пациента, а также позволяет зубным техникам тесно взаимодействовать со стоматологами, чтобы спроектировать идеальный протез для каждого пациента. В компании работает более 30 высококвалифицированных зубных техников. Именно люди – неотъемлемая часть успешного конечного результата, поэтому большое внимание уделяется в клинике не только оснащению, но и повышению квалификации техников. Специалисты лаборатории постоянно повышают свою квалификацию, обучаясь последним технологиям, появляющимся в стоматологии.</div>
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

                <div class="page-about-section__chapter" id="oborudovaniye">
                    <div class="page-about-section__title">Оборудование лаборатории</div>
                    <div class="page-about-section__text">Мы обновляем оборудование и следим за новинками в области стоматологии. Лаборатория оснащена всем необходимым для качественного изготовления ортопедических конструкций.</div>

                    <div class="page-about-section__carousel-wrapper">
                        <div class="page-about-section__carousel carousel" id="slickCarouselEquipment">

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/carousel/about-carousel-01.jpg" alt="">
                                </div>
                                <div class="carousel__name">Оптический 3D сканер</div>
                                <div class="carousel__text">Система сканирования с оптической головкой имеет 4 камеры и делает высокоточные снимки.</div>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/carousel/about-carousel-02.jpg" alt="">
                                </div>
                                <div class="carousel__name">Внутриротовой сканер</div>
                                <div class="carousel__text">Создаёт 3D слепок зубов и отображает модель на компьютере.</div>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/carousel/about-carousel-03.jpg" alt="">
                                </div>
                                <div class="carousel__name">Автоклавы Tuttanauer</div>
                                <div class="carousel__text">Приборы для стерилизации всего оборудования нашей клиники.</div>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/carousel/about-carousel-04.jpg" alt="">
                                </div>
                                <div class="carousel__name">Фрезерный аппарат Zicoc</div>
                                <div class="carousel__text">Высокоточный аппарат для вырезания протезов.</div>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/carousel/about-carousel-01.jpg" alt="">
                                </div>
                                <div class="carousel__name">Оптический 3D сканер</div>
                                <div class="carousel__text">Система сканирования с оптической головкой имеет 4 камеры и делает высокоточные снимки.</div>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/about/carousel/about-carousel-02.jpg" alt="">
                                </div>
                                <div class="carousel__name">Внутриротовой сканер</div>
                                <div class="carousel__text">Создаёт 3D слепок зубов и отображает модель на компьютере.</div>
                            </div>

                        </div>
                    </div>

                    <div class="slider-arrows">
                        <button class="slider-arrows__left" id="slickCarouselEquipmentPrev" type="button"></button>
                        <button class="slider-arrows__right" id="slickCarouselEquipmentNext" type="button"></button>
                    </div>

                </div>

                <div class="page-about-section__chapter" id="etapy">
                    <div class="page-about-section__title">Этапы изготовления протеза</div>
                    <div class="page-about-section__text">Мы обновляем оборудование и следим за новинками в области стоматологии. Лаборатория оснащена всем необходимым для качественного изготовления ортопедических конструкций.</div>
                    <div class="page-about-section__stages">

                        <div class="page-about-section__stages-item">
                            <span>01</span>
                            <div class="page-about-section__stages-title">Консультация и диагностика</div>
                            <div class="page-about-section__stages-text">Проводятся необходимые обследования по снимкам и компьютерной томографии, выбирается метод лечения. <br> Составляется план лечения со сроками и стоимостью.</div>
                        </div>

                        <div class="page-about-section__stages-item">
                            <span>02</span>
                            <div class="page-about-section__stages-title">Подготовка, снятие слепков</div>
                            <div class="page-about-section__stages-text">Вам устанавливается необходимое количество имплантов (возможно совместно с удалением). Далее доктор снимает слепки для изготовления каркаса и протеза в зуботехнической лаборатории.</div>
                        </div>

                        <div class="page-about-section__stages-item">
                            <span>03</span>
                            <div class="page-about-section__stages-title">Примерка каркаса и протеза</div>
                            <div class="page-about-section__stages-text">После того как конструкции будут изготовлены в лаборатории, мы пригласим вас на примерку и корректировку по прикусу. Можно будет оценить удобство, функциональность и эстетику протеза, по желанию внести изменения.</div>
                        </div>

                        <div class="page-about-section__stages-item">
                            <span>04</span>
                            <div class="page-about-section__stages-title">Установка конструкции</div>
                            <div class="page-about-section__stages-text">Финальная установка и закрепление протеза. Рекомендации доктора по уходу, необходимым лекарствам и режиму жизни. Определение плана послеоперационных консультаций и осмотров.</div>
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

                <div class="page-about-section__chapter" id="pochemu-vazhno">
                    <div class="page-about-section__title">Почему так важно, чтобы лаборатория находилась в клинике?</div>
                    <div class="page-about-section__text">Мы обновляем оборудование и следим за новинками в области стоматологии. Лаборатория оснащена всем необходимым для качественного изготовления ортопедических конструкций.</div>

                    <div class="page-about-section__advantages-wrapper">
                        <div class="page-about-section__advantages">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/about/ic-about-01.svg" alt="">
                            <div class="page-about-section__advantages-text">Нет наценки на изделия и доставку, потому что мы производим их самостоятельно.</div>
                        </div>

                        <div class="page-about-section__advantages">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/about/ic-about-02.svg" alt="">
                            <div class="page-about-section__advantages-text">Нет наценки на изделия и доставку, потому что мы производим их самостоятельно.</div>
                        </div>

                        <div class="page-about-section__advantages">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/about/ic-about-03.svg" alt="">
                            <div class="page-about-section__advantages-text">Нет наценки на изделия и доставку, потому что мы производим их самостоятельно.</div>
                        </div>

                        <div class="page-about-section__advantages">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/about/ic-about-04.svg" alt="">
                            <div class="page-about-section__advantages-text">Нет наценки на изделия и доставку, потому что мы производим их самостоятельно.</div>
                        </div>

                        <div class="page-about-section__advantages">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/about/ic-about-05.svg" alt="">
                            <div class="page-about-section__advantages-text">Нет наценки на изделия и доставку, потому что мы производим их самостоятельно.</div>
                        </div>

                        <div class="page-about-section__advantages">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/about/ic-about-06.svg" alt="">
                            <div class="page-about-section__advantages-text">Нет наценки на изделия и доставку, потому что мы производим их самостоятельно.</div>
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