<?php
/*
Plugin Name: hello-world 2025
Description: this is a sandbox of a plugin for the class 2025 
Author: Yeyang Wang
Version: 1.0
*/


###################################################


function demo_options_panel(){
  // Adding Menu to Main WordPress Side Menu
  add_menu_page(
    'hello world 2025', //string $page_title
    'hello world 2025', //string $menu_title
    'manage_options', //string $capability
    'demo-options', //string $menu_slug
    'pagelet_demo_home', //callable $function = ''
    plugins_url('/demo/img/icon.png', __DIR__), //string $icon_url = ''
    null //int $position = null
  );

  // Adding sub menus to your menu 
  add_submenu_page( 
    'demo-options', //string $parent_slug
    'About — Browser', //string $page_title
    'About — Sidebar', //string $menu_title
    'manage_options', //string $capability
    'demo-about', //string $menu_slug
    'pagelet_demo_about' //callable $function
  );

  // Adding another sub menus to your menu 
  add_submenu_page( 
    'demo-options', //string $parent_slug
    'FAQ — Browser', //string $page_title
    'FAQ — Sidebar', //string $menu_title
    'manage_options', //string $capability
    'demo-faq', //string $menu_slug
    'pagelet_demo_faq' //callable $function
  );
}

add_action('admin_menu', 'demo_options_panel');



// BACKEND
function helloworld2025_be_js(){
  wp_enqueue_script(
    'helloworld2025_be_js',
    plugins_url('./js/script-be.js', __FILE__),
    false,
    true
  );
}

add_action(
  'admin_enqueue_scripts',
  'helloworld2025_be_js'
);


function helloworld2025_be_css(){
  wp_enqueue_style(
    'helloworld2025_be_css',
    plugins_url('./css/style-be.css', __FILE__),
    false,
    true
  );
}

add_action(
  'admin_enqueue_scripts',
  'helloworld2025_be_css'
);


// FRONT END
function helloworld2025_fe_js(){
  wp_enqueue_script(
    'helloworld2025_fe_js',
    plugins_url('./js/script-fe.js', __FILE__),
    false,
    true
  );
}

add_action(
  'wp_enqueue_scripts',
  'helloworld2025_fe_js'
);


function helloworld2025_fe_css(){
  wp_enqueue_style(
    'helloworld2025_fe_css',
    plugins_url('./css/style-fe.css', __FILE__)
  );
}

add_action(
  'wp_enqueue_scripts',
  'helloworld2025_fe_css'
);




function pagelet_demo_home(){
  // HTML/CSS UI for this page
	// echo "Hello World";
  include 'home.php';
}
function pagelet_demo_about(){ 
	// echo "About Page Here";
  include 'about.php';
}
function pagelet_demo_faq(){
	echo "FAQ Page Here";
}

?>