<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- font awesome fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300italic,300' rel='stylesheet' type='text/css'>

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
    
    <div class="header">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    </div>


   
    <!--   <?php the_post_thumbnail('large-size'); ?> -->
    

    

  </div> <!-- /.container -->
</header><!--/.header-->

