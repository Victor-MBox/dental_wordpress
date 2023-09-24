<?php
/* 
Template Name: Услуга Аксиография
*/
?>

<?php
get_header();
?>

<div class="page-all">
    <div class="page-content">
        <div class="page-content__container container">

            <section class="page-contetn__wrapper" id="content-page">

                <div class="page-content__chapter">
                    <div class="page-content__banner page-content__banner_axiography">
                        <div class="page-content__name">Аксиография</div>
                        <div class="page-content__label">от <span>3 000₽</span></div>
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
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-price.svg" alt="" loading="lazy">
                            <p>Услуга</p>
                        </div>

                        <div class="page-content__column-table">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-price-2.svg" alt="" loading="lazy">
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

                    <?php
                    get_template_part('widget-before-after');
                    ?>

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