<!-- Footer -->
<footer class="footer">
    <div class="container footer__container">

        <div class="scroll-up ">
            <svg class="scroll-up__svg" vievBox="-2 -2 52 52">
                <path class="scroll-up__svg-path" d="
                        M25,1
                        a24,24 0 0,1 0,48
                        a24,24 0 0,1 0,-48
                    " />
            </svg>
        </div>


        <div class="footer__wrapper">

            <div class="footer__column">
                <div class="footer__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="footer__description">Доступное протезирование
                    на базе собственной лаборатории
                    и клиники Олега Бачулиса</div>
                <div class="footer__social social">
                    <a href="https://telegram.im/@zubkivsem1" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                    <a href="https://wa.me/79858883749?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C%20%D1%85%D0%BE%D1%87%D1%83%20%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%2C%20%D1%8F%20%D0%BA%20%D0%B2%D0%B0%D0%BC%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0." target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                    <a href="viber://chat?number=%2B79858883749" target="blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/viber.svg" alt=""></a>
                </div>
            </div>

            <div class="footer__column">
                <div class="footer__title">Информация</div>
                <ul class="footer__nav-list">
                    <li><a href="/o-klinike/">О клинике</a></li>
                    <li><a href="/vrachi/">Врачи</a></li>
                    <li><a href="/czeny/">Цены</a></li>
                    <li><a href="/akczii">Акции</a></li>
                    <li><a href="/otzyvy/">Отзывы</a></li>
                    <li><a href="/galereya/">Галерея</a></li>
                    <li><a href="/kontakty/">Контакты</a></li>
                </ul>
            </div>

            <div class="footer__column">
                <div class="footer__title">Услуги</div>
                <ul class="footer__nav-list">
                    <li><a href="/uslugi/?a=1_1#1_1">Диагностика</a></li>
                    <li><a href="/uslugi/?a=2_1#2_1">Протезирование</a></li>
                    <li><a href="/uslugi/?a=3_1#3_1">Терапия</a></li>
                    <li><a href="/uslugi/?a=4_1#4_1">Хирургия</a></li>
                    <li><a href="/uslugi/?a=5_1#5_1">Ортодонтия</a></li>
                    <li><a href="/uslugi/?a=6_1#6_1">Гигиена</a></li>
                    <li><a href="/uslugi/?a=7_1#7_1">Гнатология</a></li>
                </ul>
            </div>

            <div class="footer__column">
                <div class="footer__title">Контакты</div>

                <div class="footer__item">
                    <div class="footer__img-phone">
                    </div>
                    <a href="tel:<?php the_field('footer_phone', 2); ?>"><?php the_field('footer_phone', 2); ?></a>
                </div>

                <div class="footer__item">
                    <div class="footer__img-map">
                    </div>
                    <a href="/kontakty/"><?php the_field('footer_adres', 2); ?></a>
                </div>

                <div class="footer__item">
                    <div class="footer__img-time">
                    </div>
                    <p><?php the_field('footer_time', 2); ?></p>
                </div>

            </div>

            <div class="footer__column">
                <div class="footer__title">Подписаться на наши акции</div>

                <div class="footer__form">

                    <form action="#" class="form-footer" id="form-footer">

                        <div class="form-footer__input email-input">
                            <input type="email" name="email" placeholder="Email" class="input">
                        </div>

                        <div class="form-footer__submit">
                            <input class="btn" type="submit" value="Подписаться" data-callback="onSubmit">
                        </div>
                    </form>

                </div>

                <p>Рейтинг на yandex.ru</p>
                <div class="footer__rating">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/stars.svg" alt="">
                    <p>277 Оценок</p>
                </div>
            </div>

        </div>

        <hr>

        <div class="footer__policy">
            <p>© 2023 Все права защищены «Зубки Всем» </p>
            <a href="<?php echo bloginfo('template_url'); ?>/assets/pdf/lic-01.pdf" target="blank">Лицензия № ЛО-77-01-020362 от 10 сентября 2020 г.</a>
            <div class="footer__policy-link">
                <a href="/policy/">Политика обработки персональных данных</a>
            </div>
        </div>

    </div>
</footer>


<!-- //! Модальные окна -->

