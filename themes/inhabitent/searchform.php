<!-- search goes here -->
<section class = 'search-form'>
<form role='search' method='get' action="<?php echo home_url('/')?>">
    <fieldset>

        <a href="#" class="search-toggle">




            <i style = 'color: $brand-green;'
            
            
            class="fas fa-search fa-1x" > </i>



        </a>

        <label>
            <input  placeholder="Type and press enter...." 
            type="search" name="s" 
            value="<?php echo esc_attr(get_search_query());?>"/>
        </label>

    </fieldset>
</form>
</section>


            
 <!-- <?php echo is_page(array('Home', 'About')) ? "do-home-and-about" : "do-something-else"  ; ?> -->