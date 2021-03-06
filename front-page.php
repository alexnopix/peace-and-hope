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
    <div id="lead-banner">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/banner-sun-400v2.jpg" media="(max-width: 400px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/banner-sun-600v2.jpg" media="(max-width: 600px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/banner-sun-800v2.jpg" media="(max-width: 800px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/banner-sun-1200v2.jpg" media="(max-width: 1200px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner-sun.jpg" alt="lead banner">
        </picture>
        <h2>"Sympathy is no substitute for action"<span> - David Livingstone</span></h2>
    </div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section id="intro-panel" class="blue-pane">
                <div class="wrapper clear">
                    <div class="banner yellow-banner">
                        <h2>The Peace and Hope Trust</h2>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="map" id="map1">
                    <p>We are a UK based charity with a Christian ethos. We have been working amongst poor and marginalised communities in Nicaragua since we were founded by <a href="http://www.peaceandhope.org.uk/our-founder/">Mike Cole</a> in 1996.</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="map" id="map2">
                    <p>Since then, many volunteers have caught the same vision to help a country that is regularly affected by natural disasters, hurricanes, earthquakes, volcanic eruptions, floods and landslides and remains one of the neediest in the Western Hemisphere.</p>
                </div>
                <div id="events" class="wrapper">
                <h3>Upcoming Events</h3>
                <p><strong>17th April 2018</strong> - Our team leaves for Nicaragua to build a school.</p>
                <p><strong>9th June 2018</strong> - Open Garden event, 11:00am – 5:00pm. The <a href="http://thruxtonrectory.co.uk/visitor-information">The Old Rectory</a>, Thruxton near Hereford. HR2 9RX.  Off B4348 between Vowchurch and A465.</p>
                <p><strong>10th July 2018</strong> - Summer team departure for 2 or 3 weeks.   Applications by the 1st of June please.</p>
                <p><strong>6th October 2018</strong> - Ladies Fashion Show, Gorsley Baptist Church. Tickets available from  <a href="mailto:admin@peaceandhope.org.uk">admin@peaceandhope.org.uk</a>.</p>
                <p><strong>13th October 2018 (Provisional)</strong> - Autumn Gathering.</p>
                 </div>
            </section>
            <section id="facets" class="clear">
                <div class="wrapper">
                    <h2><strong>Education and health</strong> are our main priorities, but there are many facets to our work.</h2>
                    <div class="facets-row">
                        <div class="left-pane">
                            <a href="http://www.peaceandhope.org.uk/humanitarian-aid/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/humanitarian-header.png" alt="humanitarian aid"></a>
                            <p>Our recycling program collects surplus equipment and ships it to Nicaragua several times a year, where it is greatly valued. Priorities are medical equipment and supplies for hospitals and clinics, school furniture and vocational equipment. <a href="http://www.peaceandhope.org.uk/humanitarian-aid/">Read more...</a></p>
                            <div class="iframe-wrapper">
                                <iframe class="facets-vid" src="https://player.vimeo.com/video/246787192?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="right-pane">
                            <a href="http://www.peaceandhope.org.uk/community-building/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/community-header.png" alt="community building"></a>
                            <p>We support vocational centres and community projects. Volunteers share their love and their talents by working with local churches, women’s and children’s groups to teach vocational skills or help with feeding programmes. <a href="http://www.peaceandhope.org.uk/community-building/">Read more...</a></p>
                            <div class="iframe-wrapper">
                                <iframe class="facets-vid" src="https://player.vimeo.com/video/246787084?color=ff9933&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="facets-row">
                        <div class="left-pane">
                            <a href="http://www.peaceandhope.org.uk/medical-and-dental-teams/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/medical-header.png" alt="medical and dental"></a>
                            <p>Working in remote and impoverished communities where very little medical care is available, volunteer dentist and medical professionals relieve acute pain and support local services. <a href="http://www.peaceandhope.org.uk/medical-and-dental-teams/">Read more...</a></p>
                            <div class="iframe-wrapper">
                                <iframe class="facets-vid" src="https://player.vimeo.com/video/246786908?color=ff9933&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="right-pane">
                            <a href="http://www.peaceandhope.org.uk/construction-projects/"><img class="facets-header" src="<?php echo get_template_directory_uri(); ?>/images/construction-header.png" alt="construction"></a>
                            <p>Our aim is to work with and for the local people to provide communal facilities – schools, clinics, vocational centres, laundries, showers and toilets. Our programme is implemented by teams of volunteers from the UK and around the world. <a href="http://www.peaceandhope.org.uk/construction-projects/">Read more...</a></p>
                            <div class="iframe-wrapper">
                                <iframe class="facets-vid" src="https://player.vimeo.com/video/246786825?color=ff9933&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <section id="faith-in-action" class="blue-pane">
                <div class="wrapper clear">
                    <div class="banner yellow-banner">
                        <h2>Faith In Action</h2>
                    </div>
                    <p><strong>"Faith without works is dead"</strong> - These gospel words of James underline our calling to reach those not served by others in Nicaragua, and to demonstrate God's love in action.</p>
                    <p>Volunteers for the Trust's construction projects in Nicaragua are drawn mainly, though not exclusively, from our key support base of church communities around the UK, particularly in Gloucestershire, Guernsey and the North East of England.</p>
                    <p>We form natural partnerships with local churches in Nicaragua. This allows us to enjoy great fellowship and worship with our Nicaraguan friends, and also helps with logistical arrangements.</p>
                    <p>We receive many requests for help, and working in co-operation with local authorities, we prioritise building and other projects only on the basis of need, feasibility and sustainability.</p>
                    <p>We are stewards of the money that supporters donate, and all projects must demonstrate a tangible benefit to the community, and good value for money.</p>
                </div>
            </section>
            <section id="how-to-help" class="blue-pane">
                <div class="wrapper clear">
                    <div class="banner yellow-banner">
                        <h2>How You Can Help</h2>
                    </div>
                    <p><strong>There are many ways you can help</strong> to make a difference in the lives of some of the poorest people in the world. Here are just a few...</p>
                    <a href="https://www.give.net/20027824">
                        <h3>Donate</h3>
                    </a>
                    <p>One-off gifts, regular donations and legacy gifts are all very welcome. The money you give supports the on-going work of the Trust and provides a lifeline for the poor and isolated people we serve. <a href="https://www.give.net/20027824">Click here to Donate!</a></p>
                    <p>Also, please consider supporting our work by signing up to Easy Fund Raising. Each time you make a purchase through selected stores, we receive a small donation at no extra cost to you! <a href="https://www.easyfundraising.org.uk/causes/peaceandhope">Click here to sign up.</a></p>
                    <h3>Volunteer some time</h3>
                    <p>Help us to source desperately needed equipment to ship to Nicaragua. Volunteers are needed at the warehouse in Linton when it’s time to pack the shipping containers, and we also need people to help out in our charity shop in Ross-On-Wye.</p>
                    <h3>Pray</h3>
                    <p>Support our teams and our work in prayer. Sign up to our newsletter and receive regular prayer points covering all our activities.</p>
                    <h3>Get involved in Nicaragua</h3>
                    <p>Get your hands dirty! Whatever your age, you could make a valuable contribution as a team member on one of our construction projects in Nicaragua. The Caribbean coast of Nicaragua is particularly lacking in basic infrastructure, so join one of our teams and help build or renovate schools, clinics and vocational centres that will help lift people out of poverty. No specialist building skills are required, though they are useful!</p>
                </div>
            </section>



        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer();?>
