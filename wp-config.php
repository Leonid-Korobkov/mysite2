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
define( 'DB_NAME', 'fitness-city' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'leonid' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'leonidK2385' );

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
define( 'AUTH_KEY',         '|~4^_39eqv7cM:Z-RJsvum#FIg9``VuUDY6+3uH@M_jd>>RV!?]?!YufYvJEnR)2' );
define( 'SECURE_AUTH_KEY',  ':fULR]Rz>GUKkj;&0=jKxhxOf!wXv9Vq)!q44 ,qLcQs-.*1*V6m;m6w0Dn.<^pG' );
define( 'LOGGED_IN_KEY',    '!iYIfYDW}Ycox0/@|G{MeVc#~X:&y*lD;)NoXxbTou~:v_Ojez1$6(e}mU-vSM3I' );
define( 'NONCE_KEY',        '3S7VdrdWKAt%0L-Q]Y~Xo`BIWsTOGxMK]/3{whJZs,)W5ma$GhkV_M>6M%q.bmGu' );
define( 'AUTH_SALT',        '!>3W?ex9ZiOu7L+tu*k4lko`a*4_&uJ1mh|+>sa.v%(YC]tVH2TvkMDv}_vK]{)H' );
define( 'SECURE_AUTH_SALT', 'cy ?y3sx!6lu?S9O;GX:U`~rxAI85gdP40;G.vTdH_a|^62cTA:,+*/9iy^`}iE>' );
define( 'LOGGED_IN_SALT',   '>>a=MVp?6y,qB4f&(fXzq#n1zPc3m$2ou8NW/mR*P8q7Ny-N^%>oah?)bb(M:M,Q' );
define( 'NONCE_SALT',       '4VE<}6jx}.vm#=pE3zq=S9+Ly2d|eN}lD-pz_,?|c4p9$eoK&8O!C795;ev?vJ[>' );

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
