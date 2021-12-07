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
  <body class="contact-page">
    
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->

    <?php include_once "parts/menu.php"?>

    <!-- Main content -->
    <section class="container tm-contact-main">
      <div class="row">
        <div id="google-map"></div>
      </div>
      <div class="row">
        <div class="contact-form-container">
          <h2 class="contact-title">Contact Us</h2>
          <p>We would love to hear from you.</p>
          <form action="#" method="post" class="tm-contact-form">
              <div class="col-lg-5 col-md-5 contact-form-left">
                <div class="form-group">
                    <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                </div>
                <div class="form-group">
                    <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                </div>
                <div class="form-group">
                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                </div>                
              </div>
              <div class="col-lg-7 col-md-7 contact-form-right">
                <div class="form-group margin-bottom-0">
                    <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 submit-btn-container">
                <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Send Message</button>  
              </div>                        
          </form>
        </div>
      </div>
      <!--banner-->
      <div class="row">
        <div class="tm-banner">
            <h2 class="tm-banner-title">Videoblog</h2>
            <p class="tm-banner-description">Check out our video section with stunning cinematic videos.</p>
            <a href="services.php" class="tm-banner-link"><i class="fa fa-play"></i></a>
        </div>  
      </div>      
    </section>

    <!-- End Main content -->
    
    <!--Footer content-->
    <?php
    include_once "parts/footer.php";
    ?> <!-- Footer content-->


      <script>
      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
          var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(48.30845447491726, 18.09143026938228),
            scrollwheel: false
          };
        
          map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

          google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });
        
          google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
          document.body.appendChild(script);
      }
      $(document).ready(function(){                
          loadGoogleMap();                
      });

      
    </script>
  </body>
  </html>
