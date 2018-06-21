<footer class="site-footer outer" role="contentinfo">

            <div class="back-to-top"></div>
            <div class="site-footer-content inner">
                <section class="copyright">
				 <?php do_action( 'casper_credits' ); ?>
                	

                	 <?php echo date('Y'); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a></section>
                
<?php get_template_part('partials/footer-menu'); ?>

            </div>
        </footer>
        
        

    </div>
    <?php get_template_part('partials/subscribe'); ?>
    
    <?php wp_footer(); ?>

    
   
</body>
</html>
