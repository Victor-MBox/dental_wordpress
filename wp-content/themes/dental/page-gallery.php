<?php
/* 
Template Name: Галерея
*/
?>

<?php
get_header();
?>

<div class="page-all">
    <section class="page-main-section page-main-section_about">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-8.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-9.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle"><?php the_field('gallery-main_podzagolovok') ?></div>
                        <div class="page-main-section__title title"><?php the_field('gallery-main_zagolovok') ?></div>
                        <div class="page-main-section__description description"><?php the_field('gallery-main_tekst') ?>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php the_field('gallery-main_izobrazhenie') ?>" alt="">
                    </div>
                </div>

                <div class="page-main-section__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">
                                <input type="hidden" name="form_name" value="Общая на странице Галерея">

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
                <div class="page-second-section__subtitle subtitle"><?php the_field('gallery-second_podzagolovok') ?></div>
                <div class="page-second-section__title title"><?php the_field('gallery-second_zagolovok') ?></div>
                <div class="page-second-section__description description"><?php the_field('gallery-second_text') ?>
                </div>
            </div>
    </section>
</div>


<section class="page-service-section">
    <div class="page-service-section__container container">

        <div class="page-service-section__column-mob">

            <div class="accordion-service-page">

                <?php while (have_rows('gallery-mob_banner')) : the_row(); ?>

                    <div class="accordion-home">
                        <div data-tab="<?php the_sub_field('id-tab') ?>" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title"><?php the_sub_field('procedura') ?></div>
                                <div class="accordion-home__nav-subtitle"><?php the_sub_field('kolichestvo') ?></div>
                            </div>
                            <div class="accordion-home__strip strip <?php the_sub_field('color') ?>"></div>
                        </div>
                        <div id="<?php the_sub_field('id-tab') ?>" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php the_sub_field('izobrazhenie') ?>" alt="">
                            </div>

                            <a class="btn btn_mob" href="<?php the_sub_field('ssylka') ?>">Смотреть работы</a>

                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>

        <div class="page-service-section__column">

            <div class="accordion-page">

                <button class="btn-wrapper" href="raboty-protezirovanie/" id="vr1" onclick="toggleActiveClass(this)">
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__decor"></div>
                        <div class="btn-wrapper__number">01</div>
                    </div>
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__title">Протезирование</div>
                        <div class="btn-wrapper__subtitle">7 работ</div>
                    </div>
                </button>

                <button class="btn-wrapper" href="raboty-hirurgiya/" id="vr2" onclick="toggleActiveClass(this)">
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__decor btn-wrapper__decor_blue"></div>
                        <div class="btn-wrapper__number">02</div>
                    </div>
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__title">Хирургия</div>
                        <div class="btn-wrapper__subtitle">1 работа</div>
                    </div>
                </button>

                <button class="btn-wrapper" href="raboty-implantacziya/" id="vr3" onclick="toggleActiveClass(this)">
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__decor btn-wrapper__decor_red"></div>
                        <div class="btn-wrapper__number">03</div>
                    </div>
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__title">Имплантация</div>
                        <div class="btn-wrapper__subtitle">2 работы</div>
                    </div>
                </button>

                <button class="btn-wrapper" href="raboty-gigiena/" id="vr4" onclick="toggleActiveClass(this)">
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__decor btn-wrapper__decor_lilac"></div>
                        <div class="btn-wrapper__number">04</div>
                    </div>
                    <div class="btn-wrapper__column">
                        <div class="btn-wrapper__title">Гигиена</div>
                        <div class="btn-wrapper__subtitle">1 работа</div>
                    </div>
                </button>
            </div>

            <div class="page-service-section__buttons-page">

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
                    <div class="page-service-section__decor decor-blue"></div>

                    <div class="feedback-form-laboratory__form">

                        <form action="#" class="form-laboratory" id="form-3">
                            <input type="hidden" name="form_name" value="Общая на странице Галерея">

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

        <!-- Содержимое ajax -->
        <div class="page-service-section__column page-service-section__column_galerea">

            <div id="loader-page"></div>

            <div class="page-service-section__decor-wrapper">
                <div class="page-service-section__decor-content decor-blue"></div>
                <div class="page-service-section__decor-content decor-red"></div>
            </div>

            <section class="page-contetn__wrapper" id="content-page">


                <?php while (have_rows('gallery_banner')) : the_row(); ?>

                    <div class="page-content__chapter page-content__chapter_margin">
                        <div class="page-content__banner page-content__banner_galerea">
                            <div class="page-content__banner-wrapper">
                                <img src="<?php the_sub_field('izobrazhenie') ?>" alt="">
                            </div>
                        </div>

                        <div class="page-content__procedure procedure">
                            <div style="margin-bottom: 0;" class="procedure__column">
                                <div class="procedure__row-all">

                                    <div class="procedure__img">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                    </div>

                                    <div class="procedure__row-wrapper">
                                        <div class="procedure__row">
                                            <div class="procedure__subtitle">Процедура</div>
                                        </div>
                                        <div class="procedure__row">
                                            <div class="procedure__title"><?php the_sub_field('proczedura') ?></div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn_lilac" <?php the_sub_field('dejstviya_knopki') ?>>Смотреть работы</button>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>


            </section>
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



<script>
    window.onload = function() {
        var hash = document.location.hash;
        if (hash != undefined && hash != null) {
            var h = hash.replace("#", "");
            const hparts = h.split("_");
            document.getElementById("vr" + hparts[0].toString()).click();
            setTimeout(document.getElementById("vrb" + h.toString()).click(), 500);
        }
    }
</script>

<?php
get_footer();
?>