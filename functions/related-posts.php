<?php /*********************
RELATED POSTS FUNCTION
*********************/

// Related Posts Function
function casper_related_posts() {
	
	global $post;
	$tags = get_the_category($post->ID);

if ($tags) {
		foreach($tags as $individual_category) $category_ids[] = $individual_category->term_id;
		
		$args = array(
			'category__in' => $category_ids,
			'numberposts' => 3,
			'post__not_in' => array($post->ID)
		);
		$the_cat = $tags;
		$category_name = $the_cat[0]->cat_name;
		$category_link = get_category_link( $the_cat[0]->cat_ID );
		
?>

<article class="read-next-card" style="background-image: url(<?php echo get_header_image(); ?>)">
     <header class="read-next-card-header">
     <small class="read-next-card-header-site-title">&mdash; More posts tagged with &mdash;</small>
                        
     	<h3 class="read-next-card-header-title"><a href="<?php echo $category_link ?>"><?php echo $category_name ?>
</a></h3>
                        
       </header>
        <div class="read-next-divider"><?php get_template_part('partials/icons/infinity'); ?></div>
           <div class="read-next-card-content">
<?php

echo '<ul>';
		$related_posts = get_posts( $args );
		if($related_posts) {
		
			foreach ( $related_posts as $post ) : setup_postdata( $post );
				 ?>
			
				<li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; }
	
	echo '</ul>'; 
?>
	</div>
  <footer class="read-next-card-footer">

<a href="<?php echo $category_link ?>">See all posts →</a>


  </footer>
    </article>
<?php

$args2 = array(
			'category__in' => $category_ids,
			'numberposts' => 2,
			'post__not_in' => array($post->ID)
		);

		$related_posts2 = get_posts( $args2 );
		if($related_posts2) {
			foreach ( $related_posts2 as $post ) : setup_postdata( $post );
				
				get_template_part( 'formats/content', 'index' );
		endforeach; }
		
  wp_reset_postdata();
	
}		
 }  /* end casper related posts function */
?>