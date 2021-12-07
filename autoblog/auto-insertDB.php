<?php
include_once "classes/DB.php";

use Classes\DB;

$db = new DB("localhost", "root", "", "autoblog", "3306");

if(isset($_POST['submit'])) {
    $nazov = $_POST['nazov'];
    $popis = $_POST['popis'];
    $obrazok = $_POST['obrazok'];
    $user_id = $_POST['user_id'];

    $insert = $db->insertBlog($nazov, $popis, $obrazok, $user_id);

    if ($insert) {
        echo '<script type ="text/JavaScript">alert("Successful"); window.location.href="products.php";</script>';
    } else echo '<script type ="text/JavaScript">alert("Post was not updated :/")</script>';
} else echo '<script type ="text/JavaScript">alert("Something bad with form happened :/")</script>';
