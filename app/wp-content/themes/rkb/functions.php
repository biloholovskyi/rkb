<?php
add_action('wp_enqueue_scripts', 'style_them');
add_action('wp_footer', 'script_them');
add_action('after_setup_theme', 'menu');

//add_filter('excerpt_length', function () {
//  return 13;
//});

remove_filter('the_excerpt', 'wpautop');

function menu()
{
  register_nav_menu('header', 'Главное меню в шапке');
  add_theme_support('post-thumbnails', array('post'));
  add_filter('excerpt_more', function ($more) {
    return '';
  });
}

function style_them()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min');
}

function script_them()
{
  wp_enqueue_script('owl', get_template_directory_uri() . '/buildjs/owl.carousel.js');
  wp_enqueue_script('index', get_template_directory_uri() . '/buildjs/index.js');


  add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
  function codeless_remove_type_attr($tag, $handle)
  {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
  }
}

add_action('init', 'register_post_types');
function register_post_types()
{
//  register_post_type('projects', array(
//    'label' => null,
//    'labels' => array(
//      'name' => 'Проекты', // основное название для типа записи
//      'singular_name' => 'Проект', // название для одной записи этого типа
//      'add_new' => 'Добавить проект', // для добавления новой записи
//      'add_new_item' => 'Добавление проетка', // заголовка у вновь создаваемой записи в админ-панели.
//      'edit_item' => 'Редактирование проекта', // для редактирования типа записи
//      'new_item' => 'Новый проект', // текст новой записи
//      'view_item' => 'Смотреть проект', // для просмотра записи этого типа.
//      'search_items' => 'Искать проект', // для поиска по этим типам записи
//      'not_found' => 'Не найден проект', // если в результате поиска ничего не было найдено
//      'not_found_in_trash' => 'Не найден проект в корзине', // если не было найдено в корзине
//      'parent_item_colon' => '', // для родителей (у древовидных типов)
//      'menu_name' => 'проекты', // название меню
//    ),
//    'description' => '',
//    'public' => true,
//    'publicly_queryable' => true, // зависит от public
//    'exclude_from_search' => true, // зависит от public
//    'show_ui' => true, // зависит от public
//    'show_in_menu' => true, // показывать ли в меню адмнки
//    'show_in_admin_bar' => true, // по умолчанию значение show_in_menu
//    'show_in_nav_menus' => true, // зависит от public
//    'show_in_rest' => null, // добавить в REST API. C WP 4.7
//    'rest_base' => null, // $post_type. C WP 4.7
//    'menu_position' => 2,
//    'menu_icon' => 'dashicons-portfolio',
//    //'capability_type'   => 'post',
//    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
//    'hierarchical' => false,
//    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
//    'taxonomies' => array('category'),
//    'has_archive' => false,
//    'rewrite' => true,
//    'query_var' => true,
//  ));
}


function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');