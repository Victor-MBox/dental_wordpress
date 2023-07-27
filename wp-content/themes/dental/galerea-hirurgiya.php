<?php
/* 
Template Name: ГАЛЕРЕЯ - Хирургия
*/
?>

<?php
get_header();
?>

<div class="page">
    <div class="page-content">
        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-content__container">

                <section class="page-contetn__wrapper" id="content-page">

                    <div class="galerea">

                        <div class="galerea-tab">
                            <!-- Кнопки вкладок -->
                            <button class="galerea-tab__links active" onclick="openTab(event, 'galerea-tab1')">
                                <div class="galerea-tab__links-title">Фотографии</div>
                                <div class="galerea-tab__links-subtitle">2 фотографии</div>
                            </button>
                            <button class="galerea-tab__links" onclick="openTab(event, 'galerea-tab2')">
                                <div class="galerea-tab__links-title">Видео</div>
                                <div class="galerea-tab__links-subtitle">1 видео работы</div>
                            </button>
                        </div>

                        <!-- Содержимое вкладок -->
                        <div id="galerea-tab1" class="galerea-tab__content active">

                            <div class="page-content__chapter-do-posle">
                                <div class="before-after">
                                    <span id="before" class="before__btn">ДО</span>
                                    <span id="after" class="after__btn">ПОСЛЕ</span>

                                    <div class="before-after__gallery">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-04-after.jpg" alt="" class="before-after__img">
                                        <div class="before-after__gallery-after">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-04-before.jpg" alt="" class="before-after__img">
                                        </div>
                                    </div>
                                </div>
                                <div class="before-after__procedure procedure">
                                    <div class="procedure__column">
                                        <div class="procedure__row-all">

                                            <div class="procedure__img">
                                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/procedure__img.svg" alt="">
                                            </div>

                                            <div class="procedure__row-wrapper">
                                                <div class="procedure__row">
                                                    <div class="procedure__subtitle">Процедура</div>
                                                </div>
                                                <div class="procedure__row">
                                                    <div class="procedure__title procedure__title_auto">Гингивопластика</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="procedure__text">Пластика десны</div>
                                </div>
                            </div>
                        </div>

                        <div id="galerea-tab2" class="galerea-tab__content">
                            <div class="galerea-tab__column">
                                <div class="galerea-tab__video-wrapper">
                                    <div class="galerea-tab__video">
                                        <iframe src="https://www.youtube.com/embed/Gw2oJYOdcko" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="galerea-tab__column">
                            </div>
                        </div>

                    </div>


                </section>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>