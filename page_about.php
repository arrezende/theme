<?php
/*
Template Name: Page Of Posts
*/

/* This example is for a child theme of Twenty Thirteen: 
*  You'll need to adapt it the HTML structure of your own theme.
*/

?>

<?php
get_header();
?>
<?php

      $args = array( 'page_id' => 5, 'posts_per_page' => 38 );
      $loop = new WP_Query( $args );
      ?>
<section class="aboutme" id="aboutme">
    <div class='<?php echo "$slug" ?>'><a name='<?php echo "$slug" ?>'></a>
        <h2><?php echo "$title" ?></h2>
            <?php echo "$content" ?>
</div>
        <div class="container">
            <div class="heading">
                <h2><?php the_title() ?></h2>
                <p>A small introduction about my self</p>
            </div>
            <div class="row">
                <div class=" col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <?php the_content()?>
                </div>
                <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 proPic">
                    <img src='<?php wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>' class="img-circle topmar" />
                </div>
            </div>
        </div>
        
    </section>
    <!--about me end-->

    <?php get_footer(); ?>
