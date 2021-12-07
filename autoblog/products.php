<!DOCTYPE html>
<html lang="en">
<?php
include_once "parts/header.php";
?>
<?php
if(isset($db)) {
    $blogs = $db->getBlog();
} else {
    $db = new stdClass();
}
?>
<style>

    .button {background-image: linear-gradient(to right, #848484 0%, #303030  51%, #181818  100%)}
    .button {
        margin: 10px;
        padding: 15px 45px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: WHITE;
        box-shadow: 0 0 20px #eee;
        border-radius: 1px;
        display: block;
    }

    .button:hover {
        background-position: right center; /* change the direction of the change here */
        color: #4C4C4C;
        text-decoration: none;
    }

</style>
      <body>
      <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>

      <?php include_once "parts/menu.php"?>

      <section class="container margin-bottom-50">
       <div class="row">
        <h2 class="col-lg-12 text-center text-uppercase margin-bottom-30">ARTICLES</h2>
        <p class="col-lg-12 text-center margin-bottom-30">Carblog is the better way of buying a new car. Become a smarter buyer with our road tests and buying guides, then sign up to let Britain's top-rated dealers compete over you..</p>

           <div class="col-lg-12 tm-overflow-hidden">
            <?php foreach ($blogs as $blog) { ?>
          <div class="tm-img-1-container">
              <img src="<?php echo $blog['obrazok'] ?>" alt="Image description">
              <a href="auto-details.php?id=<?php echo $blog['id'] ?>" class="tm-img-1-description"><?php echo $blog['nazov'] ?></a>
          </div>
            <?php } ?>
        </div>
      </div>
          <br><br>
          <div class="row">
              <a href="auto-insert.php"><button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Add article</button></a>
          </div>
    </section>    

    <!--Footer content-->
        <?php
        include_once "parts/footer.php";
        ?> <!-- Footer content-->

  </body>
  </html>