<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

<header>
    <div class="mast-head">

        <a href="<?php echo get_home_url();?>">
        <img class = "tent" style="width: 50px; height: 33px;" src="
        <?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg;?>" 
        alt="Inhabitents Tent Logo"></a>

        <nav class = 'menu-main'> 
            <?php wp_nav_menu(array('theme_location' => 'main')) ;?>
        </nav>
        <i class="fas fa-search fa-1x"></i>
        <!-- <?php echo get_search_form();?> -->
    </div> 

</header>


    



