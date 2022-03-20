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
 * * Настройки MySQL
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
define( 'DB_NAME', 'leyka' );

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
define( 'AUTH_KEY',         'lZNEw,[549r))xWKgTaRg}9-Gn8y[equFc0}c(4 $HT&>A@;M>>vQoLfn&`isd~L' );
define( 'SECURE_AUTH_KEY',  '6=15J)~c|J3hw%CG]s0/-X%PNR{s;6HGrV0lyGO@[+SsB0./s`,D-Tavu<~)%six' );
define( 'LOGGED_IN_KEY',    'GZ1Bi|6LXq$X0=pGtr?oV2_ObVJg,75h(U@X%JBz%kw-=88#:s$<wAh1KH1P?60D' );
define( 'NONCE_KEY',        '%MTbETLlCmpjh:k LQOwsJjo@>D:QB*ZU-,X9aD[w/7*/-^x~@4-qL7<J[db}J-X' );
define( 'AUTH_SALT',        'LvuL9**w;>%d<qAmC[L5JL}}tPhcSF$l5BkiYIN}US-9g,F>2?NQ,M!t`pUe-+dS' );
define( 'SECURE_AUTH_SALT', 'iX=/O9sm+yc#L0y$#=|>P+K*aN&=xW7U~oZ<?nzDt|?ChL5P!w=>RkHbPmSA_3#h' );
define( 'LOGGED_IN_SALT',   '7,P/EdfB$tt1WH=n0r0_ m%FzgOC*}s;lm?,M-5-ZP}$tKxV|= Ad#0p72Hh/S<X' );
define( 'NONCE_SALT',       'l@i>ShND+K0Q(s9o5tfXN<UlUvZ/w9 ,QvB$rF=A)>:Smcq&=1o:7/q/7H-nrI[g' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'lk_';

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
