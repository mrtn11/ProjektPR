<?php
include_once "classes/DB.php";

use Classes\DB;

$db = new DB("localhost", "root", "", "autoblog", "3306");

if(isset($_POST['submit'])) {
    $nazov = $_POST['nazov'];
    $popis = $_POST['popis'];
    $blog_id = $_POST['blog-id'];

    $update = $db->updateBlogId($nazov, $popis, $blog_id);

    if ($update) {
        echo '<script type ="text/JavaScript">alert("Successful"); window.location.href="auto-details.php?id='.$blog_id.'";</script>';
    } else echo '<script type ="text/JavaScript">alert("Post was not updated :/")</script>';
} else echo '<script type ="text/JavaScript">alert("Something bad with form happened :/")</script>';
