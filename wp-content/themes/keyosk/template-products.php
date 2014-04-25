<?php
/**
 * Template Name: Products Template
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
    		
            <div class="span1"></div>
            <div class="span10 headline align-center">
                <h2><?php if(get_field('headline')) { echo get_field('headline'); } ?>
                    <span><?php if(get_field('subheadline')) { echo get_field('subheadline'); } ?></span>
                </h2>
            </div>
            <div class="span1"></div>
            <br class="clear" />
            
            <div class="products">
            
                <?php $args = array( 'post_type' => 'keyosk_products', 'posts_per_page' => 18 ); ?>
                <?php $loop = new WP_Query( $args ); ?>
                
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <div class="span6 single-product align-center">
                    <a href="<?php the_permalink(); ?>" class="product-link"></a>
                    <div class="the-product">
                        <?php the_post_thumbnail('full'); ?>
                    </div>      
                    <div class="product-info">
                        <div class="product-headline"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
                        <div class="product-description-short">
                            <?php if(get_field('shortdescription')) { echo get_field('shortdescription'); } ?>
                        </div>
                    </div>
                </div>
                
                <?php endwhile; ?>
                
                <br class="clear" />
                
            </div> <!-- Products -->
    
    	</div>

<?php get_footer(); ?>
