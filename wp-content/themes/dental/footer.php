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
                        <li><a href="/Dental/o-klinike/">О клинике</a></li>
                        <li><a href="/Dental/vrachi/">Врачи</a></li>
                        <li><a href="/Dental/czeny/">Цены</a></li>
                        <li><a href="/Dental/akczii">Акции</a></li>
                        <li><a href="/Dental/otzyvy/">Отзывы</a></li>
                        <li><a href="/Dental/galereya/">Галерея</a></li>
                        <li><a href="/Dental/kontakty/">Контакты</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <div class="footer__title">Услуги</div>
                    <ul class="footer__nav-list">
                        <li><a href="/Dental/uslugi/">Диагностика</a></li>
                        <li><a href="/Dental/uslugi/">Протезирование</a></li>
                        <li><a href="/Dental/uslugi/">Имплантаця</a></li>
                        <li><a href="/Dental/uslugi/">Терапия</a></li>
                        <li><a href="/Dental/uslugi/">Хирургия</a></li>
                        <li><a href="/Dental/uslugi/">Ортодонтия</a></li>
                        <li><a href="/Dental/uslugi/">Гигиена</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <div class="footer__title">Контакты</div>

                    <div class="footer__item">
                        <div class="footer__img-phone">
                        </div>
                        <p><?php the_field('footer_phone', 2); ?></p>
                    </div>

                    <div class="footer__item">
                        <div class="footer__img-map">
                        </div>
                        <p><?php the_field('footer_adres', 2); ?></p>
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
                                <input class="btn" type="submit" value="Узнать больше">
                            </div>
                        </form>

                    </div>

                    <p>Рейтинг на yandex.ru</p>
                    <div class="footer__rating">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/stars.svg" alt="">
                        <p>4 872 Оценок</p>
                    </div>
                </div>

            </div>

            <hr>

            <div class="footer__policy">
                <p>© 2023 Все права защищены «Зубки Всем» </p>
                <div class="footer__policy-link">
                    <a href="#">Terms of Use</a> •
                    <a href="#">Privacy Policy</a>
                </div>
            </div>

        </div>
    </footer>


    <!-- Модальные окна -->
    <div class="modal">
        <div class="modal__overlay">

            <div class="modal-form" id="mainModal">

                <div class="modal__close"><span></span></div>

                <div class="modal-form__title">
                    Записаться на консультацию
                </div>
                <div class="feedback-form__form">

                    <form action="#" class="form-modal" id="form-modal">
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
                                <label for="checkboxModal" class="checkbox__label"><span>Согласие с обработкой персональных данных</span></label>
                            </div>
                        </div>
                        <div class="form-modal__submit">
                            <input class="btn btn_submit" type="submit" value="Узнать больше">
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

            <div class="video-modal" id="videoModal">
                
                <div class="modal__close modal__close_video"><span></span></div>

                <div class="video-modal__wrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Gw2oJYOdcko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>




        <?php
        wp_footer();
        ?>

        </body>

        </html>