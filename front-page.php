<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Peace_and_Hope
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section id="front-page-panel" class="blue-pane">
                <div class="wrapper clear">
                    <div class="banner yellow-banner">
                        <h2>About Us</h2>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/three-girls.png" alt="three girls" id="three-girls">
                    <p><strong>The Peace and Hope Trust</strong> is a UK based charity with a Christian ethos. We have been working amongst poor and marginalised communities in Nicaragua since 1996</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="map" id="map">
                    <p>Since then, many volunteers have caught the same vision to help a country that is regularly affected by natural disasters, hurricanes, earthquakes, volcanic eruptions, floods and landslides and remains one of the neediest in the world.</p>
                </div>
            </section>



        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer();?>
