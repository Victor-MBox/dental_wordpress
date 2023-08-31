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
                        <div class="page-main-section__subtitle subtitle"><?php the_field('about-main_podzagolovok') ?></div>
                        <div class="page-main-section__title title"><?php the_field('about-main_zagolovok') ?></div>
                        <div class="page-main-section__description description"><?php the_field('about-main_tekst') ?>
                        </div>

                        <div id="textHidden" class="text-hidden">
                            <?php the_field('about-main_tekst-hidden') ?>
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>

                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php the_field('about-main_izobrazhenie') ?>" alt="">
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
                <div class="page-second-section__subtitle subtitle"><?php the_field('about-second_podzagolovok') ?></div>
                <div class="page-second-section__title title"><?php the_field('about-second_zagolovok') ?></div>
                <div class="page-second-section__description description"><?php the_field('about-second_text') ?>
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

                    <div class="page-content__banner-wrapper">
                        <img src="<?php the_field('about-content_izobrazhenie') ?>" alt="">
                    </div>

                    <div class="page-about-section__label"><span><?php the_field('about-content_yarlyk_1') ?> </span><?php the_field('about-content_yarlyk_1_tekst') ?></div>
                    <div class="page-about-section__label page-about-section__label_lilac"><span><?php the_field('about-content_yarlyk_2') ?></span><?php the_field('about-content_yarlyk_2_tekst') ?></div>
                    <div class="page-about-section__label page-about-section__label_yellow"><span><?php the_field('about-content_yarlyk_3') ?> </span><?php the_field('about-content_yarlyk_3_tekst') ?></div>
                </div>

                <div class="page-about-section__text"><?php the_field('about-content_osnovnoj-tekst') ?>
                </div>

                <div class="page-about-section__slider">
                    <div id="loader">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/ajax-loader.gif" alt="Loading..." />
                    </div>

                    <div class="page-about-section__slider-wrapper" id="aboutLaboratorySlider">

                        <?php while (have_rows('about-content_slajdy')) : the_row(); ?>
                            <img src="<?php the_sub_field('slajd') ?>" alt="">
                        <?php endwhile; ?>


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