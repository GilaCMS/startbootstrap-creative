
  <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong><?=gila::option('theme.header-title','Your Favorite Source of Free Bootstrap Themes')?></strong>
          </h1>
          <hr>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5"><?=gila::option('theme.header-text','Start Bootstrap can help you build better websites using the Bootstrap CSS frame')?></p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-primary" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white"><?=gila::option('theme.about-title','We\'ve got what you need!')?></h2>
          <hr class="light my-4">
          <p class="text-faded mb-4"><?=gila::option('theme.about-text','Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!')?></p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">At Your Service</h2>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
            <h3 class="mb-3">Sturdy Templates</h3>
            <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
            <h3 class="mb-3">Ready to Ship</h3>
            <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
            <h3 class="mb-3">Up to Date</h3>
            <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
            <h3 class="mb-3">Made with Love</h3>
            <p class="text-muted mb-0">You have to make your websites with love these days!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-0" id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters popup-gallery">
<?php
  foreach(core\models\post::getPosts(['posts'=>6]) as $post) {
?>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?=$post['img']?>">
            <img class="img-fluid" src="<?=view::thumb($post['img'], 'thumb/', 600)?>" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-name">
                  <?=$post['title']?>
                </div>
              </div>
            </div>
          </a>
        </div>
<?php } ?>
      </div>
    </div>
  </section>

  <section class="bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
    </div>
  </section>
