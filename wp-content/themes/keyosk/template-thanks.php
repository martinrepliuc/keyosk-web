<?php
/**
 * Template Name: Thank You Template
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
        
    		<div class="span2"></div>
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
    		<div class="span2"></div>
            <br class="clear" />
            
            <div class="span8 align-form contactform">
            
            	<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" data-parsley-validate>

                    <input type=hidden name="oid" value="00Db0000000e7HY">
                    <input type=hidden name="retURL" value="http://www.keyosk.io/thank-you/">
                
                    <label for="salutation">Salutation</label>
                    <select id="salutation" name="salutation" data-parsley-error-message="Please select your salutation. This field is required." required>
                        <option value="">Choose</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>
                    </select>
                
                    <label for="first_name">First Name</label>
                    <input id="first_name" maxlength="40" name="first_name" type="text" data-parsley-error-message="Please enter your first name. This field is required." required class="safari" />
                
                    <label for="last_name">Last Name</label>
                    <input id="last_name" maxlength="80" name="last_name" type="text" data-parsley-error-message="Please enter your last name. This field is required." required class="safari" />
                    
                    <label for="phone">Phone</label>
                    <input id="phone" maxlength="40" name="phone" type="tel" data-parsley-error-message="Please enter a valid phone number. This field is required." required class="safari" />
                    
                    <label for="email">Email</label>
                    <input id="email" maxlength="80" name="email" type="email" data-parsley-trigger="change" data-parsley-error-message="Enter a valid email address. This field is required." required class="safari" />
                    
                    <label for="company">Company</label>
                    <input id="company" maxlength="40" name="company" type="text" data-parsley-error-message="Please enter your company name. This field is required." required class="safari" />
                    
                    <label for="city">City</label>
                    <input id="city" maxlength="40" name="city" type="text" data-parsley-error-message="Please enter your city. This field is required." required class="safari" />
                    
                    <label for="country">Country</label>
                    <input  id="country" maxlength="40" name="country" type="text" data-parsley-error-message="Please enter your country. This field is required." required class="safari" />
                    
                    <label for="message">Message</label>
                    <textarea id="00Nb00000094w8G" name="00Nb00000094w8G" type="text" data-parsley-error-message="This field is required." required class="safari"></textarea>
                    
                    <label></label>
                    <input type="submit" name="Send Message" class="safari">
                
                </form>
            
				<?php
                /* Run the loop to output the page.
                 * If you want to overload this in a child theme then include a file
                 * called loop-page.php and that will be used instead.
                 get_template_part( 'loop', 'page' );
                 */
                ?>
                
            </div>
            <br class="clear" />
    
    	</div><!-- row -->

<?php get_footer(); ?>
