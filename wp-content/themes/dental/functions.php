<?php
add_action('wp_enqueue_scripts', 'dental_style');
add_action('wp_enqueue_scripts', 'dental_scripts');

function dental_style() {
    wp_enqueue_style('dental_style', get_stylesheet_uri());
};

function dental_scripts() {
    wp_enqueue_script('dental_jquery', get_template_directory_uri(). '/assets/js/jquery-3.4.1.min.js' , array(), null, true);
    wp_enqueue_script('dental_jquery-validate', get_template_directory_uri(). '/assets/js/jquery.validate.min.js' , array(), null, true);
    wp_enqueue_script('dental_jquery-validate-mask', get_template_directory_uri(). '/assets/js/jquery.maskedinput.min.js' , array(), null, true);
    wp_enqueue_script('dental_slick', get_template_directory_uri(). '/assets/js/slick.min.js' , array(), null, true);
    wp_enqueue_script('dental_scripts', get_template_directory_uri(). '/assets/js/app.js' , array(), '3', true);
    wp_enqueue_script('dental_scripts-page', get_template_directory_uri(). '/assets/js/page-app.js' , array(), null, true);
    wp_enqueue_script('dental_scripts-forms', get_template_directory_uri() . '/assets/js/forms-app.js', array(), null, true);
    wp_enqueue_script('dental_scripts-modals', get_template_directory_uri() . '/assets/js/modals-app.js', array(), null, true);
};

add_theme_support( 'custom-logo' ); 
add_theme_support( 'menus' ); 
add_theme_support( 'post-thumbnails' );

//Хлебные крошки
function custom_breadcrumbs() {
  echo '<div id="breadcrumbs">';

  if (!is_front_page()) {
    echo '<a class="breadcrumbs__home" href="';
    echo home_url();
    echo '">';
    echo '<img src="/wp-content/themes/dental/assets/img/icons/home-icon.svg" alt="">';
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
