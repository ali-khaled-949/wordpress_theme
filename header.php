<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package RBpazt
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php $viewport_content = apply_filters( 'rbpazt_viewport_content', 'width=device-width, initial-scale=1' ); ?>
        <meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
        <link rel="profile" href="//gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<link rel=”shortcut icon” href=”favicon.ico”>
    </head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
if (function_exists('hfe_init') && hfe_header_enabled()) {
    do_action('hfe_header');
} else {
    if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
        get_template_part( 'template-parts/header' );
    }
}
