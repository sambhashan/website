<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 04/01/18
 * Time: 11:37
 */
include_once 'core/function/user.php';
include 'core/init.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if (empty($first)==true || empty($last)==true || empty($uid)==true || empty($pwd)==true){
    $_SESSION['error_empty']='Please Enter The Information';
    header("location:register.php");
}
else{
    $query = mysqli_query($conn, "select * from user WHERE uid='$uid'");


    if (mysqli_num_rows($query) > 0) {
        $_SESSION['error_exist']='You Are Already Exist';
        header("location:register.php");
        die();

    } else {

        $sql = "INSERT INTO user (first, last, uid, pwd)
        VALUES ('$first', '$last', '$uid', '$pwd')";

        $result = $conn->query($sql);

        header("location:index.php");

    }


}


