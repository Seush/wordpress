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
define( 'DB_NAME', 'wpbaza' );

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
define( 'AUTH_KEY',         'wo1%ZWj:Q{qH}.61-.QXp]1[0i =f5GHBf_4iMq.~4;I]WNA8r.I,w_~K8DrdggC' );
define( 'SECURE_AUTH_KEY',  'O(e*1X?,a[79=!h* m~OzFwa7me5JWI92w.Fd{X`#,)JjgiXXUjLwP95WJ&UVz^,' );
define( 'LOGGED_IN_KEY',    'Gv}wX:~(s`G4>^r{/`pWX?R`XMC6Dd!te Zd[6pq {8NJEwi2A8/8O4`;=15^*FF' );
define( 'NONCE_KEY',        '(_WtuT=q:a9([nH5ha+:{{#hZPdWPSww6dQvo;N!mg9$N[!hR9SL@pfr,XW3lZ}Q' );
define( 'AUTH_SALT',        '2>a>7kg<2/p(r%lyS!Sa!n@q`FAg!gGJD)qup(ZDc$kp#Kq^+ataTSsun9du9zR]' );
define( 'SECURE_AUTH_SALT', '@%41@Ee^D)]=e*a4$$(*H0*u0T}?`5p?%WKJdEp.~P(3K1B3U`&+q&Tmp>eyWt|3' );
define( 'LOGGED_IN_SALT',   'IL]p=]X 91eqUm!Qih6b!wnSVpAxr ^;;$YtZyUo`1hV<1(970`OQ9[Pv7;xp!nD' );
define( 'NONCE_SALT',       'C&40PG4}]oZ8/rIqi0OJsaY~=nwIc?$F3F6DXPii3`7S;ka3^&d<1A%gQq)`mF-$' );

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
