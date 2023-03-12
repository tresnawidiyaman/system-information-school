<?php

//Exit if file called directly
if (! defined( 'ABSPATH' )) { 
    exit; 
}

function dashboard_admin () {
     
     add_menu_page(
        'LMS Sekolah', //Tittle Web Plugin
        'LMS Sekolah', //Tittle Menu plugin
        '', //Kapabilitas menu, ini bisa diakses oleh siapa (disini diakses oleh admin)
        'lmspage', //Slug menu (url) dari apps di adminnya
        'dashboardcc_function', //fungsi diarahkan ke submenu
        'dashicons-welcome-learn-more' //Icon yang akan digunakan sc : https://developer.wordpress.org/resource/dashicons/#chart-line
    );
    add_submenu_page(
        'lmspage', //Judul Slug menu utama (url)
        'Dashboard LMS Sekolah', //Tittle Web Plugin
        'Dashboard', //Tittle Menu plugin
        'manage_options', //Kapabilitas menu, ini bisa diakses oleh siapa (disini diakses oleh admin)
        'dashboardlms', //url dari apps di adminnya
        'dashboardlms_function' //fungsi untuk menjalankan menu, jadi kalau menu di klik maka fungsi apa yang jalan
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