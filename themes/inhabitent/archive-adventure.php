<?php get_header(); ?>

<?php $adventures = new WP_Query(array(  
	'post_type' => array( 'adventure', ),
	'orderby' => 'title',
	'order' => 'ASC',
    'posts_per_page' => 4, 
    ));
?>

<h1 class="arc-adv-title">LATEST ADVENTURES</h1>

<!-- Add the Adventure Categories -->
<section class = "arc-adventure-categories">

    <?php $terms = get_terms( array(
    'taxonomy' => 'adventure-type',
    'hide-empty' => false,
	))?>
	
    <?php foreach($terms as $term):?>

		<section class="arc-adventure-categories">
			<a class="arc-adventure-type-link" href="<?php echo get_home_url() . "/product-type/" . $term->slug;?>"> <?php echo $term->name ;?></a>
		</section>

	<?php endforeach;?>
	
</section>

 <hr style="border-top: dashed 1px; color: $brand-grey-light" />
 
 <!--  Add the adventure grid -->
<section class="arc-adventure-content-grid">

	<?php if( have_posts() ) :

	//The WordPress Loop: loads post content 
		while( $adventures -> have_posts() ) : $adventures -> the_post(); ?>
			
			<a href="<?php echo get_permalink() ;?>">
				<figure>
					<?php the_post_thumbnail('large');?>
						<figcaption>
							<p><?php the_title(); ?></p>
							<?php echo "x.....x$" . get_field('price');?>
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
   
<div class = 'arc-adventure-place-holder'
	<h1> This is a place holder</h1>
</div>

<?php wp_reset_postdata();?>
<!-- Always good to use the above function to clear our posts -->

<?php get_footer();?>