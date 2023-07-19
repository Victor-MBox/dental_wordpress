<?php
/* 
Template Name: ХИРУРГИЯ - Простое удаление
*/
?>

<?php
get_header();
?>

<div class="page">
    <div class="page-content">
        <div class="page-content__container container">

            <section class="page-contetn__wrapper" id="content-page">

                <div class="page-content__chapter">
                    <div class="page-content__banner page-content__banner_udaleniye-prostoe">
                        <div class="page-content__name">Простое <br>удаление зубов</div>
                        <div class="page-content__label">от <span>4 500₽</span></div>
                        <div class="page-content__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>
                    </div>
                    <div class="page-content__first-decor">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
                    </div>

                    <div class="page-content__text">При таком способе используются щипцы-экстрактор, которым зуб расшатывается в лунке и быстро извлекается. Простое удаление не подразумевает использования дополнительных инструментов, вскрытия десны и надкостницы. <br><br>
                        <b>Показания к простому удалению:</b>
                    </div>
                    <div class="page-content__list">
                        <ul>
                            <li>зуб не имеет больше 2-х корней;</li>
                            <li>корни правильной формы, без переплетений;</li>
                            <li>коронка относительно сохранена и позволяет захватить ее щипцами.</li>
                        </ul>
                    </div>
                    <div class="page-content__text">Простое удаление зубов проводят в экстренном или плановом порядке. Его нельзя откладывать при усилении воспалительного процесса, нагноении кисты, переломе челюсти в месте зуба или опухолях.
                    </div>
                </div>

                <div class="page-content__chapter">
                    <div class="page-content__title">Этапы операции:</div>
                    <div class="page-content__list">
                        <ul>
                            <li>осматривают коронку, проверяя ее на прочность;</li>
                            <li>проводят местную анестезию;</li>
                            <li>область удаления обрабатывают антисептиком;</li>
                            <li>инструментом отделяют десну и накладывают щипцы;</li>
                            <li>зуб вращают или раскачивают, чтобы разорвать периодонтальные связки, затем извлекают из лунки;</li>
                            <li>в лунку накладывается тампон или гемостатическая губка.</li>
                        </ul>
                    </div>
                </div>

                <!-- Цены -->
                <div class="page-content__chapter">
                    <div class="page-content__title">Цены</div>

                    <div class="page-content__table">

                        <div class="page-content__column-table">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-price.svg" alt="">
                            <p>Услуга</p>
                        </div>

                        <div class="page-content__column-table">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-price-2.svg" alt="">
                            <p>Стоимость</p>
                        </div>
                    </div>

                    <table class="table-service">
                        <tr>
                            <td class="table-service__name">Удаления зуба постоянного не сложное</td>
                            <td class="table-service__price">4 500 ₽</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Удаления зуба сложное с разъединением корней</td>
                            <td class="table-service__price">5 000 ₽</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Удаление сверхкомплектного зуба</td>
                            <td class="table-service__price">9 000 ₽</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Рецессия верхушки корня</td>
                            <td class="table-service__price">7 200 ₽</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Резекция верхушки корня с ретроградной пломбировкой 1го канала</td>
                            <td class="table-service__price">15 000 ₽</td>
                        </tr>
                    </table>

                    <div class="table-service__btn">
                        <a href="/czeny/" class="btn">Полный прайс-лист</a>
                        <a href="/akczii/" class="btn">Акции</a>
                    </div>
                </div>

                <!-- До-после -->
                <div class="page-content__chapter">
                    <div class="page-content__title">До/После</div>

                    <div class="page-content__before-after" id="beforeAfterSlider">


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

                    <a class="page-content__before-after-link" href="#">Все работы</a>

                </div>

                <!-- Доктора -->
                <div class="page-content__chapter">
                    <div class="page-content__title">Наши специалисты</div>

                    <div class="specialists-section__carousel carousel" id="slickCarouselServise">

                        <div class="carousel__wrapper">
                            <div class="carousel__photo">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-08.jpg" alt="">
                                <div class="carousel__label">
                                    <p>Опыт</p> <span>11 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Борисенко</span> <br>Инна Владимировна</div>
                            <div class="carousel__text">Врач стоматолог: <br>терапевт, хирург</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo carousel__photo_01">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-09.jpg" alt="">
                                <div class="carousel__label carousel__label_red">
                                    <p>Опыт</p> <span>12 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Зейналов</span> <br>Зейнал Вилаяддинович</div>
                            <div class="carousel__text">Врач стоматолог: <br>терапевт</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo carousel__photo_02">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-04.jpg" alt="">
                                <div class="carousel__label carousel__label_lilac">
                                    <p>Опыт</p> <span>12 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Сарыбаев</span> <br>Анарбек Муктарбекович</div>
                            <div class="carousel__text">Врач стоматолог: <br>терапевт</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo carousel__photo_03">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-010.jpg" alt="">
                                <div class="carousel__label carousel__label_yellow">
                                    <p>Опыт</p> <span>32 года</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Антоновский</span> <br>Антон
                                Анатольевич</div>
                            <div class="carousel__text">Врач стоматолог: <br>ортопед, главный врач</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo carousel__photo_03">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-06.jpg" alt="">
                                <div class="carousel__label carousel__label_yellow">
                                    <p>Опыт</p> <span>13 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Игонин</span> <br>Василий Валентинович</div>
                            <div class="carousel__text">Врач стоматолог: <br>ортопед, хирург</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-01.jpg" alt="">
                                <div class="carousel__label">
                                    <p>Опыт</p> <span>7 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Хандогин</span> <br>Антон Олегович</div>
                            <div class="carousel__text">Врач стоматолог: <br>ортопед</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo carousel__photo_01">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-03.jpg" alt="">
                                <div class="carousel__label carousel__label_red">
                                    <p>Опыт</p> <span>12 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Журов</span> <br>Илья Владимирович</div>
                            <div class="carousel__text">Врач стоматолог: <br>хирург имплантолог</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo carousel__photo_02">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-05.jpg" alt="">
                                <div class="carousel__label">
                                    <p>Опыт</p> <span>2 года</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Бачулис</span> <br>Марина Александровна</div>
                            <div class="carousel__text">Врач стоматолог: <br>ортодонт, гигиенист</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo carousel__photo_03">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-07.jpg" alt="">
                                <div class="carousel__label carousel__label_yellow">
                                    <p>Опыт</p> <span>18 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Джахбарова</span> <br>Рабият Магомедгаджиевна</div>
                            <div class="carousel__text">Гигиенист, <br>ассистент стоматолога</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>

                        <div class="carousel__wrapper">
                            <div class="carousel__photo">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-02.jpg" alt="">
                                <div class="carousel__label carousel__label_lilac">
                                    <p>Опыт</p> <span>10 лет</span>
                                </div>
                            </div>
                            <div class="carousel__name"><span>Байкулова</span> <br>Асият Хамитовна</div>
                            <div class="carousel__text">Врач стоматолог: <br>гигиенист</div>
                            <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                        </div>
                    </div>

                    <a href="/vrachi/" class="btn">Все специалисты</a>
                </div>

                <!-- Отзывы -->
                <div class="page-content__chapter">
                    <div class="page-content__title">Отзывы</div>
                    <script src="https://res.smartwidgets.ru/app.js" defer></script>
                    <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
                </div>

            </section>

        </div>
    </div>
</div>


<?php
get_footer();
?>