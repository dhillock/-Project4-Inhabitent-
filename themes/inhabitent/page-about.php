<?php get_header();?>

<section class = "container about-page">

   <?php if (have_posts()):

    //The WordPress Loop: loads post content
    while (have_posts()):
        the_post();?>

		        <div class="about"
		            style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
				</div>
		            <!-- <h2><?php the_title();?></h2> -->
			
				<div class = 'about-text'>
					<?php the_content();?>
				</div>

		        <!-- Loop ends -->
		        <?php endwhile;?>

	        <?php the_posts_navigation();?>

	    <?php else: ?>
            <p>No posts found</p>
    <?php endif;?>

</section>

<?php get_footer();?>