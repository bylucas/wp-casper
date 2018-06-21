
    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    
        <?php  if ( has_post_thumbnail() ) {
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' ); ?>

        <a class="post-card-image-link" href="<?php the_permalink() ?>">
            <div class="post-card-image" style="background-image: url(<?php echo esc_url( $src[0] ); ?>)"></div>
        </a>

         <?php } else { ?>

          <a class="post-card-image-link" href="<?php the_permalink() ?>">
            <div class="post-card-image" style="background-image: url(<?php echo get_header_image(); ?>)"></div>
        </a>
    <?php } ?>

    <div class="post-card-content">
        <div class="post-card-content-link">
            <header class="post-card-header">
                
                    <?php theme_tags(); ?>
                <div class="post-card-spacer"></div>
                 <?php
        
        the_title( '<h2 class="post-card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        ?>
            </header>
            <section class="post-card-excerpt">
               <p><?php echo casper_excerpt(); ?></p>
            </section>
        </div>
        <footer class="post-card-meta">
        <?php if (! is_author() ) { ?>
            
            <ul class="author-list">
            
                <li class="author-list-item">

                    <div class="author-name-tooltip">
                        <?php echo get_the_author(); ?>
                    </div>
                        <a class="profile-image-wrapper" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> <?php
        
        $author_bio_avatar_size = apply_filters( 'casper_author_bio_avatar_size', 28 );

        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
        ?></a>
                    
                </li>
           
            </ul>
    <?php } ?>
            <span class="reading-time"><span class="reading-number"><?php echo get_post_meta($post->ID, 'mm_reading_time', true); ?></span> read</span>

        </footer>
    </div>
</article>