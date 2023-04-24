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
define( 'DB_NAME', 'redux' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k5M}>Hp82,mcZkI>xag_(7@v>iB]?`C)n*1sc}#@SeY7KIitJBjwLq!}-IAbQBEt' );
define( 'SECURE_AUTH_KEY',  '}!REN&@HapuSc5#%TX?_5#~QmWx<,Lm&*$$9A|Cf^[_=UtE!#maG#Y%q!2*aZ|*T' );
define( 'LOGGED_IN_KEY',    '!GVc+tHB&u*#B| ADqB_N*GK$p4$*lZ|5;L&v@]!ztr/bRpCNL(Pw=O),pV&Q54G' );
define( 'NONCE_KEY',        's-bl:k^``f2hYg&`{-}=^L[heKv8gSLJ6<vN50:%>Mut7C3A/z,A%s>})#8?*ha~' );
define( 'AUTH_SALT',        'gL?~S&PBEU,V$5jaUj^3WthDYmtU92$Mr^Vs i5EKBpsD:*F@D]Jxb8giH55U5_)' );
define( 'SECURE_AUTH_SALT', '0b~xs[ZN{O%GZl_TEE`$.{*f(j@#PmX,df4n|s8_p)fvp{OU*`U0:Od;tmo/~ROa' );
define( 'LOGGED_IN_SALT',   'YBTO(_G&^`+PXmxesxL}2m:*sW.W4=Q/U,!wNtR[n,JQJTOK<$I/Ri;Q]d.aJR]Y' );
define( 'NONCE_SALT',       '8e.e[vgbbwz;|83`zz6c-3trBIg+0F&U_Z0,Y.8e<2jA7;evl`Hyg1,_l/.7n0O3' );

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
