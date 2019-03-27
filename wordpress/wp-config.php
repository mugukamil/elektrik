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
define('DB_NAME', 'elektrik');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'U}w] N;T&.0B~A{8p~S!3_;G>)|mR>N6zq!CYhoT[~IA[ZfeEuZ8+2Z6dr)^I/ g');
define('SECURE_AUTH_KEY',  'IW2(qE `Gd+{KJ(s:@t_<o>a]-sG?{8!:96PvY,w#b+ys.N5cOh~_(l#B-AYx8vR');
define('LOGGED_IN_KEY',    'V5v`}z;f@_-fVrh-Y}C%]I!MvK)9%5Y*GUHoFdMgCC`vJp*08Ys?mFuj 7`#t=Ns');
define('NONCE_KEY',        '_3[LsD(tGN$6}q}~UcGgofj6=xLc@w(H/gjZaT7e^THq|<nP Od-+9GnI`;K2H_[');
define('AUTH_SALT',        'SqN;skkxbFkSP]yNfbox=)A$nfIDGJbAh*Jmma!Ev~&V<PXEodsk~0u{#j?-$W%,');
define('SECURE_AUTH_SALT', 'AB9+0$RpM1(*Fp1Sd;:Znyeb ,D8@w_[AO7~9?,1:6(%WBLt~%#cS(>f5We>,6]r');
define('LOGGED_IN_SALT',   'X`:bp0BUZoXoZ*DZP[M6Ms:)aZ^hKY8B$TAC6Y?5O[2Qa#<cdKw|g B~$|/2rI?W');
define('NONCE_SALT',       '^|GeX}ryQ$;Y0KE?D$#g|+]HW# #Xhs<OA=EMuPv/n(ipad~9eK66B^d)nn]u8>G');

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
