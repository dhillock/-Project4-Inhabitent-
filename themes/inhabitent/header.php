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
            
            <a class = 'tent' href="<?php echo get_home_url(); ?>">

                <img class = "tent" 
                src=
                "
                
                <?php 

                echo is_page(array('Home', 'About')) ? 
                get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-tent-white.svg' :  
                get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-tent.svg' ;          
                
                ?>
                "
                >
            
            </a>


        <nav>
 
            <div class = "<?php echo is_page(array('Home', 'About')) ? 'menu-white' : 'menu-green' ;?>">
                <?php wp_nav_menu(array('theme_location' => 'main'));?>
            </div>
            
            <div class = 'header-search'>
                <?php get_search_form();?>
            </div>
            
        </nav>
        

</header>


