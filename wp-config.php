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
define( 'DB_NAME', 'dental' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'dental_Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'g@Hk8$Czg@Hk8$Cz' );

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
define( 'AUTH_KEY',         'u*xnBS5Jl<h?Sv=_I0VoE]B$zB0R  nKQ.~*r@LB?7i,$Ye5*|Nz&VuOWgX{#muK' );
define( 'SECURE_AUTH_KEY',  'TN*vq{f1A_OTFQ/hJ{b)kg<sB{)Q3n@0>a_vS`ek`.lXp2`%.8`:;CJ)EPzI/l<U' );
define( 'LOGGED_IN_KEY',    ':l&6NRTCZFNzv(&O4G;Ss=*Hz3i!0ydmq8)N%W21}f{<&I }jbVvz_ z;Qi[D)nM' );
define( 'NONCE_KEY',        '=#c=MXJ#-8z4+^u&At,iD+/%idl_]3nXj{q4NsI?h~, f9@S@3m[=XX0qtn0z_yV' );
define( 'AUTH_SALT',        'DVu?}1b$_6-THDZF.uI1_/Ojmcll^2Ef;4jSHr*fh#cGXzvQn]V!..02P%unOO9,' );
define( 'SECURE_AUTH_SALT', 'WY;Mrth+9(z--.03F:^]Fh|-j-^S1t0ZI b+KK_Ipwir^Ln~Q&_z-!ncUHW4lA&$' );
define( 'LOGGED_IN_SALT',   '8Q!#%4q#+771#Ma@9yc@Axlx*2(l+o&oZY7G~<0^f0v|f(3a#0/UVoI0BZ^EM=-D' );
define( 'NONCE_SALT',       'oMe4{#fSGk5 7sVG?,tbW`z`ra*X^qf @n~Jd_f`7^uEMXUxPwM)eDLm[::5rUDc' );

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
