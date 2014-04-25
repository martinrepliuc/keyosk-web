<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
        <br class="clear" />
    
    </div> <!-- container -->
    	
  	<a href="http://www.keyosk.io/get-in-touch/" class="super-big-button">get in touch</a>

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
    
    
    <!--</div><!-- innerparent -->
    <!--</div><!-- parent -->
    <!--</div><!-- parentwrapper -->
    
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/retina.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/parsley.js"></script>
	<script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/idangerous.swiper.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/modernizr.js"></script>
    <script type="text/javascript" src="http://www.keyosk.io/wp-content/themes/keyosk/js/application.js"></script>


<?php wp_footer(); ?>
</body>
</html>