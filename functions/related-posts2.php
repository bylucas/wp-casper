<?php /*********************
RELATED POSTS FUNCTION
*********************/

// Related Posts Function (call using bones_related_posts(); )
function casper_related_posts() {
    
    global $post;
    $tags = get_the_category($post->ID);
    if($tags) {
        foreach($tags as $individual_category) $category_ids[] = $individual_category->term_id;
        
        $args = array(
            'category__in' => $category_ids,
            'numberposts' => 3, /* you can change this to show more */
            'post__not_in' => array($post->ID),
            'ignore_sticky_posts'=> 1
        );
        $the_cat = $tags;
        $category_name = $the_cat[0]->cat_name;
        $category_link = get_category_link( $the_cat[0]->cat_ID ); ?>

<article class="read-next-card" style="background-image: url(<?php echo casper_tax_pic_url(); ?>)"
                >
     <header class="read-next-card-header">
     <small class="read-next-card-header-site-title">&mdash; <?php bloginfo( 'name' ); ?> &mdash;</small>
                        
        <h3 class="read-next-card-header-title"><a href="<?php echo $category_link ?>"><?php echo $category_name ?>
</a></h3>
                        
       </header>
        <div class="read-next-divider"><?php get_template_part('partials/icons/infinity'); ?></div>
           <div class="read-next-card-content">
<?php

echo '<ul>';
        $related_posts = get_posts( $args );
        if($related_posts) {
            foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
                <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; }
        else { ?>
            <?php echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'casper' ) . '</li>'; ?>
        <?php }
    
    echo '</ul>'; 
?>
    </div>
  <footer class="read-next-card-footer">
<a href="<?php echo $category_link ?>">See all <?php echo count_user_posts($category_id); ?> posts →</a>


  </footer>
    </article>
<?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=2&cat=-('$tags')');
                while ($recentPosts->have_posts()) : $recentPosts->the_post();
                get_template_part( 'formats/content', 'index' );
            
        endwhile;
        
        //else :
            //echo '<article class="post-card">' . __( 'No Related Posts Yet!', 'casper' ) . '</article>';
  wp_reset_postdata();
}   
 }  /* end casper related posts function */
?>