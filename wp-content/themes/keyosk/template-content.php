<?php
/**
 * Template Name: Content Template
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
            <div class="span8">
                <div class="headline"><h5 class="title-heading"><?php echo get_the_title(); ?></h5></div>

				<?php
                /* Run the loop to output the page.
                 * If you want to overload this in a child theme then include a file
                 * called loop-page.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'page' );
                ?>
            
            </div>
        </div><!-- row -->

<?php get_footer(); ?>
