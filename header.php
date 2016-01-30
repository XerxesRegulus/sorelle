<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri()?>/library/css/style.css?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav id="hamburger-menu" role="navigation">
  <button class="c-hamburger c-hamburger--htx">
  <span>toggle menu</span>
  </button>
  <div class="nav-social-icons">
    <a href="#"><i class="ion-social-instagram-outline"></i></a>
    <a href="#"><i class="ion-social-twitter"></i></a>
    <a href="#"><i class="ion-social-facebook"></i></a>
    <a href="#"><i class="ion-social-pinterest"></i></a>
  </div>
  <div class="nav-main-title">
    <h1>Elyne Villamor</h1>
  </div>
  <div id="nav-links" class="nav-links">
    <a href="#">The Gypsy Ninja</a>
    <a href="#">Life and Adventure Diary</a>
    <a href="#">All These & More</a>
    <a href="#">The Oak Shoppe</a>
  </div>
</nav>
<header id="header" role="banner" class="top-header">
  <img src="<?= get_template_directory_uri()?>/library/images/header.jpg?>" alt="" />
</header>
<div class="nav-links detached-nav-links">
  <a href="#">The Gypsy Ninja</a>
  <a href="#">Life and Adventure Diary</a>
  <a href="#">All These & More</a>
  <a href="#">The Oak Shoppe</a>
</div>
<div id="container">
