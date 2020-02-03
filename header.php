<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
  <header id="home">
    <nav class="navbar">
      <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
      </span>
      <a href="<?php echo site_url() ?>" class="logo">Caché</a>
      <ul class="main-nav" id="js-menu">
        <!--
          Ova linija koda omogucava da se postavi navigacija koja ce moci da se menja iz admin dela wordpress-a
          <?php wp_nav_menu(array('theme_location' => 'header_menu_location')); ?>
        -->
        <li><a href="<?php echo site_url() ?>" class="nav-links">Početna</a></li>
        <li <?php if (is_page('o-nama')) echo 'class="current-nav-link"' ?> ><a href="<?php echo site_url('/o-nama') ?>" class="nav-links">O nama</a></li>
        <li <?php if (is_page('menu')) echo 'class="current-nav-link"' ?> ><a href="<?php echo site_url('/menu') ?>" class="nav-links">Menu</a></li>
        <li <?php if(get_post_type() == 'post') echo 'class="current-nav-link"'?>><a href="<?php echo site_url('/blog') ?>" class="nav-links">Blog</a></li>
        <li <?php if (is_page('kontakt')) echo 'class="current-nav-link"' ?> ><a href="<?php echo site_url('/kontakt') ?>" class="nav-links">Kontakt</a></li>
      </ul>
    </nav>
  </header>