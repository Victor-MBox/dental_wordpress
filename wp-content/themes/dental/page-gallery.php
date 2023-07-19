<?php
/* 
Template Name: Галерея
*/
?>

<?php
get_header();
?>

<div class="page">
    <section class="page-main-section page-main-section_about">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-8.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-9.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">Наши работы</div>
                        <div class="page-main-section__description description">Наша галерея работ демонстрирует высокий уровень профессионализма и мастерства нашей команды. Пациенты доверяют нам свое здоровье, а мы, в свою очередь, делаем все возможное, чтобы оправдать это доверие. Все снимки до и после лечения опубликованы с разрешения наших пациентов, что подчеркивает прозрачность и открытость нашей работы. <br> <br>
                            В нашей команде работают только опытные врачи, которые заботятся о здоровье своих пациентов. Наша команда врачей постоянно обновляет свои знания и навыки, чтобы предоставлять самые современные и эффективные методы лечения. Мы гордимся тем, что наши врачи обладают глубокими знаниями и богатым опытом, что позволяет им предоставлять нашим пациентам безопасную и качественную медицинскую помощь.<br> <br>
                            Кроме того, наличие собственной зуботехнической лаборатории позволяет нам гарантировать контроль качества на каждом участке и обеспечивает высокие стандарты, принятые в нашем стоматологическом центре.
                        </div>
                    </div>
                </div>

                <div class="page-main-section__column">
                    <div class="page-main-section__img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/page-img.jpg" alt="">
                    </div>
                </div>

                <div class="page-main-section__form">
                    <div class="feedback-form">
                        <div class="feedback-form__title">
                            Записаться на консультацию
                        </div>
                        <div class="feedback-form__form">

                            <form action="#" class="form-about" id="form-1">
                                <div class="form-about__input">
                                    <input type="text" name="name" placeholder="Имя" class="input">
                                </div>
                                <div class="form-about__input email-input">
                                    <input type="email" name="email" placeholder="Email" class="input">
                                </div>
                                <div class="form-about__input phone-input">
                                    <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                                </div>
                                <div class="form-about__item">
                                    <div class="checkbox">
                                        <input id="checkbox" checked type="checkbox" name="agreement" class="checkbox__input">
                                        <label for="checkbox" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                    </div>
                                </div>
                                <div class="form-about__submit">
                                    <input class="btn btn_submit" type="submit" value="Узнать больше">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-second-section">
        <div class="container page-second-section__container">
            <div class="page-second-section__name">
                <div class="page-second-section__subtitle subtitle">Убедитесь в качестве наших услуг сами</div>
                <div class="page-second-section__title title">Работы специалистов клиники "Зубки Всем"</div>
                <div class="page-second-section__description description">Мы с гордостью предоставляем вам примеры наших работ, которые демонстрируют высокий профессионализм нашей команды! Здесь вы найдете фотографии клинический случаев, с которыми мы успешно справились. Если у вас есть вопросы - обращайтесь по телефону: <br> <a href="tel:+74951503001">+7 (495) 150-30-01</a>
                </div>
            </div>
    </section>
</div>

<?php
get_footer();
?>