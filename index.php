<?php
/**
 * The index template file
 *
 * @package WordPress
 * @since casper 1.0
 */

get_header(); ?>

 <?php if ( have_posts() ) : ?>

<header class="site-header outer" style="background-image: url(<?php echo get_header_image(); ?>)">


 <div id="masthead" class="active-header"> 
     <div class="inner">       
       
       <?php get_template_part('partials/site-nav'); ?>

</div><!-- inner -->
</div><!-- active-header -->
     <?php get_template_part('partials/fullscreen-overlay'); ?>
     
     <div class="inner">   

        <div class="site-header-content">

               <?php
            // Display the Custom Logo
            the_custom_logo();
            // No Custom Logo, just display the site's name
            if (!has_custom_logo()) { ?>
               
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></a></h1>
            <?php } ?>
               
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </div>
       
    </div>
</header>

<main id="site-main" class="site-main outer" role="main">
    <div class="inner">

        <div class="post-feed">
            <?php
      // Start the loop.
      while ( have_posts() ) : the_post(); ?>

         
        <?php get_template_part( 'formats/content', 'index' ); ?>

      <?php // End the loop.
      endwhile; ?>
        </div>

        <?php // If no content, include the "No posts found" template.
    else :
      get_template_part( 'formats/content', 'none' );

    endif;
    ?>

    </div>
</main>

<?php get_footer(); ?>