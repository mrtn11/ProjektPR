<?php
if (!isset($menus)) {
    $menus = [];
}
?>

<section class="templatemo-top-section">
    <div class="templatemo-header">
        <img class="templatemo-header-img" src="img/header.png" alt="Header">
        <h1 class="templatemo-site-name">CARBLOG</h1>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <div class="templatemo-nav-container">
            <nav class="templatemo-nav">
                <ul>
                    <?php foreach ($menus as $menu) { ?>
                        <li><a href="<?php echo $menu['path'] ?>"><?php echo $menu['nazov'] ?></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
    <div class="templatemo-welcome welcome-slider">
        <div class="container">
            <div class="row">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="about-slider">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <img src="img/about/dyn.png" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                                    <h2 class="text-uppercase welcome-title">
                                        <span class="welcome-title-1">DID YOU KNOW</span>
                                        <span class="welcome-title-2">The World’s First Automobile</span>
                                    </h2>
                                    <p class="welcome-message">Carl Benz developed the first automobile in 1885. The speed of the car was 16km per hour. It had an excellent design and was known as the Benz Patent Motorwagen.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="about-slider">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <img src="img/about/dyn.png" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                                    <h2 class="text-uppercase welcome-title">
                                        <span class="welcome-title-1">DID YOU KNOW</span>
                                        <span class="welcome-title-2">The World’s Best-Selling Car</span>
                                    </h2>
                                    <p class="welcome-message">If we talk about top-selling car around the world then undoubtedly it is only one name,
                                        and that is the Toyota Corolla. It is sold over 150 countries and different regions.
                                        Can you believe that the company sells 1 corolla every 15 seconds? Since its production,
                                        Toyota has sold up to 44 million Corollas that are 20 percent of
                                        the company’s overall sales (a rough calculation).</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="about-slider">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <img src="img/about/dyn.png" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                                    <h2 class="text-uppercase welcome-title">
                                        <span class="welcome-title-1">DID YOU KNOW</span>
                                        <span class="welcome-title-2">The Longest Living Car</span>
                                    </h2>
                                    <p class="welcome-message">The P1 Roadster by Rolls-Royce was droved, treasured by its owner for a good 82 years. Isn’t it amazing?</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
