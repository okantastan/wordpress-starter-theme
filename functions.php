<?php

/**
 * Menü ekliyoruz
 */
require_once('class-wp-bootstrap-navwalker.php');
function register_my_menu(){
	register_nav_menu('primary', __('Birincil Menü'));
}
add_action('init', 'register_my_menu');

/**
 * css ve javascript dosyalarını import ediyoruz
 */
function okan_scripts() {
    /**css dosyaları */
    wp_enqueue_style( 'bootstrap', 'https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'album', 'https://getbootstrap.com/docs/4.0/examples/album/album.css' );
    /**javascript dosyaları */
    wp_enqueue_script( 'slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( 'popper', 'https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'holder', 'https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js' );

}
add_action( 'wp_enqueue_scripts', 'okan_scripts' );

//admin barı kapat
function remove_admin_bar(){
	show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');
?>