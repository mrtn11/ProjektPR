<!DOCTYPE html>
<html lang="en">
<?php
include_once "parts/header.php";
?>
<?php
if(isset($db)) {
    $blogs = $db->getBlog();
    $users = $db->getUsers();
} else {
    $db = new stdClass();
}
?>
<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<?php include_once "parts/menu.php"?>

<section class="container margin-bottom-50">
    <div>
        <div class="about-container">
            <form method="post" action="auto-insertDB.php">
                <div class="form-group" style="align-content:center">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="nazov" required>
                    </div>
                    <div class="form-group">
                        <label>Body:</label>
                        <textarea type="text" name="popis" rows="15" cols="50" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <input type="text" name="obrazok" placeholder="img/about/1.jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Author:</label>
                        <select name="user_id">
                            <?php foreach ($users as $user) { ?>
                                <option value="<?php echo $user['id'] ?>"><?php echo $user['meno'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Sumbit</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!--Footer content-->
<?php
include_once "parts/footer.php";
?> <!-- Footer content-->

</body>
</html>
