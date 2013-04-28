<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="google-site-verification" content="v82cz-TuMIIqi9EQTOD5DOZBTbb6mxdF56hGKtrGOKQ" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/content.css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"></script>

  <link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />

  <script src="facebox/facebox.js" type="text/javascript"></script>
  
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript">
    $(window).load(function() {
		
		$("#pdB").fancybox({
				'width'				: 611,
				'height'			: 506,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
		});
		
		$("#pLink").fancybox();
		
		$('#home #slider').nivoSlider({
        effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
        animSpeed:250, //Slide transition speed
        pauseTime:3000,
        startSlide:0, //Set starting Slide (0 index)
        directionNav:true, //Next & Prev
        directionNavHide:true, //Only show on hover
        controlNav:true, //1,2,3...
        keyboardNav:true, //Use left & right arrows
        pauseOnHover:true, //Stop animation while hovering
        manualAdvance:false //Force manual transitions
	    });
		
		$('.projects #slider').nivoSlider({
        effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
        animSpeed:0, //Slide transition speed
        pauseTime:3000,
        startSlide:0, //Set starting Slide (0 index)
        directionNav:true, //Next & Prev
        directionNavHide:true, //Only show on hover
        controlNav:true, //1,2,3...
        keyboardNav:true, //Use left & right arrows
        pauseOnHover:true, //Stop animation while hovering
        manualAdvance:true //Force manual transitions
	    });

    });
</script>
       		<script>
		conditionizr({
			debug      : false,
			scriptSrc  : '<?php echo get_template_directory_uri(); ?>/js/conditionizr/',
			styleSrc   : '<?php echo get_template_directory_uri(); ?>/css/conditionizr/',
			ieLessThan : {active: true, version: '9', scripts: true, styles: true, classes: true, customScript: '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js'},
			chrome     : { scripts: false, styles: false, classes: true, customScript: false },
			safari     : { scripts: false, styles: false, classes: true, customScript: false },
			opera      : { scripts: false, styles: false, classes: true, customScript: false },
			firefox    : { scripts: false, styles: false, classes: true, customScript: false },
			ie10       : { scripts: false, styles: false, classes: true, customScript: false },
			ie9        : { scripts: false, styles: false, classes: true, customScript: false },
			ie8        : { scripts: false, styles: false, classes: true, customScript: false },
			ie7        : { scripts: false, styles: false, classes: true, customScript: false },
			ie6        : { scripts: false, styles: false, classes: true, customScript: false },
			retina     : { scripts: false, styles: false, classes: true, customScript: false },
			mac        : true,
			win        : true,
			x11        : true,
			linux      : true
		});
		</script> 
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
	</script>
        
        
</head>
<body id="home">

	<div id="siteContainer">
    
    	<div id="mainArea">
        
        	<div id="topLinks">
            
            	<a href="http://www.facebook.com/#!/pages/Aventura-Construction-Corp/158503274168539" target="_blank" title="Find Us on Facebook" style="width:21px;height:39px">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="Facebook" border="0" style="width:21px;height:39px" />
                </a>
                <a href="http://www.linkedin.com/pub/aventura-construction/2a/229/4a9" target="_blank" title="Join Our Network on LinkedIn" style="width:21px;height:39px">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/linkedIn.png" alt="LinkedIn" border="0" style="width:21px;height:39px" />
                </a>
                <a href="https://aventura.egnyte.com" target="_blank" title="FTP Access" style="width:107px;height:39px">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/ftp-access.png" alt="FTP Access" border="0" style="width:107px;height:39px" />
                </a>
            
            </div>
        
        	<div id="logo">
            	<a href="<?php echo home_url(); ?>" title="Return to the Aventura Construction Corporation Homepage">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/aventura-construction-corp-logo.png" alt="Aventura Construction Corporation" border="0" />
                </a>
            </div>
            
                        
            <div id="navigation">
            	<ul id="nav-one" class="nav">
                    <li><a class="selected" href="<?php echo home_url(); ?>" title="Home">HOME</a></li>
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
            
            <div id="shadow">

                <img src="<?php echo get_template_directory_uri(); ?>/img/shadow.png" />
                              
            </div>