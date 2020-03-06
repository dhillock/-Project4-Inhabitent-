<?php get_header(); ?>

<section class="sp-container">

    <!-- <div class="sp-XXX"> -->

         <?php if( have_posts() ) :

            //The WordPress Loop: loads post content 

            while( have_posts() ) :
            the_post(); ?>
            
                <div class = 'sp-img'>
                    <?php the_post_thumbnail('large');?>
                </div>

                <div class="sp-title">
                    <h2><?php the_title(); ?></h2>
                </div>

                <h2 class="sp-price" ><?php echo "$" . get_field('price');?></h2> 

                <p><?php the_content(); ?> </p>

            <?php endwhile;?>

            <?php the_posts_navigation();?>

        <?php else : ?>
            <p>No posts found</p>
        <?php endif;?>

        <div class = 'social-icons-body'>
            <button  class="social-button-f"><i class="fab fa-facebook-f"></i> LIKE </button>
            <button  class="social-button-t"><i class="fab fa-twitter"></i> TWEET </button>
            <button  class="social-button-p"><i class="fab fa-pinterest"></i> PIN </button>

        </div>

    <!-- </div> -->
   
</section>

<?php get_footer();?>