<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <?php get_template_part('partials/head-meta'); ?>
    
 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="site-wrapper">
 <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

    </div>
    <a class="skip-link hidden" href="#site-main">
            <?php _e( 'Skip to content', 'casper' ); ?>
        </a>