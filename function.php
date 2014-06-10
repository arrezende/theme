<?php

//Desabilita a barra de admin
add_filter('show_admin_bar', '__return_false');

//habilita a seção de menus no tema
register_nav_menus( array(
	'primary' => __('Navegar primaria', 'theme') //theme é o nome do template
));

/*
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' =&gt; 'sidebar',
	'before_widget' =&gt; '&lt;div class="sidebar-box"&gt;',
	'after_widget' =&gt; '&lt;/div&gt;',
	'before_title' =&gt; '&lt;h2&gt;',
	'after_title' =&gt; '&lt;/h2&gt;',
));

// Tornar o template disponível para tradução
// A tradução pode ser feita em /languages/
load_theme_textdomain( 'your-theme', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
   require_once($locale_file);
 
// Puxar o número de página
function get_page_number() {
          if ( get_query_var('paged') ) {
              print ' | ' . __( 'Page ' , 'seu-template') . get_query_var('paged');
         }
 } // end get_page_number

 if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'before_widget' => '
<ul>
    <li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>
</ul>
',
'before_title' => '
<h2 class="widgettitle">',
'after_title' => '</h2>
',
));
*/
?>