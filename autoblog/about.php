<!DOCTYPE html>
<html lang="en">
<?php
include_once "parts/header.php";
?>
<?php
if(isset($db)) {

} else {
    $db = new stdClass();
}
?>
      <body class="about-page">

        <!-- Preloader -->
        <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
        <!-- End Preloader -->

        <?php include_once "parts/menu.php"?>

      <div class="container margin-bottom-50">
       <div class="row">
        <div class="col-lg-12 tm-overflow-hidden">
          <div class="tm-img-1-container">
            <img src="img/1.jpg" alt="Image description">
            <p class="tm-img-1-description">Benz</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/1.jpg" alt="Image description">
            <p class="tm-img-1-description">Mercedes</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/1.jpg" alt="Image description">
            <p class="tm-img-1-description">BMW</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/1.jpg" alt="Image description">
            <p class="tm-img-1-description">Lexus</p>
          </div>         
        </div>
      </div>
    </div>    

    <!--Main content-->
    <section class="container margin-bottom-50">      
      <div class="about-container">
        <div class="about-container-left">
          <img src="img/about/2.jpg" alt="Image" class="img-responsive">
        </div>
        <div class="about-container-right">
          <h2 class="about-title">fringila ulputate</h2>
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
          <p class="about-description">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
          <a href="#" class="about-link">Duised sitDamet</a>
        </div>
      </div>
      <div class="about-container-2">
        <div class="about-container-inner">
          <h3 class="about-title-2">aenean solcudin</h3>
          <img src="img/about/3.jpg" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
          <a href="#" class="about-link about-link-2">Details</a>
        </div>
        <div class="about-container-inner">
          <h3 class="about-title-2">morbi accumsan</h3>
          <img src="img/about/4.jpg" alt="Image" class="img-responsive margin-bottom-15">          
          <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
          <a href="#" class="about-link about-link-2">Details</a>
        </div>
      </div>

      <!--banner-->
      <div class="tm-banner">
        <h2 class="tm-banner-title">Maecenas</h2>
        <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
        <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
      </div>
    </section> <!-- Main content -->
    <!--Footer content-->
        <?php
        include_once "parts/footer.php";
        ?> <!-- Footer content-->

  </body>
  </html>