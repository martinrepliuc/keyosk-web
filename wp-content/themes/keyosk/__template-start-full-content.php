<?php
/**
 * Template Name: Start Template
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
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
    
    <link rel="shortcut icon" href="http://www.keyosk.io/wp-content/themes/keyosk/images/favicon.ico">
    <link rel="apple-touch-icon" href="http://www.keyosk.io/wp-content/themes/keyosk/images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.keyosk.io/wp-content/themes/keyosk/images/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.keyosk.io/wp-content/themes/keyosk/images/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.keyosk.io/wp-content/themes/keyosk/images/touch-icon-ipad-retina.png">
    
    <link rel="stylesheet" href="http://www.keyosk.io/wp-content/themes/keyosk/css/idangerous.swiper.css">
    <link rel="stylesheet" href="http://www.keyosk.io/wp-content/themes/keyosk/css/bootstrap.css">
    <link rel="stylesheet" href="http://www.keyosk.io/wp-content/themes/keyosk/style.css">
    <link rel="stylesheet" href="http://www.keyosk.io/wp-content/themes/keyosk/css/start.css">
    <link rel="stylesheet" href="http://www.keyosk.io/wp-content/themes/keyosk/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="http://www.keyosk.io/wp-content/themes/keyosk/css/animate.css">
    
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    
    <?php wp_head(); ?>
    
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/wow.js"></script>
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
	<div id="innerparent"> -->
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
                    <!--<a href="#" id="navanchor"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/nav-anchor.jpg" width="30" height="40" alt="Menue" /></a>-->
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
    
    <div id="content" class="wrapper">
    <div id="head">
    
    	<!-------------------------------- INTRODUCTION --------------------------------------->
    	<div id="introduction">
        
        	<ul class="bxslider-introduction">
            
            	<li>
                    <div class="introduction-bg-event">
                        <div class="container">
                            <div class="row">
                                <div class="span4 introduction-slider-text">
                                	<h1>KEYOSK - next generation in-store marketing
                              			<span>Manage your content on multiple touchscreens - increase your sales and customer loyalty.</span></h1>
                              	</div>
                            	<div class="span6 introduction-slider-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/slider1/01-event-poll.png" />
                              	</div>
                                <br class="clear" />
               				</div>
                       	</div>
                  	</div>
                </li>
                
            	<li>
                    <div class="introduction-bg-exhibition">
                        <div class="container">
                            <div class="row">
                                <div class="span4 introduction-slider-text">
                                	<h1>KEYOSK - next generation in-store marketing
                              			<span>Manage your content on multiple touchscreens - increase your sales and customer loyalty.</span></h1>
                              	</div>
                            	<div class="span6 introduction-slider-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/slider1/01-exhibition-custom.png" />
                              	</div>
               				</div>
                       	</div>
                  	</div>
                </li>
                
            	<li>
                    <div class="introduction-bg-store">
                        <div class="container">
                            <div class="row">
                                <div class="span4 introduction-slider-text dark">
                                	<h1>KEYOSK - next generation in-store marketing
                              			<span>Manage your content on multiple touchscreens - increase your sales and customer loyalty.</span></h1>
                              	</div>
                            	<div class="span6 introduction-slider-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/slider1/01-store-slideshow.png" />
                              	</div>
               				</div>
                       	</div>
                  	</div>
                </li>
            
            	<li>
                    <div class="introduction-bg-event">
                        <div class="container">
                            <div class="row">
                                <div class="span4 introduction-slider-text">
                                	<h1>KEYOSK - next generation in-store marketing
                              			<span>Manage your content on multiple touchscreens - increase your sales and customer loyalty.</span></h1>
                              	</div>
                            	<div class="span6 introduction-slider-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/slider1/01-event-subscriptions.png" />
                              	</div>
               				</div>
                       	</div>
                  	</div>
                </li>
                
            	<li>
                    <div class="introduction-bg-exhibition">
                        <div class="container">
                            <div class="row">
                                <div class="span4 introduction-slider-text">
                                	<h1>KEYOSK - next generation in-store marketing
                              			<span>Manage your content on multiple touchscreens - increase your sales and customer loyalty.</span></h1>
                              	</div>
                            	<div class="span6 introduction-slider-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/slider1/01-exhibition-poll.png" />
                              	</div>
               				</div>
                       	</div>
                  	</div>
                </li>
                
            	<li>
                    <div class="introduction-bg-store">
                        <div class="container">
                            <div class="row">
                                <div class="span4 introduction-slider-text dark">
                                	<h1>KEYOSK - next generation in-store marketing
                              			<span>Manage your content on multiple touchscreens - increase your sales and customer loyalty.</span></h1>
                              	</div>
                            	<div class="span6 introduction-slider-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/slider1/01-store-subscriptions.png" />
                              	</div>
               				</div>
                       	</div>
                  	</div>
                </li>
                
            	<li>
                    <div class="introduction-bg-exhibition">
                        <div class="container">
                            <div class="row">
                                <div class="span4 introduction-slider-text">
                                	<h1>KEYOSK - next generation in-store marketing
                              			<span>Manage your content on multiple touchscreens - increase your sales and customer loyalty.</span></h1>
                              	</div>
                            	<div class="span6 introduction-slider-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/slider1/01-exhibition-subscriptions.png" />
                              	</div>
               				</div>
                       	</div>
                  	</div>
                </li>
            
            </ul>
        
        	<a id="videoBtn" href="#video" class="slide-to-section" title="next section"></a>
            
        </div><!-- introduction -->
        
    	<!-------------------------------- VIDEO ---------------------------------------------->
    	<div id="video">
            
        	<div class="container">
            	<div class="row">
    
                    <div class="span2"></div>
                    <div class="span8 headline align-center">
                         <h2 class="super-heading wow fadeInDown"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/ico-video.png" class="headline-icon" width="40" height="40" />Videos</h2>
                        <h2>Create lasting impressions and raise brand awareness with interactive videos
                            <span>Increase total brand awareness by bringing your TV ads and viral spots directly to the product shelf. By customers liking your content you gain useful insight for your marketing planning.</span>
                        </h2>
                    </div>
                    <div class="span2"></div>
                    <br class="clear" />
            
            	</div><!-- row -->
            </div><!-- container -->
            
            <!--
            
        	<div class="container">
            	<div class="row">
                	<div class="span12">
                        <div id="bx-pager-video" class="tabs">
                            <a data-slide-index="0" href="" class="button button-active tab">Features</a>
                            <a data-slide-index="1" href="" class="button button-active tab">Advertise</a>
                            <a data-slide-index="2" href="" class="button button-active tab">Interaction</a>
                        </div>
            		</div>
                    <br class="clear" />
            	</div>
            </div>
            
            <ul class="bxslider-video">
            	<li>
                    <div class="container">
                        <div class="row">
                            <div class="span6 video-text-content">
                                <h5>Features</h5>
                                <div class="content-text">
                                    Video is a communications tool like no other. Pictures, sound, text and movement blend synergistically to create 
                                    an impact far beyond each of the individual elements. Show your product to it’s fullest visual format.
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="span6 video-text-content">
                                <h5>Advertise</h5>
                                <div class="content-text">
                                    KEYOSK brings your TV ads and viral spots directly to the product shelf. It is a cost-effective way to strengthen 
                                    brand awareness and deepen customer engagement.
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </li>
            	<li>
                    <div class="container">
                        <div class="row">
                            <div class="span6 video-text-content">
                                <h5>Interaction</h5>
                                <div class="content-text">
                                    Customers can Like your spot what brings insights for your marketing planning. <br /><br />
                                    <a class="button button-active">Play and like video</a>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </li>
            </ul>
            -->
        
        	<a id="slideshowBtn" href="#slideshow" class="slide-to-section" title="next section"></a>
            
        </div><!-- video -->
        
    	<!-------------------------------- SLIDESHOW ------------------------------------------>
    	<div id="slideshow">
        
        	<a id="newsletterBtn" href="#newsletter" class="slide-to-section" title="next section"></a>
            
        	<div class="container">
            	<div class="row">
    
                    <div class="span1"></div>
                    <div class="span10 headline align-center">
                         <h2 class="super-heading wow fadeInDown"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/ico-slideshow.png" class="headline-icon" width="40" height="40" />Slideshows</h2>
                        <h2>Promote your products with interactive slideshows</h2>
                    </div>
                    <div class="span1"></div>
                    <br class="clear" />
            
            	</div><!-- row -->
            </div><!-- container -->
            
        	<div class="container">
            	<div class="row">
                
                	<!--
                	<div class="span12">
                        <div id="bx-pager-slideshow" class="tabs">
                            <a data-slide-index="0" href="" class="button button-active tab">Features</a>
                            <a data-slide-index="1" href="" class="button button-active tab">Advertise</a>
                            <a data-slide-index="2" href="" class="button button-active tab">Interaction</a>
                            <a data-slide-index="3" href="" class="button button-active tab">Interaction</a>
                        </div>
            		</div>
                    <br class="clear" />
    				-->
    
                    <div class="span12 tablet-slideshow wow slideInLeft">
                    	<div class="tablet-slideshow-content">
                            <ul class="bxslider-slideshow">
                                <li>I. <br /><br />Increase your sales by giving information on product features and special offers.</li>
                                <li>II. <br /><br />Get immediate customer feedback with the use of like and dislike buttons.</li>
                                <li>III. <br /><br />Optimize your content with usage-insight from Google Analytics.</li>
                          	</ul>
                        </div>
                    </div>
                    <br class="clear" />
            
            	</div><!-- row -->
            </div><!-- container -->
            
        </div><!-- slideshow -->
        
    	<!-------------------------------- NEWSLETTER ----------------------------------------->
    	<div id="newsletter">
            
        	<div class="container">
            	<div class="row">
    				
                    <div class="span2"></div>
                    <div class="span8 headline align-center">
                         <h2 class="super-heading wow fadeInDown"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/ico-newsletter.png" class="headline-icon" width="40" height="40" />Subscriptions</h2>
                        <h2>Collect contact information on location to build customer relationships 
                            <span>Use Subscriptions to keep in touch with your customers. Collect email addresses in-store while customers are engaged. This saves time in comparison to handwritten lists.</span>
                        </h2>
                    </div>
                    <div class="span2"></div>
                    <br class="clear" />
            
            	</div><!-- row -->
            </div><!-- container -->
            
            <!--
            
        	<div class="container">
            	<div class="row">
                	<div class="span12">
                        <div id="bx-pager-newsletter" class="tabs">
                            <a data-slide-index="0" href="" class="button button-active tab">Advantages</a>
                            <a data-slide-index="1" href="" class="button button-active tab">Features</a>
                            <a data-slide-index="2" href="" class="button button-active tab none">Backend</a>
                        </div>
            		</div>
                    <br class="clear" />
            	</div>
            </div>
            
            <ul class="bxslider-newsletter">
            	<li>
                    <div class="newsletter-bg-exhibition">
                        <div class="container">
                            <div class="row">
                                <div class="span8 box-indent">
                                    <h5>Advantages</h5>
                                    <ul class="newsletter-advantages">
                                        <li>Collect subscribers on site that are really engaged.</li>
                                        <li>Don’t waste your money for online promotions and SEA to generate website traffic to generate opt-ins.</li>
                                        <li>Don’t waste your time & money by collecting hand-written email-lists which have to be transferred and merged 
                                        into your digital subscriber lists.</li>
                                    </ul>
                                </div>
                                <br class="clear" />
                            </div>
                        </div>
                    </div>
                </li>
            	<li>
                    <div class="newsletter-bg-exhibition">
                        <div class="container">
                            <div class="row">
                                <div class="span8 box-indent">
                                    <h5>Features</h5>
                                    <ul class="newsletter-advantages">
                                        <li>Create & manage subscription forms</li>
                                        <li>Easy customisation to meet your needs</li>
                                        <li>Connect with campaign monitor to run your email marketing campaigns</li>
                                    </ul>
                                </div>
                                <div class="span4">
                                    <ul class="content-logos">
                                        <li><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/campaignmonitor.png" /></li>
                                    </ul>
                                </div>
                                <br class="clear" />
                            </div>
                        </div>
                    </div>
                </li>
            	<li>
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="backend-image">
                                	<img src="http://www.keyosk.io/wp-content/themes/keyosk/images/backend-img-1.png" />
                              		<div class="backend-overlay-1"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/lupe.png" /></div>
                                    <div class="backend-tooltip-1">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound the teachings.</div>
                                </div>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
             	</li>
            </ul>
            -->
        
        	<a id="surveyBtn" href="#survey" class="slide-to-section" title="next section"></a>
            
        </div><!-- newsletter -->
        
    	<!-------------------------------- SURVEY --------------------------------------------->
    	<div id="survey">
            
        	<div class="container">
            	<div class="row">
    
    				<div class="span2"></div>
                    <div class="span8 headline align-center">
                         <h2 class="super-heading wow fadeInDown"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/ico-poll.png" class="headline-icon" width="40" height="40" />Polls</h2>
                        <h2>Collect In-store customer feedback to gain valuable insight
                            <span>Gauge customer satisfaction and retrieve important information from your customers in realtime with polls created in Fluidsurveys. Can be easily customized within minutes and it saves money on market research and data import.</span>
                        </h2>
                    </div>
    				<div class="span2"></div>
                    <br class="clear" />
                    
            	</div><!-- row -->
            </div><!-- container -->
            
            <!--
        	<div class="container">
            	<div class="row">
                	<div class="span12">
                        <div id="bx-pager-survey" class="tabs">
                            <a data-slide-index="0" href="" class="button button-active tab">Advantages</a>
                            <a data-slide-index="1" href="" class="button button-active tab">Features</a>
                        </div>
            		</div>
                    <br class="clear" />
            	</div>
            </div>
            
            <ul class="bxslider-survey">
            	<li>
                    <div class="container">
                        <div class="row">
                            <div class="span8 box-indent">
                                <h5>Advantages</h5>
                                <ul class="survey-advantages">
                                    <li>collect immediate customer feedback through polls and surveys on location and get immediate results</li>
                                    <li>change surveys within minutes</li>
                                    <li>avoid expensive promotional ressources and time consuming import <br />of data</li>
                                </ul>
                            </div>
                            <div class="span4">
                                <ul class="content-logos">
                                    <li><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/fluidsurveys.png" /></li>
                                    <li><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/googleanalytics.png" /></li>
                                </ul>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </li>
            	<li>
                    <div class="container">
                        <div class="row">
                            <div class="span8 box-indent">
                                <h5>Features</h5>
                                <ul class="survey-advantages">
                                    <li>Create touch optimised polls and surveys with Fluidsurveys and push your surveys to your keyosk devices</li>
                                    <li>Immediate analysis and results</li>
                                    <li>Change surveys within minutes</li>
                                    <li>No expensive promotional ressources</li>
                                    <li>No time consuming importing of data</li>
                                </ul>
                            </div>
                            <br class="clear" />
                        </div>
                    </div>
                </li>
            </ul>
            -->
        
        	<a id="webappsBtn" href="#webapps" class="slide-to-section" title="next section"></a>
            
        </div><!-- survey -->
        
    	<!-------------------------------- WEB APPS --------------------------------------------->
        
        <div id="webapps">
            
        	<div class="container">
            	<div class="row">
    
    				<div class="span2"></div>
                    <div class="span8 headline align-center">
                         <h2 class="super-heading wow fadeInDown"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/ico-web.png" class="headline-icon" width="40" height="40" />Web Apps</h2>
                        <h2>Expand your possibilities by configuring external web based applications
                            <span>Web Apps expand the possibilities of KEYOSK by configuring external web based applications or Websites locked down to a specific domain. We can highly recommend following services:</span>
                        </h2>
                    </div>
    				<div class="span2"></div>
                    <br class="clear" />
                    
            	</div><!-- row -->
            </div><!-- container -->
            
        	<div class="container">
            	<div class="row">
              		<div class="span6 app">
                    	<a href="http://landerapp.com/" target="_blank"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/landerapp.jpg" /></a>
                    	<h3><a href="http://landerapp.com/" target="_blank">Lander App</a></h3>
                        <p>Lander lets you create beautiful landing pages for your social media and online marketing campaigns using an easy step-by-step process.</p>
                    </div>
              		<div class="span6 app">
                    	<a href="http://www.haikudeck.com/" target="_blank"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/haikudeck.jpg" /></a>
                    	<h3><a href="http://www.haikudeck.com/" target="_blank">Haiku Deck</a></h3>
                        <p>Haiku Deck is a completely new kind of presentation software. It will completely transform the way you think about presentations. Simply copy the web URL of Haiku Deck Presentations into the KEYOSK Custom Site URL field for a winning combination!</p>
                    </div>
                    <br class="clear" />
            	</div><!-- row -->
            </div><!-- container -->
                
        	<a id="customBtn" href="#custom" class="slide-to-section" title="next section"></a>
        
        </div><!-- web apps -->
        
    	<!-------------------------------- CUSTOM --------------------------------------------->
    	<div id="custom">
        
            <div class="custom-overlay">
            	<a class="custom-close">close</a>
            	<ul class="bxslider-custom">
                	<li>
                    	<div class="container">
                        	<div class="row">
                                <div class="custom-overlay-layer">
                                    <div class="span8 custom-overlay-image">
                                        <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/big-dm.jpg" />
                                    </div>
                                    <div class="span4 custom-overlay-text">
                                        <h5>This is a headline</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.<br /><br />
        
        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    </div>
                                    <br class="clear" />
                                </div>
                        	</div>
                      	</div>
                    </li>
               		<li>
                    	<div class="container">
                        	<div class="row">
                                <div class="custom-overlay-layer">
                                    <div class="span8 custom-overlay-image">
                                        <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/big-event-butler.jpg" />
                                    </div>
                                    <div class="span4 custom-overlay-text">
                                        <h5>This is a headline</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.<br /><br />
        
        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    </div>
                                    <br class="clear" />
                                </div>
                        	</div>
                      	</div>
                    </li>
               		<li>
                    	<div class="container">
                        	<div class="row">
                                <div class="custom-overlay-layer">
                                    <div class="span8 custom-overlay-image">
                                        <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/big-nail-polish.jpg" />
                                    </div>
                                    <div class="span4 custom-overlay-text">
                                        <h5>This is a headline</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.<br /><br />
        
        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    </div>
                                    <br class="clear" />
                                </div>
                        	</div>
                      	</div>
                    </li>
               		<li>
                    	<div class="container">
                        	<div class="row">
                                <div class="custom-overlay-layer">
                                    <div class="span8 custom-overlay-image">
                                        <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/big-parfume.jpg" />
                                    </div>
                                    <div class="span4 custom-overlay-text">
                                        <h5>This is a headline</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.<br /><br />
        
        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    </div>
                                    <br class="clear" />
                                </div>
                        	</div>
                      	</div>
                    </li>
                </ul>
            </div><!-- CUSTOM OVRLAY -->
        
        	<a id="featuresBtn" href="#features" class="slide-to-section" title="next section"></a>
            
        	<div class="container">
            	<div class="row">
    
    				<div class="span2"></div>
                    <div class="span8 headline align-center">
                         <h2 class="super-heading wow fadeInDown"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/ico-api.png" class="headline-icon" width="40" height="40" />KEYOSK API
                            <span>It’s the Add-On that delivers the goods, adding value for both business and user. With KEYOSK, businesses can create and customize their own tailored Add-On solution in addition to the included on-board solutions in KEYOSK Cockpit.<br /><br />Our KEYOSK API gives you the opportunity to integrate almost any webservice into KEYOSK!</span>
                        </h2>
                    </div>
                    <div class="span2"></div>
                    <br class="clear" />
            
            	</div><!-- row -->
            </div><!-- container -->
            
            <div class="custombox">

                <a href="#" class="swiper-prev" id="custom-swiper-prev"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/arrow-left.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/arrow-left@2x.png" alt="Previous" /></a>
                <a href="#" class="swiper-next" id="custom-swiper-next"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/arrow-right.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/arrow-right@2x.png" alt="Next" /></a>
                
                    
              	<div id="bx-pager-custom">
                	<div id="custom-swiper" class="swiper-container">
                    	<div class="swiper-wrapper">
                    
                            <div class="swiper-slide"> 
                                <div class="imgbox big-imgbox">
                                	<a data-slide-index="0" href="" class="open-custom-overlay"></a>
                                    <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/dm.jpg" /></div> 
                            </div>
                            <div class="swiper-slide"> 
                                <div class="imgbox big-imgbox">
                                	<a data-slide-index="1" href="" class="open-custom-overlay"></a>
                                    <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/event-butler.jpg" /></div> 
                            </div>
                            <div class="swiper-slide"> 
                                <div class="imgbox big-imgbox">
                                	<a data-slide-index="2" href="" class="open-custom-overlay"></a>
                                    <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/nail-polish.jpg" /></div> 
                            </div>
                            <div class="swiper-slide"> 
                                <div class="imgbox big-imgbox">
                                	<a data-slide-index="3" href="" class="open-custom-overlay"></a>
                                    <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/api/parfume.jpg" /></div> 
                            </div>
                            
                    
                    	</div><!-- wrapper -->
                	</div><!--container -->
               	</div><!-- bx pager -->
                
         	</div><!-- box -->
            
        </div><!-- custom -->
        
    	<!-------------------------------- FEATURES ------------------------------------------->
    	<div id="features">
        
        	<div class="container">
            	<div class="row">
    
                    <!--<div class="span12 headline align-center">
                        <h2>Our main features
                            <span>To take a trivial example, which of us ever undertakes<br />laborious physical exercise, except to obtain some advantage from it</span>
                        </h2>
                        <a class="button button-active feature-button">Full list of features</a>
                    </div>
                    <br class="clear" />-->
                    
                    <div class="main-features">
                    	<div class="span4 single-feature">
                        	<i class="feature-icon"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/cockpit.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/cockpit@2x.png" width="60" height="60" /></i>
                            <h3>KEYOSK Cockpit</h3>
                            <p>The Web-based KEYOSK-Cockpit gives you central control over your devices, their status, content and locations.<br /><br />Manage your in-store marketing campaigns and customer loyalty programs from one central place.</p>
                        </div>
                    	<div class="span4 single-feature">
                        	<i class="feature-icon"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/mounting.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/mounting@2x.png" width="60" height="60" /></i>
                            <h3>Easy mounting</h3>
                            <p>I. Receive your pre-configured hardware<br />
                            II. Mounting: 8 screws maximum<br />
                            III. Switch the device on & activate it<br /><br />
                            The simplest roll-out-project ever!</p>
                        </div>
                    	<div class="span4 single-feature">
                        	<i class="feature-icon"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/internet.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/internet@2x.png" width="60" height="60" /></i>
                            <h3>No internet? No worries!</h3>
                            <p>Sometimes WIFI connection can cause problems, especially at large events. We can handle this.<br /><br />Even if you are collecting newsletter subscriptions, data will be synchronised automatically right after you have re-connected with the internet.</p>
                        </div>
                    	<div class="span4 single-feature">
                        	<i class="feature-icon"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/agility.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/agility@2x.png" width="60" height="60" /></i>
                            <h3>High agility</h3>
                            <p>Our Hardware bundles are designed for agile use. Place your touchscreens right next to the product you want to promote and secure it with the included Kensington lock.<br /><br />You want to collect newsletter subscriptions the next day? no problem - unlock your device and place it next to your cash desk!</p>
                        </div>
                    	<div class="span4 single-feature">
                        	<i class="feature-icon"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/google.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/google@2x.png" width="60" height="60" /></i>
                            <h3>Google Analytics</h3>
                            <p>Integrate KEYOSK seamlessly with google analytics. Get the most important indicators of your content usage in the KEYOSK-Cockpit and go to google analytics if you wish full in depth reports.</p>
                        </div>
                    	<div class="span4 single-feature">
                        	<i class="feature-icon"><img src="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/like.png" data-at2x="http://www.keyosk.io/wp-content/themes/keyosk/images/icons/like@2x.png" width="60" height="60" /></i>
                            <h3>Like-Button</h3>
                            <p>Enable the use of like-buttons in your content to gather direct user feedback. Lead Like/dislike contests or improve your latest campaign because you know which content your users enjoy.</p>
                        </div>
                    </div>
            
            	</div><!-- row -->
            </div><!-- container -->
            
        </div><!-- features -->
    
    
    </div><!-- content -->    
    </div><!-- head -->

	<!------------------------------------------------------------------------------------------
			FOOTER
	------------------------------------------------------------------------------------------->
    <footer>
        
        <a href="#head" class="slide-to-top" title="go to top"></a>
        
    	<div class="container">
        	<div class="row">
                        
                    <div class="span12 footerlinks">
                        <?php wp_nav_menu( array( 'theme_location' => '', 'menu' => 'footer-navi', 'container' => '', 'menu_class' => '', 'items_wrap' => '<ul>%3$s</ul>' ) ); ?>
                    </div>
                    <div class="span12 copyright">&copy; 2014 KEYOSK GmbH &amp; Co KG</div>
                    <br class="clear" />
                
            </div><!-- row -->
        </div><!-- container -->
        
    </footer><!-- footer -->
    
    </div><!-- innerparent -->
    </div><!-- parent -->
    </div><!-- parentwrapper -->
    
    
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/retina.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/bootstrap.js"></script>
	<script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/idangerous.swiper.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/waypoints.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/modernizr.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/scrolld.js"></script>
    <script type="text/javascript">
$("[id*='Btn']").stop(true).on('click',function(e){e.preventDefault();$(this).scrolld();});
</script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/application.js"></script>


<?php wp_footer(); ?>
</body>
</html>