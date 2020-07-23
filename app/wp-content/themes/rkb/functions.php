<?php
add_action( 'wp_enqueue_scripts', 'style_them' );
add_action( 'wp_footer', 'script_them' );
add_action( 'after_setup_theme', 'menu' );

add_filter( 'excerpt_length', function () {
	return 18;
} );


// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation" role="navigation">
		<div class="nav-links pagination">%3$s</div>
	</nav>    
	';
}


remove_filter( 'the_excerpt', 'wpautop' );

function menu() {
	register_nav_menu( 'header', 'Главное меню в шапке' );
	add_theme_support( 'post-thumbnails', array(
		'post',
		'doctor',
		'main-slider',
		'Specialist',
		'diplom-slider',
		'benefits',
		'service-category',
		'PacientServis',
		'TypesOfAssistance',
		'companiess',
		'way'
	) );
	add_filter( 'excerpt_more', function ( $more ) {
		return '';
	} );
}

function style_them() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
}

function script_them() {
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/buildjs/owl.carousel.js' );
	wp_enqueue_script( 'index', get_template_directory_uri() . '/buildjs/index.js' );


	add_filter( 'script_loader_tag', 'codeless_remove_type_attr', 10, 2 );
	function codeless_remove_type_attr( $tag, $handle ) {
		return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
	}
}

