<!-- search goes here -->
<form role='search' method='get' action="<?php echo home_url('/')?>">
    <fieldset>
        <a href="#" class="search-toggle">
        <i class="fas fa-search fa-1x" > </i>
        </a>
        <label>
            <input placeholder="Type and press enter" 
            type="search" name="s" 
            value="<?php echo esc_attr(get_search_query());?>"/>
        </label>

    </fieldset>
</form>