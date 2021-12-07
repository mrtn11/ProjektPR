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

$latestArticleId = $db->getLatestArticle();
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
    <!--Main content-->
    <section class="container margin-bottom-50"> 
         
      <div class="about-container">
      
        <div class="about-container-left">
          <img src="<?php echo $latestArticleId['obrazok'] ?>" alt="Image" class="img-responsive">
        </div>
        
        <div class="about-container-right">
          <h2 class="about-title">NEWS</h2>
          <p class="about-description">
          </p>
          <a href="auto-details.php?id=<?php echo $latestArticleId['id'] ?>" class="about-link"><?php echo $latestArticleId['nazov'] ?></a>
        </div>
        
      </div>



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
        ?>
     <!-- Footer content-->

  </body>
  </html>
