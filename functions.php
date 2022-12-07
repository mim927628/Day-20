<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/accets/css/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/accets/js/bootstrap.bundle.min.js' );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails' );


register_sidebar(array(
    'name'=>'logo top right',
    'id'=>'ltr',
    'before_widget'  => '',
	'after_widget'   => "",
) );

register_sidebar(array(
    'name'=>'Hero Title',
    'id'=>'h_title',
    'before_widget'  => '',
	'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Hero card image-1',
    'id'=>'card_img',
    'before_widget'  => '',
	'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Hero card image-2',
    'id'=>'card_img2',
    'before_widget'  => '',
	'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Hero card image-3',
    'id'=>'card_img3',
    'before_widget'  => '',
	'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Hero card body-1',
    'id'=>'card_body',
    'before_widget'  => '',
	'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Hero card body-2',
    'id'=>'card_body2',
    'before_widget'  => '',
	'after_widget'   => "",
) );
register_sidebar(array(
    'name'=>'Hero card body-3',
    'id'=>'card_body3',
    'before_widget'  => '',
	'after_widget'   => "",
) );



register_nav_menus(array(
    'TM'=>'primary',
) );

?>