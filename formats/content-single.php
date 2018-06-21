<?php
/**
 * The post content file
 *
 * @package WordPress
 * @since casper 1.0
 */ ?>

        <article class="post-full">

            <header class="post-full-header">
                <section class="post-full-meta">
                    <?php post_meta(); ?>
                    
                </section>
                
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
            
            the_content();

         //casper_page_links(); ?>

<div class="post-end"><?php get_template_part('partials/icons/infinity'); ?></div>
</div><!-- kg-card-markdown -->
</section>


<?php get_template_part('partials/author-bio'); ?>


 <?php // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif; ?>

            

        </article>

