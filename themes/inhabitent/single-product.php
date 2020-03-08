<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

<div class="single-product-container">

    <div class="single-image">
        <?php the_post_thumbnail();?>
    </div>

    <div class="single-product-info">
        <h2><?php the_title(); ?></h2>
        <h3><?php echo '$'.get_field('price');?></h3>
        <p><?php the_content(); ?><p>

        <div class = 'social-icons-body'>
            <button  class="social-button-f"><i class="fab fa-facebook-f"></i> LIKE </button>
            <button  class="social-button-t"><i class="fab fa-twitter"></i> TWEET </button>
            <button  class="social-button-p"><i class="fab fa-pinterest"></i> PIN </button>
        </div>
    </div>
    
</div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>
    
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>