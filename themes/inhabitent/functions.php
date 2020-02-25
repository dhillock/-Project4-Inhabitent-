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
// the first parameter is the WP hook, and the second parameter is the name of our function.
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

add_action('widgets_init', 'inhabitent_widget');

// this is a custom post-type...used for our store
function inhabitent_post_types() {

    // public = true means that we will have a menu item
            register_post_type('product', array(
                'has_archive' => true,
                'show_in_rest' => true,
                'public' => true,
                'supports' =>  array('title', 'editor', 'thumbnail'),
                'labels' => array(
                    'name' => 'Products',
                    'add_new_item' => 'Add NewYY Product',
                    'edit_item' => 'Edit ProductYY',
                    'all_items' => 'All ProductsZZ',
                    'singular_name' => 'ProductYY'
                ),
                'menu_icon' => 'dashicons-store'
            ));
            
// Register Custom Taxonomy
// function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'Product Type' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'Product Type' ),
		'menu_name'                  => __( 'Product Type', 'Product Type' ),
		'all_items'                  => __( 'All Items', 'Product Type' ),
		'parent_item'                => __( 'Parent Item', 'Product Type' ),
		'parent_item_colon'          => __( 'Parent Item:', 'Product Type' ),
		'new_item_name'              => __( 'New Item Name', 'Product Type' ),
		'add_new_item'               => __( 'Add New Item', 'Product Type' ),
		'edit_item'                  => __( 'Edit Item', 'Product Type' ),
		'update_item'                => __( 'Update Item', 'Product Type' ),
		'view_item'                  => __( 'View Item', 'Product Type' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'Product Type' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'Product Type' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'Product Type' ),
		'popular_items'              => __( 'Popular Items', 'Product Type' ),
		'search_items'               => __( 'Search Items', 'Product Type' ),
		'not_found'                  => __( 'Not Found', 'Product Type' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product-type', array( 'product' ), $args );

//}

// Hook into the 'init' action
// add_action( 'init', 'custom_taxonomy', 0 );   
         
}

add_action('init', 'inhabitent_post_types');

//Flush permalinks
flush_rewrite_rules();





// So that we can use fontawsome icons in our text
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/e785bdc78c.js' );
}

