<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
    
        <section>
        
        	<div class="filter-posts">
            
            	<!-- GET CATEGROEIS AS DROPDOWN -->
				<?php wp_dropdown_categories('show_option_none=Select category'); ?>
            
                <script type="text/javascript">
                    var dropdown = document.getElementById("cat");
                    function onCatChange() {
                        if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                            location.href = "<?php echo get_option('home'); ?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
                        }
                    }
                    dropdown.onchange = onCatChange;
                </script>
                
	        	<!-- GET ARCHIVE AS DROPDOWN -->
                <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
              		<option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
              		<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
                </select>
                
           	</div>

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
        
        </section> <!-- Posts -->
        
        <aside>
        	<h2>Categories</h2>
            <ul class="categories">
            	<?php wp_list_categories('title_li='); ?>
            </ul>
            <h2>Archive</h2>
            <ul class="archive">
            	<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
            </ul>
        </aside> <!-- Sidebar -->

<?php get_footer(); ?>
