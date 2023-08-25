<?php
/* 
Template Name: Страница ВРАЧА
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
                            <div class="page-content__banner">

                                <div class="page-content__banner-wrapper">
                                    <img src="<?php the_field('banner-doktor_photo'); ?>" alt="">
                                </div>

                                <div class="page-content__name"><?php the_field('banner-doktor_fio'); ?></div>
                                <div class="page-content__label">стаж <span><?php the_field('banner-doktor_stazh'); ?></span></div>
                                <div class="page-content__label-prof"><span><?php the_field('banner-doktor_dolzhnost'); ?></span></div>
                                <div class="page-content__btn-call">
                                    <button class="btn-call" data-modal="antonovskijModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Записаться на прием <br> к <span><?php the_field('banner-doktor_zadat-vopros'); ?></span></div>
                                    </button>
                                </div>

                                <div class="page-content__btn-accordion btn-accordion">
                                    <div class="btn-accordion__header">
                                        <div class="btn-accordion__img"></div>
                                        <div class="btn-accordion__text">Задать вопрос <br> <span><?php the_field('banner-doktor_zadat-vopros'); ?></span></div>
                                    </div>
                                    <div class="btn-accordion__content">

                                        <form action="#" class="form-portfolio" id="form-Antonovskij">

                                            <input type="hidden" name="form_name" value="Вопрос <?php the_field('banner-doktor_zadat-vopros'); ?>">

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
                                                    <input id="checkbox-Antonovskij" checked type="checkbox" name="agreement" class="checkbox__input">
                                                    <label for="checkbox-Antonovskij" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
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
                                <div class="page-content__text"><?php the_field('doctor_harakteristika'); ?></div>
                                <div class="page-content__list">
                                    <ul>
                                        <?php while (have_rows('doctor-list_left')) : the_row(); ?>
                                            <li><?php the_sub_field('element_spiska-l1'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <ul>

                                        <?php while (have_rows('doctor-list_right')) : the_row(); ?>
                                            <li><?php the_sub_field('element_spiska-r1'); ?></li>
                                        <?php endwhile; ?>                                                     
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Репитор -->

                        <?php while (have_rows('novyj-blok-doctor')) : the_row(); ?>

                            <div class="page-content__chapter">
                                <div class="page-content__title"><?php the_sub_field('zagolovok')  ?></div>
                                <div class="page-content__text"><?php the_sub_field('tekst')  ?>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>