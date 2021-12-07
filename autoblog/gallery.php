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
<style>
    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
</style>

      <body class="gallery-page">
      <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>

      <?php include_once "parts/menu.php"?>

      <section class="container margin-bottom-50">
       <div class="row">
        <h2 class="col-lg-12 text-center text-uppercase margin-bottom-30">PHOTOGALLERY OF SPORTCARS</h2>
           <div class="gallery">
               <a target="_blank" href="img/about/22.jpg">
                   <img src="img/about/22.jpg" alt="Cinque Terre" width="600" height="400">
               </a>
               <div class="desc">Porsche Taycan</div>
           </div>

           <div class="gallery">
               <a target="_blank" href="img/about/23.jpg">
                   <img src="img/about/23.jpg" alt="Forest" width="600" height="400">
               </a>
               <div class="desc">MB AMG GT S63</div>
           </div>

           <div class="gallery">
               <a target="_blank" href="img/about/24.jpg">
                   <img src="img/about/24.jpg" alt="Northern Lights" width="600" height="400">
               </a>
               <div class="desc">Lamborghini Aventador SVJ</div>
           </div>

           <div class="gallery">
               <a target="_blank" href="img/about/25.jpg">
                   <img src="img/about/25.jpg" alt="Mountains" width="600" height="400">
               </a>
               <div class="desc">BMW 8</div>
           </div>

           <div class="gallery">
               <a target="_blank" href="img/about/26.jpg">
                   <img src="img/about/26.jpg" alt="Mountains" width="600" height="400">
               </a>
               <div class="desc">Aston Martin DBS</div>
           </div>

      </body>
      </div>
    </section>

    <!--Main content-->
    <section class="container margin-bottom-50">


      <!--banner-->
      <div class="tm-banner">
          <h2 class="tm-banner-title">Videos</h2>
          <p class="tm-banner-description">Check out our video section with stunning cinematic videos.</p>
          <a href="services.php" class="tm-banner-link"><i class="fa fa-play"></i></a>
      </div>
    </section> <!-- Main content -->
    <!--Footer content-->
        <?php
        include_once "parts/footer.php";
        ?> <!-- Footer content-->

  </body>
  </html>