add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type( 'doctor', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Врачи', // основное название для типа записи
			'singular_name'      => 'Врач', // название для одной записи этого типа
			'add_new'            => 'Добавить врача', // для добавления новой записи
			'add_new_item'       => 'Добавление врача', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование врача', // для редактирования типа записи
			'new_item'           => 'Новый врач', // текст новой записи
			'view_item'          => 'Смотреть врача', // для просмотра записи этого типа.
			'search_items'       => 'Искать врача', // для поиска по этим типам записи
			'not_found'          => 'Не найден врач', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден врач в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'врачи', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-admin-users',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail', ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'doctor-service', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Службы', // основное название для типа записи
			'singular_name'      => 'Служба', // название для одной записи этого типа
			'add_new'            => 'Добавить Службу', // для добавления новой записи
			'add_new_item'       => 'Добавление Службы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование службы', // для редактирования типа записи
			'new_item'           => 'Новая служба', // текст новой записи
			'view_item'          => 'Смотреть службу', // для просмотра записи этого типа.
			'search_items'       => 'Искать службу', // для поиска по этим типам записи
			'not_found'          => 'Не найдена служба', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдена служба в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'службы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-editor-ul',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'doctor-rew', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Отзывы о врачах', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
			'new_item'           => 'Новый отзыв', // текст новой записи
			'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найден отзыв', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден отзыв в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'отзывы о врачах', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-format-status',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'service', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Отделения', // основное название для типа записи
			'singular_name'      => 'Отделение', // название для одной записи этого типа
			'add_new'            => 'Добавить Отделение', // для добавления новой записи
			'add_new_item'       => 'Добавление Отделения', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Отделения', // для редактирования типа записи
			'new_item'           => 'Новое Отделение', // текст новой записи
			'view_item'          => 'Смотреть Отделение', // для просмотра записи этого типа.
			'search_items'       => 'Искать Отделение', // для поиска по этим типам записи
			'not_found'          => 'Не найдено Отделение', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено Отделение в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'отделения', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-feedback',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

//	register_post_type( 'service-category', array(
//		'label'               => null,
//		'labels'              => array(
//			'name'               => 'Услуги(категории)', // основное название для типа записи
//			'singular_name'      => 'Услуга(категория)', // название для одной записи этого типа
//			'add_new'            => 'Добавить категорию', // для добавления новой записи
//			'add_new_item'       => 'Добавление категории', // заголовка у вновь создаваемой записи в админ-панели.
//			'edit_item'          => 'Редактирование категории', // для редактирования типа записи
//			'new_item'           => 'Новая категория', // текст новой записи
//			'view_item'          => 'Смотреть категорию', // для просмотра записи этого типа.
//			'search_items'       => 'Искать категорию', // для поиска по этим типам записи
//			'not_found'          => 'Не найдена категория', // если в результате поиска ничего не было найдено
//			'not_found_in_trash' => 'Не найдена категория в корзине', // если не было найдено в корзине
//			'parent_item_colon'  => '', // для родителей (у древовидных типов)
//			'menu_name'          => 'услуги(категория)', // название меню
//		),
//		'description'         => '',
//		'public'              => true,
//		'publicly_queryable'  => true,
//		// зависит от public
//		'exclude_from_search' => true,
//		// зависит от public
//		'show_ui'             => true,
//		// зависит от public
//		'show_in_menu'        => true,
//		// показывать ли в меню адмнки
//		'show_in_admin_bar'   => true,
//		// по умолчанию значение show_in_menu
//		'show_in_nav_menus'   => true,
//		// зависит от public
//		'show_in_rest'        => null,
//		// добавить в REST API. C WP 4.7
//		'rest_base'           => null,
//		// $post_type. C WP 4.7
//		'menu_position'       => 2,
//		'menu_icon'           => 'dashicons-excerpt-view',
//		//'capability_type'   => 'post',
//		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
//		'hierarchical'        => false,
//		'supports'            => array( 'title', 'thumbnail' ),
//		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
//		'taxonomies'          => array( '' ),
//		'has_archive'         => false,
//		'rewrite'             => true,
//		'query_var'           => true,
//	) );

	register_post_type( 'main-slider', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Главный слайдер', // основное название для типа записи
			'singular_name'      => 'Главный слайдер', // название для одной записи этого типа
			'add_new'            => 'Добавить слайд', // для добавления новой записи
			'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
			'new_item'           => 'Новый слайд', // текст новой записи
			'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
			'search_items'       => 'Искать слайд', // для поиска по этим типам записи
			'not_found'          => 'Не найден слайд', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден слайд в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Главный слайдер', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 3,
		'menu_icon'           => 'dashicons-images-alt2',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail', ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'Specialist', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'слайдер специалистам', // основное название для типа записи
			'singular_name'      => 'слайд специалистам', // название для одной записи этого типа
			'add_new'            => 'Добавить слайд', // для добавления новой записи
			'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
			'new_item'           => 'Новый слайд', // текст новой записи
			'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
			'search_items'       => 'Искать слайд', // для поиска по этим типам записи
			'not_found'          => 'Не найден слайд', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден слайд в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'слайдер специалистам', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-users',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'diplom-slider', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'слайдер  дипломов', // основное название для типа записи
			'singular_name'      => 'слайд  дипломов', // название для одной записи этого типа
			'add_new'            => 'Добавить слайд', // для добавления новой записи
			'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
			'new_item'           => 'Новый слайд', // текст новой записи
			'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
			'search_items'       => 'Искать слайд', // для поиска по этим типам записи
			'not_found'          => 'Не найден слайд', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден слайд в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'слайдер  дипломов', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-awards',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'benefits', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Наши преимущества', // основное название для типа записи
			'singular_name'      => 'преимуществав', // название для одной записи этого типа
			'add_new'            => 'Добавить преимущества', // для добавления новой записи
			'add_new_item'       => 'Добавление преимущества', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование преимущества', // для редактирования типа записи
			'new_item'           => 'Новие преимущества', // текст новой записи
			'view_item'          => 'Смотреть преимущества', // для просмотра записи этого типа.
			'search_items'       => 'Искать преимущества', // для поиска по этим типам записи
			'not_found'          => 'Не найдение преимущества', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдение преимущества в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Наши преимущества', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-tablet',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );


	register_post_type( 'TypesOfAssistance', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Виды оказания помощи', // основное название для типа записи
			'singular_name'      => 'Вид помощи', // название для одной записи этого типа
			'add_new'            => 'Добавить вид помощи', // для добавления новой записи
			'add_new_item'       => 'Добавление вида помощи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование вида помощи', // для редактирования типа записи
			'new_item'           => 'Новый вид помощи', // текст новой записи
			'view_item'          => 'Смотреть вид помощи', // для просмотра записи этого типа.
			'search_items'       => 'Искать вид помощи', // для поиска по этим типам записи
			'not_found'          => 'Не найден вид помощи', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден вид помощи в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Виды оказания помощи', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 8,
		'menu_icon'           => 'dashicons-plus',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

//	register_post_type( 'PacientServis', array(
//		'label'               => null,
//		'labels'              => array(
//			'name'               => 'Службы стр.посетителям', // основное название для типа записи
//			'singular_name'      => 'служба', // название для одной записи этого типа
//			'add_new'            => 'Добавить службу', // для добавления новой записи
//			'add_new_item'       => 'Добавление службы', // заголовка у вновь создаваемой записи в админ-панели.
//			'edit_item'          => 'Редактирование службы', // для редактирования типа записи
//			'new_item'           => 'Новая служба', // текст новой записи
//			'view_item'          => 'Смотреть службу', // для просмотра записи этого типа.
//			'search_items'       => 'Искать службу', // для поиска по этим типам записи
//			'not_found'          => 'Не найденая служба', // если в результате поиска ничего не было найдено
//			'not_found_in_trash' => 'Не найденая служба в корзине', // если не было найдено в корзине
//			'parent_item_colon'  => '', // для родителей (у древовидных типов)
//			'menu_name'          => 'Службы стр.посетителям', // название меню
//		),
//		'description'         => '',
//		'public'              => true,
//		'publicly_queryable'  => true,
//		// зависит от public
//		'exclude_from_search' => true,
//		// зависит от public
//		'show_ui'             => true,
//		// зависит от public
//		'show_in_menu'        => true,
//		// показывать ли в меню адмнки
//		'show_in_admin_bar'   => true,
//		// по умолчанию значение show_in_menu
//		'show_in_nav_menus'   => true,
//		// зависит от public
//		'show_in_rest'        => null,
//		// добавить в REST API. C WP 4.7
//		'rest_base'           => null,
//		// $post_type. C WP 4.7
//		'menu_position'       => 7,
//		'menu_icon'           => 'dashicons-phone',
//		//'capability_type'   => 'post',
//		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
//		'hierarchical'        => false,
//		'supports'            => array( 'title', 'thumbnail' ),
//		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
//		'taxonomies'          => array( '' ),
//		'has_archive'         => false,
//		'rewrite'             => true,
//		'query_var'           => true,
//	) );

	register_post_type( 'Documents', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Важние документы', // основное название для типа записи
			'singular_name'      => 'документ', // название для одной записи этого типа
			'add_new'            => 'Добавить документ', // для добавления новой записи
			'add_new_item'       => 'Добавление документа', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование документа', // для редактирования типа записи
			'new_item'           => 'Новый документ', // текст новой записи
			'view_item'          => 'Смотреть документ', // для просмотра записи этого типа.
			'search_items'       => 'Искать документ', // для поиска по этим типам записи
			'not_found'          => 'Не найден документ', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден документ в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Важние документы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 8,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );


	register_post_type( 'companiess', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Страховие компании', // основное название для типа записи
			'singular_name'      => 'Страховие компании', // название для одной записи этого типа
			'add_new'            => 'Добавить компанию', // для добавления новой записи
			'add_new_item'       => 'Добавление компании', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование компании', // для редактирования типа записи
			'new_item'           => 'Новая компания', // текст новой записи
			'view_item'          => 'Смотреть компанию', // для просмотра записи этого типа.
			'search_items'       => 'Искать компанию', // для поиска по этим типам записи
			'not_found'          => 'Не найдена компания', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдена компания в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Страховие компании', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 8,
		'menu_icon'           => 'dashicons-portfolio',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail', ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'way', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Как добраться?', // основное название для типа записи
			'singular_name'      => 'Как добраться?', // название для одной записи этого типа
			'add_new'            => 'Добавить маршрут', // для добавления новой записи
			'add_new_item'       => 'Добавление маршрута', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование маршрута', // для редактирования типа записи
			'new_item'           => 'Новый маршрут', // текст новой записи
			'view_item'          => 'Смотреть маршрут', // для просмотра записи этого типа.
			'search_items'       => 'Искать маршрут', // для поиска по этим типам записи
			'not_found'          => 'Не найден маршрут', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден маршрут в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Как добраться?', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-admin-post',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail', ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'unImportant', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Неважные документы', // основное название для типа записи
			'singular_name'      => 'Неважные документы', // название для одной записи этого типа
			'add_new'            => 'Добавить документ', // для добавления новой записи
			'add_new_item'       => 'Добавление документа', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование документа', // для редактирования типа записи
			'new_item'           => 'Новый документ', // текст новой записи
			'view_item'          => 'Смотреть документ', // для просмотра записи этого типа.
			'search_items'       => 'Искать документ', // для поиска по этим типам записи
			'not_found'          => 'Не найден документ', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден документ в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Неважные документы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 11,
		'menu_icon'           => 'dashicons-paperclip',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail', ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

	register_post_type( 'otherDoc', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Другие документы', // основное название для типа записи
			'singular_name'      => 'Другие документы', // название для одной записи этого типа
			'add_new'            => 'Добавить документ', // для добавления новой записи
			'add_new_item'       => 'Добавление документа', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование документа', // для редактирования типа записи
			'new_item'           => 'Новый документ', // текст новой записи
			'view_item'          => 'Смотреть документ', // для просмотра записи этого типа.
			'search_items'       => 'Искать документ', // для поиска по этим типам записи
			'not_found'          => 'Не найден документ', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден документ в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Другие документы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 12,
		'menu_icon'           => 'dashicons-color-picker',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail', ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( '' ),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

}


function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );


add_action( 'wp_ajax_doctor-review', 'add_review' );
add_action( 'wp_ajax_doctor-review', 'add_review' );

function add_review() {
	$text   = $_POST['text'];
	$rating = $_POST['rating_count'];
	if ( $rating == '' ) {
		$rating = 1;
	}
	$fio = $_POST['fio'];
	$id  = $_POST['doctor_id'];

	$post_id = wp_insert_post( wp_slash( array(
		'post_status'   => 'draft',
		'post_title'    => $fio,
		'post_type'     => 'doctor-rew',
		'post_author'   => 1,
		'ping_status'   => get_option( 'default_ping_status' ),
		'post_parent'   => 0,
		'menu_order'    => 0,
		'to_ping'       => '',
		'pinged'        => '',
		'post_password' => '',
		'post_excerpt'  => '',
		'meta_input'    => [ 'meta_key' => 'meta_value' ],
	) ) );

	$doctor = get_post( $id );

	update_field( 'rating', $rating, $post_id );
	update_field( 'doctor', $doctor, $post_id );
	update_field( 'text', $text, $post_id );

//	$rating_doctor = get_field( 'rating', $doctor );
//	$count_revs    = get_field( 'count_revs', $doctor );
//	$count_revs ++;
//	$rating_doctor = ( $rating + $rating_doctor ) / $count_revs;
//	$rating_doctor = intval( $rating_doctor );
//
//	update_field( 'rating', $rating_doctor, $doctor );
//	update_field( 'count_revs', $count_revs, $doctor );
}

function confirm_doctor_rev( $new_status, $old_status, $post ) {
	if (
		'publish' === $new_status &&
		'publish' !== $old_status &&
		'doctor-rew' === $post->post_type
	) {
		$id_doctor = get_field('doctor', $post->ID)->ID;
		$old_rating = get_field('rating', $id_doctor);
		$new_rating = intval($old_rating) + intval(get_field('rating', $post->ID));
		$old_count = get_field('count_revs', $id_doctor);
		$new_count = intval($old_count) + 1;
		update_field( 'rating', $new_rating, $id_doctor );
		update_field( 'count_revs', $new_count, $id_doctor );
	}
}

add_action( 'transition_post_status', 'confirm_doctor_rev', 10, 3 );