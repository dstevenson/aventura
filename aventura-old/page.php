<?php get_header(); ?>   

            <div id="affiliates">
            
            
            </div>
            
            <div id="contentArea">
            
				
                <div id="caContainer">
                
                <?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); //BEGIN: The Loop ?>
                    
                    <div id="leftColPage">
                        <div style="width:195px">
                            <img src="<?php the_field('left_column_of_page_image'); ?>"/>
                           <p><?php the_field('left_column_of_page'); ?></p>
                        </div>

                    </div>
                    
                    <div id="rightCol"> 
                        
                        <?php if (  is_page( 2 )) { ?>
                         <div id="servicesHead"><img src="<?php echo get_template_directory_uri(); ?>/img/services-main-bg.jpg" alt="Aventura Services" border="0" /></div>
                         
                         <?php } else {}  ?>

                    	<div id="rcContainer" class="maint">
                
                            <div id="rightContent">
                               
                            	<h5><?php the_title(); ?></h5>
   
                                <p><?php the_content(); ?></p>
							
	                        </div>
                            
                            <div id="aboutNav">
                                <?php the_field('bottom_of_page'); ?>
                            </div>                    
                    	</div>
                    
                    	<?php endwhile; ?>		
			
		<?php else : ?>

			<h2>No posts were found :(</h2>

	<?php endif; //END: The Loop ?>
                    
                    </div>
                
                </div>
                
            </div>

<?php get_footer(); ?>      