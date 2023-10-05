<?php
// The Query.
$filter = new WP_Query(
	[
		'post_type' => "bread"
	]
);

// The Loop.
if ( $filter->have_posts() ) {
	echo '<ul>';
	while ( $filter->have_posts() ) {
		$filter->the_post();
		echo '<li>';
			include 'bread-card.php';
		echo '</li>';
		
	}
	echo '</ul>';
} else {
	esc_html_e( 'Sorry, no posts matched your criteria.' );
}
// Restore original Post Data.
wp_reset_postdata();