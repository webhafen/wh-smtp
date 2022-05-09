<?php
/**
 * Plugin Name: WH SMTP
 * Plugin URI: https://github.com/webhafen/wh-smtp
 * Description: Adds SMTP functionality to WordPress. Plain and simple.
 * Version: 1.0.0
 * Author: webhafen
 * Author URI: https://webhafen.com
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

add_action("phpmailer_init", "run_phpmailer_with_smtp");
function run_phpmailer_with_smtp($phpmailer) {
    if (defined("WP_SMTP_HOST")) {
        $phpmailer->isSMTP();
        $phpmailer->Host = WP_SMTP_HOST;
    }
  
    if (defined("WP_SMTP_AUTH"))    $phpmailer->SMTPAuth   = WP_SMTP_AUTH;
    if (defined("WP_SMTP_PORT"))    $phpmailer->Port       = WP_SMTP_PORT;
    if (defined("WP_SMTP_USER"))    $phpmailer->Username   = WP_SMTP_USER;
    if (defined("WP_SMTP_PASS"))    $phpmailer->Password   = WP_SMTP_PASS;
    if (defined("WP_SMTP_SECURE"))  $phpmailer->SMTPSecure = WP_SMTP_SECURE;
    if (defined("WP_SMTP_FROM"))    $phpmailer->From       = WP_SMTP_FROM;
    if (defined("WP_SMTP_NAME"))    $phpmailer->FromName   = WP_SMTP_NAME;
    if (defined("WP_SMTP_DEBUG"))   $phpmailer->SMTPDebug  = WP_SMTP_DEBUG;

    /*
    define( 'WP_SMTP_HOST',   'smtp.example.eu' );
    define( 'WP_SMTP_AUTH',    true/false );
    define( 'WP_SMTP_PORT',   '25/465/587' );
    define( 'WP_SMTP_USER',   'postmaster@example.eu' );
    define( 'WP_SMTP_PASS',   'v3rySecur3Passw0rd' );
    define( 'WP_SMTP_SECURE', 'ssl/tls' );
    define( 'WP_SMTP_FROM',   'noreply@example.eu' ); // Optional
    define( 'WP_SMTP_NAME',   'example EU' );         // Optional
    define( 'WP_SMTP_DEBUG',  0/1/2 );                // Optional; 0 is no debugging.
    */
}

if (!defined("WP_SMTP_HOST")) add_action( 'admin_notices', 'not_configured_admin_notice__error' );
function not_configured_admin_notice__error() {
    $class = 'notice notice-error';
    $message = __( 'SMTP is no not configured. Set values in wp-config.php,', 'wh-smtp' );

    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
}
