<?php get_header();?>

<section class="page-not-found">

    <div class="content-area">

    <!-- <div class = 'page-title'> -->
        <h1> OOPS! That page can't be found. </h1>
    <!-- </div? -->

        <p>It looks like nothing can be found at this location. Maybe try one of the links below or search again.<p>

        <div class="page-search">
            <?php get_search_form();?>
        </div>

        <h2> Recent Posts </h2>

         <!-- Recent Posts Loop -->
         <?php
        $args = array( 
            'post_type' => 'post', 
            'order' => 'ASC',
            'numberposts' => 5
            );
        $product_posts = get_posts( $args ); 
        ?>

        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>

        <?php endforeach; wp_reset_postdata(); ?>

        <h2>Most Used Categories</h2>

        <?php echo wp_list_categories(array (
            'order'=>'DSC',
            'orderby'=>'count',
            'show_count'=> true,
            'title_li' => ''
        )); ?>

        <h2>Archives</h2>

         <!-- Recent Posts Loop -->
         <?php
        $args = array( 
            'post_type' => 'post', 
            'order' => 'ASC',
            'numberposts' => 5
            );
        $product_posts = get_posts( $args ); 
        ?>

        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <h3><?php  ?></h3>
        <?php endforeach; wp_reset_postdata(); ?>

        <p>Try looking in the monthly archives.</p>

        <select name="\"archive-dropdown\"" onchange="document.location.href=this.options[this.selectedIndex].value;">

            <option disabled selection>Select Month</option>

            <?php wp_get_archives('type=monthly&format=option'); ?>

        </select>

    </div> 

 <!-- Sidebar -->
    <?php get_sidebar();?>

</section> 
<!-- Footer -->
<?php get_footer();?>

