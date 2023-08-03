<?php
/* 
Template Name: Доктор - Бачулис Марина Александровна
*/
?>

<?php
get_header();
?>

<div class="page-all">
    <div class="page-doctors-content">
        <div class="page-content">

            <div class="container">

                <div class="breadcrumbs">
                    <?php custom_breadcrumbs(); ?>
                </div>

                <div class="page-content__container">

                    <section class="page-contetn__wrapper" id="content-page">

                        <div class="page-content__chapter">
                            <div class="page-content__banner page-content__banner_bachulis">
                                <div class="page-content__name">Бачулис <br> Марина <br> Александровна</div>
                                <div class="page-content__label">стаж <span>2 года</span></div>
                                <div class="page-content__label-prof"><span>Ортодонт, гигиенист</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="bachulisModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Марине Александровне</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Марине Александровне</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Bachulis">

                                            <input type="hidden" name="form_name" value="Вопрос Марине Александровне">

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
                                                    <input id="checkbox-Bachulis" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Bachulis" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                                    Лечение детей и взрослых на съемных и несъемных аппаратах, в том числе брекет-системе и элайнерах.
                                </div>

                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">2016-2021 Московский Государственный Медико-стоматологический университет им А.И. Евдокимова -стоматология. <br><br>
                                    2021-2023 Центральная государственная медицинская академия» Управления делами Президента Российской Федерации -ортодонтия.
                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">2022- применение системы элайнеров в комплексном лечении пациентов с двнчс. <br><br>
                                    2022- курс сертификации «флексы как прогрессивный метод лечения в современной ортодонтии». <br><br>
                                    2022- курс сертификации «использование флексиков в сменном прикусе». <br><br>
                                    2022- XXII Съезд ортодонтов России.
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