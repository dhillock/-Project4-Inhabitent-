<?php get_header(); ?>

<hr>

<div class="tax-taxonomy-heading" >
    <h1><?php echo single_term_title( '', false ) ;?></h1>
    <?php echo category_description();?>
</div>

<!-- Figure this out later ...want to restrict the posts to 4-->
 <!-- <?php
$args = array(
    'numberposts' => 2, 
    'order' => 'ASC', 
    'post_type' => 'product',
    'product' => 'eat',
    'orderby' => 'title');

$postslist = get_posts($args);

?>   -->

<hr style="border-top: dashed 1px; color: #a1a1a1" />

<section class="tax-test-grid">

    <?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="tax-single-item-section">
        <a href="<?php echo get_permalink() ;?>">
        <div class="tax-item-image">
            <?php the_post_thumbnail('large');?>
        </div>
        
        <div class="tax-single-item-info">
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



    
<?php get_footer();?>