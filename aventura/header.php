<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="google-site-verification" content="v82cz-TuMIIqi9EQTOD5DOZBTbb6mxdF56hGKtrGOKQ" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/slider.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.slides.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
            $("#nav-one li").hover(
                    function(){ $("ul", this).fadeIn("fast"); }, 
                    function() { } 
            );

            if (document.all) {
                    $("#nav-one li").hoverClass ("sfHover");
            }
    });

    $.fn.hoverClass = function(c) {
            return this.each(function(){
                    $(this).hover( 
                            function() { $(this).addClass(c);  },
                            function() { $(this).removeClass(c); }
                    );
            });
    };
    $(function(){
        $("#slides").slidesjs({
            width: 619,
            height: 284,
            navigation: false,
            play: {
                active: false,
                // [boolean] Generate the play and stop buttons.
                // You cannot use your own buttons. Sorry.
                effect: "slide",
                // [string] Can be either "slide" or "fade".
                interval: 4000,
                // [number] Time spent on each slide in milliseconds.
                auto: true,
                // [boolean] Start playing the slideshow on load.
                swap: false,
                // [boolean] show/hide stop and play buttons
                pauseOnHover: false,
                // [boolean] pause a playing slideshow on hover
                restartDelay: 2500
                // [number] restart delay on inactive slideshow
            }
        });
    });
</script>

</head>
<body>

<div id="wrapper">
        
    <div id="topLinks">
        <a href="http://www.facebook.com/#!/pages/Aventura-Construction-Corp/158503274168539" target="_blank" title="Find Us on Facebook"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="Facebook" border="0" /></a>
        <a href="http://www.linkedin.com/pub/aventura-construction/2a/229/4a9" target="_blank" title="Join Our Network on LinkedIn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedIn.png" alt="LinkedIn"/></a>
        <a href="<?php echo home_url(); ?>/portal/customers" title="Customer Portal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers.png" alt="FTP Access"/></a>
        <a href="<?php echo home_url(); ?>/portal/sub-contractors-and-vendors"  title="Sub-Contractor and Vendor Portal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/subs_vendors.png" alt="FTP Access"/></a> 
        <a href="<?php echo home_url(); ?>/portal/employees/" title="Employee Portal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/employees.png" alt="FTP Access"/></a> 
    </div>
    
    <div style="clear:both;"></div>
    
    <div id="contentWrapper">
        
        <div id="header">
            
            <div id="logo"><a href="<?php echo home_url(); ?>" title="Aventura Construction Corporation"></a></div>
            
            <div id="navigation">
                
            	<ul id="nav-one" class="nav">
                    <li style="border-left: none;"><a href="<?php echo home_url(); ?>" title="Home">HOME</a></li>
                    <?php wp_nav_menu( array('menu' => 'Main Navigation', 
                        'theme_location'  => '',
                        'container'       => 'false',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                        'walker'          => '' )); ?>
                </ul>
                
            </div>
            
        </div>
        
        <div style="clear:both;"></div>