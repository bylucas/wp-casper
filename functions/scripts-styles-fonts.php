<?php
// Scripts, Styles and Fonts
// -------------------------

// include custom jQuery
function casper_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'casper_custom_jquery');

function casper_scripts_styles() {

// Theme stylesheet.
wp_enqueue_style( 'casper-style', get_template_directory_uri() . '/assets/css/style.css', array());

// Load the main stylesheet so that styles can be added via the editor.
wp_enqueue_style( 'casper-user-style', get_stylesheet_uri() );


// comment reply script for threaded comments
if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
wp_enqueue_script( 'comment-reply' );
}
// adding scripts to the footer
// add the fitvid script to all pages
wp_enqueue_script( 'casper-fitvids', get_template_directory_uri() . '/assets/js/min/jquery.fitvids-min.js', array( 'jquery' ), '', true );
// add the code script (alteranative to google code), to all pages
wp_enqueue_script( 'casper-code', get_template_directory_uri() . '/assets/js/min/prism-min.js', array( 'jquery' ), '', true );

//add the moving header and avatar scrips to the post pages
if ( is_single() ) {
wp_enqueue_script( 'casper-post-scripts', get_template_directory_uri() . '/assets/js/min/casper-min.js', array( 'jquery' ), '', true );
}

// load the main script
wp_enqueue_script( 'casper-scripts', get_template_directory_uri() . '/assets/js/min/scripts-min.js', array( 'jquery' ), '', true );


// load the ajax search function
 wp_localize_script( 'casper-scripts', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

}

add_action('wp_enqueue_scripts', 'casper_scripts_styles');

// Global site tag (gtag.js) - Google Analytics

    function add_googleanalytics() { ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121067678-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121067678-1');
</script>


    <?php }

 add_action('wp_footer', 'add_googleanalytics');
?>