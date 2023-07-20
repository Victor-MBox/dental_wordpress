<?php
/* 
Template Name: Услуги
*/
?>

<?php
get_header();
?>

<div class="page">
    <section class="page-main-section page-main-section_about">

        <div class="page-main-section__decor">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-2.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-5.svg" alt="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/page/page-decor-4.svg" alt="">
        </div>

        <div class="container">

            <div class="breadcrumbs">
                <?php custom_breadcrumbs(); ?>
            </div>

            <div class="page-main-section__container">
                <div class="page-main-section__column">
                    <div class="page-main-section__name">
                        <div class="page-main-section__subtitle subtitle">Мы – больше чем просто стоматология!</div>
                        <div class="page-main-section__title title">Наши услуги</div>
                        <div class="page-main-section__description description">Стоматологическая клиника "Зубки всем" предлагает широкий спектр услуг, от профилактического осмотра до сложных операций. Клиника оснащена современным оборудованием, что позволяет нам предоставлять услуги на высочайшем уровне. Все наши специалисты обладают высокой квалификацией и богатым опытом, что гарантирует качество и безопасность предоставляемых услуг.
                            <br> <br>
                            Одним из наших основных преимуществ является собственное производство, зуботехническая лаборатория. Мы контролируем весь процесс - от производства до установки протеза. Это позволяет нам гарантировать высокое качество наших изделий и обеспечивает дополнительную гарантию для наших пациентов. Все протезы изготавливаются с использованием современных технологий и материалов, что обеспечивает их долговечность и надежность.

                        </div>
                        <div id="textHidden" class="text-hidden">
                            Мы ценим прозрачность в наших отношениях с пациентами. Никаких скрытых платежей и услуг - вы всегда знаете, за что платите. Мы предоставляем полную информацию о стоимости услуг и всегда готовы ответить на ваши вопросы. Наша цель - обеспечить вам комфорт и уверенность в том, что вы делаете правильный выбор, обращаясь в клинику "Зубки всем".
                        </div>
                        <div class="main-section__buttons">
                            <button id="textHiddenBtn" class="btn">Подробнее</button>
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
                <div class="page-second-section__subtitle subtitle">Качественные услуги по доступным ценам</div>
                <div class="page-second-section__title title">Услуги клиники "Зубки Всем"</div>
                <div class="page-second-section__description description">Окажем качественные услуги и создадим комфортную атмосферу! Сделайте первый шаг на пути к здоровой и красивой улыбке - запишитесь на консультацию по телефону: <a href="tel:+74951503001">+7 (495) 150-30-01</a>
                </div>
            </div>
    </section>

    <section class="page-service-section">
        <div class="page-service-section__container container">

            <div class="page-service-section__column-mob">

                <div class="accordion-service-page">

                    <div class="accordion-home">
                        <div data-tab="home-tab-1" class="accordion-home__tab" >
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Консультация и диагностика</div>
                                <div class="accordion-home__nav-subtitle">Выявление проблемы</div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-1" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-01.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>0₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="diagnostika-i-konsultacziya/">Общая информация</a></li>
                                    <li><a href="ortopantomografiya-optg/">Ортопантомография (ОПТГ)</a></li>
                                    <li><a href="priczelnyi-snimok/">Прицельный снимок</a></li>
                                    <li><a href="aksiografiya/">Аксиография</a></li>
                                    <li><a href="kompyuternaya-tomografiya-kt/">Компьютерная томография (КТ)</a></li>
                                </ul>
                                <div class="accordion-home__link-decor"></div>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-2" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Протезирование</div>
                                <div class="accordion-home__nav-subtitle">Съемное и несъемное
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-2" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-8.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>1500₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="protezirovanie/">Общая информация</a></li>
                                    <li><a href="semnoe-protezirovanie/">Съемное протезирование</a></li>
                                    <li><a href="akrilovye-protezy/">• Акриловые протезы</a></li>
                                    <li><a href="byugelnye-protezy/">• Бюгельные протезы</a></li>
                                    <li><a href="nesemnoe-protezirovanie/">Несъемное протезирование</a></li>
                                    <li><a href="viniry/">• Виниры</a></li>
                                    <li><a href="koronki/">• Коронки</a></li>
                                    <li><a href="abatmenty/">• Абатменты</a></li>
                                    <li><a href="vkladki/">• Вкладки</a></li>

                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_red"></div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-3" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Терапия</div>
                                <div class="accordion-home__nav-subtitle">Лечение зубов
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-3" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/servise/content-page-services-05.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>400₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="terapiya/">Общая информация</a></li>
                                    <li><a href="svetovye-plomby/">Световые пломбы</a></li>
                                    <li><a href="lechenie-zubnyh-kanalov/">Лечение зубных каналов</a></li>
                                    <li><a href="lechenie-kariesa/">Лечение кариеса</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_lilac"></div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-4" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Хирургия</div>
                                <div class="accordion-home__nav-subtitle">Хирургические операции
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_yellow"></div>
                        </div>
                        <div id="home-tab-4" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-04.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>2000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="hirurgiya/">Общая информация</a></li>
                                    <li><a href="udalenie-zubov/">Удаление зубов</a></li>
                                    <li><a href="prostoe-udalenie/">• Простое удаление</a></li>
                                    <li><a href="slozhnoe-udalenie/">• Сложное удаление</a></li>
                                    <li><a href="implantacziya/">Имплантация</a></li>
                                    <li><a href="odnomomentnaya-implantacziya/">• Одномоментная имплантация</a></li>
                                    <li><a href="dvuhetapnaya-implantacziya/">• Двухэтапная имплантация</a></li>
                                    <li><a href="sinus-litfing/">Синус-литфинг</a></li>
                                </ul>
                                <div class="accordion-home__link-decor"></div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-5" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Ортодонтия</div>
                                <div class="accordion-home__nav-subtitle">Исправление прикуса
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_turquoise"></div>
                        </div>
                        <div id="home-tab-5" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/price/page-services-06.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>1500₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="ortodontiya/">Общая информация</a></li>
                                    <li><a href="lechenie-breketami/">Лечение брекетами</a></li>
                                    <li><a href="lechenie-ortodonticheskimi-apparatami/">Лечение ортодонтическими аппаратами</a></li>
                                    <li><a href="lechenie-elajnerami/">Лечение элайнерами</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_blue"></div>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-6" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Гигиена и отбеливание</div>
                                <div class="accordion-home__nav-subtitle">Крепость и здоровье зубов
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_red"></div>
                        </div>
                        <div id="home-tab-6" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/servise/content-page-services-05.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>2000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="gigiena-i-otbelivanie-zubov/">Общая информация</a></li>
                                    <li><a href="professionalnaya-chistka-airflow/">Профессиональная чистка AirFlow</a></li>
                                    <li><a href="otbelivanie-zoom/">Отбеливание ZOOM</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_red"></div>
                            </div>

                        </div>
                    </div>
                    <div class="accordion-home">
                        <div data-tab="home-tab-7" class="accordion-home__tab">
                            <div class="accordion-home__nav-column">
                                <div class="accordion-home__nav-title">Гнатология</div>
                                <div class="accordion-home__nav-subtitle">Зубочелюстная система
                                </div>
                            </div>
                            <div class="accordion-home__strip strip strip_lilac"></div>
                        </div>
                        <div id="home-tab-7" class="accordion-home__content">

                            <div class="accordion-home__img-wrapper">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/servise/content-page-services-013.jpg" alt="">

                                <div class="accordion-home__label">
                                    от <span>2000₽</span>
                                </div>

                                <div class="accordion-home__btn-call">
                                    <button class="btn-call" data-modal="mainModal">
                                        <div class="btn-call__img"></div>
                                        <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                    </button>
                                </div>
                            </div>

                            <div class="accordion-home__link">
                                <ul>
                                    <li><a href="gnatologiya/">Общая информация</a></li>
                                </ul>
                                <div class="accordion-home__link-decor accordion-home__link-decor_lilac"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="page-service-section__column">

                <div class="accordion-page">
                    <div data-tab="page-tab-1" class="accordion-page__tab" id="vr1">

                        <div class="accordion-page__nav-item">
                            <div class="accordion-page__decor"></div>
                            <div class="accordion-page__number">01</div>
                        </div>

                        <div class="accordion-page__nav-column">
                            <div class="accordion-page__nav-title">Консультация и диагностика</div>
                            <div class="accordion-page__nav-subtitle">Выявление проблемы
                            </div>
                        </div>
                    </div>
                    <div id="page-tab-1" class="accordion-page__content">
                        <div class="accordion-page__content-decor"></div>

                        <div class="page-tab__nav">

                            <ul>
                                <li><button class="link-page" href="diagnostika-i-konsultacziya/" id="vrb1_1" onclick="toggleActiveClass(this)">Общая информация</button></li>
                                <li><button class="link-page" href="ortopantomografiya-optg/" id="vrb1_2" onclick="toggleActiveClass(this)">Ортопантомография (ОПТГ)</button></li>
                                <li><button class="link-page" href="priczelnyi-snimok/" id="vrb1_3" onclick="toggleActiveClass(this)">Прицельный снимок</button></li>
                                <li><button class="link-page" href="aksiografiya/" id="vrb1_4" onclick="toggleActiveClass(this)">Аксиография</button></li>
                                <li><button class="link-page" href="kompyuternaya-tomografiya-kt/" id="vrb1_5" onclick="toggleActiveClass(this)">Компьютерная томография (КТ)</button></li>
                            </ul>

                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-2" class="accordion-page__tab" id="vr2">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_red"></div>
                                <div class="accordion-page__number">02</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Протезирование</div>
                                <div class="accordion-page__nav-subtitle">Съемное и несъемное
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-2" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                            <div class="page-tab__nav">

                                <ul>
                                    <li><button class="link-page" href="protezirovanie/" id="vrb2_1" onclick="toggleActiveClass(this)">Общая информация</button></li>
                                    <li><button class="link-page" href="semnoe-protezirovanie/" id="vrb2_2"  onclick="toggleActiveClass(this)">Съемное протезирование</button></li>
                                    <li><button class="link-page link-page_sub" href="akrilovye-protezy/"  id="vrb2_3" onclick="toggleActiveClass(this)">• Акриловые протезы</button></li>
                                    <li><button class="link-page link-page_sub" href="byugelnye-protezy/" id="vrb2_4" onclick="toggleActiveClass(this)">• Бюгельные протезы</button></li>
                                    <li><button class="link-page" href="nesemnoe-protezirovanie/" id="vrb2_5" onclick="toggleActiveClass(this)">Несъемное протезирование</button></li>
                                    <li><button class="link-page link-page_sub" href="viniry/" id="vrb2_6" onclick="toggleActiveClass(this)">• Виниры</button></li>
                                    <li><button class="link-page link-page_sub" href="koronki/" id="vrb2_7" onclick="toggleActiveClass(this)">• Коронки</button></li>
                                    <li><button class="link-page link-page_sub" href="abatmenty/" id="vrb2_8" onclick="toggleActiveClass(this)">• Абатменты</button></li>
                                    <li><button class="link-page link-page_sub" href="vkladki/" id="vrb2_9" onclick="toggleActiveClass(this)">• Вкладки</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-3" class="accordion-page__tab" id="vr3">
                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_lilac"></div>
                                <div class="accordion-page__number">03</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Терапия</div>
                                <div class="accordion-page__nav-subtitle">Лечение зубов
                                </div>
                            </div>
                        </div>
                        <div id="page-tab-3" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_lilac"></div>

                            <div class="page-tab__nav">

                                <ul>
                                    <li><button class="link-page" href="terapiya/" id="vrb3_1" onclick="toggleActiveClass(this)">Общая информация</button></li>
                                    <li><button class="link-page" href="svetovye-plomby/" id="vrb3_2"  onclick="toggleActiveClass(this)">Световые пломбы</button></li>
                                    <li><button class="link-page" href="lechenie-zubnyh-kanalov/" id="vrb3_3" onclick="toggleActiveClass(this)">Лечение зубных каналов</button></li>
                                    <li><button class="link-page" href="lechenie-kariesa/" id="vrb3_4"  onclick="toggleActiveClass(this)">Лечение кариеса</button></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-4" class="accordion-page__tab" id="vr4">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor"></div>
                                <div class="accordion-page__number">04</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Хирургия</div>
                                <div class="accordion-page__nav-subtitle">Хирургические операции</div>
                            </div>
                        </div>
                        <div id="page-tab-4" class="accordion-page__content">
                            <div class="accordion-page__content-decor"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page" href="hirurgiya/" id="vrb4_1"  onclick="toggleActiveClass(this)">Общая информация</button></li>
                                    <li><button class="link-page" href="udalenie-zubov/" id="vrb4_2" onclick="toggleActiveClass(this)">Удаление зубов</button></li>
                                    <li><button class="link-page link-page_sub" href="prostoe-udalenie/" id="vrb4_3" onclick="toggleActiveClass(this)">• Простое удаление</button></li>
                                    <li><button class="link-page link-page_sub" href="slozhnoe-udalenie/" id="vrb4_4" onclick="toggleActiveClass(this)">• Сложное удаление</button></li>
                                    <li><button class="link-page" href="implantacziya/" id="vrb4_5" onclick="toggleActiveClass(this)">Имплантация</button></li>
                                    <li><button class="link-page link-page_sub" href="odnomomentnaya-implantacziya/" id="vrb4_6" onclick="toggleActiveClass(this)">• Одномоментная имплантация</button></li>
                                    <li><button class="link-page link-page_sub" href="dvuhetapnaya-implantacziya/ "id="vrb4_7" onclick="toggleActiveClass(this)">• Двухэтапная имплантация</button></li>
                                    <li><button class="link-page" href="sinus-litfing/" id="vrb4_8" onclick="toggleActiveClass(this)">Синус-литфинг</button></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-5" class="accordion-page__tab" id="vr5">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_blue"></div>
                                <div class="accordion-page__number">05</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Ортодонтия</div>
                                <div class="accordion-page__nav-subtitle">Исправление прикуса</div>
                            </div>
                        </div>
                        <div id="page-tab-5" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_blue"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page" href="ortodontiya/" id="vrb5_1" onclick="toggleActiveClass(this)">Общая информация</button></li>
                                    <li><button class="link-page" href="lechenie-breketami/" id="vrb5_2" onclick="toggleActiveClass(this)">Лечение брекетами</button></li>
                                    <li><button class="link-page" href="lechenie-ortodonticheskimi-apparatami/" id="vrb5_2" onclick="toggleActiveClass(this)">Лечение ортодонтическими аппаратами</button></li>
                                    <li><button class="link-page" href="lechenie-elajnerami/" id="vrb5_3" onclick="toggleActiveClass(this)">Лечение элайнерами</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-6" class="accordion-page__tab" id="vr6">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_red"></div>
                                <div class="accordion-page__number">06</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Гигиена и отбеливание</div>
                                <div class="accordion-page__nav-subtitle">Крепость и здоровье зубов</div>
                            </div>
                        </div>
                        <div id="page-tab-6" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_red"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page" href="gigiena-i-otbelivanie-zubov/" id="vrb6_1" onclick="toggleActiveClass(this)">Общая информация</button></li>
                                    <li><button class="link-page" href="professionalnaya-chistka-airflow/" id="vrb6_2" onclick="toggleActiveClass(this)">Профессиональная чистка AirFlow</button></li>
                                    <li><button class="link-page" href="otbelivanie-zoom/" id="vrb6_3"  onclick="toggleActiveClass(this)">Отбеливание ZOOM</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-page">
                        <div data-tab="page-tab-7" class="accordion-page__tab" id="vr7">

                            <div class="accordion-page__nav-item">
                                <div class="accordion-page__decor accordion-page__decor_lilac"></div>
                                <div class="accordion-page__number">07</div>
                            </div>

                            <div class="accordion-page__nav-column">
                                <div class="accordion-page__nav-title">Гнатология</div>
                                <div class="accordion-page__nav-subtitle">Зубочелюстная система</div>
                            </div>
                        </div>
                        <div id="page-tab-7" class="accordion-page__content">
                            <div class="accordion-page__content-decor accordion-page__content-decor_lilac"></div>
                            <div class="page-tab__nav">
                                <ul>
                                    <li><button class="link-page" href="gnatologiya/" id="vrb7_1"  onclick="toggleActiveClass(this)">Общая информация</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-service-section__buttons-page">

                    <a class="buttons-page-1" href="#">
                        <div class="buttons-page-1__img"></div>
                        <div class="buttons-page-1__text">Лечение в рассрочку</div>
                    </a>

                    <a class="buttons-page-2" href="#">
                        <div class="buttons-page-2__img"></div>
                        <div class="buttons-page-2__text">Налоговый вычет</div>
                    </a>

                    <a class="buttons-page-3" href="#">
                        <div class="buttons-page-3__img"></div>
                        <div class="buttons-page-3__text">Гарантия на услуги</div>
                    </a>

                </div>

                <div class="page-service-section__form">
                    <div class="page-content__title">Запись <br>на консультацию</div>
                    <div class="page-content__text">Обратите внимание, все наши консультации – бесплатные</div>

                    <div class="feedback-form-laboratory">

                        <div class="page-service-section__decor decor-red"></div>
                        <div class="page-service-section__decor decor-blue"></div>

                        <div class="feedback-form-laboratory__form">

                            <form action="#" class="form-laboratory" id="form-3">
                                <div class="form-laboratory__input">
                                    <input type="text" name="name" placeholder="Имя" class="input">
                                </div>
                                <div class="form-laboratory__input email-input">
                                    <input type="email" name="email" placeholder="Email" class="input">
                                </div>
                                <div class="form-laboratory__input phone-input">
                                    <input type="phone" name="phone" placeholder="Номер телефона" class="input">
                                </div>
                                <div class="form-about__item">
                                    <div class="checkbox">
                                        <input id="checkbox-3" checked type="checkbox" name="agreement" class="checkbox__input">
                                        <label for="checkbox-3" class="checkbox__label"><span>Согласен с <a href="/policy">политикой обработки персональных данных</a></span></label>
                                    </div>
                                </div>
                                <div class="form-laboratory__submit">
                                    <input class="btn btn_submit" type="submit" value="Записаться">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>

            <!-- Содержимое ajax -->
            <div class="page-service-section__column">

                <div id="loader-page"></div>

                <div class="page-service-section__decor-wrapper">
                    <div class="page-service-section__decor-content decor-lilac"></div>
                    <div class="page-service-section__decor-content decor-yellow"></div>
                </div>

                <section class="page-contetn__wrapper" id="content-page">

                    <div class="page-content__chapter">
                        <div class="page-content__name page-content__name_black">Лечение зубов в клинике «Зубки Всем»</div>
                        <div class="page-content__banner page-content__banner_service">
                            <div class="page-content__label">от <span>400₽</span></div>
                            <div class="page-content__btn-call">
                                <button class="btn-call" data-modal="mainModal">
                                    <div class="btn-call__img"></div>
                                    <div class="btn-call__text">Оставьте номер телефона <br>мы вам перезвоним</div>
                                </button>
                            </div>
                        </div>
                        <div class="page-content__text">Лечение зубов в клинике «Зубки Всем» вернет вам ослепительную улыбку. Диагноз ставим в день обращения, а передовое стоматологическое оборудование и команда врачей – профессионалов помогут в самых сложных и запущенных случаях.
                        </div>
                    </div>

                    <div class="page-content__chapter">
                        <div class="page-content__title">Наши стоматологические услуги:</div>

                        <div class="page-content__list">
                            <ul>
                                <li>терапия кариеса, пульпита, периодонтита и других патологий;</li>
                                <li>ортопедия ― все виды протезирования;</li>
                                <li>ортодонтия ― исправление прикуса (элайнеры, брекет-системы, капы);</li>
                                <li>лечение пародонтоза, снятие зубного камня, гигиена зубов;</li>
                                <li>хирургия – удаление зубов, установка имплантов.</li>
                            </ul>
                        </div>

                        <div class="page-content__text">Все виды обследования у нас можно сделать за одно посещение. Передовое оборудование покажет мельчайшие признаки заболевания. Прицельные и панорамные снимки, компьютерная томография позволяют проводить протезирование и лечение зубов по индивидуальному плану. Своя зуботехническая лаборатория Alvadent значительно сокращает сроки протезирования. <br><br>

                            Преимуществами клиники «ЗубкиВсем» являются высококвалифицированные врачи, демократичные и прозрачные цены, аппаратура мировых брендов и гарантия на стоматологические услуги. Профессионализм, забота о комфорте и безопасности пациентов ― наши приоритеты. Все виды услуг и прайс-лист указаны на нашем сайте. Запишитесь на консультацию онлайн или закажите звонок на сайте, окажем помощь в любое удобное для вас время.
                        </div>
                    </div>

                    <div class="page-content__chapter">

                        <div class="page-content__title">Наши специалисты</div>

                        <div class="specialists-section__carousel carousel" id="slickCarouselServise">

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-08.jpg" alt="">
                                    <div class="carousel__label">
                                        <p>Опыт</p> <span>11 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Борисенко</span> <br>Инна Владимировна</div>
                                <div class="carousel__text">Врач стоматолог: <br>терапевт, хирург</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo carousel__photo_01">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-09.jpg" alt="">
                                    <div class="carousel__label carousel__label_red">
                                        <p>Опыт</p> <span>12 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Зейналов</span> <br>Зейнал Вилаяддинович</div>
                                <div class="carousel__text">Врач стоматолог: <br>терапевт</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo carousel__photo_02">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-04.jpg" alt="">
                                    <div class="carousel__label carousel__label_lilac">
                                        <p>Опыт</p> <span>12 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Сарыбаев</span> <br>Анарбек Муктарбекович</div>
                                <div class="carousel__text">Врач стоматолог: <br>терапевт</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo carousel__photo_03">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-010.jpg" alt="">
                                    <div class="carousel__label carousel__label_yellow">
                                        <p>Опыт</p> <span>32 года</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Антоновский</span> <br>Антон
                                    Анатольевич</div>
                                <div class="carousel__text">Врач стоматолог: <br>ортопед, главный врач</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo carousel__photo_03">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-06.jpg" alt="">
                                    <div class="carousel__label carousel__label_yellow">
                                        <p>Опыт</p> <span>13 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Игонин</span> <br>Василий Валентинович</div>
                                <div class="carousel__text">Врач стоматолог: <br>ортопед, хирург</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-01.jpg" alt="">
                                    <div class="carousel__label">
                                        <p>Опыт</p> <span>7 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Хандогин</span> <br>Антон Олегович</div>
                                <div class="carousel__text">Врач стоматолог: <br>ортопед</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo carousel__photo_01">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-03.jpg" alt="">
                                    <div class="carousel__label carousel__label_red">
                                        <p>Опыт</p> <span>12 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Журов</span> <br>Илья Владимирович</div>
                                <div class="carousel__text">Врач стоматолог: <br>хирург имплантолог</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo carousel__photo_02">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-05.jpg" alt="">
                                    <div class="carousel__label">
                                        <p>Опыт</p> <span>2 года</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Бачулис</span> <br>Марина Александровна</div>
                                <div class="carousel__text">Врач стоматолог: <br>ортодонт, гигиенист</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo carousel__photo_03">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-07.jpg" alt="">
                                    <div class="carousel__label carousel__label_yellow">
                                        <p>Опыт</p> <span>18 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Джахбарова</span> <br>Рабият Магомедгаджиевна</div>
                                <div class="carousel__text">Гигиенист, <br>ассистент стоматолога</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                            <div class="carousel__wrapper">
                                <div class="carousel__photo">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/page/doctors/doc-02.jpg" alt="">
                                    <div class="carousel__label carousel__label_lilac">
                                        <p>Опыт</p> <span>10 лет</span>
                                    </div>
                                </div>
                                <div class="carousel__name"><span>Байкулова</span> <br>Асият Хамитовна</div>
                                <div class="carousel__text">Врач стоматолог: <br>гигиенист</div>
                                <button class="btn btn_entry" data-modal="mainModal">Записаться</button>
                            </div>

                        </div>

                        <a href="/vrachi/" class="btn">Все специалисты</a>

                    </div>

                    <div class="page-content__chapter">

                        <div class="page-content__title">Проверьте подлинность отзывов</div>

                        <div class="rating-section__companies-rating companies-rating">
                            <script src="https://res.smartwidgets.ru/app.js" defer></script>
                            <div class="sw-app" data-app="0f2bd5f81a4db98242a326d90cf8b5c5"></div>
                        </div>

                    </div>


                </section>
            </div>



        </div>
    </section>

</div>



<script>
    window.onload = function() {
        var hash = document.location.hash;
        if (hash != undefined && hash != null) {
            var h = hash.replace("#", "");
            const hparts = h.split("_");
            document.getElementById("vr" + hparts[0].toString()).click();
            setTimeout(document.getElementById("vrb" + h.toString()).click(), 500);
        }
    }
</script>

<?php
get_footer();
?>