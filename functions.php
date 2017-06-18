<?php

/***  Enqueue child theme stylesheet ***/

function kolumn_edge_child_enqueue_style() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'kolumn_edge_child_enqueue_style', 11);
