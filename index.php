<?php get_header('index'); ?> 
<section id="services" class="services">
            <div class="container">
                <h1 class="section-header--white">What we do</h1>
                <div class="cars">
                    <div class="services-card">
                        <i class="icofont-law-alt-2 icon"></i>
                        <h3 class="card-header">Advocacy</h3>
                        <div>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dicta a nostrum est culpa perferendis, laborum quisquam, at sapiente eum illo harum enim</p>
                        </div>
                    </div>
                    <div class="services-card">
                        <i class="icofont-people icon"></i>
                        <h3 class="card-header">Community outreach</h3>
                        <div>
                            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam amet laboriosam fugiat dolorum laborum porro nemo voluptatum ab maxime</p>
                        </div>
                    </div>
                    <div class="services-card">
                        <i class="icofont-graduate-alt icon"></i>
                        <h3 class="card-header">Education</h3>
                        <div>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, repellendus odio assumenda laudantium vero, unde temporibus vitae numquam</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="partners">
            <div class="partner-text">
                <h1>Our Supporters</h1>
            <p class="paragraph paragraph-sm">Creating a better world requires teamwork, partnerships, and collaboration, as we need an entire community to work together to build a better world, 
                We thank the following organizations for their support in helping to build our communities
            </p>
            </div>
            <div class="partner">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/apc.png" alt="" srcset="">
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/ECPL_rgb.png" alt="" srcset="">
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/MHCUCClogo.png" alt="" srcset="">
                </div>
            </div>
    </section>
    <section id="posts">
        <h1>Recent Posts</h1>
            <div class="container">
                <div class="post">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 6, 
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
                        <div class="post-container">
                            <?php echo get_the_post_thumbnail($post['ID'], 'small-thumbnail'); ?>
                            <div>
                                <p><i class="icofont-calendar"></i><?php the_time('F jS, Y'); ?></p>
                                <p><i class="icofont-ui-user"></i><?php the_author(); ?></p>
                                <h3 class=""><a href="<?php the_permalink($post['ID']) ?>"><?php echo $post['post_title'] ?></a></h3>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_query(); ?>
                
                </div>
                <div class="post-btn">
                    <button class="btn btn-red">See all posts</button>
                </div>
            </div>
    </section>
    <!-- <section id="video">
            <div class="scripps_iframe_embed " style="position:relative;"><div style="display:block;width:100%;height:auto;padding-bottom:56.25%;"></div><iframe style="position:absolute;top:0;left:0;width:100%; height:100%;" border="0" height="100%" frameborder="0" webkitallowfullscreen="" allowfullscreen="" mozallowfullscreen="" scrolling="no" scrolling="no" src="https://assets.scrippsdigital.com/cms/videoIframe.html?&vpost=https://x-default-stgec.uplynk.com/ausc/slices/9bd/b2c1c5c2af374f52af57ddcae54c6663/9bd7c2df8d0f45c2996163896da844b1/poster_9664120c3f66423a9bf6b14e399b9557.jpg&host=www.news5cleveland.com&title=A%20local%20refugee%20gives%20back%20to%20others%20in%20need&m3u8=https://content.uplynk.com/9bd7c2df8d0f45c2996163896da844b1.m3u8&purl=/news/e-team/cleveland-state-student-helps-refugees-from-africa-transition-for-life-in-the-states&story=0&ex=1&s=wews"></iframe></div>
    </section> -->

    <?php get_footer()?>