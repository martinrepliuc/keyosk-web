<?php
/**
 * Template Name: API Template
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
            </div>
            <br class="clear" />
            
            <div class="keyosk-api">
                <div class="api-features">
                    <ul>
                    	<li><a href="#get-shots-by-id">GET /shots/:id</a></li>
                        <li><a href="#get-rebounds-by-id">GET /shots/:id/rebounds</a></li>
                        <li><a href="#get-list-of-shots">GET /shots/:list</a></li>
                        <li><a href="#get-player-by-id">GET /players/:id/shots</a></li>
                        <li><a href="#get-player-by-id-following">GET /players/:id/shots/following</a></li>
                        <li><a href="#get-shots-by-id-likes">GET /players/:id/shots/likes</a></li>
                    </ul>
                </div>
                <div class="api-content">
                	<div class="api-section" id="get-shots-by-id">
                        <p><strong>Get shots by ID</strong></p>
                        <p>All API access is over HTTP. All responses are returned as JSON. The API is (mostly) RESTful. Currently, no API key is required, but this will likely change so we can better monitor usage and enforce the Terms of Use (below). The API has been stable, but will retain the beta moniker until API keys are added. API calls are limited to 60 per minute and 10,000 per day. We may change the limit in the future and/or tie it to API keys. Exceeding the limit will result in 403 "Rate Limit Exceeded" responses.</p>
                	</div>
                	<div class="api-section" id="get-rebounds-by-id">
                        <p><strong>Get rebounds by ID</strong></p>
                        <p>All API access is over HTTP. All responses are returned as JSON. The API is (mostly) RESTful. Currently, no API key is required, but this will likely change so we can better monitor usage and enforce the Terms of Use (below). The API has been stable, but will retain the beta moniker until API keys are added. API calls are limited to 60 per minute and 10,000 per day. We may change the limit in the future and/or tie it to API keys. Exceeding the limit will result in 403 "Rate Limit Exceeded" responses.</p>
                	</div>
                	<div class="api-section" id="get-list-of-shots">
                        <p><strong>Get shots by ID</strong></p>
                        <p>All API access is over HTTP. All responses are returned as JSON. The API is (mostly) RESTful. Currently, no API key is required, but this will likely change so we can better monitor usage and enforce the Terms of Use (below). The API has been stable, but will retain the beta moniker until API keys are added. API calls are limited to 60 per minute and 10,000 per day. We may change the limit in the future and/or tie it to API keys. Exceeding the limit will result in 403 "Rate Limit Exceeded" responses.</p>
                	</div>
                	<div class="api-section" id="get-player-by-id">
                        <p><strong>Get player by ID</strong></p>
                        <p>All API access is over HTTP. All responses are returned as JSON. The API is (mostly) RESTful. Currently, no API key is required, but this will likely change so we can better monitor usage and enforce the Terms of Use (below). The API has been stable, but will retain the beta moniker until API keys are added. API calls are limited to 60 per minute and 10,000 per day. We may change the limit in the future and/or tie it to API keys. Exceeding the limit will result in 403 "Rate Limit Exceeded" responses.</p>
                	</div>
                	<div class="api-section" id="get-player-by-id-following">
                        <p><strong>Get shots by ID</strong></p>
                        <p>All API access is over HTTP. All responses are returned as JSON. The API is (mostly) RESTful. Currently, no API key is required, but this will likely change so we can better monitor usage and enforce the Terms of Use (below). The API has been stable, but will retain the beta moniker until API keys are added. API calls are limited to 60 per minute and 10,000 per day. We may change the limit in the future and/or tie it to API keys. Exceeding the limit will result in 403 "Rate Limit Exceeded" responses.</p>
                	</div>
                	<div class="api-section" id="get-shots-by-id-likes">
                        <p><strong>Get shots by ID</strong></p>
                        <p>All API access is over HTTP. All responses are returned as JSON. The API is (mostly) RESTful. Currently, no API key is required, but this will likely change so we can better monitor usage and enforce the Terms of Use (below). The API has been stable, but will retain the beta moniker until API keys are added. API calls are limited to 60 per minute and 10,000 per day. We may change the limit in the future and/or tie it to API keys. Exceeding the limit will result in 403 "Rate Limit Exceeded" responses.</p>
                	</div>
                </div>
            </div>

				<?php
                /* Run the loop to output the page.
                 * If you want to overload this in a child theme then include a file
                 * called loop-page.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'page' );
                ?>
        </div><!-- row -->

<?php get_footer(); ?>
