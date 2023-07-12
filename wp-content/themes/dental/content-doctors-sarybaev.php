<?php
/* 
Template Name: Доктор - Сарыбаев Анарбек Муктарбекович
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
                                <div class="page-content__name">Сарыбаев <br> Анарбек <br> Муктарбекович</div>
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
                                        <div class="btn-accordion__text">Задать вопрос <br> <span>Анарбеку Муктарбековичу</span></div>
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
                                <div class="page-content__text">Владение методами диагностики и лечения, консультация и обследование пациентов, профессиональная санация полости рта, восстановление повреждëнных зубов, умение разбираться в рентгенограммах, лечение кариесов, каналов, начальная ортопедическая и хирургическая помощь. </div>

                                <div class="page-content__list">
                                    <ul>
                                        <li>Внимательность</li>
                                        <li> Ответственность</li>
                                    </ul>
                                    <ul>
                                        <li>Сдержанность и эмоциональная устойчивость</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Опыт, обрабование</div>
                                <div class="page-content__text">1997-2011-Карабалтинский медицинский колледж квалификация "зубной врач" по специальности "Стоматология"
                                </div>
                            </div>

                            <div class="page-content__chapter">
                                <div class="page-content__title">Повышение квалификации</div>
                                <div class="page-content__text">2013г-ГБОУ ДПО "Российская медицинская академия последипломного образования Министерства здравоохранения РФ повышение квалификации "сестринское дело в стоматологии" <br> <br>
                                    2020г-"Центр Специализированного Образования "Проф-Ресурс" повышение квалификации по специальности "Сестринское дело в стоматологии" <br> <br>
                                    2020г-"Многопрофильная академия развития и технологий "профессиональная переподготовка по программе" Стоматология " "Современные методы обследования стоматологических пациентов"
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