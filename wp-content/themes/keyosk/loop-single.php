<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            
            <article>
            	<div class="article-headline">
                	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                        <div class="span7 post-single">
                            <?php the_content(); ?>
                			<a href="#" class="recommend button button-active">recommend this article</a>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </article>

<?php endwhile; // end of the loop. ?>