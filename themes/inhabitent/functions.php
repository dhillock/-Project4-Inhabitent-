<?php

show_admin_bar(false);

//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");

wp_enqueue_script('inhabitent-search-toggle', 
get_template_directory_uri() . '/build/js/search-toggle.min.js', 
array('jquery'), NULL, true);
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


function inhabitent_widget() {

// We registered a sidebar into the WP backend....so we could put widgets into it.	
register_sidebar(array(
'name' => 'Sidebar Info',
'id' => 'sidebar-info',
'description' => 'Add a text block with your business hours',
// 'before_widget' => '<aside id="%1$s">',
'before_widget' => '<aside>',
'after_widget' => '</aside>',
'before_title' => '<h2 class="widget-title">',
'after_title' => '</h2>'
));

// We registered a sidebar into the WP backend....so we could put widgets into it.	
register_sidebar(array(
	'name' => 'Footer Info',
	'id' => 'footer-info',
	'description' => 'Add a text block for your footer',
	'before_widget' => '<aside class="%1$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>'
	));

}

add_action('widgets_init', 'inhabitent_widget');

// this function is to setup custom post-types.
function inhabitent_post_types() {

/////////// New post-type: Products: Start

    // public = true means that we will have a menu item
            register_post_type('product', array(
                'has_archive' => true,
                'show_in_rest' => true,
                'public' => true,
                'supports' =>  array('title', 'editor', 'thumbnail'),
                'labels' => array(
                    'name' => 'Products',
                    'add_new_item' => 'Add NewYY Product',
                    'edit_item' => 'Edit Product',
                    'all_items' => 'All Products',
                    'singular_name' => 'Product'
                ),
                'menu_icon' => 'dashicons-store'
            ));
            
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
        'show_in_rest'               => true,
	);

	register_taxonomy('product-type', array('product'), $args);

/////////// New post-type: Products: End


/////////// New post-type: Adventures: Start
// public = true means that we will have a menu item
register_post_type('adventure', array(
    'has_archive' => true,
    'show_in_rest' => true,
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'labels' => array(
        'name' => 'Adventures',
        'add_new_item' => 'Add Adventure',
        'edit_item' => 'Edit Adventure',
        'all_items' => 'All Adventures',
        'singular_name' => 'Adventure',
    ),
    'menu_icon' => 'dashicons-smiley',
));

$labels = array(
    'name' => _x('Adventure Types', 'Taxonomy General Name', 'Adventure Type'),
    'singular_name' => _x('Adventure Type', 'Taxonomy Singular Name', 'Adventure Type'),
    'menu_name' => __('Adventure Type', 'Adventure Type'),
    'all_items' => __('All Items', 'Adventure Type'),
    'parent_item' => __('Parent Item', 'Adventure Type'),
    'parent_item_colon' => __('Parent Item:', 'Adventure Type'),
    'new_item_name' => __('New Item Name', 'Adventure Type'),
    'add_new_item' => __('Add New Item', 'Adventure Type'),
    'edit_item' => __('Edit Item', 'Adventure Type'),
    'update_item' => __('Update Item', 'Adventure Type'),
    'view_item' => __('View Item', 'Adventure Type'),
    'separate_items_with_commas' => __('Separate items with commas', 'Adventure Type'),
    'add_or_remove_items' => __('Add or remove items', 'Adventure Type'),
    'choose_from_most_used' => __('Choose from the most used', 'Adventure Type'),
    'popular_items' => __('Popular Items', 'Adventure Type'),
    'search_items' => __('Search Items', 'Adventure Type'),
    'not_found' => __('Not Found', 'Adventure Type'),
);
$args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud' => true,
    'show_in_rest'               => true,

);
register_taxonomy('adventure-type', array('adventure'), $args);

/////////// New post-type: Adventures: End




} // the end of adding custom post-type function. Above we added two custom post-types: Products, and Adventures.

// Now that the custom post-type has been created, let's initialiize them.
// Note that this - in fact - is only executed once...over time, because once it's setup in WP, it's setup.
// If this was "run again" it would - perhaps - blow-away all the Adventure post-types we added into WP
add_action('init', 'inhabitent_post_types');

//Flush permalinks
flush_rewrite_rules();

// So that we can use fontawsome icons in our text
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/e785bdc78c.js' );
}

// This function is used to pre-empt the normal WP query. It is executed before the normal WP loops in the template files.
// function inhabitent_adjust_productXXX($query) {
//     // if(!is_admin() && is_post_type_archive('product')) :

//         if(is_post_type_archive( array('product', 'adventure') )) :
//         $query->set('orderby', 'title');
//         $query->set('order', 'ASC');
//         $query->set('posts_per_page', 16);

//     endif;
// }
// add_action('pre_get_posts', 'inhabitent_adjust_productXXX');


?>

