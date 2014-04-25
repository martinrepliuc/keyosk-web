<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
/* Start the Loop.
 *
 * In Twenty Ten we use the same loop in multiple contexts.
 * It is broken into three main parts: when we're displaying
 * posts that are in the gallery category, when we're displaying
 * posts in the asides category, and finally all other posts.
 *
 * Additionally, we sometimes check for whether we are on an
 * archive page, a search page, etc., allowing for small differences
 * in the loop on each template without actually duplicating
 * the rest of the loop that is shared.
 *
 * Without further ado, the loop:
 */ 
?>

<?php while ( have_posts() ) : the_post(); ?>
            
            <article>
            	<div class="article-headline">
                	<h2><a href="<?php the_permalink(); ?>" data-hover="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="article-content">
                	<div class="row">
                        <div class="span2 post-info">
                            <ul>
                                <li>on <?php echo get_the_date(); ?></li>
                                <li>in <?php the_category(' &bull; '); ?></li>
                                <li>by <?php the_author(); ?></li>
                            </ul>
                        </div>
                        <div class="span7 post-text">
                            <?php the_excerpt(); ?>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </article>

<?php endwhile; // End the loop. Whew. ?>
