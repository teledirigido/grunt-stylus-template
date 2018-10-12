<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <?php 
      $meta = array(
        'title' => 'PHP, Stylus &amp; Grunt template by miguel.nz',
        'description' => 'Minimal boilerplate, useful and unobstructive.',
        'image' => 'og_image.png',
        'url' => 'http://miguel.nz/template'
      );
    ?>

    <title><?php echo $meta['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">        
    <meta name="description" content="<?php echo $meta['description']; ?>">
    <meta name="author" content="Miguel Garrido">
    
    <meta property="og:title" content="<?php echo $meta['title']; ?>">
    <meta property="og:type" content="website"> 
    <meta property="og:url" content="<?php echo $meta['url']; ?>">
    <meta property="og:image" content="<?php echo $meta['image']; ?>">
    <meta property="og:description" content="<?php echo $meta['description']; ?>">

    <meta name="twitter:card" content="<?php echo $meta['image']; ?>">
    <meta name="twitter:title" content="<?php echo $meta['title'];  ?>">
    <meta name="twitter:description" content="<?php echo $meta['description']; ?>">
    <meta name="twitter:image:src" content="<?php echo $meta['image']; ?>">

    <link rel="stylesheet" href="style.css">
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXX-X"></script> -->

  </head>
  <body>
    <script>
      if (window.location.host==="domain.com" || window.location.host==="www.domain.com") {
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-XXXXXXX-X');
      }
    </script>

    <!--[if lte IE 9]>
      <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->