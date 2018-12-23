<?php

/*
 *
 * Plugin Name: Valsew Product Import
 * Description: This is a tool to help Valsew import products
 * Author: Alessandro Vecchi
 *
 */

add_action('admin_head', 'admin_styles');

function admin_styles() {
  echo '<link rel="stylesheet" href="'.plugins_url('css/admin.css', __FILE__).'" type="text/css" media="all" />';
}

add_action('admin_menu', 'wpdocs_register_my_custom_submenu_page');
 
function wpdocs_register_my_custom_submenu_page() {
    add_submenu_page(
        'tools.php',
        'Valsew Product Import',
        'Valsew Product Import',
        'manage_options',
        'valsew-import',
        'valsew_import_view' );
}

function valsew_import_view() {
	include_once('views/import.php');
}


?>
