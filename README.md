# SMTP for WordPress
Adds SMTP functionality to WordPress through wp-config.php. Plain and simple.

## Configure SMTP settings
Add these constants to the `wp-config.php`:

```
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
