<?php
/* 
Template Name: Врачи
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
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-7.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle"><?php the_field('all-doctors_podzagolovok'); ?></div>
                        <div class="page-main-section__title title"><?php the_field('all-doctors_zagolovok'); ?></div>
                        <div class="page-main-section__description description">
                            <?php the_field('all-doctors_tekst'); ?>
                        </div>
                        <div id="textHidden" class="text-hidden">
                            <?php the_field('all-doctors_skrytyj-tekst'); ?>
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php the_field('all-doctors_kartinka'); ?>" alt="">
                    </div>
                </div>

                <div class="page-main-section__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">
                                <input type="hidden" name="form_name" value="Общая на странице Врачи">

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
                <div class="page-second-section__subtitle subtitle"><?php the_field('2-ekran_podzagolovok'); ?></div>
                <div class="page-second-section__title title"><?php the_field('2-ekran_zagolovok'); ?></div>
                <div class="page-second-section__description description">
                    <?php the_field('2-ekran_tekst'); ?>
                </div>
            </div>
    </section>
</div>

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
                        <div data-tab="tab1-faq-tab-1" class="faq__tab"><?php the_field('all-doctors_fio'); ?></div>
                        <div id="tab1-faq-tab-1" class="faq__content">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost'); ?></span></div>
                                <a href="borisenko-inna-vladimirovna/" class="btn-uncover">Подробнее</a>
                            </div>
                        </div>

                        <div data-tab="tab1-faq-tab-2" class="faq__tab"><?php the_field('all-doctors_fio-2'); ?></div>
                        <div id="tab1-faq-tab-2" class="faq__content">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-2'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-2'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-2'); ?></span></div>
                                <a href="zejnalov-zejnal-vilayaddinovich/" class="btn-uncover">Подробнее</a>
                            </div>
                        </div>

                        <div data-tab="tab1-faq-tab-3" class="faq__tab"><?php the_field('all-doctors_fio-3'); ?></div>
                        <div id="tab1-faq-tab-3" class="faq__content">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-3'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-3'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-3'); ?></span></div>
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
                        <div data-tab="tab2-faq-tab-1" class="faq__tab"><?php the_field('all-doctors_fio-4'); ?></div>

                        <div id="tab2-faq-tab-1" class="faq__content">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-4'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-4'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-4'); ?></span></div>
                                <a href="antonovskij-anton-anatolevich/" class="btn-uncover">Подробнее</a>

                            </div>

                        </div>

                        <div data-tab="tab2-faq-tab-2" class="faq__tab"><?php the_field('all-doctors_fio-5'); ?></div>

                        <div id="tab2-faq-tab-2" class="faq__content">

                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-5'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-5'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-5'); ?></span></div>
                                <a href="igonin-vasilij-valentinovich/" class="btn-uncover">Подробнее</a>

                            </div>

                        </div>

                        <div data-tab="tab2-faq-tab-3" class="faq__tab"><?php the_field('all-doctors_fio-6'); ?></div>

                        <div id="tab2-faq-tab-3" class="faq__content">

                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-6'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-6'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-6'); ?></span></div>
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

                        <div data-tab="tab3-faq-tab-1" class="faq__tab"><?php the_field('all-doctors_fio-7'); ?></div>

                        <div id="tab3-faq-tab-1" class="faq__content">

                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-7'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-7'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-7'); ?></span></div>
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

                        <div data-tab="tab4-faq-tab-1" class="faq__tab"><?php the_field('all-doctors_fio-8'); ?></div>

                        <div id="tab4-faq-tab-1" class="faq__content">

                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-8'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-8'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-8'); ?></span></div>
                                <a href="dzhahbarova-rabiyat-magomedgadzhievna/" class="btn-uncover">Подробнее</a>
                            </div>
                        </div>

                        <div data-tab="tab4-faq-tab-2" class="faq__tab"><?php the_field('all-doctors_fio-9'); ?></div>

                        <div id="tab4-faq-tab-2" class="faq__content">

                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-9'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-9'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-9'); ?></span></div>
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

                        <div data-tab="tab5-faq-tab-1" class="faq__tab"><?php the_field('all-doctors_fio-10'); ?></div>

                        <div id="tab5-faq-tab-1" class="faq__content">

                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-10'); ?>" alt="">
                                </div>

                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-10'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-10'); ?></span></div>
                                <a href="bachulis-marina-aleksandrovna/" class="btn-uncover">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-service-section__column">

                <div class="accordion-page">
                    <div data-tab="page-tab-1" class="accordion-page__tab" id="vr1">
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
                                <li><button class="link-page" href="borisenko-inna-vladimirovna/" onclick="toggleActiveClass(this)" id="vrb1_1"><?php the_field('all-doctors_fio'); ?></button></li>
                                <li><button class="link-page" href="zejnalov-zejnal-vilayaddinovich/" onclick="toggleActiveClass(this)" id="vrb1_2"><?php the_field('all-doctors_fio-2'); ?></button></li>
                                <li><button class="link-page" href="sarybaev-anarbek-muktarbekovich/" onclick="toggleActiveClass(this)" id="vrb1_3"><?php the_field('all-doctors_fio-3'); ?></button></li>
                            </ul>
                        </div>
                    </div>


                    <div class="accordion-page">
                        <div data-tab="page-tab-3" class="accordion-page__tab" id="vr2">
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
                                    <li><button class="link-page" href="antonovskij-anton-anatolevich/" onclick="toggleActiveClass(this)" id="vrb2_1"><?php the_field('all-doctors_fio-4'); ?></button></li>
                                    <li><button class="link-page" href="igonin-vasilij-valentinovich/" onclick="toggleActiveClass(this)" id="vrb2_2"><?php the_field('all-doctors_fio-5'); ?></button></li>
                                    <li><button class="link-page" href="handogin-anton-olegovich/" onclick="toggleActiveClass(this)" id="vrb2_3"><?php the_field('all-doctors_fio-6'); ?></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-page">
                        <div data-tab="page-tab-2" class="accordion-page__tab" id="vr3">

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
                                    <li><button class="link-page" href="zhurov-ilya-vladimirovich/" onclick="toggleActiveClass(this)" id="vrb3_1"><?php the_field('all-doctors_fio-7'); ?></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-page">
                        <div data-tab="page-tab-5" class="accordion-page__tab" id="vr4">

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
                                    <li><button class="link-page" href="dzhahbarova-rabiyat-magomedgadzhievna/" onclick="toggleActiveClass(this)" id="vrb4_1"><?php the_field('all-doctors_fio-8'); ?></button></li>
                                    <li><button class="link-page" href="bajkulova-asiyat-hamitovna/" onclick="toggleActiveClass(this)" id="vrb4_2"><?php the_field('all-doctors_fio-9'); ?></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-6" class="accordion-page__tab" id="vr5">

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
                                    <li><button class="link-page" href="bachulis-marina-aleksandrovna/" onclick="toggleActiveClass(this)" id="vrb5_1"><?php the_field('all-doctors_fio-10'); ?></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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
                                <input type="hidden" name="form_name" value="Общая на странице Врачи">

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
            <div class="page-service-section__column">

                <div id="loader-page"></div>

                <div class="page-doctors-content">
                    <section class="page-contetn__wrapper" id="content-page">

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="borisenkoModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Borisenko">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button'); ?>">

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
                                                    <input id="checkbox-Borisenko" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Borisenko" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="borisenko-inna-vladimirovna/" data-sect="1" data-hl="1">Подробнее</button>

                            <div class="page-content__first-decor">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
                            </div>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-2'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-2'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-2'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-2'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="zejnalovModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-2'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-2'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Zejnalov">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-2'); ?>">

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
                                                    <input id="checkbox-Zejnalov" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Zejnalov" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button class="link-page-2" href="zejnalov-zejnal-vilayaddinovich/" data-sect="1" data-hl="2">Подробнее</button>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-3'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-3'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-3'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-3'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="sarybaevModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-3'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-3'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Sarybaev">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-3'); ?>">

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
                                                    <input id="checkbox-Sarybaev" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Sarybaev" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="sarybaev-anarbek-muktarbekovich/" data-sect="1" data-hl="3">Подробнее</button>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-4'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-4'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-4'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-4'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="antonovskijModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-4'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-4'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Antonovskij">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-4'); ?>">

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
                                                    <input id="checkbox-Antonovskij" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Antonovskij" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="antonovskij-anton-anatolevich/" data-sect="2" data-hl="1">Подробнее</button>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-5'); ?>" alt="">
                                </div>


                                <div class="page-content__name"><?php the_field('all-doctors_fio-5'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-5'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-5'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="igoninModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-5'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-5'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Igonin">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-5'); ?>">

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
                                                    <input id="checkbox-Igonin" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Igonin" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="igonin-vasilij-valentinovich/" data-sect="2" data-hl="2">Подробнее</button>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-6'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-6'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-6'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-6'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="handoginModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-6'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-6'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Handogin">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-6'); ?>">

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
                                                    <input id="checkbox-Handogin" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Handogin" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="handogin-anton-olegovich/" data-sect="2" data-hl="3">Подробнее</button>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-7'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-7'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-7'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-7'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="zhurovModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-7'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-7'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Zhurov">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-7'); ?>">

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
                                                    <input id="checkbox-Zhurov" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Zhurov" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="zhurov-ilya-vladimirovich/" data-sect="3" data-hl="1">Подробнее</button>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-8'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-8'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-8'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-8'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="dzhahbarovaModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-8'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-8'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Dzhahbarova">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-8'); ?>">

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
                                                    <input id="checkbox-Dzhahbarova" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Dzhahbarova" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="dzhahbarova-rabiyat-magomedgadzhievna/" data-sect="4" data-hl="1">Подробнее</button>

                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-9'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-9'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-9'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-9'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="bajkulovaModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-9'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-9'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Bajkulova">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-9'); ?>">

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
                                                    <input id="checkbox-Bajkulova" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Bajkulova" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>

                            </div>

                            <button class="link-page-2" href="bajkulova-asiyat-hamitovna/" data-sect="4" data-hl="2">Подробнее</button>
                        </div>

                        <div class="page-content__chapter">
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('all-doctors_foto-10'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('all-doctors_fio-10'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('all-doctors_stazh-10'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('all-doctors_dolzhnost-10'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="bachulisModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('all-doctors_button-10'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('all-doctors_button-10'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Bachulis">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('all-doctors_button-10'); ?>">

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
                                                    <input id="checkbox-Bachulis" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Bachulis" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>

                            <button class="link-page-2" href="bachulis-marina-aleksandrovna/" data-sect="5" data-hl="1">Подробнее</button>
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
</div>


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