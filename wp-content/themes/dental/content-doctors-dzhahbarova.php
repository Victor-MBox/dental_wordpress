<?php
/* 
Template Name: Доктор - Джахбарова Рабият Магомедгаджиевна
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
                            <div class="page-content__banner page-content__banner_dzhahbarova">
                                <div class="page-content__name">Джахбарова <br> Рабият <br> Магомедгаджиевна</div>
                                <div class="page-content__label">стаж <span>18 лет</span></div>
                                <div class="page-content__label-prof"><span>Гигиенист, ассистент стоматолога</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Рабият Магомедгаджиевне</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Рабият Магомедгаджиевне</span></div>
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
                                    Проведение комплексной гигиены полости рта. <br>
                                    Отбеливание зубов клиническое аппаратное + домашнее отбеливание капами. <br>
                                    Реминерализующая терапия. <br>
                                    Профилактические осмотры. <br>
                                    Первичные консультации.
                                </div>
                                <div class="page-content__list">
                                    <ul>
                                        <li>Доброжелательность</li>
                                        <li>Усидчивость</li>
                                    </ul>
                                    <ul>
                                        <li>Терпеливость</li>
                                        <li>Сострадание</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">2002-2005г-Буйнакское медицинское училище Республика Дагестан "акушерское дело"
                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">
                                    2013г-ГБОУ ДПО "Российская медицинская академия последипломного образования" Министерства здравоохранения РФ повышение квалификации "сестринское дело в стоматологии" <br> <br>
                                    2020г-"Многопрофильная академия развиття и технологий" повышение квалификации "сестринское дело в стоматологии" <br> <br>
                                    2020г-Медицинский университет инноваций и развития профессиональная переподготовка по программе "Стоматология профилактическая" квалификация "Гигиенист стоматологический"
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