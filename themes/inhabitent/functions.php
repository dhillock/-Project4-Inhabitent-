<?php

//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
}

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds theme support - ex: title tag
function inhabitant_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'main' => 'Main Menu'
    ));



}

add_action('after_setup_theme', 'inhabitant_features');

// We registered a sidebar into the WP backend....so we could put widgets into it.
function inhabitent_widget() {
register_sidebar(array(
'name' => 'Sidebar InfoXXX',
'id' => 'sidebar-info',
'description' => 'Add a text block with your business hours',
// 'before_widget' => '<aside id="%1$s">',
'before_widget' => '<aside>',
'after_widget' => '</aside>',
'before_title' => '<h2 class="widget-title">',
'after_title' => '</h2>'

));
}

add_action('widgets_init', 'inhabitent_widget'); // this adds the 


// So that we can use fontawsome icons in our text
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/e785bdc78c.js' );
}




?>
