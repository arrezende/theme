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

      $args = array( 'post_type' => 'portifolio', 'posts_per_page' => 38 );
      $loop = new WP_Query( $args );
      ?>

      <section class="aboutme" id="aboutme">
    <div class='<?php echo "$slug" ?>'><a name='<?php echo "$slug" ?>'></a>
        <h2><?php echo "$title" ?></h2>
            <?php echo "$content" ?>
</div>
        <div class="container">
            <div class="heading">
                <h2>the_title();</h2>
                <p>A small introduction about my self</p>
            </div>
            <div class="row">
                <div class=" col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <h3>Jonathan Doe</h3>
                    <h4 class="subHeading">Webdesigner & Web Developer from Melbourne</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.  cillum dolore eu fugiat nulla pariatur. olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    
                     <p>nulla pariatur.uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                     
                     <a href="#" class="bntDownload">Download Printable Resume</a>
                </div>
                <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 proPic">
                    <img src="images/me.jpg" alt="" class="img-circle topmar" />
                </div>
            </div>
        </div>
        
    </section>
    <!--about me end-->
    
 <?php
                          while ( $loop->have_posts() ) : $loop->the_post();

                          		the_title();
                            echo '<li><a href="#">';
                            if ( has_post_thumbnail() ) {
                            // mostra a imagem destacada
                            echo "<img src='".wp_get_attachment_url( get_post_thumbnail_id($post->ID) )."' />";
                            } else {
                            // mostra outra coisa (imagem, texto, etc.)
                            }
                            echo '</a></li>';
                          endwhile;

                        ?>





