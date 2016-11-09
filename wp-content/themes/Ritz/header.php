<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
<!-- Bootstrap Styles -->
  <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  
  <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Carousel Slider -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/owl-carousel.css" rel="stylesheet">
  
  <!-- CSS Animations -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

  <!-- SLIDER ROYAL CSS SETTINGS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/royalslider/royalslider.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">
  
  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/rs-plugin/css/settings.css" media="screen" />
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
 
<body <?php body_class(); ?>>
 <!--
    <header>
        <hgroup>
            <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2><?php bloginfo( 'description' ); ?></h2>
        </hgroup>
 
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to the 'starkers_menu' function which can be found in functions.php.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
        <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
    </header>
    -->
    <div id="topbar" class="clearfix">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="social-icons">
                    <span><a style="display: block;color: #eddcca;background-color: #02376d;border-radius: 80%;text-align: center;width: 38px;height: 36px;line-height: 34px;margin-top:2px;border: 2px solid transparent;" data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                    <span><a style="display: block;color: #eddcca;background-color: #d21819;border-radius: 80%;text-align: center;width: 38px;height: 36px;line-height: 34px;margin-top:2px;border: 2px solid transparent;" data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
<!--                    <span><a style="display: block;color: #eddcca;background-color: #2878bf;border-radius: 80%;text-align: center;width: 38px;height: 36px;line-height: 34px;margin-top:2px;border: 2px solid transparent;" data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>-->
                    <span><a style="display: block;color: #eddcca;background-color: #1883bb;border-radius: 80%;text-align: center;width: 38px;height: 36px;line-height: 34px;margin-top:2px;border: 2px solid transparent;" data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                </div><!-- end social icons -->
            </div><!-- end columns -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <!--
                <div class="topmenu">
                    <span class="topbar-login"><i class="fa fa-user"></i> <a href="login.php">Login / Register</a></span>
                </div><!- end top menu -->
                <div class="callus">
                    <span class="topbar-email"><i class="fa fa-envelope"></i> <a href="mailto:info@ritzcont.com">info@ritzcont.com</a></span>
                    <span class="topbar-phone"><i class="fa fa-phone"></i> +971 55 1693 150</span>
                </div><!-- end callus -->
            </div><!-- end columns -->
        </div><!-- end container -->
    </div><!-- end topbar -->
    
    <header id="header-style-1">
        <div class="container">
            <nav class="navbar yamm navbar-default">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"></a>
                </div><!-- end navbar-header -->
                
                <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown yamm-fw"><a href="home">Home</a></li><!-- end drop down -->
                        <li><a href="about-us">About Us</a></li>
                        <!-- standard drop down -->
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Our Projects <div class="arrow-up"></div></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-4">
                                                <li><h3><i class="fa fa-check"></i>Villa Projects</h3></li>
                                                <li><a href="ground-floor-villa">Ground Floor Villa</a></li>
                                                <li><a href="project-villa1">G+1 Floor Villa with Outhouse</a></li>
                                                <li><a href="project-villa2">G+1 Floor Villa with Outhouse</a></li>
                                                <li><a href="project-villa3">G+1 Floor Villa</a></li>
                                                <li><a href="project-villa4">G+1 Floor Villa with Kitchen Block</a></li>
                                                <li><a href="project-villa5">Ground Floor Villa</a></li>

                                                <li><a href="project-villa6">G+1 Villa With Service Block</a></li>
                                                <li><a href="project-villa7">G+1 Floor Villa With Service Block</a></li>
                                                <li><a href="project-villa8">G+1 Villa With Majlis And Service Block</a></li>
                                                <li><a href="project-villa9">G+1 Floor Villa with Service Block</a></li>

                                                <li><a href="project-villa10">G+1 Floor Villa</a></li>
                                                <li><a href="project-villa11">Ground+1+Roof Villa</a></li>
                                                <li><a href="project-villa12">G+1+Service & Majlis Block</a></li>
                                                <!--
                                                <li><a href="project-villa13">B+G+1 Twin Villa</a></li>

                                                <li><a href="project-villa14">G only Twin Villa</a></li>
                                                <li><a href="project-villa15">G+1 Villa</a></li>
                                                <li><a href="project-villa16">G+1+Roof Twin Villa</a></li>
                                                <li><a href="project-villa17">G+1+Roof Twin Villa</a></li>
                                                -->
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i> Warehouse Projects</h3></li>
                                                <li><a href="project-warehouse">Warehouse Project</a></li>    
                                            </ul>
                                            
                                             <ul class="col-sm-4">
                                                <li><h3><i class="fa fa-check"></i>Shead Projects</h3></li>
                                                <li><a href="project-shead">G+M addition in existing Industrial Shed</a></li>
                                                
                                            </ul>
                                            
                                            <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i>Swimming Pool Projects</h3></li>
                                                <li><a href="project-swimming-pool">Swim Project</a></li>
                                                
                                            </ul>
                                             
                                            <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i>Service & Majlis Block Projects</h3></li>
                                                <li><a href="project-majlis-block">G+1+Service & Majlis Block</a></li>
                                                
                                            </ul>
                                             <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i>Mixed Building Projects</h3></li>
                                                <li><a href="project-mixed-building">B+G+M+1 mixed use building</a></li>
                                                
                                            </ul>
                                             <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i>Labour Camp Projects</h3></li>
                                                <li><a href="project-mixed-building">G+2+R Labour Camp</a></li>
                                                
                                            </ul>
                                            <ul class="col-sm-6">
                                                <li><h3><i class="fa fa-check"></i>Commercial & Residential Building Projects</h3></li>
                                                <li><a href="project-residential-building">G+3+Roof Commercial & Residential Building</a></li>
                                               <li><a href="project-residential-building1">G+M+1+RoofAmenities Commercial/Residential Building</a></li>
                                               
                                            </ul>
                                            
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
                        </li><!-- end drop down -->
                        <!-- standard drop down -->                        
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Our Services <div class="arrow-up"></div></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i>Masson Service</h3></li>
                                                <li><a href="mason-service1">Service Name</a></li>
                                                <li><a href="mason-service2">Service Name</a></li>
                                                <li><a href="mason-service3">Service Name</a></li>
                                                <li><a href="mason-service4">Service Name</a></li>
                                              
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i> Electrical Service</h3></li>
                                                <li><a href="electrical-service1">Service Name</a></li>
                                                <li><a href="electrical-service2">Service Name</a></li>
                                                <li><a href="electrical-service3">Service Name</a></li>
                                                <li><a href="electrical-service4">Service Name</a></li>
                                               
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i> Sanitary Service</h3></li>
                                                <li><a href="sanitary-service1">Service Name</a></li>
                                                <li><a href="sanitary-service2">Service Name</a></li>
                                                <li><a href="sanitary-service3">Service Name</a></li>
                                                <li><a href="sanitary-service4">Service Name</a></li>
                                                
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li><h3><i class="fa fa-check"></i> Mechanical Service</h3></li>
                                               <li><a href="mechanical-service1">Service Name</a></li>
                                                <li><a href="mechanical-service2">Service Name</a></li>
                                                <li><a href="mechanical-service3">Service Name</a></li>
                                                <li><a href="mechanical-service4">Service Name</a></li>
                                              
                                            </ul>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
                        </li><!-- end drop down -->
                        <!-- standard drop down -->
                        <li><a href="contact-us">Contact</a></li>
                    </ul><!-- end navbar-nav -->
                </div><!-- #navbar-collapse-1 -->           </nav><!-- end navbar yamm navbar-default -->
        </div><!-- end container -->
    </header><!-- end header-style-1 -->
   