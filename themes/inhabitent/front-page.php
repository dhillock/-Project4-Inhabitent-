<?php get_header(); ?>

<?php 
    if( have_posts() ) :

        // The WordPress Loop: loads post content 
        while( have_posts() ) :
            the_post(); ?>

        <section class="banner">
            <!-- Display the hero image that is stored in wordpress -->
            <?php the_post_thumbnail('large');?>
            <!-- The rouned white logo -->
            <img class="logo-main" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg;?>" alt="Inhabitents logo">

        </section>
        
        <!-- Loop ends -->
        <?php endwhile;?>

        <nav class = 'main-menu'>
            <?php the_posts_navigation();?>
        </nav>

        <?php else : ?>
                <p>No posts found</p>
        <?php endif;
?>


<!-- Load the terms (categories) start-->

<h1 class="landing-title" >SHOP STUFF</h1>

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

<!-- Load the terms (categories) end -->

<!-- Load three blog posts start-->
        <h1 class="landing-title2" >INHABITENT JOURNAL</h1>
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

<!-- Load three blog posts end-->


<!-- Load Latest Adventures start-->
        <h1 class="landing-title2" >LATEST ADVENTURES</h1>

<!-- Load Latest Adventures end-->


<!-- Load the footer  -->
<?php get_footer();?>