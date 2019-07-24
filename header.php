<!DOCTYPE html>
<html lang="en">

<?php
view::stylesheet("themes/startbootstrap-creative/vendor/fontawesome-free/css/all.min.css");
view::stylesheet("https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic");
view::stylesheet("themes/startbootstrap-creative/vendor/magnific-popup/magnific-popup.css");
view::stylesheet("themes/startbootstrap-creative/vendor/bootstrap/css/bootstrap.min.css");
view::stylesheet("themes/startbootstrap-creative/css/creative.css");
view::head();
?>
<style>
:root {
  --main-color: <?=gila::option('theme.color')?>
}
header.masthead {
  background-image: url("<?=gila::option('theme.header-image','../img/header.jpg')?>");
}
</style>


<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?=gila::base_url()?>"><?=gila::config('title')?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
