<?php get_header(); ?>

<?php query_posts(array(  
	'post_type' => array( 'product', ),
	'orderby' => 'title',
	'order' => 'ASC',
    'posts_per_page' => 16, 
    ));
?>

<h1 class="arc-shop-title">SHOP STUFF</h1>

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

 <hr style="border-top: dashed 1px; color: $brand-grey-light" />
 
<section class="arc-shop-content-grid">

	<?php if( have_posts() ) :

	//The WordPress Loop: loads post content 
		while( have_posts() ) :
			the_post(); ?>
			
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
   
<div class = 'arc-place-holder'
	<h1> </h1>
</div>

<?php get_footer();?>