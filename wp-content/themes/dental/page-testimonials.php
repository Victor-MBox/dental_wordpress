<?php
/* 
Template Name: Отзывы
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
                        <div class="page-main-section__title title">Отзывы</div>
                        <div class="page-main-section__description description">Стоматологический центр "Зубки всем" уделяет особое внимание отзывам своих пациентов. Мы гордимся тем, что все отзывы, опубликованные о нас, являются реальными и представляют собой честные мнения наших пациентов о полученных услугах. Наша основная цель - предоставление качественного стоматологического обслуживания, и мы ценим каждое мнение, которое помогает нам совершенствоваться и расти. <br> <br>
                            В отзывах пациентов на независимых площадках, вы можете найти подробную информацию о различных аспектах нашей работы. От качества предоставляемых услуг и профессионализма наших врачей, до уровня комфорта в нашем центре и дружелюбного обслуживания. Мы постоянно анализируем отзывы, чтобы улучшать качество наших услуг и делать посещение нашей клиники как можно более приятным и комфортным для каждого пациента.
                        </div>
                        <div id="textHidden" class="text-hidden">
                            Важно отметить, что "Зубки всем" относится к отзывам своих пациентов с полной серьезностью и открытостью. Мы уважаем каждое мнение и стремимся быть максимально честными и прозрачными в своей работе. Ваше мнение имеет большое значение для нас, и мы благодарны за любую обратную связь, которая помогает нам становиться лучше.
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-06.jpg" alt="">
                    </div>
                </div>

                <div class="page-main-section__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">
                                <input type="hidden" name="form_name" value="Общая на странице Отзывы"> 
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
                <div class="page-second-section__subtitle subtitle">Работаем прозрачно и честно</div>
                <div class="page-second-section__title title">Отзывы наших пациентов</div>
                <div class="page-second-section__description description">Мы понимаем, что отзывы наших пациентов являются важным фактором принятия решения при выборе клиники. Поэтому, не скрываем отзывов наших пациентов. Они помогут больше узнать о нашей клинике, процессе лечения и результатах. Если вы уже являетесь нашим пациентом и хотите оставить отзыв, то мы всегда рады услышать ваше мнение!
                </div>
            </div>
    </section>

    <section class="page-questions-section">
        <div class="page-questions-section__container container">
            <div style="margin-bottom: 70px;" class="page-questions-section__column">

                <div class="page-price-section__buttons-page">

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
                        <div class="page-price-section__decor decor-lilac"></div>

                        <div class="feedback-form-laboratory__form">

                            <form action="#" class="form-laboratory" id="form-3">
                                <input type="hidden" name="form_name" value="Общая на странице Отзывы">
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
                <script src="https://res.smartwidgets.ru/app.js" defer></script>
                <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
            </div>
        </div>
        <img class="page-price-section__buttons-decor" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
    </section>
</div>

<?php
get_footer();
?>