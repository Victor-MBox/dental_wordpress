<?php
/* 
Template Name: Цены
*/
?>

<?php
get_header();
?>

<div class="page">
    <section class="page-main-section page-main-section_about ">

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
                        <div class="page-main-section__title title">Наши цены</div>
                        <div class="page-main-section__description description">Зубки Всем - это стоматологическая клиника, которая предлагает широкий спектр услуг по доступным ценам. Ценообразование в данной клинике основывается на принципе максимальной прозрачности и разумности. Это означает, что пациенты всегда знают, за что именно они платят, и могут быть уверены в отсутствии скрытых или неожиданных платежей. Клиника стремится сделать высококачественную стоматологию доступной для всех слоев населения.
                            <br><br>
                            Кроме того, клиника дает гарантию на все виды проводимых работ. Это создает дополнительное доверие со стороны пациентов, поскольку они могут быть уверены в качестве предоставляемых услуг. Гарантия является залогом того, что в случае возникновения каких-либо проблем или неудовлетворительных результатов, клиника предпримет все необходимые меры для их устранения.
                        </div>
                        <div id="textHidden" class="text-hidden">
                            Клиника "Зубки Всем" также проводит ежемесячные акции, которые делают услуги клиники еще более привлекательными.
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
                <div class="page-second-section__subtitle subtitle">Гибкая система ценообразования</div>
                <div class="page-second-section__title title">Цены на стоматологические услуги клиники "Зубки Всем"</div>
                <div class="page-second-section__description description">Гибкая система ценообразования учитывает сложность процедуры, материалы и индивидуальные особенности пациента. Мы стремимся предоставить конкурентоспособные и справедливые цены, сочетая их с высоким качеством услуг.
                </div>
            </div>
    </section>

    <section class="page-price-section" id="psection">
        <div class="page-price-section__container container">
            <div class="page-price-section__column">

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

            <div class="page-price-section__column">

                <div class="accordion-price-page">

                    <div class="accordion-home">
                        <div data-tab="home-tab-1" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">

                                <div class="accordion-home__decor"></div>

                                <div class="accordion-home__nav-title">Консультация и диагностика</div>
                                <div class="accordion-home__nav-subtitle">Консультации online и в клинике</div>
                            </div>

                            <div class="accordion-home__decor-wrapper">
                                <div class="accordion-home__arrow"></div>
                                <div class="accordion-home__strip strip strip_yellow"></div>
                            </div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-01.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>0₽</span>
                                </div>


                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__price">
                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>№1</span> <br>
                                        Осмотр
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">Бесплатно</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>№2</span> <br>
                                        Фото протокол и его презентация
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">Бесплатно</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>№3</span> <br>
                                        Снимок ОПТГ
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">1 500 ₽</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>№4</span> <br>
                                        Прицельный снимок
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">500 ₽</div>
                                </div>

                                <div class="accordion-home__price-item">
                                    <div class="accordion-home__price-name">
                                        <span>№5</span> <br>
                                        Составление плана лечения
                                    </div>
                                    <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                    <div class="accordion-home__price-price">Бесплатно</div>
                                </div>
                            </div>

                        </div>


                        <div class="accordion-home">
                            <div data-tab="home-tab-2" class="accordion-home__tab">
                                <div class="accordion-home__nav-column">
                                    <div class="accordion-home__decor accordion-home__decor_red"></div>

                                    <div class="accordion-home__nav-title">Протезирование</div>
                                    <div class="accordion-home__nav-subtitle">Съемное и несъемное протезтирование
                                    </div>
                                </div>
                                <div class="accordion-home__decor-wrapper">
                                    <div class="accordion-home__arrow"></div>
                                    <div class="accordion-home__strip strip strip_red"></div>
                                </div>
                            </div>
                            <div id="home-tab-2" class="accordion-home__content">

                                <div class="accordion-home__img-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-02.jpg" alt="">

                                    <div class="accordion-home__label">
                                        от <span>1 500₽</span>
                                    </div>


                                    <div class="accordion-home__btn-call">
                                        <button class="btn-call" data-modal="mainModal">
                                            <div class="btn-call__img"></div>
                                            <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                        </button>
                                    </div>
                                </div>

                                <p class="accordion-home__price-title">Съемное протезирование</p>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№1</span> <br>
                                            Оттиски
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">от 1500 ₽ <br> до 2000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№2</span> <br>
                                            Определение соотношения челюстей (прикусные шаблоны)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">2 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№3</span> <br>
                                            Частично съемные микропротезы (1-3 зуба) из акрила
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">12 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№4</span> <br>
                                            Частично съемные микропротезы (1-3 зуба) из акрифри или нейлона
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">15 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№5</span> <br>
                                            Частично съемный акриловый протез
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">29 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№6</span> <br>
                                            Частично съемный акриловый протез с литой армировкой
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">40 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№7</span> <br>
                                            Полный съемный акриловый протез
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">40 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№8</span> <br>
                                            Полный съемный акриловый протез с армировкой
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">45 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№9</span> <br>
                                            Полный съемный или частично съемный протез из нейлона или акрифри
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">45 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№10</span> <br>
                                            Бюгельный протез кламмерной фиксации
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">53 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№11</span> <br>
                                            Бюгельный протез с замковыми креплениями
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">65 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№12</span> <br>
                                            Шинирующий бюгель при заболеваниях пародонта
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">60 000 ₽</div>
                                    </div>

                                </div>

                                <p class="accordion-home__price-title">Условно съемное протезирование на имплантатах</p>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№1</span> <br>
                                            Оттиски
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">от 1500 ₽ <br> до 2000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№2</span> <br>
                                            Определение соотношения челюстей (прикусные шаблоны)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">2 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№3</span> <br>
                                            Протезирование полным съемным акриловым протезом с опорой на имплантаты на локаторах (1 челюсть) локаторы в стоимость не входят
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">160 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№4</span> <br>
                                            Локатор (переходник имплантата и фиксирующий элемент протеза)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">18 000 ₽ <br> 1шт</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№5</span> <br>
                                            Протезирование полным съемным акриловым протезом с опорой на имплантаты на шаровидных абатментах (1 челюсть) абатмент в стоимость не входит (1 челюсть)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">160 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№6</span> <br>
                                            Шаровидный абатмент (переходник имплантата и фиксирующий элемент протеза)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">18 000 ₽ <br> 1шт</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№7</span> <br>
                                            Балочные конструкции на замках (Цельнофрезерованная балка с замками+ ответная часть балочной конструкции)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">250 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№8</span> <br>
                                            Временный протез винтовой фиксации с опорой на имплантаты с металлической основой (немедленная нагрузка) послеоперационный протез после установки 4х или 6ти имплантов
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">150 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№9</span> <br>
                                            Постоянный акриловый протез винтовой фиксации на цельно фрезерованной металлической основе которая подлежит корректировке и обновлению на протяжении многих лет
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">200 000 ₽</div>
                                    </div>

                                </div>

                                <p class="accordion-home__price-title">Несъемное протезирование на своих зубах</p>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№1</span> <br>
                                            Оттиски
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">от 1500 ₽ <br> до 2000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№2</span> <br>
                                            Предварительное планирование (возможность увидеть будущую конструкцию чаще всего используют при изготовлении виниров или же при тотальном протезировании)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">3 000 ₽ <br> 1 зуб</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№3</span> <br>
                                            Временная коронка прямым методом(изготавливают в кресле)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">3 500 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№4</span> <br>
                                            Временная коронка длительного ношения (изготавливается в зуботехнической лаборатории)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№5</span> <br>
                                            Восстановление зуба металлической штифтовой вкладкой
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">6 500 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№6</span> <br>
                                            Восстановления зуба металлической вкладкой разборной
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">7 500 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№7</span> <br>
                                            Восстановления зуба вкладкой из драгосодержащего сплава серебра
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">8 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№8</span> <br>
                                            Цельнометаллическая коронка
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">11 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№9</span> <br>
                                            Металлокерамическая коронка
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">19 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№10</span> <br>
                                            Циркониевая коронка (полной анатомии)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">28 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№11</span> <br>
                                            Циркониевая коронка повышенной эстетики(индивидуализация керамическими массами)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">310 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№12</span> <br>
                                            Винир полной анатомической формы (E-max)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">19 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№13</span> <br>
                                            Винир повышенной эстетики (индивидуализация керамическими массами)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">21 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№14</span> <br>
                                            Винор на рефлекторе (практически без обточки тканей зуба)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">30 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№15</span> <br>
                                            Коронка безметалловая (E-max)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">19 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№16</span> <br>
                                            Коронка безметалловая (E-max) повышенной эстетики
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">21 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№17</span> <br>
                                            Керамические пломбы
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">19 000 ₽</div>
                                    </div>
                                </div>

                                <p class="accordion-home__price-title">Несъемное протезирование на имплантах</p>

                                <div class="accordion-home__price">
                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№1</span> <br>
                                            Оттиски
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">от 1500 ₽ <br> до 2000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№2</span> <br>
                                            Временная коронка на импланте
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">18 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№3</span> <br>
                                            Коронка винтовой фиксации из циркония (полной анатомической формы)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">28 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№4</span> <br>
                                            Коронка винтовой фиксации из циркония повышенной эстетики (индивидуализация керамическими массами)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">32 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№5</span> <br>
                                            Металлокерамическая коронка винтовой фиксации
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">25 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№6</span> <br>
                                            Коронка из циркония цементной фиксации (полной анатомии)индивидуальный абатмент в стоимость не входит
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">27 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№7</span> <br>
                                            Коронка из циркония цементной фиксации повышенной эстетики (индивидуализация керамическими массами)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">29 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№8</span> <br>
                                            Циркониевый индивидуальный абатмент (коронка в стоимость не входит)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">22 000 ₽</div>
                                    </div>

                                    <div class="accordion-home__price-item">
                                        <div class="accordion-home__price-name">
                                            <span>№9</span> <br>
                                            Титановый индивидуальный абатмент (коронка в стоимость не входит)
                                        </div>
                                        <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                        <div class="accordion-home__price-price">18 000 ₽</div>
                                    </div>
                                </div>

                            </div>

                            <div class="accordion-home">
                                <div data-tab="home-tab-3" class="accordion-home__tab">
                                    <div class="accordion-home__nav-column">
                                        <div class="accordion-home__decor"></div>

                                        <div class="accordion-home__nav-title">Лечение зубов, терапия</div>
                                        <div class="accordion-home__nav-subtitle">Любые виды лечения зубов
                                        </div>
                                    </div>
                                    <div class="accordion-home__decor-wrapper">
                                        <div class="accordion-home__arrow"></div>
                                        <div class="accordion-home__strip strip strip_yellow"></div>
                                    </div>
                                </div>
                                <div id="home-tab-3" class="accordion-home__content">

                                    <div class="accordion-home__img-wrapper">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-03.jpg" alt="">

                                        <div class="accordion-home__label">
                                            от <span>400₽</span>
                                        </div>


                                        <div class="accordion-home__btn-call">
                                            <button class="btn-call" data-modal="mainModal">
                                                <div class="btn-call__img"></div>
                                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                            </button>
                                        </div>
                                    </div>

                                    <p class="accordion-home__price-title">Лечения зуба пломбой</p>

                                    <div class="accordion-home__price">
                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№1</span> <br>
                                                Сошлифовывание твердых тканей зуба при лечении кариеса и его осложнений (избирательная пришлифовка)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№2</span> <br>
                                                Наложение временной пломбы
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">600 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№3</span> <br>
                                                Поверхностный кариес (композитная пломба)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">4 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№4</span> <br>
                                                Средний кариес (композитная пломба)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">5 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№5</span> <br>
                                                Поверхностный кариес (композитная пломба)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">4 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№6</span> <br>
                                                Глубокий кариес (композитная пломба)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">7 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№7</span> <br>
                                                Восстановление зуба вкладками, виниром, полукоронкой из фотополимерного материала прямым методом (эстетическая реставрация)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">9 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№8</span> <br>
                                                Избирательное полирование зуба
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">400 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№9</span> <br>
                                                Восстановление зуба пломбировочными материалами с использованием стекловолоконного штифта или стекловолоконной ленты (прямая эстетическая реставрация реставрация)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">12 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№10</span> <br>
                                                Восстановление зуба пломбировочными материалами с использованием штифтов из стекловолокна
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">10 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№11</span> <br>
                                                Трепанация зуба, искусственной коронки, снятие коронки
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 000 ₽</div>
                                        </div>
                                    </div>

                                    <p class="accordion-home__price-title">ЭНДОДОНТИЯ: Лечение осложнений кариеса (эндодонтическое лечение корневых каналов)</p>

                                    <div class="accordion-home__price">
                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№1</span> <br>
                                                Наложение девитализирующей пасты
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№2</span> <br>
                                                Ультразвуковое расширение корневого канала зуба
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№3</span> <br>
                                                Инструментальная и медикаментозная обработка корневого канала (повторная)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№4</span> <br>
                                                Инструментальная и медикаментозная обработка хорошо проходимого корневого канала
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№5</span> <br>
                                                Инструментальная и медикаментозная обработка плохо проходимого корневого канала
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№6</span> <br>
                                                Распломбировка корневого канала ранее леченного пастой
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№7</span> <br>
                                                Распломбировка корневого канала ранее леченного фосфат-цементом / резорцин-формальдегидным методом
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">3 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№8</span> <br>
                                                Постоянное пломбирование корневого канала зуба
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">3 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№9</span> <br>
                                                Закрытие перфорации стенки корневого канала зуба
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№10</span> <br>
                                                Временное пломбирование лекарственным препаратом “Каласепт” корневого канала
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№11</span> <br>
                                                Фиксация внутриканального штифта/вкладки
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№12</span> <br>
                                                Удаление внутриканального штифта/вкладки
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 000 ₽</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="accordion-home">
                                <div data-tab="home-tab-4" class="accordion-home__tab">
                                    <div class="accordion-home__nav-column">
                                        <div class="accordion-home__decor accordion-home__decor_blue"></div>

                                        <div class="accordion-home__nav-title">Хирургия</div>
                                        <div class="accordion-home__nav-subtitle">Любые хирургические операции
                                        </div>
                                    </div>
                                    <div class="accordion-home__decor-wrapper">
                                        <div class="accordion-home__arrow"></div>
                                        <div class="accordion-home__strip strip strip_turquoise"></div>
                                    </div>
                                </div>
                                <div id="home-tab-4" class="accordion-home__content">

                                    <div class="accordion-home__img-wrapper">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-04.jpg" alt="">

                                        <div class="accordion-home__label">
                                            от <span>2000₽</span>
                                        </div>


                                        <div class="accordion-home__btn-call">
                                            <button class="btn-call" data-modal="mainModal">
                                                <div class="btn-call__img"></div>
                                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="accordion-home__price">
                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№1</span> <br>
                                                Удаления зуба постоянного не сложное
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">4 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№2</span> <br>
                                                Удаления зуба сложное с разъединением корней
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">5 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№3</span> <br>
                                                Удаление сверхкомплектного зуба
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">9 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№4</span> <br>
                                                Рецессия верхушки корня
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">7 200 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№5</span> <br>
                                                Резекция верхушки корня с ретроградной пломбировкой 1го канала
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">15 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№6</span> <br>
                                                Вскрытие однородного абсцесса
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№7</span> <br>
                                                Отсроченный кюретаж лунки удаленного зуба
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№8</span> <br>
                                                Коррекция объема и формы альвеолярного отростка (удаление экзостоза)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">25 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№9</span> <br>
                                                Пластика уздечки верхней губы
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">4 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№10</span> <br>
                                                Пластика уздечки нижней губы
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">4 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№11</span> <br>
                                                Пластика уздечки языка
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">5 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№12</span> <br>
                                                Синуслифтинг закрытый
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">17 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№13</span> <br>
                                                Синуслифтинг открытый
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">30 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№14</span> <br>
                                                Вправление вывиха нижней челюсти
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">3 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№15</span> <br>
                                                Наложение повязки при операциях в полости рта,наложение послеоперационных швов
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№16</span> <br>
                                                Снятие шины с одной челюсти
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">Бесплатно</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№17</span> <br>
                                                Иссечение новообразований мягких тканей с реконструктивно-пластическим компонентом
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">10 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№18</span> <br>
                                                Иссечения свища мягких тканей
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">5 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№19</span> <br>
                                                Иссечение поверхностного свищевого хода
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">5 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№20</span> <br>
                                                Иссечение глубокого свищевого хода
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">6 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№21</span> <br>
                                                Вскрытие гематомы мягких тканей
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№22</span> <br>
                                                Коагуляция кровоточащего сосуда
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№23</span> <br>
                                                Коагуляция кровоточащего сосуда лазерная
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№24</span> <br>
                                                Снятие послеоперационных швов
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№25</span> <br>
                                                Наложение повязки при операциях в полости рта с использованием сгустка PRP
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">5 000 ₽</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="accordion-home">
                                <div data-tab="home-tab-5" class="accordion-home__tab">
                                    <div class="accordion-home__nav-column">
                                        <div class="accordion-home__decor accordion-home__decor_lilac"></div>

                                        <div class="accordion-home__nav-title">Имплантация</div>
                                        <div class="accordion-home__nav-subtitle">Любые импланты</div>
                                    </div>
                                    <div class="accordion-home__decor-wrapper">
                                        <div class="accordion-home__arrow"></div>
                                        <div class="accordion-home__strip strip strip_lilac"></div>
                                    </div>
                                </div>
                                <div id="home-tab-5" class="accordion-home__content">

                                    <div class="accordion-home__img-wrapper">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-05.jpg" alt="">

                                        <div class="accordion-home__label">
                                            от <span>3500₽</span>
                                        </div>

                                        <div class="accordion-home__btn-call">
                                            <button class="btn-call" data-modal="mainModal">
                                                <div class="btn-call__img"></div>
                                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="accordion-home__price">
                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№1</span> <br>
                                                Внутрикостная дентальная имплантация “Neo Dent” (Швейцария)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">3 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№2</span> <br>
                                                Внутрикостная дентальная имплантация “Osstem” (Корея)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">30 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№3</span> <br>
                                                Внутрикостная дентальная имплантация “Astra” (Швеция)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">₽</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="accordion-home">
                                <div data-tab="home-tab-6" class="accordion-home__tab">
                                    <div class="accordion-home__nav-column">
                                        <div class="accordion-home__decor accordion-home__decor_red"></div>

                                        <div class="accordion-home__nav-title">Ортодонтия</div>
                                        <div class="accordion-home__nav-subtitle">Исправление прикуса</div>
                                    </div>
                                    <div class="accordion-home__decor-wrapper">
                                        <div class="accordion-home__arrow"></div>
                                        <div class="accordion-home__strip strip strip_red"></div>
                                    </div>
                                </div>
                                <div id="home-tab-6" class="accordion-home__content">

                                    <div class="accordion-home__img-wrapper">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-06.jpg" alt="">

                                        <div class="accordion-home__label">
                                            от <span>1500₽</span>
                                        </div>


                                        <div class="accordion-home__btn-call">
                                            <button class="btn-call" data-modal="mainModal">
                                                <div class="btn-call__img"></div>
                                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="accordion-home__price">
                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№1</span> <br>
                                                Консультация
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№2</span> <br>
                                                Оттиски
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">от 1500 ₽ <br> до 2000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№3</span> <br>
                                                Диагностические модели для анализа
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№4</span> <br>
                                                Фотоприкол
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">Бесплатно</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№5</span> <br>
                                                Составления плана лечения и наглядного проекта до и после
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">10 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№6</span> <br>
                                                Брекет система (2 челюсть)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">от 220000 ₽<br> до 270000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№7</span> <br>
                                                Элайнеры (2 челюсти)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">от 270000 ₽<br> до 300000 ₽</div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-home">
                                <div data-tab="home-tab-7" class="accordion-home__tab">
                                    <div class="accordion-home__nav-column">
                                        <div class="accordion-home__decor accordion-home__decor_lilac"></div>

                                        <div class="accordion-home__nav-title">Гигиена</div>
                                        <div class="accordion-home__nav-subtitle">Сохранить крепкость и здоровье зубов</div>
                                    </div>
                                    <div class="accordion-home__decor-wrapper">
                                        <div class="accordion-home__arrow"></div>
                                        <div class="accordion-home__strip strip strip_lilac"></div>
                                    </div>
                                </div>
                                <div id="home-tab-7" class="accordion-home__content">

                                    <div class="accordion-home__img-wrapper">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-07.jpg" alt="">

                                        <div class="accordion-home__label">
                                            от <span>2 000₽</span>
                                        </div>


                                        <div class="accordion-home__btn-call">
                                            <button class="btn-call" data-modal="mainModal">
                                                <div class="btn-call__img"></div>
                                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="accordion-home__price">
                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№1</span> <br>
                                                Ультразвуковое удаление наддесневых и поддесневых отложений в отложений в области зуба (2 челюсти ) + полировка пастой
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">4 500 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№2</span> <br>
                                                Профессиональная гигиена полости рта и зубов + ”Аэр-фло”
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price"> ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№3</span> <br>
                                                Запечатывание фиссур герметиком
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">1 000 ₽</div>
                                        </div>
                                    </div>

                                    <p class="accordion-home__price-title">Отбеливание</p>

                                    <div class="accordion-home__price">
                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№1</span> <br>
                                                Профессиональное отбеливание зубов (2 челюсти)
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">22 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№2</span> <br>
                                                Профессиональное отбеливание домашнее каповое (2 капы )
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">20 000 ₽</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№3</span> <br>
                                                Гель для домашнего отбеливания
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 000 ₽ <br> 1 шприц</div>
                                        </div>

                                        <div class="accordion-home__price-item">
                                            <div class="accordion-home__price-name">
                                                <span>№4</span> <br>
                                                Профессиональное отбеливание зубов клиническое
                                            </div>
                                            <div class="accordion-home__price-link"><a href="#">О методе</a></div>
                                            <div class="accordion-home__price-price">2 000 ₽ <br> 1 зуб</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
    </section>
</div>
<script>
	
	   window.onload = function() {
        var hash = document.location.hash;
        if (hash != undefined && hash != null && hash!='') {
            var h = hash.replace("#", "");
	
	var priceblock=$("div").find("[data-tab='home-tab-" + h + "']");
 $('html,body').animate({scrollTop: $("#psection").offset().top }, 'slow');

			priceblock.click();
		}
	   }
		</script>
<?php
get_footer();
?>