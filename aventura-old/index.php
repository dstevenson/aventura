<?php get_header(); ?>   

            <div id="affiliates">
            
            
            </div>
            
            <div id="contentArea">
            	
                    <div id="caContainer">
                    
                    <div id="leftColMain">

                        <div>
                        	<h5>Building Your Vision</h5>
							<h6 style="font-weight:normal">Reliably, On-Time & Within Budget</h6>


							<p style="font-size:12px">
                            Aventura is a high caliber construction
company with diverse expertise
equipped to handle any project scope.
Our skills & computerized management
systems simplify processes so we can
provide solutions and direction. 
These differentiators enable us to 
minimize re-work and lower costs. Let 
our team of experts handle your project:    
commercial or residential, new or 
renovation. No project is too complex.</p>
                        </div>

                    </div>
                    
                    <div id="rightCol">
                    
                    	<div id="rcContainer">
                    
                    		<div id="sliderContainer">
        
                                <div id="slider" class="nivoSlider">
                                    
                                    <a href="retail.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/Market-Westchester-1-Feature-Project_1.jpg" alt="" /></a>
                                    <a href="petroleum.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/home-2-construction.jpg" alt="" /></a>
                                    <a href="retail.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/home-3-on-the-run.jpg" alt="" /></a>
									<a href="petroleum.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/home-4-gulf.jpg" alt="" /></a>
                                    <a href="commercial.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/home-5-stonehenge.jpg" alt="" /></a>
                                    <a href="petroleum.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/home-6-7eleven.jpg" alt="" /></a>
                                    <a href="retail.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/Retail-Convenience-Store-NY_1.jpg" alt="" /></a>
                                    <a href="luxury-home-construction.php"><img src="<?php echo get_template_directory_uri(); ?>/wide/home-8-luxury-home.jpg" alt="" /></a>

                                    
                                </div>
                                
                            </div>
                            
                            <div id="homeFeatured">
                            
                            	<table border="0" cellpadding="0" cellspacing="0">
                                
                                	<tr>
                                    
                                    	<td valign="top" style="width:316px;">
                                        	<h5>Spotlight</h5>
                                                
                                                <?php $my_query = new WP_Query('category_name=Featured&posts_per_page=1');

												while ($my_query->have_posts()) : $my_query->the_post();
												
												$do_not_duplicate = $post->ID; ?>
																								
												<h6 style="text-transform:none"> <?php the_title(); ?> </h6>
												
												<?php $truncateContent = truncate::doTruncate(strip_tags(get_the_content(), ''), 20, '.', $permalink); ?>
												
												<p><img src="<?php echo get_template_directory_uri(); ?>/img/spotlight.jpg" align="left" style="padding:0 3px 3px 0"/> <?php echo $truncateContent; ?> <a href="<?php the_permalink(); ?>">more &raquo;</a></p>
												
												<?php endwhile; ?>
                                         
                                        </td>
                                        <td style="width:10px;background:none;padding:0;"><!-- --></td>
                                        <td valign="top" style="width:295px;border-left:1px solid #ccc">
                                        	<h5>Recent News</h5>
                                                
                                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                
                                                        <p class="dark bold"><span class="date"><?php the_time('M Y'); ?></span><br /><a href="<?php the_permalink() ?>" class="dark bold" style="text-decoration:none"><?php the_title() ;?></a></p>	

                                                <?php endwhile; else: ?>

                                                        <p>Sorry, this page does not exist</p>

                                                <?php endif; ?>
                        
                                            <p><a href="#">all news/events &raquo;</a></p>
                                        </td>
                                    
                                    </tr>
                                
                                </table>
                            
                            </div>
                    
                    	</div>
                    
                    </div>
                
                </div>
                
            </div>
       <?php get_footer(); ?>       