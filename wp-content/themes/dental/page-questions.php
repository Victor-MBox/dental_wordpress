<?php
/* 
Template Name: Вопросы
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
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-3.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">Вопросы пациентов</div>
                        <div class="page-main-section__description description">Стоматологический центр "Зубки всем" старается обеспечить открытый и прозрачный диалог между врачами и пациентами. В этом подразделе мы стараемся собрать самые важные вопросы, касающиеся стоматологии, а специалисты центра предоставляют четкие и понятные ответы. <br> <br>
                            В этом разделе пациенты могут найти информацию по различным темам - от базовых вопросов о гигиене полости рта до сложных вопросов о диагностике и лечении заболеваний зубов и десен. Врачи стоматологического центра "Зубки всем" предоставляют подробные ответы, помогая пациентам понять основы здоровья зубов и методы их лечения.
                        </div>
                        <div id="textHidden" class="text-hidden">
                            Таким образом, мы стараемся способствовать повышению уровня информированности пациентов о здоровье их зубов.
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-img.jpg" alt="">
                    </div>
                </div>

                <div class="page-main-section__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">
                                <input type="hidden" name="form_name" value="Общая на странице Вопросы-ответы">
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
                <div class="page-second-section__subtitle subtitle">Вопрос-ответ</div>
                <div class="page-second-section__title title">Ответы на вопросы пациентов</div>
                <div class="page-second-section__description description">Здесь мы собрали ответы на самые популярные вопросы наших пациентов. Если вы не нашли ответ на свой вопрос, обращайтесь к нам по телефону: <a href="tel:+74951503001">+7 (495) 150-30-01</a>. Мы всегда готовы помочь и ответить на все ваши вопросы!
                </div>
            </div>
    </section>

    <section class="page-questions-section">
        <div class="page-questions-section__container container">

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

                                <input type="hidden" name="form_name" value="Общая на странице Вопросы-ответы">

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
                <div class="accordion-price-page">

                    <div class="accordion-home">
                        <div data-tab="home-tab-1" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor accordion-home__decor_lilac"></div>
                                <div class="accordion-home__decor-number">01</div>

                            </div>

                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__nav-title">Общие вопросы</div>
                                <div class="accordion-home__nav-subtitle">3 вопроса</div>


                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_yellow"></div>
                                </div>
                            </div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <div data-tab="tab1-faq-tab-1" class="faq__tab">Опасно ли делать рентген?</div>

                            <div id="tab1-faq-tab-1" class="faq__content">
                                <div class="faq__content-text">Безопасно, поскольку современные цифровые томографы, радиовизиографы и ортопатомографы дают минимальную лучевую нагрузку – не выше радиационного фона окружающей среды.
                                </div>

                            </div>

                            <div data-tab="tab1-faq-tab-2" class="faq__tab">Откололся зуб что делать?</div>

                            <div id="tab1-faq-tab-2" class="faq__content">
                                <div class="faq__content-text">Не стоит затягивать визит к стоматологу. Врач определит степень разрушения коронки. Возможные способы восстановления – световая пломба, керамическая вкладка и установка протеза или импланта.
                                </div>
                            </div>

                            <div data-tab="tab1-faq-tab-3" class="faq__tab">Подвижность зубов - шинирование или удаление?</div>

                            <div id="tab1-faq-tab-3" class="faq__content">
                                <div class="faq__content-text">Решение вопроса происходит на консультации опытного стоматолога, исходя из клинической ситуации.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-2" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor accordion-home__decor_red"></div>
                                <div class="accordion-home__decor-number">02</div>

                            </div>

                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__nav-title">Протезирование</div>
                                <div class="accordion-home__nav-subtitle">6 вопросов</div>


                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_red"></div>
                                </div>
                            </div>
                        </div>
                        <div id="home-tab-2" class="accordion-home__content">

                            <div data-tab="tab2-faq-tab-1" class="faq__tab">Какой вид протезирования считается наилучшим?</div>

                            <div id="tab2-faq-tab-1" class="faq__content">
                                <div class="faq__content-text">В зависимости от предпочтений пациента, финансовых возможностей и, конечно, медицинских показаний выбирается вид протезирования. Современные имплантаты считаются золотым стандартом в протезировании зубов.
                                </div>
                            </div>

                            <div data-tab="tab2-faq-tab-2" class="faq__tab">Коронки на передние зубы</div>

                            <div id="tab2-faq-tab-2" class="faq__content">
                                <div class="faq__content-text">Изготавливаются из стоматологического прозрачного фарфора или диоксида циркония. Имеют высокую эстетику, прочность и долговечность.
                                </div>
                            </div>

                            <div data-tab="tab2-faq-tab-3" class="faq__tab">Мост или отдельные коронки?</div>

                            <div id="tab2-faq-tab-3" class="faq__content">
                                <div class="faq__content-text">Вопрос установки мостовидного протеза или отдельной коронки решается в кабинете врача-ортопеда, в соответствии с медицинскими показаниями и предпочтениями пациента.
                                </div>
                            </div>

                            <div data-tab="tab2-faq-tab-4" class="faq__tab">Могу ли я поставить имплантаты в кредит?</div>

                            <div id="tab2-faq-tab-4" class="faq__content">
                                <div class="faq__content-text">Наша клинка предоставляет такую возможность. Поможем оформить необходимые документы и выбрать подходящий банк.
                                </div>
                            </div>

                            <div data-tab="tab2-faq-tab-5" class="faq__tab">Как часто нужно снимать съемный протез?</div>

                            <div id="tab2-faq-tab-5" class="faq__content">
                                <div class="faq__content-text">Съемные протезы снимаются при чистке зубов 2 раза в день и во время ночного сна.
                                </div>
                            </div>

                            <div data-tab="tab2-faq-tab-6" class="faq__tab">Обязательно ли восстанавливать удаленный зуб?</div>

                            <div id="tab2-faq-tab-6" class="faq__content">
                                <div class="faq__content-text">Желательно восстановить. Отсутствие зубной единицы пагубно сказывается на соседних зубах, они изменяют угол наклона, могут расшатываться. Восстанавливать зубы мудрости нецелесообразно.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-3" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor accordion-home__decor_lilac"></div>
                                <div class="accordion-home__decor-number">03</div>

                            </div>

                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__nav-title">Терапия</div>
                                <div class="accordion-home__nav-subtitle">4 вопроса</div>


                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_lilac"></div>
                                </div>
                            </div>
                        </div>
                        <div id="home-tab-3" class="accordion-home__content">

                            <div data-tab="tab3-faq-tab-1" class="faq__tab">Лечение кариеса перед имплантацией</div>

                            <div id="tab3-faq-tab-1" class="faq__content">
                                <div class="faq__content-text">Является обязательным этапом. Без купирования воспалительных процессов, микроорганизмы попадут в ткани, окружающие имплант, вызвав его воспаление и удаление конструкции.
                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-2" class="faq__tab">Воспаление десны</div>

                            <div id="tab3-faq-tab-2" class="faq__content">
                                <div class="faq__content-text">Гингивит или воспаление десны вызывается болезнетворными бактериями полости рта при несоблюдении гигиены. Кроме того, воспаление десны может спровоцировать имеющийся воспалительный процесс в зубах.
                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-3" class="faq__tab">Болит зуб после лечения каналов: что делать?</div>

                            <div id="tab3-faq-tab-3" class="faq__content">
                                <div class="faq__content-text">Посетить врача, лечившего каналы, для осмотра ротовой полости и рентгенодиагностики.
                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-4" class="faq__tab">Обязательно ли удалять нервы из зуба</div>

                            <div id="tab3-faq-tab-4" class="faq__content">
                                <div class="faq__content-text">В зависимости от клинической ситуации. Нервный пучок зуба удаляется при пульпите – так как ткань уже погибла. Необходимо удалять нерв и при протезировании зубов.
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-4" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor "></div>
                                <div class="accordion-home__decor-number">04</div>

                            </div>

                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__nav-title">Хирургия</div>
                                <div class="accordion-home__nav-subtitle">3 вопроса</div>


                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_yellow"></div>
                                </div>
                            </div>
                        </div>
                        <div id="home-tab-4" class="accordion-home__content">

                            <div data-tab="tab4-faq-tab-1" class="faq__tab">Зачем делать синус-лифтинг?</div>

                            <div id="tab4-faq-tab-1" class="faq__content">
                                <div class="faq__content-text">Операция синус-лифтинга необходима для увеличения объема костной ткани перед имплантацией зубов. При нехватке костной ткани, ее атрофии, установление имплантатов невозможно.
                                </div>

                            </div>

                            <div data-tab="tab4-faq-tab-2" class="faq__tab">Удаление восьмых зубов</div>

                            <div id="tab4-faq-tab-2" class="faq__content">
                                <div class="faq__content-text">Производится при их неполном прорезывании, поскольку образуется карман между зубом и десной, где начинается воспаление. Удаляют восьмерку и при неправильном анатомическом положении, влияющем на соседние зубы
                                </div>
                            </div>

                            <div data-tab="tab4-faq-tab-3" class="faq__tab">Можно ли сразу что-то поставить на место удаленного зуба?</div>

                            <div id="tab4-faq-tab-3" class="faq__content">
                                <div class="faq__content-text">На место удаленного зуба ставится имплант в случае одномоментной имплантации. В остальных случаях все манипуляции проводятся после заживления лунки зуба.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-5" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor accordion-home__decor_blue"></div>
                                <div class="accordion-home__decor-number">05</div>

                            </div>

                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__nav-title">Ортодонтия</div>
                                <div class="accordion-home__nav-subtitle">1 вопрос</div>


                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_turquoise"></div>
                                </div>
                            </div>
                        </div>
                        <div id="home-tab-5" class="accordion-home__content">

                            <div data-tab="tab5-faq-tab-1" class="faq__tab">Исправить зубы брекетами</div>

                            <div id="tab5-faq-tab-1" class="faq__content">
                                <div class="faq__content-text">Эффективный надежный способ исправления неправильного положения зубов. В клинике можно выбрать любой подходящий вам вид брекетов, все ортодонтические аппараты у нас высочайшего качества.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-6" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor accordion-home__decor_red"></div>
                                <div class="accordion-home__decor-number">06</div>

                            </div>

                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__nav-title">Гигиена и отбеливание зубов</div>
                                <div class="accordion-home__nav-subtitle">1 вопрос </div>


                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_red"></div>
                                </div>
                            </div>
                        </div>
                        <div id="home-tab-6" class="accordion-home__content">

                            <div data-tab="tab6-faq-tab-1" class="faq__tab">Чистка - как часто нужно ее делать?</div>

                            <div id="tab6-faq-tab-1" class="faq__content">
                                <div class="faq__content-text">Профессиональная чистка зубов у стоматолога проводится 2 раза в год. Это отличная профилактика кариеса и других заболеваний зубов.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-7" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor accordion-home__decor_lilac"></div>
                                <div class="accordion-home__decor-number">07</div>

                            </div>

                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__nav-title">Гнатология</div>
                                <div class="accordion-home__nav-subtitle">0 вопросов</div>


                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_lilac"></div>
                                </div>
                            </div>
                        </div>
                        <div id="home-tab-7" class="accordion-home__content">


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <img class="page-price-section__buttons-decor" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
    </section>



</div>

<?php
get_footer();
?>