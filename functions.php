<?php

function university_files(){
    wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("university_main_styles", get_stylesheet_uri());
}

function js_file(){
   wp_enqueue_script("js-slider", get_stylesheet_directory_uri() . "/js/scripts-bundled.js", NULL, "1.0", false);
}

// call the function
add_action("wp_enqueue_scripts", "university_files"); 
add_action("wp_enqueue_scripts", "js_file"); 

?>