<?php
/* 
Template Name: Услуга Компьютерная томография (КТ)
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
                    <div class="page-content__banner">
                        <div class="page-content__name">Компьютерная <br> томография (КТ)</div>
                        <div class="page-content__label">от <span>4 000₽</span></div>
                        <div class="page-content__btn-call">
                            <button class="btn-call" data-modal="mainModal">
                                <div class="btn-call__img"></div>
                                <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                            </button>
                        </div>
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
                            <td class="table-service__name">Осмотр</td>
                            <td class="table-service__price">Бесплатно</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Фото протокол и его презентация</td>
                            <td class="table-service__price">Бесплатно</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Снимок ОПТГ</td>
                            <td class="table-service__price">1 500 ₽</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Прицельный снимок</td>
                            <td class="table-service__price">500 ₽</td>
                        </tr>
                        <tr>
                            <td class="table-service__name">Составление плана лечения</td>
                            <td class="table-service__price">Бесплатно</td>
                        </tr>
                    </table>

                    <div class="table-service__btn">
                        <a href="/czeny/" class="btn">Прайс-лист</a>
                        <a href="/akczii/" class="btn">Акции</a>
                    </div>
                </div>

                <!-- До-после -->
                <div class="page-content__chapter-home">
                    <div class="page-content__title">До/После</div>

                    <div class="page-content__before-after" id="beforeAfterSlider">

                        <div class="before-after">
                            <span id="before" class="before__btn">ДО</span>
                            <span id="after" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-after.jpg" alt="" class="before-after__img">
                                <div class="before-after__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-before.jpg" alt="" class="before-after__img">
                                </div>
                            </div>

                            <div class="before-after__procedure procedure">
                                <div class="procedure__column">
                                    <div class="procedure__row-all">

                                        <div class="procedure__img">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                        </div>

                                        <div class="procedure__row-wrapper">
                                            <div class="procedure__row">
                                                <div class="procedure__subtitle">Процедура</div>
                                            </div>
                                            <div class="procedure__row">
                                                <div class="procedure__title">Виниры</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn_lilac" href="/galereya/">Больше работ</a>

                                </div>
                                <div class="procedure__text">Были установлены виниры</div>
                            </div>

                        </div>

                        <div class="before-after2">
                            <span id="before2" class="before__btn">ДО</span>
                            <span id="after2" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after2__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-09-after.jpg" alt="" class="before-after2__img">
                                <div class="before-after2__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-09-before.jpg" alt="" class="before-after2__img">
                                </div>
                            </div>
                            <div class="before-after__procedure procedure">
                                <div class="procedure__column">
                                    <div class="procedure__row-all">

                                        <div class="procedure__img">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                        </div>

                                        <div class="procedure__row-wrapper">
                                            <div class="procedure__row">
                                                <div class="procedure__subtitle">Процедура</div>
                                            </div>
                                            <div class="procedure__row">
                                                <div class="procedure__title">Гигиена полости рта</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn_lilac" href="/galereya/">Больше работ</a>

                                </div>
                                <div class="procedure__text">Механическое удаление зубного камня и бактериального налета</div>
                            </div>
                        </div>

                        <div class="before-after3">
                            <span id="before3" class="before__btn">ДО</span>
                            <span id="after3" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after3__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-after.jpg" alt="" class="before-after3__img">
                                <div class="before-after3__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-before.jpg" alt="" class="before-after3__img">
                                </div>
                            </div>
                            <div class="before-after__procedure procedure">
                                <div class="procedure__column">
                                    <div class="procedure__row-all">

                                        <div class="procedure__img">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                        </div>

                                        <div class="procedure__row-wrapper">
                                            <div class="procedure__row">
                                                <div class="procedure__subtitle">Процедура</div>
                                            </div>
                                            <div class="procedure__row">
                                                <div class="procedure__title">Установка импланта</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn_lilac" href="/galereya/">Больше работ</a>

                                </div>
                                <div class="procedure__text">Установка импланта</div>
                            </div>
                        </div>

                    </div>

                    <div class="slider-arrows">
                        <button class="slider-arrows__left" id="introSliderPrev" type="button"></button>
                        <button class="slider-arrows__right" id="introSliderNext" type="button"></button>
                    </div>

                </div>

                <!-- Доктора -->
                <div class="page-content__chapter">
                    <div class="page-content__title">Наши специалисты</div>

                    <?php
                    get_template_part('widget-karusel-s-doktorami');
                    ?>

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