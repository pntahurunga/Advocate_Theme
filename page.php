<?php 
get_header(); 

if(have_posts()):
    while(have_posts()): the_post();

?>
    <div class="container">
        <div class="blog-single">
            <div class="blog-content">                
                <div class="blog-content-text">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_content(); ?>
                    <div class="blog-content-meta">
                    <h3 class="author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a></h3>
                    <span><?php the_time('F jS, Y');?></span>
                </div>
                </div>
                
                
            </div>
            
        </div>
    </div>

<?php endwhile;
    else:
        echo '<p>No content found</p>'; 
    endif;

    get_footer();
?>