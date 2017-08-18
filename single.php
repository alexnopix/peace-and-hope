<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Peace_and_Hope
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main clear">
            <div class="wrapper">
                <div class="post-left">
                    <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'post-blue' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                </div>
                <div class="sidebar-right">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
get_footer();
