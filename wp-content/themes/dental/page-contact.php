<?php
/* 
Template Name: Контакты
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
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="" loading="lazy">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle"><?php the_field('kontakty-main_podzagolovok') ?></div>
                        <div class="page-main-section__title title"><?php the_field('kontakty-main_zagolovok') ?></div>
                        <div class="page-main-section__description description"><?php the_field('kontakty-main_tekst') ?>
                        </div>

                        <div id="textHidden" class="text-hidden">
                            <?php the_field('kontakty-main_tekst-hidden') ?>
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                        </div>

                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php the_field('kontakty-main_kartinka') ?>" alt="" loading="lazy">
                    </div>
                </div>

                <div class="page-main-section__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">

                                <input type="hidden" name="form_name" value="Общая на странице Контакты">

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

    <section class="page-contact-second-section">
        <div class="container page-second-section__container">
            <div class="page-about-section__quote">
                <img src="<?php the_field('kontakty-ruk_foto') ?>" alt="" loading="lazy">
                <div class="page-about-section__quote-text">“<?php the_field('kontakty-ruk_pas') ?>”
                </div>
                <div class="page-about-section__quote-label">
                    <span><?php the_field('kontakty-ruk_fio') ?></span>
                    <?php the_field('kontakty-ruk_post') ?>
                </div>
            </div>
            <div class="page-second-section__decor">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-10.svg" alt="" loading="lazy">
            </div>
        </div>
    </section>

    <section class="page-contact-third-section">
        <div class="page-contact-third-section__container container">

            <div class="page-contact-third-section__column">
                <div class="page-contact-third-section__info">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/contacts/contact-info.svg" alt="" loading="lazy">
                </div>
                <div class="page-contact-third-section__title">Контакты</div>
                <div class="page-contact-third-section__phone">
                    <a href="tel:+74951503001"><?php the_field('kontakty-kontakt_telefon') ?></a>
                </div>
                <div class="page-contact-third-section__map"><?php the_field('kontakty-kontakt_adress') ?></div>
                <div class="page-contact-third-section__time"><?php the_field('kontakty-kontakt_time') ?></div>
            </div>
            <div class="page-contact-third-section__column">
                <?php the_field('kontakty-kontakt_karta') ?>
                <div class="page-contact-third-section__decor-content decor-lilac"></div>

            </div>
        </div>
    </section>


    <section class="page-contact-fourth-section">
        <div class="page-contact-fourth-section__container container">
            <div class="page-contact-fourth-section__name">
                <div class="page-contact-fourth-section__title title"><?php the_field('kontakty-reviews_zagolovok') ?></div>
                <div class="page-contact-fourth-section__description description"><?php the_field('kontakty-reviews_podzagolovok') ?>
                </div>
            </div>

            <div class="page-contact-fourth-section__companies-rating companies-rating">
                <script src="https://res.smartwidgets.ru/app.js" defer></script>
                <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
            </div>

            <div class="page-about-section__buttons-page">
                <div class="page-contact-fourth-section__title title">Узнайте возможности лечения ;)</div>

                <a class="buttons-page-1" href="/lechenie-v-rassrochku/">
                    <div class="buttons-page-1__img"></div>
                    <div class="buttons-page-1__text">Лечение в рассрочку</div>
                </a>

                <a class="buttons-page-2" href="/nalogovyj-vychet/">
                    <div class="buttons-page-2__img"></div>
                    <div class="buttons-page-2__text">Налоговый вычет</div>
                </a>

                <a class="buttons-page-3" href="/garantiya-na-uslugi/">
                    <div class="buttons-page-3__img"></div>
                    <div class="buttons-page-3__text">Гарантия на услуги</div>
                </a>

            </div>

        </div>
        <div class="page-contact-fourth-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-6.svg" alt="" loading="lazy">
        </div>


    </section>


</div>

<?php
get_footer();
?>