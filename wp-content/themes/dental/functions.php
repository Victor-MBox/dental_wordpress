<?php
add_action('wp_enqueue_scripts', 'dental_style');
add_action('wp_enqueue_scripts', 'dental_scripts');

function dental_style()
{
  wp_enqueue_style('dental_style', get_stylesheet_uri());
};

function dental_scripts()
{
  wp_enqueue_script('dental_jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
  wp_enqueue_script('dental_jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), null, true);
  wp_enqueue_script('dental_jquery-validate-mask', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), null, true);
  wp_enqueue_script('dental_slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true);
  wp_enqueue_script('dental_scripts', get_template_directory_uri() . '/assets/js/app.js', array(), '3', true);
  wp_enqueue_script('dental_scripts-page', get_template_directory_uri() . '/assets/js/page-app.js', array(), null, true);
  wp_enqueue_script('dental_scripts-forms', get_template_directory_uri() . '/assets/js/forms-app.js', array(), null, true);
  wp_enqueue_script('dental_scripts-modals', get_template_directory_uri() . '/assets/js/modals-app.js', array(), null, true);
};

add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Хлебные крошки
function custom_breadcrumbs()
{
  echo '<div id="breadcrumbs">';

  if (!is_front_page()) {
    echo '<a class="breadcrumbs__home" href="';
    echo home_url();
    echo '">';
    echo '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.13478 18.7733V15.7156C7.13478 14.9351 7.77217 14.3023 8.55844 14.3023H11.4326C11.8102 14.3023 12.1723 14.4512 12.4393 14.7163C12.7063 14.9813 12.8563 15.3408 12.8563 15.7156V18.7733C12.8539 19.0978 12.9821 19.4099 13.2124 19.6402C13.4427 19.8705 13.756 20 14.0829 20H16.0438C16.9596 20.0024 17.8388 19.6428 18.4872 19.0008C19.1356 18.3588 19.5 17.487 19.5 16.5778V7.86686C19.5 7.13246 19.1721 6.43584 18.6046 5.96467L11.934 0.675869C10.7737 -0.251438 9.11111 -0.221498 7.98539 0.746979L1.46701 5.96467C0.872741 6.42195 0.517552 7.12064 0.5 7.86686V16.5689C0.5 18.4639 2.04738 20 3.95617 20H5.87229C6.55123 20 7.103 19.4562 7.10792 18.7822L7.13478 18.7733Z" fill="#130F26"/>
          </svg>';
    echo '</a>';

    if (is_category() || is_single()) {
      echo "&nbsp;&nbsp;&raquo;&nbsp;&nbsp;";
      the_category(' &bull; ');

      if (is_single()) {
        echo " &nbsp;&nbsp;&raquo;&nbsp;&nbsp; ";
        the_title();
      }
    } elseif (is_page()) {
      global $post;
      $ancestors = get_post_ancestors($post);

      if ($ancestors) {
        $ancestors = array_reverse($ancestors);
        foreach ($ancestors as $ancestor) {
          echo "&nbsp;&nbsp;&raquo;&nbsp;&nbsp;";
          echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>';
        }
      }

      echo "&nbsp;&nbsp;&raquo;&nbsp;&nbsp;";
      echo the_title();
    }
  }

  echo '</div>';
}



// * Включаем поддержку мета-полей 'excerpt' и 'thumbnail' для страниц
function add_excerpt_and_thumbnail_support_to_pages()
{
  add_post_type_support('page', 'excerpt');
  add_post_type_support('page', 'thumbnail');
}
add_action('init', 'add_excerpt_and_thumbnail_support_to_pages');

// * Включаем поддержку меток (тегов) для страниц
function enable_tags_for_pages()
{
  register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'enable_tags_for_pages');

// Новый раздел в меню ДО/ПОСЛЕ
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'До/после',
    'menu_title'  => 'До/после',
    'menu_slug'   => 'before-after',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'icon_url'      => 'dashicons-image-flip-horizontal'
  ));
}

// Новый раздел в меню КАРУСЕЛЬ С ДОКТОРАМИ
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Карусель с докторами',
    'menu_title'  => 'Карусель с докторами',
    'menu_slug'   => 'carousel-doctors',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'icon_url'      => 'dashicons-groups'
  ));                       
}

// * Добавляем разрешение на загрузку .csv
function add_file_types_to_uploads($file_types)
{
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes);
  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');