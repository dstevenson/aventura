<?php get_header(); ?>   

        <div id="content">
        
            <?php if (have_posts()) : ?>
            
                <?php while (have_posts()) : the_post(); //BEGIN: The Loop ?>
            
            <div id="leftContent">
                
               <img src="<?php the_field('left_column_of_page_image'); ?>"/>
               <?php the_field('left_column_of_page'); ?>
                
            </div> 
            
            <div id="rightContent">
                
                <?php if (  is_page( 2 )) { ?>
                
                    <div id="servicesPageTop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-main-bg.jpg" alt="Aventura Services" border="0" /></div>
               
                <?php } else {}  ?>
                    
                    <h5><?php the_title(); ?></h5>

                    <?php the_content(); ?>

                    <?php the_field('bottom_of_page'); ?>
                    
                <?php endwhile; ?>
                    
            <?php else : ?>

                <h2>Opps... you've reached the end of the Internet. Just kidding, you probably entered the wrong address. Hit the "back" button.</h2>

            <?php endif; //END: The Loop ?>
                
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>

<?php get_footer(); ?> 