<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'WordpressSite' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f8yLJxA|_B-+-yo8Wm-`MZ|RcUfIl>QZD68o7t}B],wXr[ D;6,Z{z]K!OJTNB$v' );
define( 'SECURE_AUTH_KEY',  '~_+_E$:F|AzH8_N[;]op*&UX{xh|$KhpbOge6(( ?tbW0=[]zmwvoAE6u: m$F}b' );
define( 'LOGGED_IN_KEY',    'I*f&RV!w6W!Ymq:dzK/%K6boY/YF}!IPAE|VfF.}j26-kcmu%?1g}NgTX~5QYg|A' );
define( 'NONCE_KEY',        'l[qh;@Doo.<}tP0Gk|/u%ZG2~)m(6USuFIJg55gnPt27m~J2K0jt>Vn0$K`t@gh9' );
define( 'AUTH_SALT',        '|Z_ipJ*}j@(uXUdr,F,jKv8(BFDYKU/jALF}Ip1LKj$:xXC0o|UNR-|HD`R[oGy(' );
define( 'SECURE_AUTH_SALT', 'n8GPu0>fJ 6eu&i},B^l!dZgf3sxBeJv/K!]zglG3K0RoM*.|v-(8;>pS{HRHxR~' );
define( 'LOGGED_IN_SALT',   ',38Lw7[IUxy[t@XK9oGK1^bXK//2!gaY8<E[&lr+Md.G/3mvovosd?MP,;o4czL#' );
define( 'NONCE_SALT',       'K`bCQ3oP=Qi|g:6A_$6H[.2o%BTF.I>,`/R6f?|oZpkXjNwl*qjVsEj`fOCs2jrS' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
