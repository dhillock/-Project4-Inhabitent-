<?php get_header(); ?>

<hr>

<!-- Rather than taking this approach, I would use the pre_get_posts in my functions template -->
<!-- But i like this approach better, because it isolates the "filter." -->
<?php $products = new WP_Query(array(  
	'post_type' => array( 'product', ),
	'orderby' => 'title',
	'order' => 'ASC',
    'posts_per_page' => 4, 
    ));
?>


<div class="tax-product-heading" >
    <h1><?php echo single_term_title( '', false ) ;?></h1>
    <?php echo category_description();?>
</div>

<hr style="border-top: dashed 1px; color: #a1a1a1" />

 <!--  Add the taxonomy product grid -->
<section class="tax-product-content-grid">

	<?php if( have_posts() ) :

	//The WordPress Loop: loads post content
		while( $products -> have_posts() ) : $products -> the_post(); ?>
			
			<a href="<?php echo get_permalink() ;?>">
				<figure>
					<?php the_post_thumbnail('large');?>
						<figcaption>
							<p><?php the_title(); ?></p>
							<?php echo ".........$" . get_field('price');?>
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
   
<div class = 'tax-product-place-holder'
	<h1> This is a place holder: taxonomy-product-type.php</h1>
</div>

<?php wp_reset_postdata();?>
<!-- Always good to use the above function to clear our posts -->

<?php get_footer();?>