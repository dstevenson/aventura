<?php
/*
Template Name: Projects
*/
get_header(); ?>

        <div id="content">
            
            <div id="leftContent">
                <h1>Our portfolio is a testimony to Aventura Construction’s expert design and quality craftsmanship. Please explore our recent work.</h1>
                <h4>General Construction</h4>
                <ul>
                <?php
                    $args = array(
                        'tag' => 'general-construction',
                        'post_type' => 'galleryfolder',
                        'posts_per_page' => 5,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $query = new WP_Query($args);
                    while ($query->have_posts()) {
                        $query->the_post();
                        echo '<li><a href="general-construction/' . get_the_ID() . '">' . get_the_title() . '</a></li>';
                    }
                ?>
                </ul>
                
                <h4>Environmental Services</h4>
                <ul>
                <?php
                $args = array(
                    'tag' => 'environmental-services',
                    'post_type' => 'galleryfolder',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<li><a href="environmental-services/' . get_the_ID() . '">' . get_the_title() . '</a></li>';
                }
                ?>
                </ul>
                
                <h4>Maintenance & Service</h4>
                <ul>
                <?php
                $args = array(
                    'tag' => 'maintenance-service',
                    'post_type' => 'galleryfolder',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<li><a href="maintenance-service/' . get_the_ID() . '">' . get_the_title() . '</a></li>';
                }
                ?>
                </ul>
            </div> 
            
            <div id="rightContent">
                
                <?php the_post(); ?>
                
		<h5><?php the_title(); ?></h5>
                
                <?php the_content(); ?>
                <table cellpadding="0" cellspacing="0" width="100%" style="margin-left: 55px;">
                    <tr>
                        <td><a href="<?php echo home_url(); ?>/aventura-projects/general-construction/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects_construction.jpg" border="0"></a></td>
                        <td><a href="<?php echo home_url(); ?>/aventura-projects/maintenance-service/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects_maintenance.jpg" border="0"></a></td>
                        <td><a href="<?php echo home_url(); ?>/aventura-projects/environmental-services/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects_environmental.jpg" border="0"></a></td>
                    </tr>    
                </table>
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>
<?php get_footer(); ?>