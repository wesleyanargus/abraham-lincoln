<!-- Theme open sourced at https://github.com/joom/abraham-lincoln -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
      if ( is_category('204') || in_category('204') ) { //hides "hidden archives"
        echo '<meta name="robots" content="noindex,nofollow" />';
      }
      if ( $_SERVER['REQUEST_URI'] == "/user/apachner/"  ) { //hides certain users' articles
        echo '<meta name="robots" content="noindex,nofollow" />';
      }
    ?>
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/abraham/stylesheet.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/dist/argus.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?>">
    <meta itemprop="description" content="Wesleyan University's twice-weekly student newspaper since 1868.">
    <meta itemprop="image" content="http://wesleyanargus.com/wp-content/themes/abraham/assets/img/logo2.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://wesleyanargus.com/" />
    <meta property="og:image" content="http://wesleyanargus.com/wp-content/themes/abraham/assets/img/logo2.png" />
    <meta property="og:description" content="Wesleyan University's twice-weekly student newspaper since 1868." />
    <meta property="og:site_name" content="The Wesleyan Argus" />

    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
