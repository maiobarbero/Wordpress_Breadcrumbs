<?php

// Breadcrumbs
function mwd_bootstrap_breadcrumb() {


    if (!is_front_page()) {
	
	// Link Homepage
        echo '<nav style="--bs-breadcrumb-divider: \'>\';" aria-label="breadcrumb">';
		echo '<ol class="breadcrumb">';
		echo '<li class="breadcrumb-item">';
        echo '<a href="';
        echo esc_url(home_url('/'));
        echo '">Home</a></li>';
       
        if (is_category() or is_single()){
            echo '<li class="breadcrumb-item">';
			echo the_category('&nbsp <span class="text-muted">|</span> &nbsp');
			echo '</li>';
        } 
		
		if (is_single() or is_page()){
            echo '<li class="breadcrumb-item active" aria-current="page">';
			echo the_title();
			echo '</li>';
        } 

        echo '</ol></nav>';
    }
}

?>
