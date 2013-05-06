<?php
/*
Template Name: Projects
*/
get_header(); ?>

        <div id="content">
            
            <div id="leftContent">
                <h1>Click on a project to view pictures.</h1>
                <h4>General Construction</h4>
                <ul><li>link to proj 1</li></ul>
                
                <h4>Environmental Services</h4>
                <ul><li>link to proj 2</li></ul>
                
                <h4>Maintenance & Service</h4>
                <ul><li>link to proj 3</li></ul>
            </div> 
            
            <div id="rightContent">
                
                <?php the_post(); ?>
                
		<h5><?php the_title(); ?></h5>
                
                <?php the_content(); ?>
                <table cellpadding="0" cellspacing="0" width="100%" style="margin-left: 55px;">
                    <tr>
                        <td><a href="<?php echo home_url(); ?>/aventura-projects/general-construction/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects_construction.jpg" border="0"></a></td>
                        <td><a href="<?php echo home_url(); ?>/aventura-projects/maintenance_service/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects_maintenance.jpg" border="0"></a></td>
                        <td><a href="<?php echo home_url(); ?>/aventura-projects/environmental-services/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects_environmental.jpg" border="0"></a></td>
                    </tr>    
                </table>
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>