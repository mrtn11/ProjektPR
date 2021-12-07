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
        <div>
            <div class="about-container">
                <div class="about-container-left">
                    <img src="<?php echo $auto['obrazok'] ?>" alt="" class="img-responsive">
                </div>
                <div class="about-container-right">
                <form method="post" action="auto-editDB.php">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="nazov" value="<?php echo $auto['nazov'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Body:</label>
                        <textarea type="text" name="popis"  rows="10" cols="50"><?php echo $auto['popis'] ?></textarea>
                    </div>
                    <div class="form-group"">
                        <input type="hidden" name="blog-id" value="<?php echo $id ?>">
                        <div>
                            <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Sumbit</button>
                        </div>
                     </div>
                    </div>
                </form>
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
