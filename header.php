<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peace_and_Hope
 */

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <script>
            // Picture element HTML5 shiv
            document.createElement("picture");

        </script>
        <script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.min.js" async></script>
        <title>The Peace and Hope Trust</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">

        <!-- Dynamic styles -->
        <style type="text/css">
            <?php $custom_logo_id=get_theme_mod( 'custom_logo');
            $image=wp_get_attachment_image_src( $custom_logo_id, 'full');
            ?>#logo {
                background: url("<?php echo $image[0]; ?>") no-repeat;
            }

        </style>
        <!--  Theme-color to browser toolbar (Chrome for Android only) -->
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header id="header" class="clear">
                <!--  Background #logo set in dynamic styles -->
                <h1 id="logo-h1">
                    <a id="logo" href="<?php echo site_url(); ?>">The Peace and Hope Trust</a>
                </h1>
                <nav id="site-navigation" class="main-navigation">
                    <h2>Main Navigation</h2>
                    <div id="burger-nav"></div>
                    <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
                </nav>
                <!-- #site-navigation -->
            </header>
            <!-- #masthead -->

            

            <div id="content" class="site-content clear-header">
