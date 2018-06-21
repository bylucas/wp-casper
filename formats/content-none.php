
 <article class="post-full">

  <header class="outer not-found">
     <section class="error-message">
                    <h1 class="error-code"><?php _e( 'Oops!', 'casper' ); ?></h1>
                    <p class="error-description">
                     <?php _e( 'Sorry! article not found', 'casper' ); ?></p>
                    <a class="error-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Go to the front page →</a>
                </section>
  </header>          
       <section class="post-not-found">
            <div class="inner">  
                   <?php get_search_form(); ?>
        
            </div>
        </section>

        <aside class="outer">
            <div class="inner">
                <div class="post-feed">
                     <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=3');?>

                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                     <?php get_template_part( 'formats/content', 'index' ); ?>
                      <?php endwhile; ?>
                </div>
            </div>
        </aside>

</article>
