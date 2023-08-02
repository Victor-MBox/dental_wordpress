<?php
/* 
Template Name: Доктор - Борисенко Инна Владимировна
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
                            <div class="page-content__banner page-content__banner_borisenko">
                                <div class="page-content__name">Борисенко <br> Инна <br> Владимировна</div>
                                <div class="page-content__label">стаж <span>11 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт, хирург</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="borisenkoModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Инне Владимировне</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Инне Владимировне</span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Borisenko">

                                            <input type="hidden" name="form_name" value="Вопрос Инне Владимировне">
                                            
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
                                                    <input id="checkbox-Borisenko" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Borisenko" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">ФГБОУВО "Пензенский государственный университет" 2013-2019 Первичная аккредитация "Стоматология общей практики" профессиональный стандарт врач-стоматолог 2019г. <br> <br>
                                    ГБОУ СПОРО" Ростовский базовый медицинский колледж" диплом с отличием квалификация Зубной врач 2008-2012
                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">2010 г. «Просто об эстетике» 3мESPE, доктор Карлос Фернандес Вилларес<br> <br>
                                    2012 г. «Принципы профилактики переимплантита с использованием современных технологий» Swiss Dental Academy EMS, Дмитриева А.С.<br> <br>
                                    2012 г. «Эффективное применение ультразвука в эндодонтии» Swiss Dental Academy EMS Дмитриева А.С.<br> <br>
                                    2014 г. «Мир высокой эстетики в стоматологии» Tokugawa Dental -Proteco<br> <br>
                                    2015 г. «Icon-Infiltration Concept» DMG Валлекс М , Скатова Е.А.<br> <br>
                                    2017 г. « Восстановление безнадежных Зубов» Dentsly Sirona, Алиев Р.О.<br> <br>
                                    2018 г. "Эстетико-функциональные реставрации, простые решения на каждый день. Композиты IDS» Dental Academy Павлов А.А. Ростов-на-Дону<br> <br>
                                    2018 г. «Система имплантат SKY Fast&Fixed. Имплантация с немедленной нагрузкой» Bredent medical Эдуард Бреленко и Роланд Бенц Ростов-на-Дону<br> <br>
                                    2019 г. «Orthodontic Congress» HiOHI-S , Daniela Storino, Andre Horn, Birte Melsen, Giorgio Fiorelli, Jeong-IL Kim, Paris<br> <br>
                                    2019 г. «Временные и постоянные дискомфорты. От простого к сложному» KavoKerr Москва<br> <br>
                                    2019 г. «Анализ ошибок и осложнений 2 класса по Блэку. Инновации в решении проблем» KavoKerr Воробьева Ю.Б.<br> <br>
                                    2019 г. «Цифровая окклюзия и Сплинт-терапия» HiOHI-S Кочкаров П.Г. Москва<br> <br>
                                    2020 г. «Диагностика, лечение, профилактика новой коронавирусной инфекции в первичной медико-санитарной помощи на дому» Москва ПМ и ФО МзРФ<br> <br>
                                    2020 г. «Организация медицинской помощи при новой коронавирусной инфекции» Москва<br> <br>
                                    2020 г. «Рентгенологические признаки некоторых патологических процессов по типу рарефикации в зубочелюстной системе» KavoKerr Фролов С. Москва<br> <br>
                                    2021 г. «Современные концепции профилактики кариеса у детей и взрослых» Dental Academy Ванин А.В. Москва<br> <br>
                                    2021 г. «Post & Core. 16 шагов идеальной post-эндодонтии. Ортопедический протокол для терапевтов. Подрезала А.М. Москва.
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