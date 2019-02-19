<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo get_bloginfo('name'); ?></title>
     <?php
  if (has_site_icon()) {
	// User set a Site Icon, do something awesome!
      ?>
  <link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>" />
  <?php
}
else {
	// User didn't set a Site Icon, do something else. But still awesome.
    ?>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <?php
    
}
  ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri() . '/main.css' ?>" />
    <script src="<?php echo get_template_directory_uri() . '/main.js' ?>"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <header>
        <div class="container h-container">
            <div class="container-box">
                <div class="hc-logo">
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img 
                    src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $site_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    echo $site_logo[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>
                </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'hc-links' ) ); ?>
                
            </div>
        </div>
    </header>