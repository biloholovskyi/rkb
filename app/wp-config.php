<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rkb_v2' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C?iFg;t.up7T.t:; {.p[Lho$<B_kWd(>I8f6<e?.@H;mHV%qibCa+6%?P0MohPX' );
define( 'SECURE_AUTH_KEY',  'zXICYWKD=r>:/z@Bav0{~Xa(B cgu`1@b0Hv?rQ/,JZi@W;#l,ZU8uHg^i7i&?k!' );
define( 'LOGGED_IN_KEY',    '?P$*V !H)iWrx#v&dt%W)NutW$< T|Q1sL:p[]M<QB8Iwaek+x.dR)LPFTZQ4K+O' );
define( 'NONCE_KEY',        'Xi=Y &,P~l$B[Ga4WT>*eZ53XOj.,9hx%>_Z/YtCJ>i:LDh!s-@Wr)M$R)iDZ-!+' );
define( 'AUTH_SALT',        'J#/v49hhf8h}I$g>lEcV=`ouxTkXt]{52b+La]UMj%q0nq5~d-*0*KJ[]AUh.`D2' );
define( 'SECURE_AUTH_SALT', 'fNEShEDN[[ySt9G=237%[jFNOh*X~gt(p&4O}Dz )W()2IZ_cg%+z^IUq/X@BFg_' );
define( 'LOGGED_IN_SALT',   'Yc{M*I=;W5Q?) f-}Phv2!N#^)snDEQbu=6-J&5G@mVO_9,v60!S&LqaOiL{k]| ' );
define( 'NONCE_SALT',       'ds5V;_gQ&v6Wk%,U3E=VpZK.D*Kr/u!wUVd#zHm(@S8kd3;:dU](+Hbe)/aM.R-y' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
