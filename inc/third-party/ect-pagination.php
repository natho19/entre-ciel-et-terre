<?php

function ect_pagination($pages = '', $range = 2) {  
	$showitems = ($range * 2) + 1;  
	global $paged;

	if (empty($paged)) $paged = 1;

	if ($pages == '') {
		global $wp_query; 
		$pages = $wp_query->max_num_pages;
		if (!$pages) $pages = 1;		 
	}   
	
	if (1 != $pages) {
	    echo '<nav class="jellywp_pagination">';
        echo '<ul class="page-numbers">';
			
	 	if ($paged > 1) echo '<li><a class="prev page-numbers" href="' . get_pagenum_link($paged - 1) . '"><i class="jli-left-chevron"></i></a></li>';
	
		for ($i=1; $i <= $pages; $i++) {
		    if (1 != $pages && ( !($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
				echo ($paged == $i) 
                ? '<li><span aria-current="page" class="page-numbers current">' . $i . '</span></li>'
                : '<li><a class="page-numbers" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
			}
		}
		
		if ($paged < $pages) echo '<li><a class="next page-numbers" href="' . get_pagenum_link($paged + 1) . '"><i class="jli-right-chevron"></i></a></li>';
	
	 	echo '</ul>';
        echo '</nav>';
	}
}