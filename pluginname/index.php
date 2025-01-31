<?php
/*
Plugin Name: Plugin Name
Description: What this amazing plugin does 
Author: Author Names
Version: 1.0
*/


###################################################


function pluginname_options_panel(){
  // Adding Menu to Main WordPress Side Menu
  add_menu_page(
    'Browser Tab Name', //string $page_title
    'Sidebar Menu Name', //string $menu_title
    'manage_options', //string $capability
    'pluginname-options', //string $menu_slug
    'pagelet_pluginname_home', //callable $function = ''
    plugins_url('/pluginname/img/icon.png', __DIR__), //string $icon_url = ''
    null //int $position = null
  );

  // Adding sub menus to your menu 
  add_submenu_page( 
    'pluginname-options', //string $parent_slug
    'About — Browser', //string $page_title
    'About — Sidebar', //string $menu_title
    'manage_options', //string $capability
    'pluginname-about', //string $menu_slug
    'pagelet_pluginname_about' //callable $function
  );

  // Adding another sub menus to your menu 
  add_submenu_page( 
    'pluginname-options', //string $parent_slug
    'FAQ — Browser', //string $page_title
    'FAQ — Sidebar', //string $menu_title
    'manage_options', //string $capability
    'pluginname-faq', //string $menu_slug
    'pagelet_pluginname_faq' //callable $function
  );
}

add_action('admin_menu', 'pluginname_options_panel');


function pagelet_pluginname_home(){
  // HTML/CSS UI for this page
	echo "Hello World";
}
function pagelet_pluginname_about(){ 
	echo "About Page Here";
}
function pagelet_pluginname_faq(){
	echo "FAQ Page Here";
}

?>