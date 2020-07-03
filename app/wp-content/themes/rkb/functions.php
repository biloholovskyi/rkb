<?php
add_action( 'wp_enqueue_scripts', 'style_them' );
add_action( 'wp_footer', 'script_them' );
add_action( 'after_setup_theme', 'menu' );

add_filter( 'excerpt_length', function () {
	return 18;
} );

remove_filter( 'the_excerpt', 'wpautop' );

function menu() {
	register_nav_menu( 'header', 'Главное меню в шапке' );
	add_theme_support( 'post-thumbnails', array( 'post', 'doctor', 'main-slider','Specialist','diplom-slider','benefits') ); 
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
		'supports'            => array( 'title' ,'thumbnail', ),
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
		'supports'            => array( 'title' ,'thumbnail'),
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
		'supports'            => array( 'title' ,'thumbnail'),
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
		'supports'            => array( 'title' ,'thumbnail'),
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
	$text = $_POST['text'];
	$rating = $_POST['rating_count'];
	if($rating == '') {
		$rating = 1;
	}
	$fio = $_POST['fio'];
	$id = $_POST['doctor_id'];

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

	$rating_doctor = get_field('rating', $doctor);
	$count_revs = get_field('count_revs', $doctor);
	$count_revs++;
	$rating_doctor = ($rating + $rating_doctor) / $count_revs;
	$rating_doctor = intval($rating_doctor);

	update_field( 'rating', $rating_doctor, $doctor );
	update_field( 'count_revs', $count_revs, $doctor );
}