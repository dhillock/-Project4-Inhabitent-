<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php 
$terms = get_terms(array(
    'taxonomy' => 'product-type',
    'hide_empty' => false
));

foreach($terms as $term) :
    $file_name = $term->name . '.svg';
    echo "<p>";
    echo $term->name;
    echo "</p>";?>
    <img src='<?php echo get_template_directory_uri() . "/images/product-type-icons/$file_name"?>'>
<?php endforeach;?>


<!-- Custom Post Loop Starts -->
<?php
   $args = array( 
       'post_type' => 'post', 
       'order' => 'ASC',
       'numberposts' => 3
    );
   $product_posts = get_posts( $args ); // returns an array of posts

?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <?php the_title() ?>
   <?php the_post_thumbnail() ?>
  
<?php endforeach; wp_reset_postdata(); ?>

    
<?php get_footer();?>