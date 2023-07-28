<?php
/* 
Template Name: Врачи
*/
?>

<?php
get_header();
?>

<div class="page">
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
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">Наши специалисты</div>
                        <div class="page-main-section__description description">В клинике стоматологии "Зубки всем" мы гордимся нашим высококвалифицированным и профессиональным персоналом, который состоит из опытных врачей-стоматологов. Наша команда постоянно повышает свою квалификацию, принимая участие в научных конференциях и семинарах, чтобы быть в курсе последних достижений в области стоматологии. Мы уверены, что именно благодаря нашим специалистам мы можем предлагать пациентам лучшие услуги и решения для улучшения их здоровья и красоты улыбки.
                            <br><br>
                            Наши врачи обладают глубокими знаниями и навыками, которые позволяют им эффективно диагностировать и лечить различные стоматологические проблемы. Они внимательно слушают каждого пациента, чтобы понять его потребности и ожидания, и затем разрабатывают индивидуальный план лечения. Врачи клиники "Зубки всем" стремятся к тому, чтобы каждый визит в нашу клинику был комфортным и безболезненным.
                        </div>
                        <div id="textHidden" class="text-hidden">
                            Кроме того, мы понимаем, что для некоторых людей посещение стоматолога может вызывать тревогу или страх. Наши врачи и медицинский персонал всегда готовы поддержать пациента, обеспечивая спокойную и расслабленную атмосферу во время каждого визита. Мы уверены, что благодаря нашей заботе и профессионализму каждый пациент будет чувствовать себя в безопасности и комфорте.
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                            <button class="btn-play" data-modal="videoModal"></button>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-04.jpg" alt="">
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
                <div class="page-second-section__subtitle subtitle">Специалисты клиники "Зубки Всем"</div>
                <div class="page-second-section__title title">Создатели здоровой и красивой улыбки</div>
                <div class="page-second-section__description description">Врачи клиники "Зубки Всем" найдут подход к каждому пациенту и помогут обрести здоровую и красивую улыбку даже в самых запущенных случаях! Записаться на прием можно по телефону: <br> <a href="tel:+74951503001">+7 (495) 150-30-01</a>
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
                        <div data-tab="tab1-faq-tab-1" class="faq__tab">Борисенко Инна Владимировна</div>
                        <div id="tab1-faq-tab-1" class="faq__content">
                            <div class="page-content__banner page-content__banner_borisenko">
                                <div class="page-content__label">стаж <span>11 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт, хирург</span></div>
                                <a href="borisenko-inna-vladimirovna/" class="btn-uncover">Подробнее</a>
                            </div>
                        </div>

                        <div data-tab="tab1-faq-tab-2" class="faq__tab">Зейналов Зейнал Вилаяддинович</div>
                        <div id="tab1-faq-tab-2" class="faq__content">
                            <div class="page-content__banner page-content__banner_zejnalov">
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт</span></div>
                                <a href="zejnalov-zejnal-vilayaddinovich/" class="btn-uncover">Подробнее</a>
                            </div>
                        </div>

                        <div data-tab="tab1-faq-tab-3" class="faq__tab">Сарыбаев Анарбек Муктарбекович</div>
                        <div id="tab1-faq-tab-3" class="faq__content">
                            <div class="page-content__banner page-content__banner_sarybaev">
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт</span></div>
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
                        <div data-tab="tab2-faq-tab-1" class="faq__tab">Антоновский Антон Анатольевич</div>

                        <div id="tab2-faq-tab-1" class="faq__content">
                            <div class="page-content__banner page-content__banner_antonovskij">
                                <div class="page-content__label">стаж <span>32 года</span></div>
                                <div class="page-content__label-prof"><span>Стоматолог-ортопед, главный врач</span></div>
                                <a href="antonovskij-anton-anatolevich/" class="btn-uncover">Подробнее</a>

                            </div>

                        </div>

                        <div data-tab="tab2-faq-tab-2" class="faq__tab">Игонин Василий Валентинович</div>

                        <div id="tab2-faq-tab-2" class="faq__content">

                            <div class="page-content__banner page-content__banner_igonin">
                                <div class="page-content__label">стаж <span>13 лет</span></div>
                                <div class="page-content__label-prof"><span>Ортопед, хирург</span></div>
                                <a href="igonin-vasilij-valentinovich/" class="btn-uncover">Подробнее</a>

                            </div>

                        </div>

                        <div data-tab="tab2-faq-tab-3" class="faq__tab">Хандогин Антон Олегович</div>

                        <div id="tab2-faq-tab-3" class="faq__content">

                            <div class="page-content__banner page-content__banner_handogin">
                                <div class="page-content__label">стаж <span>7 лет</span></div>
                                <div class="page-content__label-prof"><span>Ортопед</span></div>
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

                        <div data-tab="tab3-faq-tab-1" class="faq__tab">Журов Илья Владимирович</div>

                        <div id="tab3-faq-tab-1" class="faq__content">

                            <div class="page-content__banner page-content__banner_zhurov">
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Хирург имплантолог</span></div>
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

                        <div data-tab="tab4-faq-tab-1" class="faq__tab">Джахбарова Рабият Магомедгаджиевна</div>

                        <div id="tab4-faq-tab-1" class="faq__content">

                            <div class="page-content__banner page-content__banner_dzhahbarova">
                                <div class="page-content__label">стаж <span>18 лет</span></div>
                                <div class="page-content__label-prof"><span>Гигиенист, ассистент стоматолога</span></div>
                                <a href="dzhahbarova-rabiyat-magomedgadzhievna/" class="btn-uncover">Подробнее</a>
                            </div>
                        </div>

                        <div data-tab="tab4-faq-tab-2" class="faq__tab">Байкулова Асият Хамитовна</div>

                        <div id="tab4-faq-tab-2" class="faq__content">

                            <div class="page-content__banner page-content__banner_bajkulova">
                                <div class="page-content__label">стаж <span>10 лет</span></div>
                                <div class="page-content__label-prof"><span>Гигиенист</span></div>
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

                        <div data-tab="tab5-faq-tab-1" class="faq__tab">Бачулис Марина Александровна</div>

                        <div id="tab5-faq-tab-1" class="faq__content">

                            <div class="page-content__banner page-content__banner_bachulis">
                                <div class="page-content__label">стаж <span>2 года</span></div>
                                <div class="page-content__label-prof"><span>Ортодонт, гигиенист</span></div>
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
                                <li><button class="link-page" href="borisenko-inna-vladimirovna/" onclick="toggleActiveClass(this)" id="vrb1_1">Борисенко Инна Владимировна</button></li>
                                <li><button class="link-page" href="zejnalov-zejnal-vilayaddinovich/" onclick="toggleActiveClass(this)" id="vrb1_2">Зейналов Зейнал Вилаяддинович</button></li>
                                <li><button class="link-page" href="sarybaev-anarbek-muktarbekovich/" onclick="toggleActiveClass(this)" id="vrb1_3">Сарыбаев Анарбек Муктарбекович</button></li>
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
                                    <li><button class="link-page" href="antonovskij-anton-anatolevich/" onclick="toggleActiveClass(this)" id="vrb2_1">Антоновский Антон Анатольевич</button></li>
                                    <li><button class="link-page" href="igonin-vasilij-valentinovich/" onclick="toggleActiveClass(this)" id="vrb2_2">Игонин Василий Валентинович</button></li>
                                    <li><button class="link-page" href="handogin-anton-olegovich/" onclick="toggleActiveClass(this)" id="vrb2_3">Хандогин Антон Олегович</button></li>
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
                                    <li><button class="link-page" href="zhurov-ilya-vladimirovich/" onclick="toggleActiveClass(this)" id="vrb3_1">Журов Илья Владимирович</button></li>
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
                                    <li><button class="link-page" href="dzhahbarova-rabiyat-magomedgadzhievna/" onclick="toggleActiveClass(this)" id="vrb4_1">Джахбарова Рабият Магомедгаджиевна</button></li>
                                    <li><button class="link-page" href="bajkulova-asiyat-hamitovna/" onclick="toggleActiveClass(this)" id="vrb4_2">Байкулова Асият Хамитовна</button></li>
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
                                    <li><button class="link-page" href="bachulis-marina-aleksandrovna/" onclick="toggleActiveClass(this)" id="vrb5_1">Бачулис Марина Александровна</button></li>
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

                <div class="page-service-section__decor-wrapper">
                    <div class="page-service-section__decor-content decor-lilac"></div>
                    <div class="page-service-section__decor-content decor-yellow"></div>
                </div>

                <div class="page-doctors-content">
                    <section class="page-contetn__wrapper" id="content-page">

                        <div class="page-content__chapter">
                            <div class="page-content__banner page-content__banner_borisenko">
                                <div class="page-content__name">Борисенко <br> Инна <br> Владимировна</div>
                                <div class="page-content__label">стаж <span>11 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт, хирург</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Инне Владимировне</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Инне Владимировне</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-01">

                                            <input type="hidden" name="form_name" value="Вопрос Инне Владимировне">

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
                                                    <input id="checkbox-01" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-01" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_zejnalov">
                                <div class="page-content__name">Зейналов <br> Зейнал <br> Вилаяддинович</div>
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Зейналу Вилаяддиновичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Зейналу Вилаяддиновичу</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-02">

                                            <input type="hidden" name="form_name" value="Вопрос Зейналу Вилаяддиновичу">

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
                                                    <input id="checkbox-02" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-02" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_sarybaev">
                                <div class="page-content__name">Сарыбаев <br> Анарбек <br> Муктарбекович</div>
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Зейналу Вилаяддиновичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Анарбеку Муктарбековичу</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-03">

                                            <input type="hidden" name="form_name" value="Вопрос Анарбеку Муктарбековичу">

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
                                                    <input id="checkbox-03" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-03" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_antonovskij">
                                <div class="page-content__name">Антоновский <br> Антон <br> Анатольевич</div>
                                <div class="page-content__label">стаж <span>32 года</span></div>
                                <div class="page-content__label-prof"><span>Стоматолог-ортопед, главный врач</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Антону Анатольевичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Антону Анатольевичу</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-04">

                                            <input type="hidden" name="form_name" value="Вопрос Антону Анатольевичу">

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
                                                    <input id="checkbox-04" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-04" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_igonin">
                                <div class="page-content__name">Игонин <br> Василий <br> Валентинович</div>
                                <div class="page-content__label">стаж <span>13 лет</span></div>
                                <div class="page-content__label-prof"><span>Ортопед, хирург</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Василию Валентиновичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Василию Валентиновичу</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-05">

                                            <input type="hidden" name="form_name" value="Вопрос Василию Валентиновичу">

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
                                                    <input id="checkbox-05" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-05" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_handogin">
                                <div class="page-content__name">Хандогин <br> Антон <br> Олегович</div>
                                <div class="page-content__label">стаж <span>7 лет</span></div>
                                <div class="page-content__label-prof"><span>Ортопед</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Антону Олеговичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Антону Олеговичу</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-06">

                                            <input type="hidden" name="form_name" value="Вопрос Антону Олеговичу">

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
                                                    <input id="checkbox-06" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-06" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_zhurov">
                                <div class="page-content__name">Журов<br> Илья <br> Владимирович</div>
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Хирург имплантолог</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Илье Владимировичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Илье Владимировичу</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-07">

                                            <input type="hidden" name="form_name" value="Вопрос Илье Владимировичу">

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
                                                    <input id="checkbox-07" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-07" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_dzhahbarova">
                                <div class="page-content__name">Джахбарова <br> Рабият <br> Магомедгаджиевна</div>
                                <div class="page-content__label">стаж <span>18 лет</span></div>
                                <div class="page-content__label-prof"><span>Гигиенист, ассистент стоматолога</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Рабият Магомедгаджиевне</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Рабият Магомедгаджиевне</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-08">

                                            <input type="hidden" name="form_name" value="Вопрос Рабият Магомедгаджиевне">

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
                                                    <input id="checkbox-08" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-08" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_bajkulova">
                                <div class="page-content__name">Байкулова <br> Асият <br> Хамитовна</div>
                                <div class="page-content__label">стаж <span>10 лет</span></div>
                                <div class="page-content__label-prof"><span>Гигиенист</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Асият Хамитовнае</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Асият Хамитовнае</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-09">

                                            <input type="hidden" name="form_name" value="Вопрос Асият Хамитовнае">

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
                                                    <input id="checkbox-09" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-09" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                            <div class="page-content__banner page-content__banner_bachulis">
                                <div class="page-content__name">Бачулис <br> Марина <br> Александровна</div>
                                <div class="page-content__label">стаж <span>2 года</span></div>
                                <div class="page-content__label-prof"><span>Ортодонт, гигиенист</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Марине Александровне</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Марине Александровне</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-010">

                                            <input type="hidden" name="form_name" value="Вопрос Марине Александровне">

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
                                                    <input id="checkbox-010" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-010" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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