<?php
/* 
Template Name: Наша лаборатория
*/
?>

<?php
get_header();
?>

<div class="page">

    <section class="page-main-section">

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
                        <div class="page-main-section__title title">Наша лаборатория</div>
                        <div class="page-main-section__description description">ЗУБОТЕХНИЧЕСКАЯ ЛАБОРАТОРИЯ АЛВАДЕНТ начала свою деятельность в 1999 году. За эти годы наша лаборатория приобрела самое ценное – высокий профессионализм и огромный опыт изготовления любых, даже самых уникальных и сложных ортопедических конструкций. Благодаря репутации надежного партнера, к нам обращаются клиенты не только Москвы и Области, но практически всех регионов России.
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
                <div class="page-second-section__subtitle subtitle">МАСТЕРСКАЯ УЛЫБОК “АЛВАДЕНТ”</div>
                <div class="page-second-section__title title">О нашей лаборатории</div>
                <div class="page-second-section__description description">
                    Зуботехническая лаборатория “АЛВАДЕНТ” основана в 1999 году и входит в топ-10 лабораторий Москвы. Собственная лаборатория позволяет нам производить протезирование и другие работы на высоком уровне! Старшие техники отделения осуществляют контроль качества на каждом участке. В лаборатории работают специалисты из всех областей зубного протезирования.
                </div>
            </div>
    </section>

    <section class="page-about-section">
        <div class="page-about-section__container container">
            <div class="page-about-section__column">

                <div class="page-about-section__btn-wrapper">

                    <a class="btn-wrapper-about " href="/o-klinike/">
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__decor"></div>
                            <div class="btn-wrapper-about__number">01</div>
                        </div>
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__title">О нашей клинике</div>
                            <div class="btn-wrapper-about__subtitle">Подробнее о "Зубки Всем" </div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="/voprosy/">
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__decor btn-wrapper-about__decor_lilac"></div>
                            <div class="btn-wrapper-about__number">02</div>
                        </div>
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__title">Вопросы пациентов</div>
                            <div class="btn-wrapper-about__subtitle">Ответы на вопросы пациентов</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about btn-wrapper-about_active" href="/nasha-laboratoriya/">
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__decor btn-wrapper-about__decor_blue"></div>
                            <div class="btn-wrapper-about__number">02</div>
                        </div>
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__title">Наша лаборатория</div>
                            <div class="btn-wrapper-about__subtitle">Зуботехническая лаборатория</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about " href="/lechenie-v-rassrochku/">
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__decor btn-wrapper-about__decor_red"></div>
                            <div class="btn-wrapper-about__number">03</div>
                        </div>
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__title">Лечение в рассрочку</div>
                            <div class="btn-wrapper-about__subtitle">Подробная информация</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="/nalogovyj-vychet/">
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__decor btn-wrapper-about__decor_lilac"></div>
                            <div class="btn-wrapper-about__number">04</div>
                        </div>
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__title">Налоговый вычет</div>
                            <div class="btn-wrapper-about__subtitle">Подробная информация</div>
                        </div>
                    </a>

                    <a class="btn-wrapper-about" href="/garantiya-na-uslugi/">
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__decor btn-wrapper-about__decor_blue"></div>
                            <div class="btn-wrapper-about__number">05</div>
                        </div>
                        <div class="btn-wrapper-about__column">
                            <div class="btn-wrapper-about__title">Гарантия на услуги</div>
                            <div class="btn-wrapper-about__subtitle">Подробная информация</div>
                        </div>
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
                            <li>собственное производство мы оснастили оборудованием последнего поколения ведущих зарубежных брендов;</li>
                            <li>есть лицензия на работу с драгметаллами и разрешение Пробирной палаты;</li>
                            <li>в штате только высокопрофессиональные литейщики, техники, менеджеры;</li>
                            <li>есть своя курьерская служба;</li>
                            <li>сотрудничаем с поставщиками сертифицированных материалов напрямую;</li>
                            <li>в числе клиентов крупнейшие стоматологические клиники и центры Москвы;</li>
                            <li>наше литье и металлокерамика на уровне мировых образцов.</li>
                        </ul>
                    </div>
                </div>

                <div class="page-content__chapter">
                    <div class="page-content__title"> <b>Почему работать с нами выгодно:</b> </div>

                    <div class="page-content__list">
                        <ul>
                            <li>наша лаборатория осуществляет полный производственный цикл;</li>
                            <li>все виды зуботехнических работ, включая работу с литыми конструкциями и драгметаллами;</li>
                            <li>интересы клиента в нашем приоритете;</li>
                            <li>предоставляем скидки, отсрочку оплаты и бонусы, у нас широкая программа лояльности для клиентов;</li>
                            <li>работаем в выходные дни;</li>
                            <li>предоставим персонального менеджера - на связи с 9-00 до 20-00;</li>
                            <li>курьерская служба работает бесплатно в Москве и ближнем Подмосковье.</li>
                        </ul>
                    </div>

                    <div class="page-content__text">Наша лаборатория имеет все необходимые сертификаты и документацию. На рынке В2В мы работаем профессионально и качественно.</div>
                </div>

            </div>

        </div>
    </section>

</div>

<?php
get_footer();
?>