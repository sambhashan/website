<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 15/01/18
 * Time: 13:22
 */

session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location: login.php');
}
?>
