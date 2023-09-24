<?php
/* 
Template Name: Наша лаборатория
*/
?>

<?php
get_header();
?>

<div class="page-all">

    <section class="page-main-section">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="" loading="lazy">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor.svg" alt="" loading="lazy">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-6.svg" alt="" loading="lazy">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">Наша лаборатория</div>
                        <div class="page-main-section__description description">ЗУБОТЕХНИЧЕСКАЯ ЛАБОРАТОРИЯ АЛВАДЕНТ начала свою деятельность в 1999 году. За эти годы наша лаборатория приобрела самое ценное – высокий профессионализм и огромный опыт изготовления любых, даже самых уникальных и сложных ортопедических конструкций. Благодаря репутации надежного партнера, к нам обращаются клиенты не только Москвы и Области, но практически всех регионов России.
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/home-about2.jpeg" alt="" loading="lazy">
                    </div>
                </div>

                <div class="page-main-section__form page-main-section_about__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">

                                <input type="hidden" name="form_name" value="Общая на странице Наша лаборатория">

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
</div>

<section class="page-second-section">
    <div class="container page-second-section__container">

        <div class="page-second-section__name">
            <div class="page-second-section__subtitle subtitle">МАСТЕРСКАЯ УЛЫБОК “АЛВАДЕНТ”</div>
            <div class="page-second-section__title title">О нашей лаборатории</div>
            <div class="page-second-section__description description">
                Зуботехническая лаборатория Мастерская улыбок “АЛВАДЕНТ” основана в 1999 году. За долгие годы мы приобрели бесценный опыт работыс клиниками Москвы, и в 2023 году мы решили открыть собственную клинику Зубки Всем. Наша миссия делать людей здоровыми и красивыми. Наше кредо – Вы никогда не должны возвращаться второй раз с той же проблемой.
            </div>
        </div>
</section>

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
                            <input type="hidden" name="form_name" value="Общая на странице Наша лаборатория">
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
            <div class="page-service-section__decor-wrapper">
                <div class="page-service-section__decor-content decor-lilac"></div>
                <div class="page-service-section__decor-content decor-yellow"></div>
            </div>

            <div class="page-about-section__chapter" id="start-link">
                <div class="page-about-section__banner page-about-section__banner_laboratoriya"></div>
            </div>

            <div class="page-content__chapter">
                <div class="page-content__title"> <b>Наши преимущества:</b> </div>

                <div class="page-content__list">
                    <ul>
                        <li>лаборатория оснащена всем необходимым и современным оборудованием для автономной работы;</li>
                        <li>в штате более 30 специалистов;</li>
                        <li>в лаборатории работаю зубные техники всех направлений: съемное протезирование, несъемное протезирование, 3D и Cad/Cam отделение, литейное отделение и ортодонтическое отделение;
                        </li>
                        <li>мы всегда идем в ногу со временем и осваиваем новые методики изготовления зубных протезов;</li>
                        <li>более сотни клиник Москвы работают с нашей лабораторией;</li>
                        <li>применяем только проверенные методики изготовления;</li>
                        <li>используем качественные материалы, проверенные временем производителей;</li>
                        <li>имеем всю необходимую документацию: лицензии, сертификаты качества и т.д.</li>
                    </ul>
                </div>
            </div>

            <!-- До-после -->
            <div class="page-content__chapter-home">
                <div class="page-content__title">До/После</div>

                <div class="page-content__before-after" id="beforeAfterSlider">

                    <div class="before-after">
                        <span id="before" class="before__btn">ДО</span>
                        <span id="after" class="after__btn">ПОСЛЕ</span>

                        <div class="before-after__gallery">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-after.jpg" alt="" loading="lazy" class="before-after__img">
                            <div class="before-after__gallery-after">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-before.jpg" alt="" loading="lazy" class="before-after__img">
                            </div>
                        </div>

                        <div class="before-after__procedure procedure">
                            <div class="procedure__column">
                                <div class="procedure__row-all">

                                    <div class="procedure__img">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="" loading="lazy">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-09-after.jpg" alt="" loading="lazy" class="before-after2__img">
                            <div class="before-after2__gallery-after">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-09-before.jpg" alt="" loading="lazy" class="before-after2__img">
                            </div>
                        </div>
                        <div class="before-after__procedure procedure">
                            <div class="procedure__column">
                                <div class="procedure__row-all">

                                    <div class="procedure__img">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="" loading="lazy">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-after.jpg" alt="" loading="lazy" class="before-after3__img">
                            <div class="before-after3__gallery-after">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-before.jpg" alt="" loading="lazy" class="before-after3__img">
                            </div>
                        </div>
                        <div class="before-after__procedure procedure">
                            <div class="procedure__column">
                                <div class="procedure__row-all">

                                    <div class="procedure__img">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="" loading="lazy">
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
        </div>
    </div>
</section>

<section class="page-reviews-section">
    <div class="page-reviews-section__container container">
        <div class="page-second-section__title title">Отзывы на независимых площадках</div>
        <script src="https://res.smartwidgets.ru/app.js" defer></script>
        <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
    </div>
</section>



<?php
get_footer();
?>