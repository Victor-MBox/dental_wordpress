<?php
/* 
Template Name: Вопросы
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
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-3.svg" alt="">
        </div>

        <div class="container page-main-section__container">
            <div class="page-main-section__column">
                <div class="page-main-section__name">
                    <div class="page-main-section__subtitle subtitle">Мы – больше чем обычная стоматология!</div>
                    <div class="page-main-section__title title">Вопросы пациентов</div>
                    <div class="page-main-section__description description">Основная специализация клиник МЦДИ «ROOTT» и ReSmile - это восстановление зубного ряда в самых запущенных и сложных случаях, применяя последние методы в области имплантации. Наряду с основным своим направлением, клиника осуществляет все виды стоматологических услуг в области терапии, ортопедии, ортодонтии, хирургии и т.п.
                        <br> <br>
                        Уникальность клиники заключается в том, что все виды обследования, необходимые для решения проблем пациента, можно сделать за один визит непосредственно в клинике на первичной консультации. Также в клинике есть своя стоматологическая лаборатория, что сокращает время на изготовление протезов. © Тексты, опубликованные на сайте dentalroott, защищаются законом об авторском праве.
                    </div>
                    <button class="btn">Узнать о нашем производстве</button>
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
                                    <label for="checkbox" class="checkbox__label"><span>Согласие с обработкой персональных данных</span></label>
                                </div>
                            </div>
                            <div class="form-about__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-second-section">
        <div class="container page-second-section__container">
            <div class="page-second-section__name">
                <div class="page-second-section__subtitle subtitle">И подзаголовок тоже</div>
                <div class="page-second-section__title title">Нужно придумать заголовок</div>
                <div class="page-second-section__description description">Основная специализация клиник МЦДИ «ROOTT» и ReSmile - это восстановление зубного ряда в самых запущенных и сложных случаях, применяя последние методы в области имплантации. Наряду с основным своим направлением
                </div>
            </div>
    </section>

    <section class="page-questions-section">
        <div class="page-questions-section__container container">
            <div class="page-questions-section__column">

                <div class="page-price-section__buttons-page">

                    <a class="buttons-page-1" href="#">
                        <div class="buttons-page-1__img"></div>
                        <div class="buttons-page-1__text">Лечение в рассрочку</div>
                    </a>

                    <a class="buttons-page-2" href="#">
                        <div class="buttons-page-2__img"></div>
                        <div class="buttons-page-2__text">Налоговый вычет</div>
                    </a>

                    <a class="buttons-page-3" href="#">
                        <div class="buttons-page-3__img"></div>
                        <div class="buttons-page-3__text">Гарантия на услуги</div>
                    </a>

                    <img class="page-price-section__buttons-decor" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">

                </div>

                <div class="page-service-section__form">
                    <div class="page-content__title">Запись <br>на консультацию</div>
                    <div class="page-content__text">Обратите внимание, все наши консультации – бесплатные</div>

                    <div class="feedback-form-laboratory">

                        <div class="page-service-section__decor decor-red"></div>
                        <div class="page-price-section__decor decor-lilac"></div>

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
                                        <label for="checkbox-3" class="checkbox__label"><span>Согласие с обработкой персональных данных</span></label>
                                    </div>
                                </div>
                                <div class="form-laboratory__submit">
                                    <input class="btn btn_submit" type="submit" value="Записаться">
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

                                <div class="accordion-home__decor"></div>

                                <div class="accordion-home__nav-title">Общие вопросы</div>
                                <div class="accordion-home__nav-subtitle">4 вопроса</div>
                            </div>

                            <div class="accordion-home__decor-wrapper">
                                <div class="accordion-home__arrow"></div>
                                <div class="accordion-home__strip strip strip_yellow"></div>
                            </div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <div data-tab="tab1-faq-tab-1" class="faq__tab">Сопутствующие заболевания</div>

                            <div id="tab1-faq-tab-1" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab1-faq-tab-2" class="faq__tab">Договор на лечени</div>

                            <div id="tab1-faq-tab-2" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab1-faq-tab-3" class="faq__tab">Лечение иногородних</div>

                            <div id="tab1-faq-tab-3" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab1-faq-tab-4" class="faq__tab">Опасен ли рентген?</div>

                            <div id="tab1-faq-tab-4" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-2" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor"></div>

                                <div class="accordion-home__nav-title">Общие вопросы</div>
                                <div class="accordion-home__nav-subtitle">4 вопроса</div>
                            </div>

                            <div class="accordion-home__decor-wrapper">
                                <div class="accordion-home__arrow"></div>
                                <div class="accordion-home__strip strip strip_yellow"></div>
                            </div>
                        </div>
                        <div id="home-tab-2" class="accordion-home__content">

                            <div data-tab="tab2-faq-tab-1" class="faq__tab">Сопутствующие заболевания</div>

                            <div id="tab2-faq-tab-1" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-2" class="faq__tab">Договор на лечени</div>

                            <div id="tab2-faq-tab-2" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-3" class="faq__tab">Лечение иногородних</div>

                            <div id="tab2-faq-tab-3" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab2-faq-tab-4" class="faq__tab">Опасен ли рентген?</div>

                            <div id="tab2-faq-tab-4" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-3" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor"></div>

                                <div class="accordion-home__nav-title">Общие вопросы</div>
                                <div class="accordion-home__nav-subtitle">4 вопроса</div>
                            </div>

                            <div class="accordion-home__decor-wrapper">
                                <div class="accordion-home__arrow"></div>
                                <div class="accordion-home__strip strip strip_yellow"></div>
                            </div>
                        </div>
                        <div id="home-tab-3" class="accordion-home__content">

                            <div data-tab="tab3-faq-tab-1" class="faq__tab">Сопутствующие заболевания</div>

                            <div id="tab3-faq-tab-1" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-2" class="faq__tab">Договор на лечени</div>

                            <div id="tab3-faq-tab-2" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-3" class="faq__tab">Лечение иногородних</div>

                            <div id="tab3-faq-tab-3" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab3-faq-tab-4" class="faq__tab">Опасен ли рентген?</div>

                            <div id="tab3-faq-tab-4" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="accordion-home">
                        <div data-tab="home-tab-4" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor"></div>

                                <div class="accordion-home__nav-title">Общие вопросы</div>
                                <div class="accordion-home__nav-subtitle">4 вопроса</div>
                            </div>

                            <div class="accordion-home__decor-wrapper">
                                <div class="accordion-home__arrow"></div>
                                <div class="accordion-home__strip strip strip_yellow"></div>
                            </div>
                        </div>
                        <div id="home-tab-4" class="accordion-home__content">

                            <div data-tab="tab4-faq-tab-1" class="faq__tab">Сопутствующие заболевания</div>

                            <div id="tab4-faq-tab-1" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab4-faq-tab-2" class="faq__tab">Договор на лечени</div>

                            <div id="tab4-faq-tab-2" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab4-faq-tab-3" class="faq__tab">Лечение иногородних</div>

                            <div id="tab4-faq-tab-3" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                            <div data-tab="tab4-faq-tab-4" class="faq__tab">Опасен ли рентген?</div>

                            <div id="tab4-faq-tab-4" class="faq__content">
                                <div class="faq__content-title">Могу ли я пройти лечение при наличии диабета, остеопороза, иммунных и других заболеваний?</div>
                                <div class="faq__content-text">В каждом конкретном случае решение о безопасности лечения при наличии серьезных заболеваний принимает доктор непосредственно на консультации.
                                    <br> <br>
                                    В нашем центре проводятся уникальные операции по имплантации зубов по технологии “ReSmile” у пациентов со сложной клинической картиной и сопутствующими заболеваниями, поэтому, скорее всего, мы сможем вам помочь.
                                    <br> <br>
                                    Обязательно расскажите доктору на приеме о своих хронических заболеваниях - это очень важно.
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
</div>
</section>



</div>

<?php
get_footer();
?>