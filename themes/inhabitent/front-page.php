<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <section class="banner">
		<!-- Display the hero image that is stored in wordpress -->
        <?php the_post_thumbnail('large');?>
        <!-- The rouned white logo -->
        <img class="logo-main" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg;?>" alt="Inhabitents logo">

    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <nav class = 'main-menu'>
        <?php the_posts_navigation();?>
    </nav>

		<h1 class="landing-title" >SHOP STUFF</h1>

	<?php else : ?>
        	<p>No posts found</p>
	<?php endif;?>

    
<?php get_footer();?>