<?php
/* 
Template Name: Доктор - Хандогин Антон Олегович
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
                            <div class="page-content__banner">
                                <div class="page-content__name">Хандогин <br> Антон <br> Олегович</div>
                                <div class="page-content__label">стаж <span>7 лет</span></div>
                                <div class="page-content__label-prof"><span>Ортопед</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Антону Олеговичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Антону Олеговичу</span></div>
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
                                    Проф.навыки-Протезирование, микропротезирование накладками e.max,протезирование на имплататах, эстетическая и функциональная реабилитация при помощи виниров и накладок тотальное протезирование, all-on-4, all-on-6,работа в цифровом и аналоговом протоколе.
                                </div>

                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">Московский государственный медико-стоматологический университет,им Евдокимова 2011-2016г. <br> <br>
                                    Ординатура в Белгородском государственном университете,по специальности врач стоматолог-ортопед с 2016 по 2018 год

                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">
                                    2018 г. Алгоритм адгезивных процессов The Bond лектор Сазонов А.O и Трифонов Б.В <br> <br>
                                    2019 г. теоретический и практический курс Ceramic Intensive 2.0 Ортопедия от А до Я лектор Саркисов О.О <br> <br>
                                    2019 г. Протезирование винирами. На учебной базе НПЦ ГК «Симко»<br> <br>
                                    2019 г. Скрининг-диагностика предраковых заболеваний и рака слизистой оболочки полости рта. Принципы их организации.<br> <br>
                                    2019 г. Препарирование зубов под металлокерамические и безметалловые конструкции Лектор Прокопенко А.М Учетный центр «Специалист»<br> <br>
                                    2020 г. Базовый курс по имплантации.Хирургический и ортопедический протокол. Учебный центр Dental guru<br> <br>
                                    2021 г. Артикуляционная система в ежедневной практики врача-ортопеда и зубного техника.Решение проблемы окклюзии.Система Amann Girbach. Лектор Головин Максим <br> <br>
                                    2022 г. Концепции all-on-4 (Nobel Biocare) Курс Тараса Юрова и Александра Бикбаева<br> <br>
                                    2022 г. Курс для практикующих стоматологов ортопедов (Эстетика улыбки: виниры и коронки во фронте,авторский курс Александра Газарова)<br> <br>
                                    2022 г. Индивидуальный авторский курс Виталия Иващенко: Минимально-инвазивное препарирование зубов
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