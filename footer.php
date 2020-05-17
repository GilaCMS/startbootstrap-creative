
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading"><?=Gila::option('theme.contact-title','Let\'s Get In Touch!')?></h2>
          <hr class="my-4">
          <p class="mb-5"><?=Gila::option('theme.contact-text','Ready to start your next project with us? That\'s great! Give us a call or send us an email and we will get back to you as soon as possible!')?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
          <p><?=Gila::option('theme.contact-phone','123-456-6789')?></p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
          <p>
            <a href="mailto:<?=Gila::option('theme.contact-email','')?>">
              <?=Gila::option('theme.contact-email','your-email@your-domain.com')?>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <?=View::script("themes/startbootstrap-creative/vendor/jquery/jquery.min.js")?>
  <?=View::script("themes/startbootstrap-creative/vendor/bootstrap/js/bootstrap.bundle.min.js")?>

  <!-- Plugin JavaScript -->
  <?=View::script("themes/startbootstrap-creative/vendor/jquery-easing/jquery.easing.min.js")?>
  <?=View::script("themes/startbootstrap-creative/vendor/scrollreveal/scrollreveal.min.js")?>
  <?=View::script("themes/startbootstrap-creative/vendor/magnific-popup/jquery.magnific-popup.min.js")?>

  <!-- Custom scripts for this template -->
  <?=View::script("core/lazyImgLoad.js")?>
  <?=View::script("themes/startbootstrap-creative/js/creative.min.js")?>
</body>

</html>
