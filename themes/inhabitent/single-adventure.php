<?php get_header(); ?>

<section class="single-adventure">

         <?php if( have_posts() ) :
        //The WordPress Loop: loads post content 
        while( have_posts() ) :
        the_post(); ?>
		
		<div class = 'the-image'>
			<?php the_post_thumbnail('large');?>
		</div>

			<h1> <?php the_title(); ?> </h1>

            <p class ="author"> BY <?php the_author(); ?></p>
            
            <div single-adv-content >
                <?php the_content(); ?>
            </div>

        <?php endwhile;?>

        <?php the_posts_navigation();?>

        <?php else : ?>
            <p>No posts found</p>
        <?php endif;?>

        <div class = social-icons-body>
            <button class="social-button-f"><i class="fab fa-facebook-f"></i> LIKE </button>
			<button class="social-button-t"><i class="fab fa-twitter"></i> TWEET </button>
			<button class="social-button-p"><i class="fab fa-pinterest"></i> PIN </button>
        </div>
   
</section>

<?php get_footer();?>