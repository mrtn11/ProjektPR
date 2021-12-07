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

$id = $_GET['id'];
$auto = $db->getBlogId($id);
$user = $db->getUserId($auto['user_id']);
?>

<style>
    .button {background-image: linear-gradient(to right, #848484 0%, #303030  51%, #181818  100%)}
    .button {
        margin: 5px;
        padding: 8px 20px;
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

<body class="about-page">

<!-- Preloader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Preloader -->
<?php include_once "parts/menu.php"?>

<section class="container margin-bottom-50">
    <div>
        <div class="about-container">
            <div class="about-container-left">
                <img src="<?php echo $auto['obrazok']; ?>" alt="a" class="img-responsive">
            </div>
                <div class="about-container-right">
                    <h2 class="about-title"><?php echo $auto['nazov']; ?></h2>
                    <p  class="about-description" >Author: <?php echo $user ?></p>
                    <p  class="about-description" ><?php echo $auto['popis']; ?> </p>
                    <div>
                        <div>
                            <a href="auto-edit.php?id=<?php echo $id ?>"><button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Edit</button>
                            </a>
                        </div>
                        <br>
                        <div>
                            <a href="auto-delete.php?id=<?php echo $id ?>"><button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Delete</button></a>
                        </div>
                    </div>
                    <br>
                    <a href="products.php"><button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Back</button></a>


                </div>
            </div>
        </div>
    </div>
</section>

<!--Footer content-->
<?php
include_once "parts/footer.php";
?>
<!-- Footer content-->

</body>
</html>
