<footer class="tm-footer">
    <div class="container">
        <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
                <h3 class="tm-footer-div-title">Main Menu</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contanct.php">Contact</a></li>
                </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
                <h3 class="tm-footer-div-title">About Us</h3>
                <p class="margin-top-15">Autoblog is an American internet-based automotive news and car shopping website owned and operated by Company Name. With over 6 million visitors to the Autoblog website each month,
                    we are one of the top-tier destinations for industry news,
                    car reviews, and vehicle shopping tools.</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
                <h3 class="tm-footer-div-title">Get Social</h3>
                <p>Check out our socials and keep update with new content.</p>
                <div class="tm-social-icons-container">
                    <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                    <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
        <div class="row tm-copyright">
            <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Company Name</p>
        </div>
    </div>
</footer> <!-- Footer content-->

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
<script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: false,
            prevText: "&#xf104;",
            nextText: "&#xf105;"
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
    });
</script>

