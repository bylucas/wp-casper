
<footer class="post-full-footer">
    
    <section class="post-full-authors">
                    <div class="post-full-authors-content">
                        
                         <h4 class="author-card-name"><?php echo get_the_author(); ?></h4>
                        
                        <a class="social-link social-link-fb" href="https://www.linkedin.com/in/bylucas/" target="_blank" rel="noopener"><?php get_template_part('partials/icons/linkedin'); ?></a>

                    <a class="social-link social-link-fb" href="https://plus.google.com/u/1/101976360994821007127" target="_blank" rel="noopener"><?php get_template_part('partials/icons/googleplus'); ?></a>

                     <a class="social-link social-link-fb" href="https://www.behance.net/howardl" target="_blank" rel="noopener"><?php get_template_part('partials/icons/behance'); ?></a>

                   <a class="social-link social-link-fb" href="https://github.com/bylucas" target="_blank" rel="noopener"><?php get_template_part('partials/icons/github'); ?></a>
                    </div>
                    <ul class="author-list">
                        
                        <li class="author-list-item">
                            <div class="author-card">
                                <div class="basic-info"><span class="author-profile-image"><?php $author_bio_avatar_size = apply_filters( 'casper_author_bio_avatar_size', 88 ); echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size ); ?></span>
                                   <h2 class="author-card-name"><?php echo get_the_author(); ?></h2>
                                </div>
                                <div class="bio">
                                    <p><?php the_author_meta( 'description' ); ?></p>
                                    <p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">More posts</a> by <?php echo get_the_author(); ?></p>
                                   
                                </div>
                            </div>
                            
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author" class="moving-avatar"><span class="author-profile-image"><?php
        
        $author_bio_avatar_size = apply_filters( 'casper_author_bio_avatar_size', 48 );

        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
        ?></span></a>
                            
                        </li>
                        
                    </ul>
               <!--  </div> -->
            </section>
             </footer>