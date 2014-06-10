<?php



//Desabilita a barra de admin

add_filter('show_admin_bar', '__return_false');



//habilita a seção de menus no tema

register_nav_menus( array(

	'primary' => __('Navegar primaria', 'theme') //theme é o nome do template

));

//Cria uma seção "portifolio" no adm
add_action( 'init', 'create_post_type_film' );
function create_post_type_film() {
    register_post_type( 'portifolio',
        array(
            'labels' => array(
                'name' => _x('Portifólio', 'post type general name'),
                'singular_name' => _x('Portifólio', 'post type singular name'),
                'add_new' => _x('Add Novo', 'Portifólio'),
                'add_new_item' => __('Add Novo Portifólio'),
                'edit_item' => __('Editar Portifólio'),
                'new_item' => __('Novo Portifólio'),
                'all_items' => __('Todos os itens'),
                'view_item' => __('Veja a peça'),
                'search_items' => __('Procure pelo Item'),
                'not_found' =>  __('Nenhuma peça encontrada'),
                'not_found_in_trash' => __('Nenhuma peça encontrada no lixo'),
                'parent_item_colon' => '',
                'menu_name' => 'Portifólio'
            ),
            'public' => true,
            'rewrite' => array('slug' => 'portifolio'),
            'supports' => array('title','thumbnail','revisions')
        )
    );
}

//Habilita a utilização de imagem destacada
add_theme_support('post-thumbnails');
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