<?php get_header(); ?>


		<h1> Xxxxxx </h1>
		<h1> Xxxxxx </h1>
		<h1> Xxxxxx </h1>
		<h1> Single Journal (blog) </h1>


<section class="single-journal">
    <div class = 'left-side'>

        <?php if( have_posts() )  
            while( have_posts() ) :
                the_post(); ?>

        <div class="single-journal-container" 

            style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">

            <div class="single-journal-title">
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            </div>

            <div class="single-date-author">
                <p>
                <?php echo get_the_date() . " /"  ?>  BY <?php the_author(); ?>
                </p>
            </div>

        </div>
     
        <div class="single-journal-content">

            <p><?php the_content(); ?></p>

            <div class="single-category-tag">
                <span class="single-category">Posted in → <?php the_category(' ');?></span>
                <span class="single-tag">Tagged → <?php the_tags(' ');?> </span>
            </div>

            <div class = 'social-icons-body'>
                <button  class="social-button-f"><i class="fab fa-facebook-f"></i> LIKE </button>
                <button  class="social-button-t"><i class="fab fa-twitter"></i> TWEET </button>
                <button  class="social-button-p"><i class="fab fa-pinterest"></i> PIN </button>
            </div>

        </div>
        
    <?php endwhile;?>
        <?php the_posts_navigation();?>
    </div>
    <?php get_sidebar();?>

</section>

    
<?php get_footer();?>