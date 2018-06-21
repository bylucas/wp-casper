 <?php //Theme Mets

 function theme_tags() {
  if (! is_category() ) {
 $categories_list = get_the_category_list(_x( '# ', 'Used between list items, there is a space after the comma.', 'casper' ));
    if ( $categories_list ) {
      printf( '<span class="post-card-tags"><span class="hidden">%1$s </span># %2$s</span>',
        _x( 'Tagged with', 'Used before category names.', 'casper' ),
        $categories_list
      );
    }
}
}

function post_meta() {

    // if ( is_sticky() ) {
    // printf( '<span class="feature"><span class="hidden">%s</span></span>', __( 'Featured', 'casper' ) );
    // }
    if ( 'post' === get_post_type() ) {
    $time_string = '<time class="post-full-meta-date" datetime="%1$s">%2$s</time><span class="date-divider">/</span>';
    $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    get_the_date() );
    printf( '<span class="hidden">%1$s</span> %3$s',
    _x( 'Posted on', 'casper' ),
    esc_url( get_permalink() ),
    $time_string
    );
    }
    
     $categories_list = get_the_category_list(_x( ' # ', 'Used between list items, there is a space before and after the hash.', 'casper' ));
    if ( $categories_list ) {
      printf( '<span><span class="hidden">%1$s </span># %2$s</span>',
        _x( 'Tagged with', 'Used before category names.', 'casper' ),
        $categories_list
        
      );
    }
    
    edit_post_link( __( 'Edit', 'casper' ), '<span class="date-divider">/</span><span class="edit-link"> ', '</span>' );
}

/************* EXCERPT *****************/

/**
 * Replaces "[...]" (appended to automatically and user generated excerpts) with ... and a 'Continue reading' link.
 *
 * @since casper 1.0
 *
 * casper_excerpt_more combined below for automatic and user generated excerpts
 */
function casper_excerpt_more( $more ) {
  
  return ' ';
}

function casper_excerpt_length($length) {
  return 25;
}

function casper_global_excerpt($output) {
  global $post;

  return $output . sprintf( ' &hellip; <a href="%1$s" class="more-link">%2$s</a>',
    esc_url( get_permalink( get_the_ID() ) ),
    /* translators: %s: Name of current post */
    sprintf( __( 'read more %s', 'casper' ), '<span class="hidden">' . get_the_title( get_the_ID() ) . '</span>' )
    );
}

function casper_excerpt() {
  
  add_filter( 'excerpt_more', 'casper_excerpt_more' );
  add_filter( 'excerpt_length', 'casper_excerpt_length' );
  add_filter( 'the_excerpt', 'casper_global_excerpt' );
  return the_excerpt();
}

// To keep the excerpt_more as part of the exerpt take away the auto <p> wordpress generates
// use <p><?php echo casper_excerpt(); </p> - in your template
// To separate the excerpt more from the excerpt, comment out the line below and leave the <p> off the excerpt - <?php echo casper_excerpt(); - in your template

 remove_filter('the_excerpt', 'wpautop');