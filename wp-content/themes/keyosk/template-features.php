<?php
/**
 * Template Name: Features Template
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

get_header(); ?>

    	<div class="row">
            
            <div class="span10 features align-features">
                <div class="edition align-right"><h3>Professional Edition</h3></div>
                
                
                
                
                <div class="accordion" id="accordion2">
				<?php if( have_rows('repeater') ): ?>
                    <?php while( have_rows('repeater') ): the_row(); 

                    // vars
                    $id = get_sub_field('id');
                    $areaheadline = get_sub_field('areaheadline');
                    $feature = get_sub_field('feature');
                    $description = get_sub_field('description');
                    $descriptionposition = get_sub_field('descriptionposition');
                    $image = get_sub_field('image');
                    $imageposition = get_sub_field('imageposition');
                    $imagesize = get_sub_field('imagesize');
             
                    ?>
                    
                	<?php if( $areaheadline ): ?>
                	<h3 class="areaheadline"><?php echo $areaheadline; ?></h3>
                  	<?php endif; ?>
              		
                    <?php if( $id ): ?>
                    <div class="accordion-group">
                    
                		<div class="accordion-heading">
                  			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $id; ?>">
                    			<?php echo $feature; ?>
                                <img src="http://www.keyosk.io/wp-content/themes/keyosk/images/check.jpg" width="16" height="16" class="feature-check" />
                  			</a>
                		</div>
                        
                        <?php if( $imagesize ): ?>
                		<div id="<?php echo $id; ?>" class="accordion-body collapse">
                  			<div class="accordion-inner">
                    			<?php if( $image ): ?>
                                <div class="feature-image-small <?php echo $imageposition; ?>">
                                    <img src="<?php echo $image; ?>" />	
                                </div>
                                <?php endif; ?>
                                <div class="feature-text <?php echo $descriptionposition; ?>-small">
                                    <?php echo $description; ?>
                                </div>
                                <br class="clear" />
                  			</div>
                		</div>
                        <?php else: ?>
                		<div id="<?php echo $id; ?>" class="accordion-body collapse">
                  			<div class="accordion-inner">
                    			<?php if( $image ): ?>
                                <div class="feature-image <?php echo $imageposition; ?>">
                                    <img src="<?php echo $image; ?>" />	
                                </div>
                                <?php endif; ?>
                                <div class="feature-text <?php echo $descriptionposition; ?>">
                                    <?php echo $description; ?>
                                </div>
                                <br class="clear" />
                  			</div>
                		</div>
                        <? endif; ?>
                        
              		</div>
                    <?php endif; ?>
                    
                    <?php endwhile; ?>
                <?php endif; ?>
                    
            	</div><!-- accordion -->
                
                
                
				
				
				
				
				
				
				
				
				
				
				
				
				<?php
                /* Run the loop to output the page.
                 * If you want to overload this in a child theme then include a file
                 * called loop-page.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'page' );
                ?>
                
            </div><!-- features -->
            <br class="clear" />
    
    	</div><!-- row -->

<?php get_footer(); ?>
