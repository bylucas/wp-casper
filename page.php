<?php
/**
 * The page template file
 *
 * @package WordPress
 * @since casper 1.0
 */

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
            </section>
        </article>

    </div>
</main>

<?php get_footer(); ?>
