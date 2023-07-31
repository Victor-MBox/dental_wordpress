<?php
/* 
Template Name: Акции
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
                        <div class="page-main-section__title title">Наши акции</div>
                        <div class="page-main-section__description description">Мы рады предложить вам уникальную возможность воспользоваться нашими ежемесячными акциями, которые предусматривают специальные условия и скидки на различные виды стоматологических услуг. Это отличная возможность не только сохранить здоровье и красоту вашей улыбки, но и существенно сэкономить.
                            <br> <br>
                            Наша клиника "Зубки всем" стремится сделать высококачественные стоматологические услуги доступными для каждого. Мы предлагаем разумные цены, которые позволяют широким слоям населения получить профессиональную помощь и уход за своим здоровьем. Никаких скрытых платежей или неожиданных дополнительных расходов - все условия прозрачны и понятны.
                        </div>
                        <div id="textHidden" class="text-hidden">
                            Важно отметить, что мы предоставляем гарантию на все проведенные нами работы. Это подтверждает нашу ответственность и стремление к безупречному качеству предоставляемых услуг. Обращаясь в клинику "Зубки всем", вы можете быть уверены в профессионализме наших специалистов и высоком уровне предоставляемого сервиса.
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-10.jpg" alt="">
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
                <div class="page-second-section__subtitle subtitle">Спецпредложения книники "Зубки всем"</div>
                <div class="page-second-section__title title">Акции июля</div>
            </div>
            <div class="page-second-section__description description">Каждый месяц мы проводим выгодные акции для наших пациентов. Подробности акций уточняйте по телефону: <a href="tel:+74951503001">+7 (495) 150-30-01</a>
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

                <div class="page-about-section__chapter" id="stock-01">
                    <div class="page-stock__title">
                        При установке 5 виниров – 6-й дарим в подарок!
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_01">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">Стоимость одного керамического винира в июле – 16000 ₽ с 3-х летней гарантией! <br>
                        Стоимость композитного винира – 9000 ₽ с установкой за один день.
                    </div>
                </div>

                <div class="page-about-section__chapter" id="stock-02">
                    <div class="page-stock__title">
                        Профессиональное отбеливание зубов – 15000₽ <span>22000₽</span>
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_02">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним </div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">Получите белоснежную улыбку всего за 1 час со скидкой 30%! <br> Гарантия 4 месяца. Коррекция цвета включена в стоимость.
                    </div>
                </div>

                <div class="page-about-section__chapter" id="stock-03">
                    <div class="page-stock__title">
                        Дарим скидку 15% на терапевтическое лечение при установке брекетов или элайнеров!
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_03">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">При установке брекетов или элайнеров в клинике “Зубки Всем” предоставляется скидка 15% на терапевтическое лечение. Гарантия результата 100%. <br> Стоимость установки брекетов – от 120.000₽, стоимость установки элайнеров – от 150.000₽.
                    </div>
                </div>

                <div class="page-about-section__chapter" id="stock-04">
                    <div class="page-stock__title">
                        Коронка из самого прочного материала – циркония всего за 18000₽ <span>28000₽</span>!
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_04">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">Срок установки – 5 рабочих дней. Гарантия – 4 года.
                    </div>
                </div>

                <div class="page-about-section__chapter" id="stock-05">
                    <div class="page-stock__title">
                        Каждый второй имплант со скидкой 50%!
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_05">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">Дарим скидку 50% на установку каждого второго импланта. <br> Срок установки – 1 день. Стоимость 1 импланта – 30000₽. <br> Даем пожизненную гарантию при соблюдении ряда условий.
                    </div>
                </div>

                <div class="page-about-section__chapter" id="stock-06">
                    <div class="page-stock__title">
                        Имплантация All-on-4 на одну челюсть 150.000₽ только в июле!
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_06">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">Протезирование всех зубов на одной челюсти на 4-х имплантах – 150.000₽. <br>
                        Установка имплантов входит в стоимость.
                    </div>
                </div>

                <div class="page-about-section__chapter" id="stock-07">
                    <div class="page-stock__title">
                        Съемные протезы из высококачественных материалов от 15000₽ за 3 сеанса!
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_07">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">Протезы изготавливаются из качественных материалов: акри фри, нейлон, акрил, квадротти. <br> Гарантия – 5 лет.
                    </div>
                </div>

                <div class="page-about-section__chapter" id="stock-08">
                    <div class="page-stock__title">
                        Подарок именинникам - скидка 10% на услуги стоматологии!
                    </div>

                    <div class="page-about-section__banner page-about-section__banner_08">

                        <div class="page-stock__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>

                    </div>

                    <div class="page-about-section__text">Скидка именинникам 10% распространяется на все услуги стоматологии. <br> Скидка действует за 5 дней до и 5 дней после Дня Рождения.
                    </div>
                </div>



            </div>

        </div>
    </section>
</div>
              
<?php
get_footer();
?>