<div class="modal">
    <div class="modal__overlay">

        <div class="modal__overlay-item"></div>

        <div class="modal-form" id="mainModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modal">

                    <input type="hidden" name="form_name" value="Консультация">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxModal" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxModal" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <div class="thanks-modal" id="thanksModal">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> на консультацию ;)</div>
                <div class="thanks-modal__subtitle">Наши специалисты свяжутся <br> с вами в самое ближайшее время</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <div class="thanks-modal" id="thanksModalEmail">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> на наши акции ;)</div>
                <div class="thanks-modal__subtitle">Теперь вы будете вкурсе новостей <br> клиники и проходящих акциях</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <div class="video-modal" id="videoModal">

            <div class="modal__close modal__close_video"><span></span></div>

            <div class="video-modal__wrapper">
                <iframe src="https://www.youtube.com/embed/Gw2oJYOdcko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

        </div>

        <!-- //* Модальные окна с докторами -->
        <!-- //? Borisenko -->
        <div class="modal-form-doctor" id="borisenkoModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-08.jpg" alt="">
                        <div class="modal-form__label">стаж <span>11 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Инне Владимировне</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalBorisenko">

                            <input type="hidden" name="form_name" value="Запись на прием к Инне Владимировне">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalBorisenko" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalBorisenko" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Borisenko -->
        <div class="thanks-modal" id="thanksModalBorisenko">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Инне Владимировне</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Borisenko Question-->
        <div class="thanks-modal" id="thanksModalBorisenkoQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Инне Владимировне</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Инна Владимировна даст на него ответ</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Zejnalov -->
        <div class="modal-form-doctor" id="zejnalovModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-09.jpg" alt="">
                        <div class="modal-form__label">стаж <span>12 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Зейналу Вилаяддиновичу</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalZejnalov">

                            <input type="hidden" name="form_name" value="Запись на прием к Зейналу Вилаяддиновичу">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalZejnalov" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalZejnalov" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Zejnalov -->
        <div class="thanks-modal" id="thanksModalZejnalov">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Зейналу Вилаяддиновичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Zejnalov Question-->
        <div class="thanks-modal" id="thanksModalZejnalovQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Зейналу Вилаяддиновичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Зейнал Вилаяддинович даст на него ответ</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Sarybaev -->
        <div class="modal-form-doctor" id="sarybaevModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-04.jpg" alt="">
                        <div class="modal-form__label">стаж <span>12 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Анарбеку Муктарбековичу</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalSarybaev">

                            <input type="hidden" name="form_name" value="Запись на прием к Анарбеку Муктарбековичу">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalSarybaev" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalSarybaev" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Sarybaev -->
        <div class="thanks-modal" id="thanksModalSarybaev">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Анарбеку Муктарбековичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Sarybaev Question-->
        <div class="thanks-modal" id="thanksModalSarybaevQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Анарбеку Муктарбековичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Анарбек Муктарбекович даст на него ответ</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Antonovskij -->
        <div class="modal-form-doctor" id="antonovskijModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-010.jpg" alt="">
                        <div class="modal-form__label">стаж <span>32 года</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Антону Анатольевичу</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalAntonovskij">

                            <input type="hidden" name="form_name" value="Запись на прием к Антону Анатольевичу">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalAntonovskij" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalAntonovskij" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Antonovskij -->
        <div class="thanks-modal" id="thanksModalAntonovskij">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Антону Анатольевичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Antonovskij Question-->
        <div class="thanks-modal" id="thanksModalAntonovskijQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Антону Анатольевичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Антон Анатольевич даст на него ответ</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Igonin -->
        <div class="modal-form-doctor" id="igoninModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-06.jpg" alt="">
                        <div class="modal-form__label">стаж <span>13 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Василию Валентиновичу</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalIgonin">

                            <input type="hidden" name="form_name" value="Запись на прием к Василию Валентиновичу">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalIgonin" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalIgonin" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Igonin -->
        <div class="thanks-modal" id="thanksModalIgonin">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Василию Валентиновичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Igonin Question-->
        <div class="thanks-modal" id="thanksModalIgoninQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Василию Валентиновичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Василий Валентинович даст на него ответ</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Handogin -->
        <div class="modal-form-doctor" id="handoginModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-01.jpg" alt="">
                        <div class="modal-form__label">стаж <span>7 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Антону Олеговичу</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalHandogin">

                            <input type="hidden" name="form_name" value="Запись на прием к Антону Олеговичу">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalHandogin" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalHandogin" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Handogin -->
        <div class="thanks-modal" id="thanksModalHandogin">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Антону Олеговичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Handogin Question-->
        <div class="thanks-modal" id="thanksModalHandoginQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Антону Олеговичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Антон Олегович даст на него ответ</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Zhurov -->
        <div class="modal-form-doctor" id="zhurovModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-03.jpg" alt="">
                        <div class="modal-form__label">стаж <span>12 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Илье Владимировичу</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalZhurov">

                            <input type="hidden" name="form_name" value="Запись на прием к Илье Владимировичу">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalZhurov" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalZhurov" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Zhurov -->
        <div class="thanks-modal" id="thanksModalZhurov">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Илье Владимировичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Zhurov Question-->
        <div class="thanks-modal" id="thanksModalZhurovQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Илье Владимировичу</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Илья Владимирович даст на него ответ</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Dzhahbarova -->
        <div class="modal-form-doctor" id="dzhahbarovaModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-07.jpg" alt="">
                        <div class="modal-form__label">стаж <span>18 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Рабият Магомедгаджиевне</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalDzhahbarova">

                            <input type="hidden" name="form_name" value="Запись на прием к Рабият Магомедгаджиевне">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalDzhahbarova" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalDzhahbarova" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Dzhahbarova -->
        <div class="thanks-modal" id="thanksModalDzhahbarova">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Рабият Магомедгаджиевне</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Dzhahbarova Question-->
        <div class="thanks-modal" id="thanksModalDzhahbarovaQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Рабият Магомедгаджиевне</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Рабият Магомедгаджиевна даст на него ответ</div>
                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Bajkulova -->
        <div class="modal-form-doctor" id="bajkulovaModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-02.jpg" alt="">
                        <div class="modal-form__label">стаж <span>10 лет</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Асият Хамитовнае</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalBajkulova">

                            <input type="hidden" name="form_name" value="Запись на прием к Асият Хамитовнае">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalBajkulova" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalBajkulova" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Bajkulova -->
        <div class="thanks-modal" id="thanksModalBajkulova">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Асият Хамитовнае</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Bajkulova Question-->
        <div class="thanks-modal" id="thanksModalBajkulovaQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Асият Хамитовнае</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Асият Хамитовна даст на него ответ</div>
                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- //? Bachulis -->
        <div class="modal-form-doctor" id="bachulisModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form-doctor__wrapper">
                <div class="modal-form__column modal-form__column_img">

                    <div class="modal-form__doctor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-05.jpg" alt="">
                        <div class="modal-form__label">стаж <span>2 года</span></div>
                    </div>
                </div>

                <div class=" modal-form__column">
                    <div class="modal-form__title">Записаться на прием <br>
                        к <span>Марине Александровне</span></div>

                    <div class="feedback-form__form">

                        <form action="#" class="form-modal" id="form-modalBachulis">

                            <input type="hidden" name="form_name" value="Запись на прием к Марине Александровне">

                            <div class="form-modal__input">
                                <input type="text" name="name" placeholder="Имя" class="input">
                            </div>
                            <div class="form-modal__input email-input">
                                <input type="email" name="email" placeholder="Email" class="input">
                            </div>
                            <div class="form-modal__input phone-input">
                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                            </div>
                            <div class="form-modal__item">
                                <div class="checkbox">
                                    <input id="checkboxModalBachulis" checked type="checkbox" name="agreement" class="checkbox__input">
                                    <label for="checkboxModalBachulis" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                </div>
                            </div>
                            <div class="form-modal__submit">
                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <!-- thanks-modal Bachulis -->
        <div class="thanks-modal" id="thanksModalBachulis">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> к <span>Марине Александровне</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время мы свяжемся с вами для уточнения деталей записи </div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>

        <!-- thanks-modal Bachulis Question-->
        <div class="thanks-modal" id="thanksModalBachulisQuest">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Вы задали вопрос <br> <span>Марине Александровне</span></div>
                <div class="thanks-modal__subtitle">В ближайшее время, Марина Александровна даст на него ответ</div>
                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>


        <!-- //* Модальные окна с АКЦИЯМИ -->
        <!-- //? АКЦИЯ 1 -->
        <div class="modal-form" id="stock1Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">При установке 5 виниров – 6-й дарим в подарок!</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock1">

                    <input type="hidden" name="form_name" value="Консультация. Акция: При установке 5 виниров – 6-й дарим в подарок!">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock1" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock1" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <!-- //? АКЦИЯ 2 -->
        <div class="modal-form" id="stock2Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">Профессиональное отбеливание зубов – 15000₽</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock2">

                    <input type="hidden" name="form_name" value="Консультация. Акция: Профессиональное отбеливание зубов – 15000₽">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock2" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock2" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <!-- //? АКЦИЯ 3 -->
        <div class="modal-form" id="stock3Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">Дарим скидку 15% на терапевтическое лечение</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock3">

                    <input type="hidden" name="form_name" value="Консультация. Акция: Дарим скидку 15% на терапевтическое лечение.">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock3" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock3" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <!-- //? АКЦИЯ 4 -->
        <div class="modal-form" id="stock4Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">Коронка из самого прочного материала – циркония всего за 18000₽</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock4">

                    <input type="hidden" name="form_name" value="Консультация. Акция: Коронка из самого прочного материала – циркония всего за 18000₽.">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock4" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock4" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <!-- //? АКЦИЯ 5 -->
        <div class="modal-form" id="stock5Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">Каждый второй имплант со скидкой 50%!</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock5">

                    <input type="hidden" name="form_name" value="Консультация. Акция: Каждый второй имплант со скидкой 50%!">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock5" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock5" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <!-- //? АКЦИЯ 6 -->
        <div class="modal-form" id="stock6Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">Имплантация All-on-4 на одну челюсть 150.000₽ только в июле!</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock6">

                    <input type="hidden" name="form_name" value="Консультация. Акция: Имплантация All-on-4 на одну челюсть 150.000₽ только в июле!">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock6" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock6" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <!-- //? АКЦИЯ 7 -->
        <div class="modal-form" id="stock7Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">Съемные протезы из высококачественных материалов от 15000₽ за 3 сеанса!</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock7">

                    <input type="hidden" name="form_name" value="Консультация. Акция: Съемные протезы из высококачественных материалов от 15000₽ за 3 сеанса!">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock7" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock7" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>

        <!-- //? АКЦИЯ 8 -->
        <div class="modal-form" id="stock8Modal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Записаться на консультацию
            </div>
            <div class="modal-form__subtitle">Подарок именинникам - скидка 10% на услуги стоматологии!</div>

            <div class="feedback-form__form">

                <form action="#" class="form-modal" id="form-modalStock8">

                    <input type="hidden" name="form_name" value="Консультация. Акция: Подарок именинникам - скидка 10% на услуги стоматологии!">

                    <div class="form-modal__input">
                        <input type="text" name="name" placeholder="Имя" class="input">
                    </div>
                    <div class="form-modal__input email-input">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="form-modal__input phone-input">
                        <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                    </div>
                    <div class="form-modal__item">
                        <div class="checkbox">
                            <input id="checkboxStock8" checked type="checkbox" name="agreement" class="checkbox__input">
                            <label for="checkboxStock8" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                        </div>
                    </div>
                    <div class="form-modal__submit">
                        <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                    </div>
                </form>

            </div>
        </div>



        <div class="thanks-modal" id="thanksModalStock">

            <div class="thanks-modal__wrapper">

                <div class="thanks-modal__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/heart.svg" alt=""></div>

                <div class="thanks-modal__title">Благодарим за запись <br> на консультацию ;)</div>
                <div class="thanks-modal__subtitle">Наши специалисты свяжутся с вами в самое ближайшее время и подробно проинформируют по проходящим акциям</div>

                <div class="thanks-modal__btn">
                    <button>Закрыть</button>
                </div>
            </div>

        </div>


    </div>
</div>









<!-- 1C script -->
<script src="//reservi.ru/4.0/812444789/"></script>

<?php
wp_footer();
?>

</body>

</html>