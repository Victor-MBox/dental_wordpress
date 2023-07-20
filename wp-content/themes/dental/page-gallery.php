<?php
/* 
Template Name: Галерея
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
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-9.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">Наши работы</div>
                        <div class="page-main-section__description description">Наша галерея работ демонстрирует высокий уровень профессионализма и мастерства нашей команды. Пациенты доверяют нам свое здоровье, а мы, в свою очередь, делаем все возможное, чтобы оправдать это доверие. Все снимки до и после лечения опубликованы с разрешения наших пациентов, что подчеркивает прозрачность и открытость нашей работы. <br> <br>
                            В нашей команде работают только опытные врачи, которые заботятся о здоровье своих пациентов. Наша команда врачей постоянно обновляет свои знания и навыки, чтобы предоставлять самые современные и эффективные методы лечения. Мы гордимся тем, что наши врачи обладают глубокими знаниями и богатым опытом, что позволяет им предоставлять нашим пациентам безопасную и качественную медицинскую помощь.<br> <br>
                            Кроме того, наличие собственной зуботехнической лаборатории позволяет нам гарантировать контроль качества на каждом участке и обеспечивает высокие стандарты, принятые в нашем стоматологическом центре.
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
                                    <input class="btn btn_submit" type="submit" value="Узнать больше">
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
                <div class="page-second-section__subtitle subtitle">Убедитесь в качестве наших услуг сами</div>
                <div class="page-second-section__title title">Работы специалистов клиники "Зубки Всем"</div>
                <div class="page-second-section__description description">Мы с гордостью предоставляем вам примеры наших работ, которые демонстрируют высокий профессионализм нашей команды! Здесь вы найдете фотографии клинический случаев, с которыми мы успешно справились. Если у вас есть вопросы - обращайтесь по телефону: <br> <a href="tel:+74951503001">+7 (495) 150-30-01</a>
                </div>
            </div>
    </section>

    <section class="page-questions-section">
        <div class="page-questions-section__container container">
            <div style="margin-bottom: 70px;" class="page-questions-section__column">

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
                                        <label for="checkbox-3" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                <div class="portfolio-section__column">
                    <div class="portfolio-section__before-after" id="beforeAfterSlider">


                        <div class="before-after">
                            <span id="before" class="before__btn">ДО</span>
                            <span id="after" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-after.jpg" alt="" class="before-after__img">
                                <div class="before-after__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-before.jpg" alt="" class="before-after__img">
                                </div>
                            </div>
                            <div class="before-after__procedure procedure">
                                <div class="procedure__img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                </div>
                                <div class="procedure__subtitle">процедура</div>
                                <div class="procedure__title">Протезирование</div>
                                <div class="procedure__text">Были установлены 4 импланта.</div>
                                <div class="procedure__prise">Стоимость: <span>150 000 ₽</span></div>
                                <button class="btn btn_lilac">Больше работ</button>
                            </div>
                        </div>

                        <div class="before-after2">
                            <span id="before2" class="before__btn">ДО</span>
                            <span id="after2" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after2__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-before.jpg" alt="" class="before-after2__img">
                                <div class="before-after2__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/portfolio-after.jpg" alt="" class="before-after2__img">
                                </div>
                            </div>
                            <div class="before-after2__procedure procedure">
                                <div class="procedure__img">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                </div>
                                <div class="procedure__subtitle">процедура</div>
                                <div class="procedure__title">Имплантаця</div>
                                <div class="procedure__text">Были установлены 4 импланта.</div>
                                <div class="procedure__prise">Стоимость: <span>100 000 ₽</span></div>
                                <button class="btn btn_lilac">Больше работ</button>
                            </div>
                        </div>

                    </div>


                    <div class="slider-arrows">
                        <button class="slider-arrows__left" id="introSliderPrev" type="button"></button>
                        <button class="slider-arrows__right" id="introSliderNext" type="button"></button>
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