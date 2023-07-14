<?php
/* 
Template Name: Доктор - Байкулова Асият Хамитовна
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
                            <div class="page-content__banner page-content__banner_bajkulova">
                                <div class="page-content__name">Байкулова <br> Асият <br> Хамитовна</div>
                                <div class="page-content__label">стаж <span>10 лет</span></div>
                                <div class="page-content__label-prof"><span>Гигиенист</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Асият Хамитовнае</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Асият Хамитовнае</span></div>
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
                                                <input class="btn btn_submit" type="submit" value="Узнать больше">
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
                                    Проведение комплексной гигиены полости рта. <br>
                                    Отбеливание зубов клиническое + домашнее отбеливание капами. <br>
                                    Реминерализующая терапия.
                                </div>
                                <div class="page-content__list">
                                    <ul>
                                        <li>2020 Ассоциированный член «Общества по изучению цвета в стоматологии»</li>
                                        <li>2023 Член профессионального общества гигиенистов стоматологических</li>
                                    </ul>
                                </div>
                            </div>



                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">2020 курс дентальной фотографии <br> <br>
                                    2020 принципы алгоритмизации при проведении профессиональной гигиены <br> <br>
                                    2020 семинар по использованию профессиональных систем Philips Zoom WhiteSpeed для отбеливания зубов в клинических и домашних условиях и мастер класс клинической системы Philips Zoom WhiteSpeed
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