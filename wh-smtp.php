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

add_action("phpmailer_init", "wh_smtp_run_phpmailer_with_smtp");
function wh_smtp_run_phpmailer_with_smtp($phpmailer) {
    if (defined("WH_SMTP_HOST")) {
        $phpmailer->isSMTP();
        $phpmailer->Host = WH_SMTP_HOST;
    }
  
    if (defined("WH_SMTP_AUTH"))    $phpmailer->SMTPAuth   = WH_SMTP_AUTH;
    if (defined("WH_SMTP_PORT"))    $phpmailer->Port       = WH_SMTP_PORT;
    if (defined("WH_SMTP_USER"))    $phpmailer->Username   = WH_SMTP_USER;
    if (defined("WH_SMTP_PASS"))    $phpmailer->Password   = WH_SMTP_PASS;
    if (defined("WH_SMTP_SECURE"))  $phpmailer->SMTPSecure = WH_SMTP_SECURE;
    if (defined("WH_SMTP_FROM"))    $phpmailer->From       = WH_SMTP_FROM;
    if (defined("WH_SMTP_NAME"))    $phpmailer->FromName   = WH_SMTP_NAME;
    if (defined("WH_SMTP_DEBUG"))   $phpmailer->SMTPDebug  = WH_SMTP_DEBUG;

    /*
    define( 'WH_SMTP_HOST',   'smtp.example.eu' );
    define( 'WH_SMTP_AUTH',    true/false );
    define( 'WH_SMTP_PORT',   '25/465/587' );
    define( 'WH_SMTP_USER',   'postmaster@example.eu' );
    define( 'WH_SMTP_PASS',   'v3rySecur3Passw0rd' );
    define( 'WH_SMTP_SECURE', 'ssl/tls' );
    define( 'WH_SMTP_FROM',   'noreply@example.eu' ); // Optional
    define( 'WH_SMTP_NAME',   'example EU' );         // Optional
    define( 'WH_SMTP_DEBUG',  0/1/2 );                // Optional; 0 is no debugging.
    */
}

if (!defined("WH_SMTP_HOST")) add_action( 'admin_notices', 'not_configured_admin_notice__error' );
function wh_smtp_not_configured_admin_notice__error() {
    $class = 'notice notice-error';
    $message = __( 'SMTP is no not configured. Set values in wp-config.php,', 'wh-smtp' );

    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
}
