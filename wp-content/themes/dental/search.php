<?php get_header(); ?>

<div class="page-all">
    <section style="padding-top: 150px;" class="page-second-section">
        <div class="container page-second-section__container">
            <div class="page-second-section__name">
                <div class="page-second-section__title title">Результаты поиска</div>
                <div class="page-second-section__description description">
                    Обратившись в нашу клинику, вы можете быть уверены в качестве предоставляемых услуг. Мы гарантируем результат и беспокоимся о здоровье наших пациентов!
                </div>
            </div>
        </div>
    </section>

    <section style="height: 70vh;" class="search-section">
        <div class="search__container container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="no-results">Ничего не найдено.</p>
            <?php endif; ?>
        </div>
    </section>
</div>
                                                        
<?php get_footer(); ?>