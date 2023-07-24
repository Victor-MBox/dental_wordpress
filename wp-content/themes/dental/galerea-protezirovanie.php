<?php
/* 
Template Name: ГАЛЕРЕЯ - протезирование
*/
?>

<?php
get_header();
?>

<div class="page">
    <div class="page-content">
        <div class="page-content__container container">

            <section class="page-contetn__wrapper" id="content-page">

                <div class="galerea">

                    <div class="galerea-tab">
                        <!-- Кнопки вкладок -->
                        <button class="galerea-tab__links active" onclick="openTab(event, 'galerea-tab1')">
                            <div class="galerea-tab__links-title">Фотографии</div>
                            <div class="galerea-tab__links-subtitle">10 фотографий</div>
                        </button>
                        <button class="galerea-tab__links" onclick="openTab(event, 'galerea-tab2')">
                            <div class="galerea-tab__links-title">Видео</div>
                            <div class="galerea-tab__links-subtitle">1 видео работы</div>
                        </button>
                    </div>

                    <!-- Содержимое вкладок -->
                    <div id="galerea-tab1" class="galerea-tab__content active">

                        <div class="before-after">
                            <span id="before" class="before__btn">ДО</span>
                            <span id="after" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-03-after.jpg" alt="" class="before-after__img">
                                <div class="before-after__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-03-before.jpg" alt="" class="before-after__img">
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
                                                <div class="procedure__title procedure__title_auto">Установка конструкции из диоксида циркония</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                      
                                <div class="procedure__text">Удаление зуба, установка имплантов, перелечивание и пломбирование каналов, установка культевой вкладки, временные коронки, постоянная конструкция из диоксида циркония</div>
                            </div>

                        </div>

                        <div class="before-after2">
                            <span id="before2" class="before__btn">ДО</span>
                            <span id="after2" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after2__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-02-after.jpg" alt="" class="before-after2__img">
                                <div class="before-after2__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-02-before.jpg" alt="" class="before-after2__img">
                                </div>
                            </div>

                            <div class="before-after2__procedure procedure">
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
                                                <div class="procedure__title procedure__title_auto">Протезирование на имплантах All-on-4</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="procedure__text">Протезирование на имплантах All-on-4 несъемного типа при полностью отсутствующих зубах</div>
                            </div>

                        </div>

                        <div class="before-after3">
                            <span id="before3" class="before__btn">ДО</span>
                            <span id="after3" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after3__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-05-after.jpg" alt="" class="before-after3__img">
                                <div class="before-after3__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-05-before.jpg" alt="" class="before-after3__img">
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
                                                <div class="procedure__title procedure__title_auto">Композитная реставрация</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="procedure__text">Восстановление зуба с помощью специального композитного материала</div>
                            </div>
                        </div>

                        <div class="before-after4">
                            <span id="before4" class="before__btn">ДО</span>
                            <span id="after4" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after4__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-06-after.jpg" alt="" class="before-after4__img">
                                <div class="before-after4__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-06-before.jpg" alt="" class="before-after4__img">
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
                                                <div class="procedure__title procedure__title_auto">Коронки из диоксида циркония</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="procedure__text">Установка циркониевых коронок на культе зуба</div>
                            </div>
                        </div>

                        <div class="before-after5">
                            <span id="before5" class="before__btn">ДО</span>
                            <span id="after5" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after5__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-after.jpg" alt="" class="before-after5__img">
                                <div class="before-after5__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-before.jpg" alt="" class="before-after5__img">
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
                                                <div class="procedure__title procedure__title_auto">Виниры</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="procedure__text">Установка виниров</div>
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