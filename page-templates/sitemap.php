<?php
//Template Name: Sitemap
//
// I find these sitemaps more useful than the main menu sometimes. Don't forget to use a plugin to make and submit to search engines a sitemap.xml file
// ========================================
// To show all pages, categories and posts
// ========================================


get_header(); ?>

<header class="site-header outer">


 <div id="masthead" class="active-header"> 
     <div class="inner">       
       
        <?php get_template_part('partials/site-nav'); ?>

</div><!-- inner -->
</div><!-- active-header -->
      <?php get_template_part('partials/fullscreen-overlay'); ?>
</header>
        
<main id="site-main" class="site-main outer" role="main">
    <div class="inner">

        <article class="post-full">

            <header class="post-full-header">
               
                 <?php the_title( '<h1 class="post-full-title">', '</h1>' ); ?>
            </header>

            <?php if ( has_post_thumbnail() ) {
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>

            <figure class="post-full-image" style="background-image: url(<?php echo esc_url( $src[0] ); ?>)">
            </figure>
            <?php } else { ?>

             <figure class="no-image">
            </figure>
            <?php } ?>
            

            <section class="post-full-content">
              <div class="kg-card-markdown">
               <?php
             while ( have_posts() ) : the_post();   
            the_content();

         //casper_page_links(); ?>
             </div><!-- kg-card-markdown -->
              <?php // End the loop.
            endwhile; ?>
              <div class="sitemap-body">
                        <div class="sitemap-col">

                            <h3><?php _e('Pages', 'casper'); ?></h3>

                            <ul>

                                <?php wp_list_pages('title_li='); ?>

                            </ul>
                            <!-- end page-ul -->

                            <h3><?php _e('# Tags', 'casper'); ?></h3>

                            <ul class="page-ul">

                                <?php wp_list_categories('title_li='); ?>

                            </ul>
                            <!-- end page-ul -->

                        </div>
                        <!-- end site_left -->


                        <div class="sitemap-col">

                            <h3><?php _e('Articles', 'casper'); ?></h3>

                            <ul>

                                <?php $recentPosts = new WP_Query();
                        $recentPosts->query('showposts=1000&cat=-8'); ?>

                                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                                        <li>
                                            <?php echo get_post_meta($post->ID, 'top-title', true); ?><span>&nbsp;</span>
                                                <a href="<?php the_permalink() ?>" rel="bookmark">
                                                    <?php the_title(); ?>
                                                </a>
                                        </li>

                                        <?php endwhile; ?>

                            </ul>
                            <!-- end page-ul -->

                        </div>
                        <!-- end site_right -->
                </div>
                    <!-- end sitemap-body -->
                </section>
            </section>
        </article>

    </div>
</main>

<?php get_footer(); ?>
