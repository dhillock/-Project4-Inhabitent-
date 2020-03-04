
<?php wp_footer();?>
<!-- We need to keep the above, beause WP uses this to load various scripts.
This needs to go as the last thing before the closing body tag -->
</body>

<footer style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/dark-wood.png;?>')">
<?php
// Display footer widget area
dynamic_sidebar('footer-info');
?>

<div class = 'footer-logo'>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg;?>" alt="Inhabitents logo">
</div>

<div class = 'footer-copyright'>
<p> COPYRIGHT © 2019 INHABITENT </p>
</div>

</footer>


</html>