<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Peace_and_Hope
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main clear">
        <div class="wrapper">
                <div class="post-left">


                    <?php
		if ( have_posts() ) : ?>

                        <?php
			/* Start the Loop */

        $i = 0;
        while ( have_posts() ) : the_post();
            if ($i % 2 == 0) :
                get_template_part( 'template-parts/content', 'post-blue' );
                    
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            else:
                get_template_part( 'template-parts/content', 'post-yellow' );
                    
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                
            endif;

            $i++;
            
            

		endwhile; // End of the loop.
		

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
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
