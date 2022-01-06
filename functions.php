<?php

function university_files(){
    wp_enqueue_script("js-slider", get_theme_file_uri("/js/scripts-bundled.js", NULL, "1.0", true));
    wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("university_main_styles", get_stylesheet_uri());
}

function university_features(){
    //register menu locations
    register_nav_menu("headerMenuLocation", "Header Menu Location"); //header
    register_nav_menu("footerLocation1", "Footer Location One"); //footer 1
    register_nav_menu("footerLocation2", "Footer Location Two"); //footer 2
    
    add_theme_support("title-tag");
}

// call the function
add_action("wp_enqueue_scripts", "university_files"); 
add_action("after_setup_theme", "university_features"); 

?>