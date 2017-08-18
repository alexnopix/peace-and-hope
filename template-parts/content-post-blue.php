<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Peace_and_Hope
 */

?>

<article class="blue-pane clear-float" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       <div class="banner yellow-banner">
       <?php the_title( '<h2 class="entry-title post-size">', '</h2>' ); ?>
       </div>
        <header class="entry-header">
            
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'peace-and-hope' ),
            'after'  => '</div>',
        ) );
    ?>
        </div>
        <!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">

        </footer>
        <!-- .entry-footer -->
        <?php endif; ?>
</article>
<!-- #post-<?php the_ID(); ?> -->
