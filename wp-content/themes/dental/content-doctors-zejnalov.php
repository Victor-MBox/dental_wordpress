<?php
/* 
Template Name: Доктор - Зейналов Зейнал Вилаяддинович
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
                            <div class="page-content__banner page-content__banner_zejnalov">
                                <div class="page-content__name">Зейналов <br> Зейнал <br> Вилаяддинович</div>
                                <div class="page-content__label">стаж <span>12 лет</span></div>
                                <div class="page-content__label-prof"><span>Терапевт</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Зейналу Вилаяддиновичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Зейналу Вилаяддиновичу</span></div>
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
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">Стоматологический, Российский Университет Дружбы Народов, Москвы, по специальности врач-стоматолог с ? - 2019 <br> <br>

                                    Стоматологический, “Центральная Государственная Медицинская Академия” Управления делами президента РФ, Москва, по специальности врач-стоматолог-хирург ?- 2021

                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">2014 г. Использование профессиональных систем Philips Zoom! для отбеливания в клинических и домашних условиях <br><br>
                                    2014 г. Гиперчувствительность твёрдых тканей зубов<br><br>
                                    2014 г. X Международный конгресс VDW «Революционные технологии в эндодонтическом лечении»<br><br>
                                    2015 г. XI Международный конгресс VDW «Революционные технологии в эндодонтическом лечении»<br><br>
                                    2017 г. Я занимаюсь именно тем, что мне нравится больше всего — прямой эстетической реставрацией!<br><br>
                                    2017 г. XIII Международный конгресс VDW «Революционные технологии в эндодонтическом лечении» 8-ой национальный фестиваль дентальной имплантации. Периимплантит — причина профилактика лечение. Реставрация жевательных зубов. Эстетика, морфология, функции — ключи к успеху. Клинические и лабораторные этапы" "Полюбить синус-лифтинг! Любой ценой!<br><br>
                                    2022-2023 г. Практический курс по изучению протоколов обработки, ирригации и обтурации корневых каналов. Работа с микроскопом. (Платонов Е.В.)"
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