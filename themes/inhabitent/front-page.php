<?php get_header();?>
<?php if (have_posts()):

// The WordPress Loop: loads post content
    while (have_posts()):
        the_post();?>
		<section class="banner">
		<!-- Display the hero image that is stored in wordpress -->
		<?php the_post_thumbnail('large');?>
		<!-- The rouned white logo -->
			<img class="logo-main" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg;?>" alt="Inhabitents logo">
		</section>
		<!-- Loop ends -->
		<?php endwhile;?>

		<?php the_posts_navigation();?>

	<?php else: ?>
<p>
	No posts found
</p>
<?php endif;?>

<!-- Load the terms (categories) for Shop Stuff, start-->

<h1 class="landing-title" >SHOP STUFF</h1>
<section class="shop-page-product-type">

<?php
$terms = get_terms(array(
    'taxonomy' => 'product-type',
    'hide_empty' => false,
));

foreach ($terms as $term): ?>

    <section class="front-page-product-sections"> <?php

$file_name = $term->name . '.svg';

?>
            <img class="product-section-svg" src='<?php echo get_template_directory_uri() . "/images/product-type-icons/$file_name" ?>'>
                <?php echo category_description($term); ?>
	        <a href="<?php echo "product-type/" . $term->slug; ?>"><button type="submit" class="front-page-product-sections-btn"><?php echo strtoupper($term->name) . ' STUFF'; ?></button></a>


        </section>
	        <?php endforeach;?>

</section>
<!-- Load the terms (categories) for Shop Stuff, end -->

<!-- Load three blog posts start-->
<h1 class="landing-title" >INHABITENT JOURNAL</h1>

<section class="journal-excerpts">

<?php
$args = array('numberposts' => 3, 'order' => "ASC", 'orderby' => 'date');
$postslist = get_posts($args);
foreach ($postslist as $post): setup_postdata($post);?>

	<div class="landing-blog">
		<div class = 'blog-thumb' >
			<?php the_post_thumbnail('large');?>
		</div>

		<?php the_date();?>
		<br>
		<h1 class="green-brand Novacento-bold"><?php the_title();?></h1>
		<a href="<?php echo get_permalink(); ?>"><button class="read-entry-button">READ ENTRY</button></a>
	</div>

				<?php endforeach;?>
</section>


<?php wp_reset_postdata();?>
<!-- Always good to use the above function to clear our posts -->

<!-- Load three blog posts end-->


<!-- Load Latest Adventures start-->
        <h1 class="landing-title" >LATEST ADVENTURES</h1>

<!-- Load Latest Adventures end-->


<!-- Load the footer  -->
<?php get_footer();?>



