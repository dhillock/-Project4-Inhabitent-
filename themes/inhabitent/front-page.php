<?php get_header();?>


<?php if (have_posts()):

//The WordPress Loop: loads post content
    while (have_posts()):
        the_post();?>

		<!-- <section class="banner">
			<?php the_post_thumbnail('large');?>
			<img class="logo-main1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg;?>" alt="Inhabitents logo">
		</section> -->

		<section class="banner-hero">
			<?php the_post_thumbnail('large');?>
			<img class="logo-main2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-hero.jpg;?>" alt="Woman Camping, backgroun image">

		</section>

		<h2><?php the_title();?></h2>
		<h3><?php the_permalink();?></h3>
		<?php the_content();?>

		<!-- Loop ends -->
		<?php endwhile;?>

		<?php the_posts_navigation();?>

	<?php else: ?>

        <p>No posts found</p>

    <?php endif;?>

<?php get_footer();?>