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
define('DB_NAME', 'olddog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0F7SbR),|giz,+XGNCB)Y{e43SVfyz7|ud/XeN3D]^2ngt/GMcz.}ml5[-{%){1/');
define('SECURE_AUTH_KEY',  '$Jm,}8?!~<w.NBT>Dhc?zs-Qwa2g**,kB=;<ULRGL6jZ=-(Cj_7SA|z#jy|,~Wnm');
define('LOGGED_IN_KEY',    ';JJHp3(?3!`#<yQ4m`o#U8;|qyO<%12M*@v){o7z?;/;o<%80d[rBx@$hmm@Kyps');
define('NONCE_KEY',        '{^f?EGe|ttfo]&Q;[oIk-3J{4Q1|RU8e[9<~2YRgX>f`y- HT@%n:+8=.c?K77U7');
define('AUTH_SALT',        '>z}6n,of2jPAwuvl)@V2po+c_|(KAU,,AHPLmDChW+nR_VCGv6j8jwShn9@-.|P!');
define('SECURE_AUTH_SALT', 'MGln/UY=:u$c0u64Ti4Env6%=x_Z_^Yg^`MpPl29zA>ZQgk2-wzcOrz.)g^&$EVL');
define('LOGGED_IN_SALT',   ';hoz|2t0g)@!x<Hi$F=RB-!js|p#|HU|yv5|0stVW0_~=&:+B3$(;B)cm&BVj|<<');
define('NONCE_SALT',       '[Ip-kr1:@K#2[ nvm<(_!nA1}LtuI{6^7C7-mA#W0t@Dmqyh|x>BP)H`)*J<r~wq');
/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
