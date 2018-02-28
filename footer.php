<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peace_and_Hope
 */

?>

    </div>
    <!-- #content -->

    <footer class="yellow-pane clear-float">
        <div class="wrapper">
            <ul id="contact">
                <li><i class="fa fa-phone fa-style" aria-hidden="true"></i>+44 (0)7517281394</li>
                <li><a href="mailto:admin@peaceandhope.org.uk"><i class="fa fa-envelope fa-style" aria-hidden="true"></i>admin@peaceandhope.org.uk</a></li>
                <li><a href="https://www.facebook.com/groups/186536498351523/"><i class="fa fa-facebook-square fa-style" aria-hidden="true"></i>Follow us on Facebook</a></li>
                <li><a href="https://twitter.com/peaceandhopeuk"><i class="fa fa-twitter fa-style" aria-hidden="true"></i>@peaceandhope.org.uk</a></li>
            </ul>
            <div id="address">
                <p>Little Llanafon Farm,<br> Dorstone,<br> Herefordshire<br>HR3 6AT</p>
            </div>
            <h2 id="thank-you">Thank you for your support!</h2>

            <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Wordpress Theme: %1$s by %2$s.', 'peace-and-hope' ), 'Peace and Hope', 'Galloway Web Design' );
			?>
        </div>
        <div id="footer-menu" class="clear">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </div>
        <!-- .site-info -->
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>

    </body>

    </html>
