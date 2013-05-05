<?php
/*
Template Name: News
*/
get_header(); ?>

        <div id="content">
            
        <div id="leftContent">
                <?php the_field('left_column_of_page'); ?>        
            </div> 
            
            <div id="rightContent">

                <?php the_post(); ?>
                
		<h5><?php the_title(); ?></h5>
                
                <?php query_posts( $args ); while ( have_posts() ) : the_post(); ?>
                
                <div id="newsPost">
                    
                    <?php the_date() ;?><br> 
                    <a href="<?php the_permalink() ?>" class="postTitle" style="text-decoration:none"><?php the_title() ;?></a>
                    <div id="newsExcerpt"><?php the_excerpt(); ?></div> 

                    <div id="newsThumbnail"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('small'); } ?></div> 
                    
                </div>
                
                <div style="clear:both;"></div>
                
                <hr style="margin-top: 10px; margin-bottom: 15px;"></hr>
                
                <?php endwhile; wp_reset_query(); ?>
                
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>