<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

<?php
// $template = get_stylesheet_directory_uri();
// $template = get_template_directory_uri();
// echo $template;
?>

<header>
        <div class ='logo-tent'>
            <a href="<?php echo get_home_url(); ?>">
            <img class = "tent" src="
            <?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg;?>"
            alt="Inhabitents Tent Logo"></a>
        </div>

        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main'));?>
        </nav>

        <div class = 'icon-search'>
            <!-- <i style="width: 50px; height: 33px;" class="fas fa-search fa-1x"> </i> -->
            <i class="fas fa-search fa-1x"> </i>
        </div>

</header>


