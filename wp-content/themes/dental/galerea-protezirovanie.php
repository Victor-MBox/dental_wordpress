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
                                <div style="margin-bottom: 0;" class="procedure__column">
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
                                    <button class="btn btn_lilac" href="raboty-protezirovanie/" id="vrb1" onclick="toggleActiveClass(this)">Смотреть все</button>
                                </div>
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