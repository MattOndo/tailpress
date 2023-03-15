<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_theme_options() {
    require_once( 'containers/theme-options.php' );
    require_once( 'containers/page-hero.php' );
    require_once( 'containers/page-sections.php' );
}
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_load() {
    require_once( get_template_directory() . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'crb_load' );

function crb_enqueue_custom_carbon_fields_styles() {
	wp_enqueue_style( 'cf-custom-theme', get_stylesheet_directory_uri() . '/carbon-fields/admin/carbon-fields-theme.css' );
}
add_action( 'admin_enqueue_scripts', 'crb_enqueue_custom_carbon_fields_styles' );