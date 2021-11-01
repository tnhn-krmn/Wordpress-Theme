<?php


function stuka_setup()
{

    register_nav_menu('anamenu',__('Ana Menü','stuka'));
    register_nav_menu('footermenu',__('Footer Menü','stuka'));
    register_nav_menu('mobilmenu',__('Mobil Menü','stuka'));

    add_theme_support('title-tag');
    add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(600,250,true);


}

add_action('after_setup_theme','stuka_setup');






/**
 * Dequeue the jQuery UI script.
 *
 * Hooked to the wp_print_scripts action, with a late priority (100),
 * so that it is after the script was enqueued.
 */
function wpdocs_dequeue_script() {
    
    wp_dequeue_script('jquery-core-js');
    wp_dequeue_script('jquery-migrate-js');
}
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );


function stuka_cagiralacak_dosyalar()
{



    wp_enqueue_style('bootstrap',get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome1',get_template_directory_uri() . '/inc/fontawesome/css/fa-solid.min.css');
    wp_enqueue_style('fontawesome2',get_template_directory_uri() . '/inc/fontawesome/css/fontawesome-all.min.css');
    wp_enqueue_style('owl1',get_template_directory_uri() . '/inc/owl-carousel/dist/assets/owl.carousel.css');
	wp_enqueue_style('owl3',get_template_directory_uri() . '/inc/owl-carousel/dist/assets/owl.theme.green.css');
    wp_enqueue_style('owl2','https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=latin-ext');
    wp_enqueue_style('googlefonts','https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=latin-ext');
    wp_enqueue_style('stuka-style',get_stylesheet_uri());
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');


    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/inc/jquery/jquery-3.3.1.min.js', array(),'1.0.0',true);
    wp_enqueue_script('owl3', get_template_directory_uri() . '/inc/owl-carousel/owl.carousel.min.js', array(),'1.0.0',true);
    wp_enqueue_script('bootstrap2', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js', array(),'1.0.0',true);
    wp_enqueue_script('stuka_scripts', get_template_directory_uri() . '/inc/scripts.js', array(),'1.0.0',true);




}

add_action('wp_enqueue_scripts','stuka_cagiralacak_dosyalar');

#function jquery()
#{
#    //echo '<script  type="text/javascript"src="' . get_template_directory_uri() .'/inc/jquery/jquery-3.3.1.min.js"></script>';
#}
#add_action('wp_head', 'jquery');




/*acf*/
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/inc/acf/';
    return $path;
}


add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';
    return $dir;
    
}

//add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Ayarları',
		'menu_title'	=> 'Site Ayarları',
		'menu_slug' 	=> 'site-ayarlari',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));
	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ana Sayfa Ayarları',
		'menu_title'	=> 'Ana Sayfa Ayarları',
		'menu_slug' 	=> 'anasayfa-ayarlari',
		'parent_slug'	=> 'site-ayarlari',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));
	
	
}



/*tipler ve taksonomiler*/
add_action( 'init', 'icerik_tipi' );
function icerik_tipi() {
	
	$labels = array(
		"name" => __( 'Hizmetler', 'stuka' ),
		"singular_name" => __( 'hizmet', 'stuka' ),
		"menu_name" => __( 'Hizmetler', 'stuka' ),
		"all_items" => __( 'Tüm Hizmetler', 'stuka' ),
		"add_new" => __( 'Yeni Hizmet Ekle', 'stuka' ),
		"add_new_item" => __( 'Yeni Hizmet Ekle', 'stuka' ),
		"edit_item" => __( 'Düzenle', 'stuka' ),
		"new_item" => __( 'Yeni Hizmet Ekle', 'stuka' ),
		"view_item" => __( 'Hizmeti Gör', 'stuka' ),
		"search_items" => __( 'Hizmet Ara', 'stuka' ),
		"not_found" => __( 'Hizmet Bulunamadı', 'stuka' ),
		"not_found_in_trash" => __( 'Çöpte Bulunamadı', 'stuka' ),
		);

	$args = array(
		"label" => __( 'Hizmetler', 'stuka' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "hizmet", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 3,"menu_icon" => "dashicons-clipboard",		
		"supports" => array( "title", "editor", "thumbnail", "comments" ),			
	);
	register_post_type( "hizmet", $args );





	$labels = array(
		"name" => __( 'Referanslar', 'stuka' ),
		"singular_name" => __( 'referans', 'stuka' ),
		"menu_name" => __( 'Referanslar', 'stuka' ),
		"all_items" => __( 'Tüm Referanslar', 'stuka' ),
		"add_new" => __( 'Yeni Referanslar Ekle', 'stuka' ),
		"add_new_item" => __( 'Yeni Referanslar Ekle', 'stuka' ),
		"edit_item" => __( 'Düzenle', 'stuka' ),
		"new_item" => __( 'Yeni Referanslar Ekle', 'stuka' ),
		"view_item" => __( 'Referansı Gör', 'stuka' ),
		"search_items" => __( 'Referans Ara', 'stuka' ),
		"not_found" => __( 'Referans Bulunamadı', 'stuka' ),
		"not_found_in_trash" => __( 'Çöpte Bulunamadı', 'stuka' ),
		);

	$args = array(
		"label" => __( 'Referanslar', 'stuka' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "referans", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 3,"menu_icon" => "dashicons-clipboard",		
		"supports" => array( "title", "editor", "thumbnail", "comments" ),			
	);
	register_post_type( "referans", $args );







	
	$labels = array(
		"name" => __( 'Referanslar', 'stuka' ),
		"singular_name" => __( 'referans', 'stuka' ),
		"menu_name" => __( 'Referanslar', 'stuka' ),
		"all_items" => __( 'Tüm Referanslar', 'stuka' ),
		"add_new" => __( 'Yeni Referans Ekle', 'stuka' ),
		"add_new_item" => __( 'Yeni Referans Ekle', 'stuka' ),
		"edit_item" => __( 'Düzenle', 'stuka' ),
		"new_item" => __( 'Yeni Referans Ekle', 'stuka' ),
		"view_item" => __( 'Referansı Gör', 'stuka' ),
		"search_items" => __( 'Referans Ara', 'stuka' ),
		"not_found" => __( 'Referans Bulunamadı', 'stuka' ),
		"not_found_in_trash" => __( 'Çöpte Bulunamadı', 'stuka' ),
		);

	$args = array(
		"label" => __( 'Referanslar', 'stuka' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "referans", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 3,"menu_icon" => "dashicons-clipboard",		
		"supports" => array( "title", "editor", "thumbnail", "comments" ),			
	);
	register_post_type( "referans", $args );


} 


/* özel özet */ 

function ozel_ozet($length)
{
    return 25;

}

add_filter('excerpt_length','ozel_ozet',999);


function ozel_ozet_buton($more)
{
    global $post;
    return('<div class="clearfix"></div><a href="'.get_permalink($post->ID).'" class="buton acik-mavi-buton">Devamı</a>');
}

add_filter('excerpt_more','ozel_ozet_buton');