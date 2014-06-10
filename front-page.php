

<?php
get_header();
// define how pages will display
get_template_part( 'page', 'about' );

$args = array( 'post_type' => 'Portifólio', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
	the_title();
	echo '<div class="entry-content">';
	the_content();
	echo '</div>';
endwhile;

get_footer();
?>