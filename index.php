<?php
get_header();
?>

<?php 
query_posts('post_type=page');
while(have_posts() ) : the_post();
?>
     <div id="<?php echo $post->post_name;?>"><?php the_content(); ?></div>
<?php endwhile;?>    

<?php

get_footer();
?>