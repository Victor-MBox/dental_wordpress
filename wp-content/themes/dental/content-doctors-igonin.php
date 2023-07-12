<?php
/* 
Template Name: Доктор - Игонин Василий Валентинович
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
                                <div class="page-content__name">Игонин <br> Василий <br> Валентинович</div>
                                <div class="page-content__label">стаж <span>13 лет</span></div>
                                <div class="page-content__label-prof"><span>Ортопед, хирург</span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span>Василию Валентиновичу</span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Василию Валентиновичу</span></div>
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
                                    Навыки съëмного протезирования, изготовления микропротезов, протезирование на имплантах, изготовление коронок, вкладок, капп, тотальное эстетическое протезирование винирами, работа с лицевой дугой, установка протезов пациентам с недостаточным количеством кости, владение компьютерной и цифровой диагностикой, операции удаления зубов различной степени сложности, зубосохраняющие операции, дентальная имплантология, синус-лифтинг, костная пластика, операции на пародонте, вскрытие абсцессов, имплантация и протезирование all-on-4, all-on-6.
                                </div>
                                <div class="page-content__list">
                                    <ul>
                                        <li>Приветливость</li>
                                        <li>Спокойствие</li>
                                    </ul>
                                    <ul>
                                        <li>Ответственность</li>
                                        <li>Чëткость</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">Казахстанский медуниверситет, интернатура по специальности "Стоматология" 2009-2010
                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">
                                    2011г-Конференция "Nobel Biocare" по современным технологиям в имплантологии и эстетической стоматологии " г. Алматы. <br><br>
                                    2016г-Международный симпозиум "Квинтессенции- правильный выбор хирургических методик в имплантологии и пародонтологии" Казахстан, г. Алматы. <br><br>
                                    2018г-Теоретический курс:"Современный подход к проведению синус-лифтинга и альтернативные варианты лечения. Немедленное протезирование:современный подход " Казахстан, г. Алматы. <br><br>
                                    2018г- Международный конгресс "Эндодонтия и микрохирургия".<br><br>
                                    2018г- Мастер-класс Саркисова О. О. на тему:"Адгезивные керамические реставрации ".2019г- Международный конгресс "Реабилитация пациентов с полной адентией с использованием дентальных имплантатов".<br><br>
                                    2022г -Повышение квалификации по специальности "Стоматология (взрослая, детская) , актуальные проблемы терапевтической стоматологии" в РГП и ПХВ "Казахский научный центр дерматологии и инфекционных заболеваний МЗРК"
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