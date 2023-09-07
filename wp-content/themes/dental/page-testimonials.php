<?php
/* 
Template Name: Отзывы
*/
?>

<?php
get_header();
?>

<div class="page-all">
    <section class="page-main-section page-main-section_about">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="" loading="lazy">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-8.svg" alt="" loading="lazy">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-9.svg" alt="" loading="lazy">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle"><?php the_field('reviews-main_podzagolovok') ?></div>
                        <div class="page-main-section__title title"><?php the_field('reviews-main_zagolovok') ?></div>
                        <div class="page-main-section__description description"><?php the_field('reviews-main_tekst') ?>
                        </div>
                        <div id="textHidden" class="text-hidden">
                            <?php the_field('reviews-main_skrytyj-tekst') ?>
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php the_field('reviews-main_kartinka') ?>" alt="" loading="lazy">
                    </div>
                </div>

                <div class="page-main-section__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">
                                <input type="hidden" name="form_name" value="Общая на странице Отзывы">
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
                <div class="page-second-section__subtitle subtitle"><?php the_field('rereviews-second_podzagolovok') ?></div>
                <div class="page-second-section__title title"><?php the_field('reviews-second_zagolovok') ?></div>
                <div class="page-second-section__description description"><?php the_field('reviews-second_text') ?>
                </div>
            </div>
    </section>

    <section class="page-questions-section">
        <div class="page-questions-section__container container">
            <div style="margin-bottom: 70px;" class="page-questions-section__column">

                <div class="page-price-section__buttons-page">

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

                        <div class="page-service-section__decor decor-red"></div>
                        <div class="page-price-section__decor decor-lilac"></div>

                        <div class="feedback-form-laboratory__form">

                            <form action="#" class="form-laboratory" id="form-3">

                                <input type="hidden" name="form_name" value="Общая на странице Отзывы">

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

            <div class="page-questions-section__column">
                <script src="https://res.smartwidgets.ru/app.js" defer></script>
                <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
            </div>
        </div>
        <img class="page-price-section__buttons-decor" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="" loading="lazy">
    </section>
</div>

<?php
get_footer();
?>