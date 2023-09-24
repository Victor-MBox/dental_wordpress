<div class="carousel-doctor-wrapper">
    <div class="specialists-section__carousel carousel" id="slickCarouselServise">

        <?php while (have_rows('carousel_doktor', 'option')) : the_row(); ?>

            <div class="carousel__wrapper">
                <div class="carousel__photo">
                    <img src="<?php the_sub_field('foto') ?>" alt="" loading="lazy">
                    <div class="carousel__label <?php the_sub_field('czvet') ?>" alt="" loading="lazy">
                        <p>Опыт</p> <span><?php the_sub_field('stazh') ?></span>
                    </div>
                </div>
                <div class="carousel__name"><?php the_sub_field('fio') ?></div>
                <div class="carousel__text"><?php the_sub_field('dolzhnost') ?></div>
                <button class="btn btn_entry" data-modal="<?php the_sub_field('modal') ?>">Записаться</button>
            </div>                                                    

        <?php endwhile; ?>
    </div>
    <div class="slider-arrows">
        <button class="slider-arrows__left" id="slickCarouselServisePrev" type="button"></button>
        <button class="slider-arrows__right" id="slickCarouselServiseNext" type="button"></button>
    </div>
</div>