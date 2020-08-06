<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'depth'          => 4,
              'container'      => 'nav',
              'container_class'=> 'navbar-nav mr-auto',
              'menu_class'     => 'navbar-nav',
              'list_item_class'=> 'nav-item',
              'walker'         => new WP_Bootstrap_Navwalker()
          ));
          ?>
      </div>
    </nav>
  </header>

    <main role="main">