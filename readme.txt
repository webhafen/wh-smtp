=== SMTP ===
Contributors: tobiasfeistmantl
Tags: smtp, mail
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
Requires at least: 3.1
Tested up to: 5.9.3
Stable tag: trunk

Adds SMTP functionality to WordPress through wp-config.php. Plain and simple.

== Description ==

Adds SMTP functionality to WordPress through wp-config.php. Plain and simple.

Simply add the SMTP configuration to the `wp-config.php`:

```
/* That's all, stop editing! Happy blogging. */
define( 'WP_SMTP_HOST',   'smtp.example.eu' );
define( 'WP_SMTP_AUTH',    true/false );
define( 'WP_SMTP_PORT',   '25/465/587' );
define( 'WP_SMTP_USER',   'postmaster@example.eu' );
define( 'WP_SMTP_PASS',   'v3rySecur3Passw0rd' );
define( 'WP_SMTP_SECURE', 'ssl/tls' );
define( 'WP_SMTP_FROM',   'noreply@example.eu' ); // Optional
define( 'WP_SMTP_NAME',   'example EU' );         // Optional
define( 'WP_SMTP_DEBUG',  0/1/2 );                // Optional; 0 is no debugging.
```

== Installation ==

Manual Installation

1. Extract the zip file.
2. Upload them to /wp-content/plugins/ directory on your WordPress installation.
3. Then activate the Plugin from Plugins page. Works ONLY if Nginx Helper Plugin is active!

= Set SMTP configuration
Simply add the SMTP configuration to the `wp-config.php`:

```
/* That's all, stop editing! Happy blogging. */
define( 'WP_SMTP_HOST',   'smtp.example.eu' );
define( 'WP_SMTP_AUTH',    true/false );
define( 'WP_SMTP_PORT',   '25/465/587' );
define( 'WP_SMTP_USER',   'postmaster@example.eu' );
define( 'WP_SMTP_PASS',   'v3rySecur3Passw0rd' );
define( 'WP_SMTP_SECURE', 'ssl/tls' );
define( 'WP_SMTP_FROM',   'noreply@example.eu' ); // Optional
define( 'WP_SMTP_NAME',   'example EU' );         // Optional
define( 'WP_SMTP_DEBUG',  0/1/2 );                // Optional; 0 is no debugging.
```