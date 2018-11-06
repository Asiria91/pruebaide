<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'prueba');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`s9USsMZ/Q&a*<#REEX,qpJ{4Am3YHjJbH=6M&W6AB51^4fnwn9N1Annb;Tt`[|:');
define('SECURE_AUTH_KEY', 'zp,0nLvoob[;C_><$kU86<z_^R~+ObBeSZyHmP#dRV9F(m/7$$Iq1;jF^.Vp$<9d');
define('LOGGED_IN_KEY', 'GBkA@deK[FUeLV&,r7Y,/xyY/BLd3_9#yYZA7Di3^py@S|= gnJg)7-xX*I._|jZ');
define('NONCE_KEY', '_6M:sj@AWb#)KGybBd*QR+<Jd[=TI-f- }5p%m9ady-guh{$/=#dye9~CmU[z>hq');
define('AUTH_SALT', 'g%bHkC>/4%izIv$1{(x}V9P=%oQd-`~yMRYKS&F*qv05`^YTkuCwQE>hB`#5pwWZ');
define('SECURE_AUTH_SALT', '^:(YTUD.M.?-MKCwl7oTsu:dFwlTQj2n.ut 1^td%i2n?+ ^+B!NcW<28c-~mJcN');
define('LOGGED_IN_SALT', 'a6$9lKH25#!>6+g-/GGFSk8fXp3|7WTVJ-Z+8}W~)}dhzPtC>N8MNS~+LF1X8Jc(');
define('NONCE_SALT', 'n!CK/$;u31aAb20WrCL({4fY-$s-.aw!6Vn8w`S#m)qXv!Bh@K)KZMVccP6Q*iim');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

