<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php wp_title( ' | ', true, 'right' ); ?></title>
  <link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="container">
    <header id="header">
      <h1>The Parsonage</h1>
      <h2>Handmade Soaps</h2>
      <div class="bubble">
        <span>Shipping now only $5.95 for any order!</span>
      </div>
      <nav>
        <ul class="list-unstyled">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </ul>
      </nav>
    </header>
