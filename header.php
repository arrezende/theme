<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="pt-br"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="pt-br"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="pt-br"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="pt-br"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php bloginfo('name');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'url' ) ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />


<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css' />
<!--font-family: 'Open Sans', sans-serif;-->

<!-- font css style-->
<link rel="stylesheet" href="<?php bloginfo( 'url' ) ?>/css/font-awesome.css" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!--wrapper start-->
<div class="wrapper" id="wrapper">
	 <?php
      $args = array( 'post_type' => 'portifolio', 'posts_per_page' => 38 );
      $loop = new WP_Query( $args );
      ?>
   
    <header>
        <!--banner start-->
        <div class="banner row" id="banner">
            <?php if (has_post_thumbnail() <= 37){ ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
            <?php }else{ ?> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd">
            <?php } ?>
                <!--slider start-->
                <div id="ri-grid" class="ri-grid ri-grid-size-2"> <img class="ri-loading-image" src="<?php bloginfo( 'template_directory' ); ?>/images/loading.gif" />
                    <ul class="cb-slideshow">
                        <?php
                          while ( $loop->have_posts() ) : $loop->the_post();


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
                    </ul>
                </div>
                <!--slider end-->
            </div>
        </div>
        <!--banner end-->
        
        <div class="bannerText container">
        	<h1><?php bloginfo( 'name' ); ?></h1>
            <h2><?php bloginfo( 'description'); ?></h2>
        </div>
        
        <!--menu start-->
        <div class="menu">
            <div class="navbar-wrapper">
                <div class="container">
                  <div class="navwrapper">
                    <div class="navbar navbar-inverse navbar-static-top">
                      <div class="container">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#">Menu</a>
                        </div>
                        <div class="navbar-collapse collapse">
                          <?php  wp_nav_menu(array(
                            'menu' => 'Menu',
                            'container' => 'false',
                            'menu_class' => 'nav navbar-nav',
                            'depth' => '1'
                          ));?>
                        </div>
                      </div>
                    </div> 
                  </div><!-- End Navbar -->
              </div>
            </div>
        </div>
        <!--menu end-->
        
    </header>
    