<?php get_header(); ?>

<?php $postlist = new WP_Query(array(  
	'post_type' => array( 'post', ),
	'orderby' => 'title',
	'order' => 'DSC',
    'posts_per_page' => 99, // change to 99 after 
    ));
?>

<section class="arc-journal">

    <div class="j-content">

        <!-- Loop -->
        <?php if( have_posts() )  

       
            while( $postlist -> have_posts() ) : $postlist -> the_post(); ?> 

        <!-- Blog Banner -->
        <div class="j-container" 
            style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
            <div class="j-title">
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="j-date-author">
                <p>
                <?php echo get_the_date() . " /"  ?>  BY <?php the_author(); ?>
                </p>
            </div>
        </div>
        <!-- Blog Content -->
        <div class="j-content">
            <p><?php echo wp_trim_words( get_the_content(), 40, ' [...]' );?></p>
            <div class="j-btn">
            <a href="<?php the_permalink();?>">Read more →</a>
            </div>
        </div>
        
        <!-- Loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>
    
    </div>

        <?php get_sidebar();?>
</section>

    
<?php get_footer();?>