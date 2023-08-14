<!-- Footer -->
<footer class="footer">
    <div class="container footer__container">

        <div class="footer__wrapper">

            <div class="footer__column">
                <div class="footer__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="footer__description">Доступное протезирование на базе СОБСТВЕННОЙ ЛАБОРАТОРИИ и клиники Бачулиса Олега и Замура Юлии</div>
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

    <!-- //! Кнопка обратной связи -->
    <!-- // * МЕСЕНДЖЕРЫ -->
    <div class="feedback-widget">
        <div class="feedback-widget__content">
            <a target="_blank" href="viber://chat?number=%2B79858883749/">
                <svg class="t-sociallinks__svg" width="50px" height="50px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm19.546-71.18c-1.304-1.184-6.932-4.72-18.674-4.772 0 0-13.905-.913-20.655 5.2-3.757 3.71-5.022 9.226-5.161 15.957l-.016.691c-.156 6.885-.433 19.013 11.47 22.32l-.053 10.386c0 .587.093.988.428 1.071.241.059.602-.066.91-.372 1.968-1.978 8.271-9.582 8.271-9.582 8.457.553 15.186-1.117 15.91-1.354.17-.054.415-.111.72-.183 2.752-.641 10.37-2.417 11.776-13.773 1.613-13.003-.594-21.88-4.926-25.589ZM48.664 31.51a.908.908 0 0 1 .914-.901c4.585.032 8.468 1.56 11.584 4.597 3.146 3.067 4.696 7.24 4.736 12.404a.908.908 0 1 1-1.815.013c-.037-4.79-1.461-8.458-4.188-11.117-2.757-2.688-6.18-4.053-10.33-4.082a.908.908 0 0 1-.9-.914Zm2.374 2.932a1.15 1.15 0 1 0-.168 2.294c2.918.213 5.067 1.184 6.597 2.854 1.541 1.684 2.304 3.784 2.248 6.389a1.15 1.15 0 0 0 2.3.05c.067-3.133-.87-5.826-2.851-7.992-2.01-2.193-4.758-3.349-8.126-3.595Zm1.156 4.454a.908.908 0 1 0-.095 1.812c1.335.07 2.223.458 2.8 1.054.58.6.964 1.535 1.033 2.936a.908.908 0 0 0 1.813-.09c-.083-1.677-.558-3.09-1.542-4.108-.987-1.021-2.368-1.519-4.009-1.604Zm1.805 15.633c-.594.732-1.698.64-1.698.64-8.066-2.06-10.224-10.23-10.224-10.23s-.097-1.104.638-1.698l1.458-1.158c.722-.557 1.183-1.908.448-3.228a34.125 34.125 0 0 0-1.839-2.881c-.641-.877-2.136-2.671-2.142-2.677-.72-.85-1.78-1.048-2.898-.466a.045.045 0 0 0-.012.003l-.011.003a12.062 12.062 0 0 0-2.986 2.432c-.69.833-1.085 1.65-1.185 2.45a1.57 1.57 0 0 0-.022.357c-.003.354.05.706.16 1.042l.038.026c.348 1.236 1.22 3.296 3.114 6.731a40.117 40.117 0 0 0 3.735 5.654c.703.89 1.456 1.74 2.256 2.543l.029.03.057.056.085.086.086.085.086.086a29.64 29.64 0 0 0 2.543 2.255 40.072 40.072 0 0 0 5.655 3.736c3.433 1.894 5.495 2.766 6.73 3.114l.026.038c.336.11.688.164 1.041.16.12.006.24-.001.358-.022.802-.095 1.618-.49 2.448-1.184a.032.032 0 0 0 .007-.004.101.101 0 0 0 .003-.004l.012-.008a12.09 12.09 0 0 0 2.41-2.97l.003-.01a.054.054 0 0 0 .002-.013c.583-1.117.385-2.177-.47-2.899l-.189-.154c-.484-.4-1.783-1.47-2.487-1.988a34.12 34.12 0 0 0-2.879-1.838c-1.32-.736-2.669-.275-3.228.448L54 54.528Z" fill="#7360f2"></path>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=79858883749&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D1%85%D0%BE%D1%87%D1%83+%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C%D1%81%D1%8F+%D0%BA+%D0%B2%D0%B0%D0%BC%2C+%D1%8F+%D0%BA+%D0%B2%D0%B0%D0%BC+%D1%81+%D1%81%D0%B0%D0%B9%D1%82%D0%B0.&type=phone_number&app_absent=0">
                <svg role="presentation" width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 50a25 25 0 100-50 25 25 0 000 50z" fill="#fff"></path>
                    <path d="M26.1 12a12.1 12.1 0 00-10.25 18.53l.29.46-1.22 4.46 4.57-1.2.45.27a12.1 12.1 0 106.16-22.51V12zm6.79 17.22c-.3.85-1.72 1.62-2.41 1.72-.62.1-1.4.14-2.25-.14-.7-.22-1.37-.47-2.03-.77-3.59-1.57-5.93-5.24-6.1-5.48-.19-.24-1.47-1.97-1.47-3.76 0-1.79.93-2.67 1.25-3.03.33-.37.72-.46.96-.46.23 0 .47 0 .68.02.22 0 .52-.09.8.62l1.1 2.7c.1.18.16.4.04.64s-.18.39-.36.6c-.18.21-.38.47-.54.64-.18.18-.36.38-.15.74.2.36.92 1.55 1.98 2.52 1.37 1.23 2.52 1.62 2.88 1.8.35.18.56.15.77-.1.2-.23.9-1.05 1.13-1.42.24-.36.48-.3.8-.18.33.12 2.09 1 2.44 1.18.36.19.6.28.69.43.09.15.09.88-.21 1.73z" fill="#27D061"></path>
                    <path d="M25 0a25 25 0 100 50 25 25 0 000-50zm1.03 38.37c-2.42 0-4.8-.6-6.9-1.76l-7.67 2 2.05-7.45a14.3 14.3 0 01-1.93-7.2c0-7.92 6.49-14.38 14.45-14.38a14.4 14.4 0 110 28.79z" fill="#27D061"></path>
                </svg>
            </a>
            <a target="_blank" href="https://telegram.im/@zubkivsem1">
                <svg class="t-sociallinks__svg" width="50px" height="50px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm21.977-68.056c.386-4.38-4.24-2.576-4.24-2.576-3.415 1.414-6.937 2.85-10.497 4.302-11.04 4.503-22.444 9.155-32.159 13.734-5.268 1.932-2.184 3.864-2.184 3.864l8.351 2.577c3.855 1.16 5.91-.129 5.91-.129l17.988-12.238c6.424-4.38 4.882-.773 3.34.773l-13.49 12.882c-2.056 1.804-1.028 3.35-.129 4.123 2.55 2.249 8.82 6.364 11.557 8.16.712.467 1.185.778 1.292.858.642.515 4.111 2.834 6.424 2.319 2.313-.516 2.57-3.479 2.57-3.479l3.083-20.226c.462-3.511.993-6.886 1.417-9.582.4-2.546.705-4.485.767-5.362Z" fill="#1d98dc"></path>
                </svg>
            </a>
            </svg>
            <a href="tel:+74951503001">
                <svg class="t-sociallinks__svg" width="50px" height="50px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM32.3668 30.3616C33.8958 28.835 34.6798 28.1875 35.1534 28.0601C35.715 27.909 36.2052 28.0405 36.7168 28.4797C37.1497 28.8512 38.2438 29.9713 38.9927 30.8096C41.1931 33.2729 43.8747 36.6359 44.2503 37.4031C44.3639 37.6353 44.375 37.701 44.3558 38.0323C44.3204 38.643 44.196 38.8343 43.3793 39.5344C42.0767 40.6509 40.0803 42.739 39.3824 43.7149C38.9257 44.3535 38.9126 44.7536 39.3248 45.483C39.675 46.1027 41.378 48.345 42.5783 49.7667C44.5875 52.1467 46.9159 54.3696 49.1773 56.0669C50.8579 57.3283 53.2214 58.7821 54.8035 59.5275C55.9343 60.0603 56.2878 60.0303 57.0122 59.3401C57.7069 58.6782 58.5246 57.6102 59.8946 55.5759C60.3408 54.9132 60.7739 54.3136 60.857 54.2434C61.1104 54.0293 61.3967 53.9282 61.8141 53.9055C62.0813 53.891 62.2608 53.9062 62.4057 53.9555C62.6843 54.0504 63.4107 54.5045 66.36 56.4276C67.7285 57.32 69.2454 58.3032 69.7309 58.6125C72.4818 60.3651 72.7871 60.6005 72.9291 61.0781C73.1185 61.7157 72.9605 62.1254 72.063 63.3233C70.9487 64.8107 69.0734 66.8197 67.674 68.0252C66.5388 69.0032 65.0797 69.9865 63.6409 70.743L63.0188 71.0701L62.389 71.0696C60.5532 71.0685 58.822 70.7024 56.1724 69.7552C49.967 67.5366 44.465 64.2895 39.647 60.0025C38.7431 59.1981 36.6429 57.0816 35.8606 56.1866C33.2537 53.2039 31.2905 50.2948 29.5948 46.9021C28.373 44.4575 27.2502 41.6203 27.0609 40.4995C26.7835 38.8572 27.4592 36.7086 28.9757 34.4108C29.8832 33.0359 30.8773 31.8488 32.3668 30.3616V30.3616Z" fill="#000"></path>
                </svg>
            </a>
        </div>

        <div class=" feedback-widget__header" onclick="toggleFeedbackWidget()">
        </div>

    </div>

    <!-- // * Обратный звонок -->
    <div class="callback-widget">
        <div class="callback-widget__content">
            <div class="callback-widget__window">
                <div class="callback-widget__window-title">Оставьте номер телефона <br> и мы перезвоним в <br> ближайшее время</div>
                <div class="callback-widget__window-form">

                    <form action="#" class="form-laboratory" id="form-callback-widget">

                        <input type="hidden" name="form_name" value="Обратный звонок">

                        <div class="form-laboratory__input phone-input">
                            <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                        </div>
                        <div class="form-about__item">
                            <div class="checkbox">
                                <input id="checkbox-callback-widget" checked type="checkbox" name="agreement" class="checkbox__input">
                                <label for="checkbox-callback-widget" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                            </div>
                        </div>
                        <div class="form-laboratory__submit">
                            <input class="btn btn_submit" type="submit" value="Отправить" data-callback="onSubmit">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class=" callback-widget__header" onclick="toggleCallbackWidget()">
        </div>

    </div>

    <!-- // * Кнопка наверх -->
    <div class="scroll-up ">
        <svg class="scroll-up__svg" vievBox="-2 -2 52 52">
            <path class="scroll-up__svg-path" d="
                        M25,1
                        a24,24 0 0,1 0,48
                        a24,24 0 0,1 0,-48
                    " />
        </svg>
    </div>

</footer>

<!-- //! Кнопка для вызова окна чат-бота -->
<div class="chatbot__container">
    <div class="chatbot__btn">
        <div class="shine"></div>
    </div>
</div>

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
                <iframe id="youtube-iframe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

        </div>

        <div class="modal-bot" id="botModal">

            <div class="modal__close"><span></span></div>

            <div class="modal-form__title">
                Рассчитать предварительную стоимость Вам поможет наш ЗубкиБот 🤖
            </div>

            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/arrow-right2.svg" alt="">

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

        <!-- thanks-modal stock-->
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
<!-- <script src="//reservi.ru/4.0/812444789/"></script> -->

<?php
wp_footer();
?>

</body>

</html>