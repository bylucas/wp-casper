<div class="floating-header">
    <div class="floating-header-logo">
         <?php
            // Display the Custom Logo
            the_custom_logo();
            // No Custom Logo, just display the site's name
            if (!has_custom_logo()) { ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <?php } ?>
    </div>
    <span class="floating-header-divider">&mdash;</span>
    <div class="floating-header-title">

         <?php the_title(); ?>
            

        </div>
    



    <div class="floating-header-share">
        <div class="floating-header-share-label">Share this <?php get_template_part('partials/icons/point'); ?></div>
        <a class="floating-header-share-tw" href="https://twitter.com/share?text={{encode title}}&amp;url={{url absolute="true"}}"
            onclick="window.open(this.href, 'share-twitter', 'width=550,height=235');return false;">
            <?php get_template_part('partials/icons/twitter'); ?>
        </a>
        <a class="floating-header-share-fb" href="https://www.facebook.com/sharer/sharer.php?u={{url absolute="true"}}"
            onclick="window.open(this.href, 'share-facebook','width=580,height=296');return false;">
            <?php get_template_part('partials/icons/facebook'); ?>
        </a>
    </div>
    <progress class="progress" value="0">
        <div class="progress-container">
            <span class="progress-bar"></span>
        </div>
    </progress>
</div>
