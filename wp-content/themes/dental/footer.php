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


    <!-- Модальные окна -->
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

            <!-- Модальные окна с докторами -->

            <!-- Borisenko -->
            <div class="modal-form modal-form_doctor" id="borisenkoModal">

                <div class="modal__close"><span></span></div>

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




            <script src="//reservi.ru/4.0/812444789/"></script>

            <?php
            wp_footer();
            ?>

            </body>

            </html>