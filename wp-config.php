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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'сhild_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'GY[@Ex_*i9ybr%>,?<0U&gO86EIj<B]6^Dt;E)Chsgq}?%6,A8^=XOW$1WE>s gr' );
define( 'SECURE_AUTH_KEY',  'B;+^P&Fmjnf3j#h}eoBdO|f!euF.9tXlL.GoU)IuASP)`lvtyl@+F;]k_pb>:Am6' );
define( 'LOGGED_IN_KEY',    ' Os,d2((kVRy|COxqqngA(#Q~eYD6^(@mvpxe,mi`jcvPWGlnT%~/#1!hswt<fnj' );
define( 'NONCE_KEY',        'NxtpW?vv3~#Rf857/A`pc+Q6&<:.`S0}<B^:K,WdT]RWZr$r5c*AO9XEuoSH?,c@' );
define( 'AUTH_SALT',        'H/}@&=r=p_d|y[5ST01SGA7W@1&]muV[}o{;n18lxk>W]]8AWRYZ;#K~+eBgKf!K' );
define( 'SECURE_AUTH_SALT', 'OK[-xM*|{_pK2dZ3zWwa<s,@!{EWV2YvfQQ;d?eg7hFC]kptLCZxzf~w.L;i:-CO' );
define( 'LOGGED_IN_SALT',   '?|2eG{zaPxU%3WRI~`t;r1^W3`ooeNsWTEpB}cjexvSxZ6ARq<J?eE(*pb_gS4kb' );
define( 'NONCE_SALT',       'dU>^G]{4vWgGEM&Q5~e{)tA#;Pr=7XG[(kLta;g)<0oi;s@35nm:@p:D&AeP>lTg' );

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
