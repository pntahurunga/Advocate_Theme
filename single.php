<?php 
get_header(); 
if(have_posts()):
    while(have_posts()): the_post(); ?>

    <div class="container">
        <div class="blog-single">
            <div class="blog-content">
                
                <div>
                    <?php  the_post_thumbnail('banner-image') ?>
                </div>
                
                <div class="blog-content-text">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_content(); ?>
                    <div class="blog-content-meta">
                    <h3 class="author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a></h3>
                    <span><?php the_time('F jS, Y');?></span>
                </div>
                </div>
                
                
            </div>
            <div class="blog-side">
                <div>
                    <?php  the_post_thumbnail('x-small-thumbnail') ?>
                
                <div>
                <div class="side-bloc">
                     <h3>Recently Posted</h3>
                    <div class="recent-post-imgs">
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 12, 
                                'post_status' => 'publish',
                                'meta_value' => '', 
                                'order'=> 'DESC',
                                'include' => '',
                                'exclude' => '',
                                'meta_key' => '',
                                'meta_value' => '',
                                'post_type' => 'post',
                                'post_status' => 'draft, publish, future, pending, private',
                                'suppress_filters' => true,
                            ));
                            
                            foreach($recent_posts as $post) : ?>
                            
                            <div class="recent-image">
                                    <a href="<?php the_permalink($post['ID']) ?>"><?php echo get_the_post_thumbnail($post['ID'], 'xx-small-thumbnail'); ?></a>
                                
                            </div>
                                
                            <?php endforeach; wp_reset_query(); ?>
                    </div>
                </div>
                    
                </div>
                <div>
                <div class="side-bloc">
                    <h3>Featured in local news</h3>
                    <div class="scripps_iframe_embed " style="position:relative;"><div style="display:block;width:100%;height:auto;padding-bottom:56.25%;"></div><iframe style="position:absolute;top:0;left:0;width:100%; height:100%;" border="0" height="100%" frameborder="0" webkitallowfullscreen="" allowfullscreen="" mozallowfullscreen="" scrolling="no" scrolling="no" src="https://assets.scrippsdigital.com/cms/videoIframe.html?&vpost=https://x-default-stgec.uplynk.com/ausc/slices/9bd/b2c1c5c2af374f52af57ddcae54c6663/9bd7c2df8d0f45c2996163896da844b1/poster_9664120c3f66423a9bf6b14e399b9557.jpg&host=www.news5cleveland.com&title=A%20local%20refugee%20gives%20back%20to%20others%20in%20need&m3u8=https://content.uplynk.com/9bd7c2df8d0f45c2996163896da844b1.m3u8&purl=/news/e-team/cleveland-state-student-helps-refugees-from-africa-transition-for-life-in-the-states&story=0&ex=1&s=wews"></iframe></div>
                </div>
                    
                    
                </div>
                
            </div>
            
        </div>
    </div>
    </div>

<?php endwhile;
    else:
        echo '<p>No content found</p>'; 
    endif;
    
?>




<?php 
    get_footer(); 
?>