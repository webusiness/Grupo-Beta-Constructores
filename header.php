<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- CSS -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/kickstart.css" media="all" /> <!-- KICKSTART -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.maximage.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/screen.css">
<!-- /CSS -->

<?php wp_head(); ?>

<!-- Javascripts -->
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/kickstart.js"></script> <!-- KICKSTART -->
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.maximage.min.js"></script>
<!-- /Javascripts -->
 
</head>
 
<body <?php body_class(); ?>>
    
    <div id="maximage">
        <img src="<?php bloginfo('template_directory'); ?>/images/fondo.jpg">
        <img src="<?php bloginfo('template_directory'); ?>/images/fondo.jpg">
    </div>

    <header id="cabecera">
        <div class="row grid">
            <div class="col_6 left">
                <figure id="logo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo Grupo Beta Constructores">
                </figure>
            </div>
            <div class="col_6 right">
                <div id="buscar">
                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                        <div>
                            <input type="text" value="" name="s" id="s" placeholder="Buscar..." />
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearflix"></div>
        </div>
    </header>
    <div id="menu-nav" class="grid">
        <div class="col_4"></div>
        <div class="col_8 right">    
            <nav>
                <?php wp_nav_menu( 
                array( 
                'container' => 'nav', 
                'fallback_cb' => 
                'starkers_menu',
                'menu_class' => 'menu',
                'theme_location' => 'primary'
                ) ); ?>
            </nav>
        </div>
        <div class="clearflix"></div>
    </div>