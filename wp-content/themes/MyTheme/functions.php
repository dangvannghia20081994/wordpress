<?php
function getMyThemeScript(){
	wp_enqueue_style('theme', get_theme_file_uri('style.css'));
	wp_enqueue_style('assets', get_theme_file_uri('assets/style.css'));
}
add_action('wp_enqueue_scripts', 'getMyThemeScript');