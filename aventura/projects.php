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
                
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>