<?php
/**
 * The index template file
 *
 * @package WordPress
 * @since casper 1.0
 */

get_header(); ?>

<header class="site-header outer">
    <div class="inner">
        
        <?php get_template_part('partials/site-nav'); ?>
</div><!-- inner -->
  <?php get_template_part('partials/fullscreen-overlay'); ?>
</header>

<main id="site-main" class="site-main outer" role="main">
    <div class="inner">

         <?php while ( have_posts() ) : the_post();
            // Include the post format-specific template for the content.
            get_template_part( 'formats/content', 'single' ); ?>
       
    </div>

 <?php get_template_part('partials/aside'); ?>
<?php endwhile; ?>
</main>

 <?php get_template_part('partials/floating-header'); ?>

<?php get_footer(); ?>