<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="/wp-content/themes/keyosk/images/favicon.ico">
    <link rel="apple-touch-icon" href="/wp-content/themes/keyosk/images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/keyosk/images/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/keyosk/images/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/keyosk/images/touch-icon-ipad-retina.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="/wp-content/themes/keyosk/css/bootstrap.css">
    <link rel="stylesheet" href="/wp-content/themes/keyosk/style.css">
    <link rel="stylesheet" href="/wp-content/themes/keyosk/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/wp-content/themes/keyosk/css/animate.css">
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') && strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    		echo '<link rel="stylesheet" href="/wp-content/themes/keyosk/css/chrome.css" type="text/css" media="screen" />';
		  } 
	?>
    
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    
    <?php wp_head(); ?>
    
    <script type="text/javascript" src="/wp-content/themes/keyosk/js/wow.js"></script>
    <script>
  		wow = new WOW(
   			{
      		animateClass: 'animated',
            offset:       100
      		}
        );
        wow.init();
	</script>

</head>

<body>

	<!--
	<div id="parentwrapper">

	<section id="slidenav">
        <div class="innerslide">
            <ul class="slide-mainnav">
				<?php /* wp_nav_menu( array( 'theme_location' => '', 'menu' => 'main-navi', 'container' => '', 'menu_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); */ ?>
          	</ul>
            <ul class="slide-mnav">
            	<?php /* wp_nav_menu( array( 'theme_location' => '', 'menu' => 'footer-navi', 'container' => '', 'menu_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); */ ?>
            </ul>
        
        </div>
    </section>

	<div id="parent">
	<div id="innerparent">
	-->
    <!------------------------------------------------------------------------------------------
			HEADER
	------------------------------------------------------------------------------------------->
	<header>
        <div class="container">
            <div class="row">
            
            	<div class="header">
                	<div class="span12 client-login"><a class="client-login-link" href="#">Keyosk Client Login</a></div>
                    <div class="span4" id="logo">
                    	<h1>
                        	<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></a>
                      	</h1>
                  	</div>
                    <!--<a href="#" id="navanchor"><img src="/wp-content/themes/keyosk/images/nav-anchor.jpg" width="30" height="40" alt="Menue" /></a>-->
                    <nav class="span8">
                    	<?php wp_nav_menu( array( 'theme_location' => '', 'menu' => 'main-navi', 'container' => '', 'menu_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>
                    </nav>
                    <br class="clear" />
                </div>
                
            </div><!-- row -->
        </div><!-- container -->
    </header>

	<!------------------------------------------------------------------------------------------
			CONTENT
	------------------------------------------------------------------------------------------->
    
    
    <div class="container wrapper" id="head">