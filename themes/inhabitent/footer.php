//
//
<?php wp_footer();?>
// We need to keep the above, beause WP uses this to load various scripts.
// This needs to go as the last thing before the closing body tag
</body>

<footer>

<?php 
dynamic_sidebar('footer-info'); 
?>


</footer>


</html>