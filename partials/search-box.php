<?php
 // =======================
 // Searchform
 // =======================
 
?>
    <div class="search-inner">
    <div class="container">
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
            <div>
                <label for="s">Search howardlucas.io...</label>
                <input type="text" id="s" name="s" onkeyup="fetch()" autocomplete="off" placeholder="" />

                <input type="submit" id="searchsubmit" value="search" />
                
            </div>
        </form>
       
    </div>
</div>