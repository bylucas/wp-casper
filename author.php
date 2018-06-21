<?php

 // The template for displaying author information and post excerpts
?>

    <?php get_header(); ?>

   <?php if ( have_posts() ) : ?>

    <?php $authorImage = get_the_author_meta('image', $authorID); ?>

<header class="site-header outer" style="background-image: url(<?php echo $authorImage; ?>)">


 <div id="masthead" class="active-header"> 
     <div class="inner">       
       
      <?php get_template_part('partials/site-nav'); ?>

</div><!-- inner -->
</div><!-- active-header -->
      <?php get_template_part('partials/fullscreen-overlay'); ?>
     <div class="inner"> 
        
        <div class="site-header-content">
            
                <figure class="author-profile-image">
                 <?php
                
                $author_bio_avatar_size = apply_filters( 'casper_author_bio_avatar_size', 100 );
                echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size ); ?>
              </figure>
           
            <h1 class="site-title"><?php echo get_the_author(); ?></h1>
            
                <h2 class="author-bio"><?php the_author_meta( 'description' ); ?></h2>
            
            <div class="author-meta">
                
                    <div class="author-location"><?php get_template_part('partials/icons/location-main'); ?><?php the_author_meta( 'area_profile' ); ?> <span class="bull">&bull;</span></div>
                
                <div class="author-stats"><?php get_template_part('partials/icons/post-stats'); ?><?php echo count_user_posts($author_id); ?>
                </div>
            </div>
        </div>
    </div>
</header>

 

<main id="site-main" class="site-main outer" role="main">
    <div class="inner">
 
        <div class="post-feed">

          <?php get_template_part('partials/author-portfolio'); ?>

           <?php
      // Start the loop.
      while ( have_posts() ) : the_post(); ?>

         
        <?php get_template_part( 'formats/content', 'index' ); ?>

      <?php // End the loop.
      endwhile; ?>
        </div>

    </div>
<?php endif ?>
</main>

<?php get_footer(); ?>