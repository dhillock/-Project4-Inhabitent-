<!-- Load Latest Adventures start-->
<h1 class="landing-title2" >LATEST ADVENTURESZZZ</h1>
<h1 class="landing-title2" >LATEST ADVENTURESZZZ</h1>
<h1 class="landing-title2" >LATEST ADVENTURESZZZ</h1>
<h1 class="landing-title2" >LATEST ADVENTURESCZZ</h1>

<?php 
	$args = array( 'post_type' => 'adventure', 
	'posts_per_page' => 4, 'order' => "ASC", 'orderby' => 'date');
	$the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>

<section class = 'latest-adventures2'>

<?php $counter = 0;?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$counter++;
			$dynClass = "adventure2-". $counter;?>
			<figure class = 'adventure2-figure <?php echo $dynClass?>'>
				<h1 class="adventure2-title"><?php the_title(); ?></h1>
				  
					<?php the_post_thumbnail('large');?>

				<a href="<?php echo get_permalink(); ?>"><button class="read-more-button2">READ MORE</button></a>
			</figure>

		<?php endwhile;?>

</section>

<?php else:  ?>

	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<!-- Load Latest Adventures end-->

<!-- Load Latest Adventures2 start-->

<?php wp_reset_postdata();?>
<!-- Always good to use the above function to clear our posts -->

<!-- Load the footer  -->
<?php get_footer();?>