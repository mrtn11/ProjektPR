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
      <body class="services-page">

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

        <div class="about-container-2 margin-bottom-50">
            <div class="about-container-inner">
                <h3 class="about-title-2">BMW M5 CS</h3>
                <iframe width="420" height="345" src="https://www.youtube.com/embed/vQXvyV0zIP4">
                </iframe>
                <p class="about-description">The most powerful BMW production car there has ever been: the BMW M5 CS.</p>
            </div>
            <div class="about-container-inner">
                <h3 class="about-title-2">Porsche 911 Turbo S</h3>
                <iframe width="420" height="345" src="https://www.youtube.com/embed/nT2mjvWC3e8">
                </iframe>
                <p class="about-description">A genuine sports car with the comfort of a luxury sedan, without any compromises in everyday life.</p>
            </div>
        </div>
    </section> <!-- Main content -->
    <!--Footer content-->
        <?php
        include_once "parts/footer.php";
        ?> <!-- Footer content-->

  </body>
  </html>
