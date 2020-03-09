<?php get_header(); ?>

<div class = 'search-title' >
    <br/>
    <br/>
    <h1>SEARCH RESULTS FOR: <?php echo esc_html( get_search_query( false ) ); ?> </h1>
</div>

<secton class = 'search-page' >

    <div class = 'search-content-area'

    <?php if( have_posts() ) :

            //The WordPress Loop: loads post content 
            while( have_posts() ) :
                the_post(); ?>
            
 
                <h3 class = 'blog-title'><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
            
                <p>
                <?php echo wp_trim_words( get_the_content(), 40, ' [...]' );?> 
                </p>
    
                <div class="search-button">
                    <a href="<?php the_permalink();?>">READ MORE →</a>
                </div>
            
            <!-- Loop ends -->
            <?php endwhile;?>

            <!-- <?php the_posts_navigation();?> -->

        <?php else : ?>
            <p>No posts found</p>
        <?php endif;?>

    </div>
    
    <?php get_sidebar();?>

</section>
    
<?php get_footer();?>