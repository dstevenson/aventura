<?php get_header(); ?>   

        <div id="content">
        
            <div id="leftContent">
                
                <div id="leftContentMain">
                    <h4>Building Your Vision</h4>
                    <p class="pMain">Reliably, On-Time & Within Budget</p>
                    <p class="pMain">Aventura is a high caliber construction company with diverse expertise equipped to handle any project scope. Our skills & computerized management systems simplify processes so we can provide solutions and direction. These differentiators enable us to minimize re-work and lower costs. Let our team of experts handle your project: commercial or residential, new or renovation. No project is too complex.</p>
                </div> 
                
            </div> 
            
            <div id="rightContent">
                <div id="slides">
                <?php


                    $dir = new DirectoryIterator(dirname(realpath(__FILE__)).'/../../uploads/projects/main-page-featured/');

                    /**
                     * @var $fileinfo SplFileInfo
                     */
                    foreach ($dir as $fileinfo) {
                        if ($fileinfo->isFile()) {
                            echo '<img src="wp-content/uploads/projects/main-page-featured/'.$fileinfo->getFilename().'" border="0" />';
                        }
                    }
                ?>
                </div>

                <div id="rightContentMain">

                    <div id="mainSpotLight">
                        <h5>Spotlight</h5>

                        <?php $spotlight_query = new WP_Query('category_name=Featured&posts_per_page=1');

                        while ($spotlight_query->have_posts()) : $spotlight_query->the_post();

                        $do_not_duplicate = $post->ID; ?>

                        <p class="dark bold"><?php the_title(); ?></p>

                        <?php $truncateContent = truncate::doTruncate(strip_tags(get_the_content(), ''), 20, '.', $permalink); ?>

                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('spotlight'); } ?>
                        <p style="padding: 0; margin-top: 5px;"><?php echo $truncateContent; ?> <a href="<?php the_permalink(); ?>"> read more &raquo;</a></p>

                        <?php endwhile; ?>
                    </div>
                    
                    <div id="mainRecentNews">
                        <h5>Recent News</h5>

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <?php static $count = 0; if ($count == "2") { break; } else { ?>

                                <p class="dark bold"><span style="font-weight: normal;"><?php the_time('M Y'); ?></span><br /><a href="<?php the_permalink() ?>" class="dark bold" style="text-decoration:none"><?php the_title() ;?></a></p>	
                        
                            <?php $count++; } ?>

                        <?php endwhile; else: ?>

                                <p>Sorry, this page does not exist</p>

                        <?php endif; ?>

                        <p><a href="#">all news/events &raquo;</a></p>
                    </div>
                                

                </div>
                           
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>
        
<?php get_footer(); ?>       