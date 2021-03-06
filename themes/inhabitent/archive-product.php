<?php get_header(); ?>

<?php $products = new WP_Query(array(  
	'post_type' => array( 'product', ),
	'orderby' => 'title',
	'order' => 'ASC',
    'posts_per_page' => 16, 
    ));
?>

<h1 class="arc-product-title">SHOP STUFF</h1>

<!-- Add the Product Categories -->
<section class = "arc-product-categories">

    <?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide-empty' => false,
	))?>
	
    <?php foreach($terms as $term):?>

		<section class="arc-product-categories">
			<a class="arc-product-type-link" href="<?php echo get_home_url() . "/product-type/" . $term->slug;?>"> <?php echo $term->name ;?></a>
		</section>

	<?php endforeach;?>
	
</section>

 <hr style="border-top: dashed 1px; color: #c8c8c8" >
 
 <!--  Add the archive product grid -->
<section class="arc-product-content-grid">

	<?php if( have_posts() ) :

	//The WordPress Loop: loads post content
		while( $products -> have_posts() ) : $products -> the_post(); ?>
			
			<a href="<?php echo get_permalink() ;?>">
				<figure>
					<?php the_post_thumbnail('large');?>
						<figcaption>
							<p><?php the_title(); ?></p>
							<?php echo ".....$" . get_field('price');?>
						</figcaption>
				</figure>
			</a>
		<!-- Loop ends -->
		<?php endwhile;?>

</section>

		<!-- <?php the_posts_navigation();?> -->

	<?php else : ?>
        <p>No posts found</p>
	<?php endif;?>
   
<div class = 'arc-product-place-holder'
	<h1> This is a place holder: archive-product.php</h1>
</div>

<?php wp_reset_postdata();?>
<!-- Always good to use the above function to clear our posts -->

<?php get_footer();?>