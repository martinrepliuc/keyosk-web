<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    	<div class="row">
        	
            <!-- PRODUCTDETAIL -->
            <div class="product-detail">
                <div class="span5 product-image-full">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="span7 product-description-full">
                	<div class="single-product-heading">
                    	<span class="single-product-headline"><h3><?php the_title(); ?></h3></span>
                        <span class="price"></span>
                        <br class="clear" />
                    </div>
                    <div class="product-info-text">
                        <?php if(get_field('description')) { echo get_field('description'); } ?>
                    </div>
                    <!-- PRODUCTADDONS -->
                    <?php $mainmount = get_field('mainmount'); ?>
                    <?php $mainmountimage = get_field('mainmountimage'); ?>
                    <?php if( $mainmount ): ?>
                    
                    <div class="product-devices">
                    	<h6>1. This bundle includes</h6>
                        <div class="bundle-group">
                        	<div class="bundle-item text-center">
                                <div class="bundle-product"><img src="http://www.keyosk.io/wp-content/uploads/iPad-galaxy.jpg" /></div>
                                <div class="bundle-product-desc">Apple iPad OR Samsung Galaxy Tab 3</div>
                            </div>
                    		<div class="bundle-space"><div class="bundle-space-text text-center">+</div></div>
                        	<div class="bundle-item text-center">
                                <div class="bundle-product"><img src="<?php echo $mainmountimage; ?>" /></div>
                                <div class="bundle-product-desc"><?php echo $mainmount; ?></div>
                            </div>
							<?php $mainmountaddon = get_field('mainmountaddon'); ?>
                            <?php $mainmountaddonimage = get_field('mainmountaddonimage'); ?>
                            <?php if( $mainmountaddon ): ?>
                    		<div class="bundle-space"><div class="bundle-space-text text-center">+</div></div>
                        	<div class="bundle-item text-center">
                                <div class="bundle-product"><img src="<?php echo $mainmountaddonimage; ?>" /></div>
                                <div class="bundle-product-desc"><?php echo $mainmountaddon; ?></div>
                            </div>
                			<?php endif; ?>
                            <br class="clear" />
                        </div>
                    </div>
                    
                    <?php endif; ?>
                </div>
                <br class="clear" />
                
          	</div> <!-- detail -->
            
            <div class="product-addons">
        	
            	<!-- PRODUCTOPTIONS -->
            	<?php $optionheadline = get_field('optionheadline'); ?>
            	<?php if( $optionheadline ): ?>
            	<div class="span12 bundle-headline bundle-border text-center"><h6><?php echo $optionheadline; ?></h6></div>
                <?php endif; ?>
                <div class="span12 bundle-group">
				<?php if( have_rows('option') ): ?>
                    <?php while( have_rows('option') ): the_row(); 
                        // vars
                        $optionitem = get_sub_field('optionitem');
                        $optionitemdesc = get_sub_field('optionitemdesc');
                        $optionitemimage = get_sub_field('optionitemimage');
                        $or = get_sub_field('or');
                    ?>
     				<?php if( $optionitem ): ?>
                    <div class="bundle-item-option text-center">
                    	<div class="bundle-product"><img src="<?php echo $optionitemimage; ?>" /></div>
                        <div class="bundle-product-desc"><?php echo $optionitem; ?><span><?php echo $optionitemdesc; ?></span></div>
                    </div>
                	<?php endif; ?>
     				<?php if( $or ): ?>
                    <div class="bundle-space-option"><div class="bundle-space-text text-center">or</div></div>
                	<?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div><!-- bundle group -->
                
            	<!-- PRODUCTADDOPTIONS -->
            	<?php $addoptionheadline = get_field('addoptionheadline'); ?>
            	<?php if( $addoptionheadline ): ?>
            	<div class="span12 bundle-headline bundle-border text-center"><h6><?php echo $addoptionheadline; ?></h6></div>
                <?php endif; ?>
				<?php if( have_rows('addoption') ): ?>
                    <?php while( have_rows('addoption') ): the_row(); 
                        // vars
                        $addoptionitem = get_sub_field('addoptionitem');
                        $addoptionitemdesc = get_sub_field('addoptionitemdesc');
                        $addoptionitemimage = get_sub_field('addoptionitemimage');
                        $addor = get_sub_field('addor');
                    ?>
     				<?php if( $addoptionitem ): ?>
                <div class="span12 bundle-group">
                    <div class="bundle-item-option text-center">
                    	<div class="bundle-product"><img src="<?php echo $addoptionitemimage; ?>" /></div>
                        <div class="bundle-product-desc"><?php echo $addoptionitem; ?><span><?php echo $addoptionitemdesc; ?></span></div>
                    </div>
                	<?php endif; ?>
     				<?php if( $addor ): ?>
                    <div class="bundle-space-option"><div class="bundle-space-text text-center">or</div></div>
                	<?php endif; ?>
                    <br class="clear" />
                </div><!-- bundle group -->
                <br class="clear" />
                    <?php endwhile; ?>
                <?php endif; ?>
            
            </div> <!-- addons -->
            
     	</div> <!-- row -->
        
<?php get_footer(); ?>