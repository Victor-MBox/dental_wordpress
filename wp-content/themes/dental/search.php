<?php
get_header();
?>

<div class="page-search">
    <section class="page-second-section">
        <div class="container page-second-section__container">
            <div class="page-second-section__name">
                <div class="page-second-section__title title">Результаты поиска</div>
                <div class="page-second-section__description description">Если вам не удается найти необходимую информацию, то можете оставить свой номер телефона или позвонить нам по телефону: <a href="tel:+74951503001">+7 (495) 150-30-01</a>. Мы с удовольствием ответим на ваши вопросы.               
                </div>
            </div>
        </div>
    </section>

    <section class="search-section">
        <div class="search__container container">
            <?php
            // Получаем поисковой запрос пользователя
            $search_query = get_search_query();

            // Функция для поиска по названию и содержимому статей
            function search_by_title_and_content($search_query)
            {
                $search_results = new WP_Query(array(
                    'post_type' => array('page', 'post'),
                    's' => $search_query,
                ));

                return $search_results;
            }

            // Выводим результаты поиска
            $search_results = search_by_title_and_content($search_query);
            if ($search_results->have_posts()) :
                while ($search_results->have_posts()) : $search_results->the_post();
                    echo '<article ';
                    post_class();
                    echo '>';

                    // Вывод изображения страницы (если оно есть)
                    if (has_post_thumbnail()) {
                        echo '<div class="entry-thumbnail">';
                        the_post_thumbnail('medium'); // Вы можете изменить размер изображения, передав нужный размер
                        echo '</div>';
                    }

                    // Вывод информации о странице-родителе
                    $ancestors = get_post_ancestors(get_the_ID());
                    if (!empty($ancestors)) {
                        $parent_id = end($ancestors);
                        $parent_title = get_the_title($parent_id);
                        echo '<p class="entry-parent">Раздел: <a href="' . get_permalink($parent_id) . '">' . $parent_title . '</a></p>';
                    }

                    // Название страницы
                    echo '<h2 class="entry-title"><a href="';
                    the_permalink();
                    echo '">';
                    the_title();
                    echo '</a></h2>';

                    // Описание страницы
                    echo '<div class="entry-content">';
                    echo wp_trim_words(get_the_excerpt(), 15, '...'); // Ограничиваем описание до 15 слов и добавляем троеточие в конце
                    echo '</div>';

                    // Выводим кнопку "Перейти" с ссылкой на страницу
                    echo '<a class="btn_entry" href="' . get_permalink() . '">Перейти</a>';

                    echo '</article>';
                endwhile;
            else :
                // Выводим сообщение о том, что ничего не найдено
                echo '
            <div class="no-results">
            <div class="no-results__title"> Ничего не найдено </div>
            <div class="no-results__sub-title"> Вы повторно можете воспользоваться поиском или перейти на <a href="/">Главную страницу</a> </div>
            ';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>

</div>



<?php
get_footer();
?>