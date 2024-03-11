<?php
	$categories = get_categories([
        'orderby' => 'name',
        'order'   => 'ASC'
    ]);
    
    foreach( $categories as $category ) {
     echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';   
    } 
    
