<?php

//Exit if file called directly
if (! defined( 'ABSPATH' )) { 
    exit; 
}

function dashboard_admin () {
     
     add_menu_page(
        'Sysinfo School', //Tittle Web Plugin
        'Sysinfo School', //Tittle Menu plugin
        '', //Kapabilitas menu, ini bisa diakses oleh siapa (disini diakses oleh admin)
        'sispage', //Slug menu (url) dari apps di adminnya
        'dashboardcc_function', //fungsi diarahkan ke submenu
        'dashicons-welcome-learn-more' //Icon yang akan digunakan sc : https://developer.wordpress.org/resource/dashicons/#chart-line
    );
    add_submenu_page(
        'sispage', //Judul Slug menu utama (url)
        'Sysinfo School', //Tittle Web Plugin
        'Dashboard', //Tittle Menu plugin
        'manage_options', //Kapabccilitas menu, ini bisa diakses oleh siapa (disini diakses oleh admin)
        'dashboardsis', //url dari apps di adminnya
        'dashboardsis_function' //fungsi untuk menjalankan menu, jadi kalau menu di klik maka fungsi apa yang jalan
    );
    


}

function dashboardcc_function () {
    global $wpdb;
    include('dashboard.php');
}

function listclass_function () {
    global $wpdb;
    include('listclass.php');
}

function settingcc_function () {
    include('setting.php');
}

add_action('admin_menu','dashboard_admin');

function certificate_function () {
    global $wpdb;
    include('searchpanel.php');
    return $output;
}

add_shortcode('search_certificate','certificate_function'); 

?>