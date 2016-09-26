<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
    <div class="header-wrapper body-wrapper">
   
    <div id="menu-container">
        <div class="logo">
            
            <!-- options acf !!!!!!-->
            <?php $image = get_field('header-logo', 'option'); ?>
            <?php $page_id = 4; ?>
            <a href="<?php echo get_permalink( $page_id ); ?>"> 
                <img width="180"  src="<?php echo $image ['sizes']['logo'] ?>"> 
            </a>

        </div>
        <!-- main nav -->
        <nav class="desktop-nav ">
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'main'
            )); ?>
        </nav>
        <!-- mobile nav -->
        <nav class="mobile ">
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'mobile'
            )); ?>
        </nav>
        
        <!-- hamburger menu -->
        <a href="#" class="mobileNavIcon"><i class="fa fa-bars"></i></a>

    </div>


</header><!--/.header-->

