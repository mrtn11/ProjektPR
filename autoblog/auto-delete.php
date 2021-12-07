<?php
include_once "classes/DB.php";

use Classes\DB;

if(isset($_GET['id'])) {
    $db = new DB("localhost", "root", "", "autoblog", "3306");
    $blog_id = $_GET['id'];

    $delete = $db->deleteBlogId($blog_id);

    if ($delete) {
        echo '<script type ="text/JavaScript">alert("Post was deleted :)"); window.location.href="products.php";</script>';
    } else echo '<script type ="text/JavaScript">alert("Post was not deleted :/")</script>';
} else echo '<script type ="text/JavaScript">alert("Something bad with form happened :/")</script>';
