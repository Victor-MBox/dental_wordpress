<?php
/* 
Template Name: Гарантия на услуги
*/
?>

<?php
get_header();
?>

<div class="page">

    <section style="padding-top: 150px;" class="page-second-section">
        <div class="container page-second-section__container">

            <div class="page-second-section__name">
                <div class="page-second-section__subtitle subtitle">ГАРАНТИИ КАЧЕСТВА УСЛУГ</div>
                <div class="page-second-section__title title">Гарантии на стоматологические услуги</div>
                <div class="page-second-section__description description">
                    Обратившись в нашу клинику, вы можете быть уверены в качестве предоставляемых услуг. Мы гарантируем результат и беспокоимся о здоровье наших пациентов!
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

                    <a class="btn-wrapper-about" href="/nasha-laboratoriya/">
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

                    <a class="btn-wrapper-about btn-wrapper-about_active" href="/garantiya-na-uslugi/">
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
                                <input type="hidden" name="form_name" value="Общая на странице Гарантия на услугу">
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

                    <div class="page-about-section__banner page-about-section__banner_garantiya"></div>
                    <div class="page-about-section__text">Гарантия на лечение зубов в клинике «Зубки Всем» предоставляется на все виды лечения в строгом соответствии с законодательством Российской Федерации «Об охране здоровья граждан», законом «О защите прав потребителей», отраслевыми стандартами и указаниями Минздрава.
                    </div>

                </div>

                <div class="page-content__chapter">
                    <div class="page-content__title">Безусловные гарантии – что это?</div>
                    <div class="page-content__text">Это гарантии, которые пациент получает всегда, вне зависимости от условий договора. Они основаны на требованиях законодательства и медицинских канонах. <br><br>

                        Гарантийный срок – установленный договором период, в течение которого врач бесплатно устраняет мелкие недостатки, возникшие не по вине пациента и проявившиеся после лечения.
                        Срок службы – в этот срок проводится бесплатная переделка, замена работы, повторное лечение пациента, когда выявлены неустранимые недостатки результата работы, и они возникли без вины пациента.
                    </div>
                </div>

                <div class="page-content__chapter">
                    <div class="page-content__title">Условия выполнения гарантий со стороны клиники</div>
                    <div class="page-content__text">Пациент со своей стороны должен выполнять рекомендации врача для обеспечения наилучшего результат лечения. Клиника выполнит гарантии при условии:
                    </div>
                    <div class="page-content__list">
                        <ul>
                            <li style="font-weight: 400; color: #697492;">если в период гарантийного срока у пациента не возникнет иных патологий и с состояний, способных повлиять на результат лечения;</li>
                            <li style="font-weight: 400; color: #697492;">соблюдение пациентом гигиены полости рта и указаний врача, посещение обязательных осмотров;</li>
                            <li style="font-weight: 400; color: #697492;">если пациент не будет параллельно лечить свое заболевание в другой клинике.</li>
                        </ul>
                    </div>
                    <div class="page-content__text">При наличии форс-мажора, повлиявшего на результат лечения, клиника согласно закону ответственности не несет.
                    </div>
                </div>



            </div>

        </div>
    </section>

</div>

<?php
get_footer();
?>