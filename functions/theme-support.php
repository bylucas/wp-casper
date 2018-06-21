<?php
/*********************
THEME SUPPORT
*********************/


// Adding WP Functions & Theme Support
	function casper_theme_support() {

// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

// Let WordPress manage the document title.
// By adding theme support, we declare that this theme does not use a
// hard-coded <title> tag in the document head, and expect WordPress to
// provide it for us.

	//add_theme_support( 'title-tag' );

// Allow editor style.
  	add_editor_style( 'css/editor-style.css' );

// Makes casper available for translation.
// Translations can be added to the /languages/ directory.
	load_theme_textdomain( 'casper', get_template_directory() . '/languages' );

/*
* Enable support for Post Thumbnails on posts and pages.
* Set the thumbnail sizes including related posts size
* See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
*/
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 840, 9999 );
	//add_image_size('related', 300, 9999 );// related and popular posts
	
// When using grids the content width is not usualy known so set it to the max-width or leave it out.
	if ( ! isset( $content_width ) ) {
	$content_width = 840;
}

// adding post format support
	add_theme_support( 'post-formats',
		array(
			'aside',             // no title & short
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);

// This theme uses wp_nav_menu() in three locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'casper' ),
		//'social'  => __( 'Social Links Menu', 'casper' ),
		'footer-links' => __( 'Footer Menu', 'casper' )
	) );




/*********************
OTHER ITEMS
*********************/

// Switches default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'widgets'
	) );

// Add a `hidden` class to the search form's submit button.

function casper_search_form_modify( $html ) {
	//return str_replace( 'class="search-submit"', 'class="search-submit hidden"', $html );
}
add_filter( 'get_search_form', 'casper_search_form_modify' );

// Remove the URL from the comment form
function casper_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
 }
add_filter('comment_form_default_fields','casper_disable_comment_url');

//Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 150,
		'width'       => 150,
		'flex-height' => true,
	) );

// Many times you don’t need the medium or the large size and even the thumbnail if you set your own size, so to prevent a cluttered image folder we could instruct WP to ignore them.
	
	function casper_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'casper_remove_default_image_sizes');

} //casper_theme_support

add_action( 'after_setup_theme', 'casper_theme_support' );


/************* AFTER THEME SUPPORT *****************/

/************* BODY CLASSES *****************/

// Add classes to the body to add more control
function casper_body_classes( $classes ) {

 if (is_home() ) { 
	$classes[] = 'home-template';
}
	elseif (is_category() | is_archive() | is_search() ) {

	$classes[] = 'tag-template';
}

elseif (is_author() ) {

	$classes[] = 'author-template';
}
elseif (is_page() ) {

	$classes[] = 'page-template';
}

else {
	$classes[] = 'post-template';
}
	return $classes;
}


add_filter( 'body_class', 'casper_body_classes' );


/************* CUSTOM LOGIN PAGE *****************/

// Customise the log-in page

function casper_login_css() {
	wp_enqueue_style( 'casper_login_css', get_template_directory_uri() . '/assets/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function casper_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function casper_login_title() { return get_option('blogname'); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'casper_login_css', 10 );
add_filter('login_headerurl', 'casper_login_url');
add_filter('login_headertitle', 'casper_login_title');