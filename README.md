# SMTP for WordPress
Adds SMTP functionality to WordPress through wp-config.php. Plain and simple.

## Configure SMTP settings
Add these constants to the `wp-config.php`:

```
define( 'WH_SMTP_HOST',   'smtp.example.eu' );
define( 'WH_SMTP_AUTH',    true/false );
define( 'WH_SMTP_PORT',   '25/465/587' );
define( 'WH_SMTP_USER',   'postmaster@example.eu' );
define( 'WH_SMTP_PASS',   'v3rySecur3Passw0rd' );
define( 'WH_SMTP_SECURE', 'ssl/tls' );
define( 'WH_SMTP_FROM',   'noreply@example.eu' ); // Optional
define( 'WH_SMTP_NAME',   'example EU' );         // Optional
define( 'WH_SMTP_DEBUG',  0/1/2 );                // Optional; 0 is no debugging.
```
