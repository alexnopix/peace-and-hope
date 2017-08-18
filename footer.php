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
                <li><i class="fa fa-envelope fa-style" aria-hidden="true"></i>admin@peaceandhope.org.uk</li>
                <li><i class="fa fa-globe fa-style" aria-hidden="true"></i><a href="http://www.peaceandhope.org.uk">www.peaceandhope.org.uk</a></li>
                <li><i class="fa fa-twitter fa-style" aria-hidden="true"></i>@peaceandhope.org.uk</li>
            </ul>
            <div id="address">
                <p>Little Llanafon Farm,<br> Dorston,<br> Herefordshire<br>HR3 6AT</p>
            </div>
            <h2 id="thank-you">Thank you for your support!</h2>

            <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Wordpress Theme: %1$s by %2$s.', 'peace-and-hope' ), 'Peace and Hope', 'Galloway Web Design' );
			?>
        </div>
        <!-- .site-info -->
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>

    </body>

    </html>
