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
            <section id="facets" class="clear">
                <div class="wrapper">
                    <h2><strong>Education and health</strong> are our main priorities, but there are many facets to our work</h2>
                    <div class="facets-row">
                        <div class="left-pane">
                            <a href="http://peaceandhope.gallowayweb.design/humanitarian-aid/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/humanitarian-header.png" alt="humanitarian aid"></a>
                            <p>Our global recycling program collects surplus equipment and ships it to Nicaragua several times a year, where it is greatly valued. Priorities are medical equipment and supplies for hospitals and clinics, school furniture and vocational equipment. <a href="http://peaceandhope.gallowayweb.design/humanitarian-aid/">Read more...</a></p>
                            <iframe class="facets-vid" src="https://player.vimeo.com/video/246787192?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="right-pane">
                            <a href="http://peaceandhope.gallowayweb.design/community-building/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/community-header.png" alt="community building"></a>
                            <p>We support vocational centres and community projects. Volunteers share their love and their talents by working with local churches, woman’s and children’s groups to teach vocational skills or help with feeding programmes. <a href="http://peaceandhope.gallowayweb.design/community-building/">Read more...</a></p>
                            <iframe src="https://player.vimeo.com/video/246787084?color=ff9933&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="facets-row">
                        <div class="left-pane">
                            <a href="http://peaceandhope.gallowayweb.design/medical-and-dental-teams/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/medical-header.png" alt="medical and dental"></a>
                            <p>Working in remote and impoverished communities where very little medical care is available, volunteer dentist and medical professionals relieve acute pain and support local services. <a href="http://peaceandhope.gallowayweb.design/medical-and-dental-teams/">Read more...</a></p>
                            <iframe src="https://player.vimeo.com/video/246786908?color=ff9933&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="right-pane">
                            <a href="http://peaceandhope.gallowayweb.design/construction-projects/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/construction-header.png" alt="construction"></a>
                            <p>Our aim is to work with and for the local people to provide communal facilities – schools, clinics, vocational centres, laundries, showers and toilets. Our programme is implemented by teams of volunteers from the UK and around the world. <a href="http://peaceandhope.gallowayweb.design/construction-projects/">Read more...</a></p>
                            <iframe src="https://player.vimeo.com/video/246786825?color=ff9933&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>



        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer();?>
