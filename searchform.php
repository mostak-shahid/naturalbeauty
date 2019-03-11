<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group mb-3">
    	<input name="s" type="search" class="form-control border-light" placeholder="<?php if(get_search_query()) echo 'Search result for ' . get_search_query(); else echo 'Search for...' ?>">
    	<div class="input-group-append">
    		<button class="btn border-light" type="submit"><i class="fa fa-search"></i></button>
    	</div>
    </div>
</form>