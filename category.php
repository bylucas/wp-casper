<?php

 // The template for displaying excerpts on the category page
?>

    <?php get_header(); ?>

   <?php if ( have_posts() ) : ?>

<header class="site-header outer" style="background-image: url(<?php echo casper_tax_pic_url(); ?>)">


 <div id="masthead" class="active-header"> 
     <div class="inner">       
       
      <?php get_template_part('partials/site-nav'); ?>

</div><!-- inner -->
</div><!-- active-header -->
      <?php get_template_part('partials/fullscreen-overlay'); ?>
     <div class="inner"> 
        <div class="site-header-content">
            <h1 class="site-title">
                <?php single_cat_title( '', true ); ?>
               </h1>
              <?php if ( category_description() ) : ?>
                   
                <h2 class="site-description"><?php echo category_description(); ?></h2>
                    
                    <?php endif; ?>
        </div>
       
    </div>
</header>

<main id="site-main" class="site-main outer" role="main">
    <div class="inner">

        <div class="post-feed">
            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>


           
            <?php   get_template_part( 'formats/content', 'index' ); ?>

            

            <?php // End the loop.
            endwhile; ?>
        </div>
<?php else :
            get_template_part( 'formats/content', 'none' );

        endif; ?>
    </div>
</main>

 <?php get_footer(); ?>
