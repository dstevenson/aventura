<?php get_header(); ?>

<div id="content">
        
            <?php if (have_posts()) : ?>
            
                <?php while (have_posts()) : the_post(); //BEGIN: The Loop ?>
            
            <div id="leftContent">
                
               <?php get_sidebar(); ?>
                
            </div> 
            
            <div id="rightContent">    
                    
                    <h5>News/Events</h5>
                    <div id="postFeaturedImage"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
                    <h4 style="padding-bottom: 0;"><?php the_title(); ?></h4>
                    <p style="margin-top: 0;"><?php the_date(); ?></p>
                    <?php the_content(); ?>
                    
                <?php endwhile; ?>
                    
            <?php else : ?>

                <h2>Opps... you've reached the end of the Internet. Just kidding, you probably entered the wrong address. Hit the "back" button.</h2>

            <?php endif; //END: The Loop ?>
                
                <hr></hr>
                <p><a href="<?php echo home_url(); ?>/news-and-events/">&laquo; Back to All News/Events</a></p>
            
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>

<?php get_footer(); ?> 