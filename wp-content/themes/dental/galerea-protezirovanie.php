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
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-after.jpg" alt="" class="before-after__img">
                                <div class="before-after__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-before.jpg" alt="" class="before-after__img">
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
                                                <div class="procedure__title">Виниры</div>
                                            </div>
                                        </div>
                                    </div>

                                    <bottom class="btn btn_lilac" data-modal="mainModal">Консультация</bottom>

                                </div>
                                <div class="procedure__text">Были установлены виниры</div>
                            </div>

                        </div>

                        <div class="before-after2">
                            <span id="before2" class="before__btn">ДО</span>
                            <span id="after2" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after2__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-after.jpg" alt="" class="before-after2__img">
                                <div class="before-after2__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-08-before.jpg" alt="" class="before-after2__img">
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
                                                <div class="procedure__title">Протезирование</div>
                                            </div>
                                        </div>
                                    </div>

                                    <bottom class="btn btn_lilac" data-modal="mainModal">Консультация</bottom>

                                </div>
                                <div class="procedure__text">Протезирование на имплантах All-on-4 несъемного типа при полностью отсутствующих зубах</div>
                            </div>

                        </div>

                        <div class="before-after3">
                            <span id="before3" class="before__btn">ДО</span>
                            <span id="after3" class="after__btn">ПОСЛЕ</span>

                            <div class="before-after3__gallery">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-after.jpg" alt="" class="before-after3__img">
                                <div class="before-after3__gallery-after">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/before-after/portfolio-10-before.jpg" alt="" class="before-after3__img">
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
                                                <div class="procedure__title">Установка импланта</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn_lilac" href="/galereya/">Больше работ</a>

                                </div>
                                <div class="procedure__text">Установка импланта</div>
                            </div>                             
                        </div>

                    </div>

                    <div id="galerea-tab2" class="galerea-tab__content">
                        <h2>Содержимое Вкладки 2</h2>
                        <p>Это содержимое второй вкладки.</p>
                        <p>Это содержимое второй вкладки.</p>
                        <p>Это содержимое второй вкладки.</p>
                        <p>Это содержимое второй вкладки.</p>
                        <p>Это содержимое второй вкладки.</p>
                    </div>

                </div>


            </section>
        </div>
    </div>
</div>