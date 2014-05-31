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
        echo '<meta name="robots" content="noindex" />';
      } 
    ?>
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/abraham/stylesheet.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/argus.css" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>