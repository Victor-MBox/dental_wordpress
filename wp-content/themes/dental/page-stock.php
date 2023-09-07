<?php
/* 
Template Name: Акции
*/
?>

<?php
get_header();
?>

<div class="page-all">
    <section class="page-main-section page-main-section_about">

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
                        <div class="page-main-section__subtitle subtitle"><?php the_field('stocks-main_podzagolovok') ?></div>
                        <div class="page-main-section__title title"><?php the_field('stocks-main_zagolovok') ?></div>
                        <div class="page-main-section__description description"><?php the_field('stocks-main_tekst') ?>
                        </div>
                        <div id="textHidden" class="text-hidden">
                            <?php the_field('stocks-main_tekst-hidden') ?>
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php the_field('stocks-main_izobrazhenie') ?>" alt="" loading="lazy">
                    </div>
                </div>

                <div class="page-main-section__form page-main-section_about__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">

                                <input type="hidden" name="form_name" value="Общая на странице Акции">

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
                <div class="page-second-section__subtitle subtitle"><?php the_field('stocks-second_podzagolovok') ?></div>
                <div class="page-second-section__title title"><?php the_field('stocks-second_zagolovok') ?></div>
            </div>
            <div class="page-second-section__description description"><?php the_field('stocks-second_text') ?>
            </div>
    </section>
</div>                                        

<div class="page-stock">

    <section class="page-about-section">
        <div class="page-about-section__container container">
            <div class="page-about-section__column">

                <div class="page-about-section__btn-wrapper">

                    <a class="btn-wrapper-about" href="#stock-01">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor"></div>
                            <div class="btn-wrapper__number">01</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">При установке 5 виниров – <b> 6-й дарим </b>в подарок!</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="#stock-02">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_red"></div>
                            <div class="btn-wrapper__number">02</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Профессиональное отбеливание зубов – 15000₽ <span>22000₽</span> </div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="#stock-03">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_lilac"></div>
                            <div class="btn-wrapper__number">03</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Дарим <b>скидку 15%</b> на терапевтическое лечение при установке брекетов или элайнеров!</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="#stock-04">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor"></div>
                            <div class="btn-wrapper__number">04</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Коронка из самого прочного материала – циркония всего за 18000₽ <span>28000₽</span>!</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="#stock-05">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_blue"></div>
                            <div class="btn-wrapper__number">05</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Каждый второй имплант <b>со скидкой 50%</b>!</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="#stock-06">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_lilac"></div>
                            <div class="btn-wrapper__number">06</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Имплантация All-on-4 на одну челюсть <b>150.000₽ </b>только в июле!</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="#stock-07">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor"></div>
                            <div class="btn-wrapper__number">07</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Съемные протезы из высококачественных материалов <b>от 15000₽ за 3 сеанса</b>!</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="#stock-08">
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__decor btn-wrapper__decor_red"></div>
                            <div class="btn-wrapper__number">08</div>
                        </div>
                        <div class="btn-wrapper__column">
                            <div class="btn-wrapper__title">Подарок именинникам - <b>скидка 10%</b> на услуги стоматологии!</div>
                        </div>
                    </a>

                </div>

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

                    <img class="page-price-section__buttons-decor" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="" loading="lazy">

                </div>

                <div class="page-service-section__form">
                    <div class="page-content__title">Запись <br>на консультацию</div>
                    <div class="page-content__text">Обратите внимание, все наши консультации – бесплатные</div>

                    <div class="feedback-form-laboratory">

                        <div class="page-about-section__decor-lilac decor-lilac"></div>
                        <div class="page-about-section__decor-blue decor-blue"></div>

                        <div class="feedback-form-laboratory__form">

                            <form action="#" class="form-laboratory" id="form-3">

                                <input type="hidden" name="form_name" value="Общая на странице Акции">

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

                <?php while (have_rows('stocks_banner')) : the_row(); ?>

                    <div class="page-about-section__chapter" id="<?php the_sub_field('yakor') ?>">
                        <div class="page-stock__title">
                            <?php the_sub_field('zagolovok') ?>
                        </div>

                        <div class="page-about-section__banner">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php the_sub_field('izobrazhenie') ?>" alt="" loading="lazy">
                            </div>

                            <div class="page-stock__btn-call">
                                <button class="btn-call" data-modal="<?php the_sub_field('modal') ?>">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>

                        </div>

                        <div class="page-about-section__text"><?php the_sub_field('opisanie') ?>
                        </div>
                    </div>
                <?php endwhile; ?>


            </div>

        </div>
    </section>
</div>

<?php
get_footer();
?>