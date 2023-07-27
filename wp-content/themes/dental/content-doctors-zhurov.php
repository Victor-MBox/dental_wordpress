<?php
/* 
Template Name: Доктор - Журов Илья Владимирович
*/
?>

<?php
get_header();
?>

<div class="page">
    <div class="page-doctors-content">
        <div class="page-content">

            <div class="container">

                <div class="breadcrumbs">
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="page-content__container">

                    <section class="page-contetn__wrapper" id="content-page">

                        <div class="page-content__chapter">
                            <div class="page-content__banner page-content__banner_zhurov">
                                <div class="page-content__name">Журов<br> Илья <br> Владимирович</div>
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Хирург имплантолог</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Илье Владимировичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Илье Владимировичу</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-2">
                                            <div class="form-portfolio__input">
                                                <input type="text" name="name" placeholder="Имя" class="input">
                                            </div>

                                            <div class="form-portfolio__input phone-input">
                                                <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                                            </div>

                                            <div class="form-portfolio__textarea">
                                                <textarea name="texterea" placeholder="Задать вопрос"></textarea>
                                            </div>

                                            <div class="form-about__item">
                                                <div class="checkbox">
                                                    <input id="checkbox-2" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-2" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                                </div>
                                            </div>

                                            <div class="form-portfolio__submit">
                                                <input class="btn btn_submit" type="submit" value="Узнать больше" data-callback="onSubmit">
                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>
                            <div class="page-content__first-decor">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__text">
                                    Дентальная имплантация, аугментация кости и мягких тканей, пародонтология, аутотрансплантация Зубов, зубосохраняющие операции
                                </div>

                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">Воронежская государственная медицинская академия им Н.Н.Бурденко
                                    С 2006-2011гг. <br><br>
                                    Интернатура и первичная специализация по хирургической стоматологии 2012г.<br><br>
                                    Стажировка по навигационной хирургии от фирмы «Osstem”. Ю. Корея, Сеул. 2017г. <br><br>
                                    Офис - курс Бориса Бернацкого 2020г.
                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">
                                    2018 г. Master course of “bone and soft tissue augmentation around implants” Ueli Grunder 2019
                                    “Розовая эстетика часть 2» Маркус Хульцллер <br><br>
                                    2019 г. Курс “ADI-concept “ Михаила Дзюбы 2019г
                                    «Заболевания пародонта и тканей вокруг имплантатов» Пьерпаоло Кортеллини
                                </div>
                            </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>