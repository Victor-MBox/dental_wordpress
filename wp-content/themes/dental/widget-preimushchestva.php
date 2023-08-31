<div class="second-section__item">

    <?php while (have_rows('advantages_ikonki-s-tekstom')) : the_row(); ?>

        <div class="second-section__column">
            <div><img src="<?php the_sub_field('ikonka') ?>" alt=""></div>
            <div class="second-section__column-title"><?php the_sub_field('zagolovok') ?></div>
            <div class="second-section__column-text"><?php the_sub_field('tekst') ?></div>
        </div>
    <?php endwhile; ?>

</div>