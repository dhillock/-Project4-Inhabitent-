<?php get_header(); ?>

<hr>

<!-- Rather than taking this approach, I would use the pre_get_posts in my functions template -->
<!-- But i like this approach better, because it isolates the "filter." -->
<?php $adventure = new WP_Query(array(  
	'post_type' => array( 'adventure', ),
	'orderby' => 'title',
	'order' => 'ASC',
    'posts_per_page' => 4, 
    ));
?>


<div class="tax-adventure-heading" >
    <h1><?php echo single_term_title( '', false ) ;?></h1>
    <?php echo category_description();?>
</div>

<hr style="border-top: dashed 1px; color: #a1a1a1" />

<section class="tax-adventure-grid">

    <?php if( have_posts() ) :

//The WordPress Loop: loads post content 
		while( $adventure -> have_posts() ) : $adventure -> the_post(); ?>

    <section class="tax-adventure-single-item-section">
        <a href="<?php echo get_permalink() ;?>">
        <div class="tax-adventure-item-image">
            <?php the_post_thumbnail('large');?>
        </div>
        
        <div class="tax-adventure-single-item-info">
            <p><?php the_title(); ?></p>
            <p class="merriweather" style="text-decoration: none;" ><?php echo "$" . get_field('price');?></p> 
        </div>
        </a>
    </section>
    
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<?php wp_reset_postdata();?>
<!-- Always good to use the above function to clear our posts -->

    
<?php get_footer();?>