    <!-- Footer -->
    <footer class="footer">
        <div class="container footer__container">

            <div class="footer__wrapper">

                <div class="footer__column">
                    <div class="footer__logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="footer__description">Доступное протезирование
                        на базе собственной лаборатории
                        и клиники Олега Бачулиса</div>
                    <div class="footer__social social">
                        <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/vk_icn.svg" alt=""></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/tg_icon.svg" alt=""></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/soc/ws_icon.svg" alt=""></a>
                    </div>
                </div>

                <div class="footer__column">
                    <div class="footer__title">Информация</div>
                    <ul class="footer__nav-list">
                        <li><a href="#">О клинике</a></li>
                        <li><a href="#">Врачи</a></li>
                        <li><a href="#">Цены</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Отзывы</a></li>
                        <li><a href="#">Галерея</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <div class="footer__title">Услуги</div>
                    <ul class="footer__nav-list">
                        <li><a href="#">Диагностика</a></li>
                        <li><a href="#">Протезирование</a></li>
                        <li><a href="#">Имплантаця</a></li>
                        <li><a href="#">Терапия</a></li>
                        <li><a href="#">Хирургия</a></li>
                        <li><a href="#">Ортодонтия</a></li>
                        <li><a href="#">Гигиена</a></li>
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
        </div>




        <?php
        wp_footer();
        ?>

        </body>

        </html>