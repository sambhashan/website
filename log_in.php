<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 04/01/18
 * Time: 11:37
 */

include 'core/init.php';
$submit = $_POST['submit'];
$remember_me= $_POST['remember_me'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if (isset($submit)){

    if (empty($uid) == true || empty($pwd) == true) {
        $_SESSION['message'] = 'Enter The E-mail Id And Password';
        header("location:login.php");

    }
    elseif (isset($remember_me)){
        if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')
        {
            $hour = time() + 3600 * 24 * 30;
            setcookie('uid', $uid, $hour);
            setcookie('pwd', $pwd, $hour);
        }
    }
    else {
        $sql = "SELECT * from user Where uid='$uid' and pwd='$pwd'";

        $result = $conn->query($sql);
        if (!$row = $result->fetch_assoc()) {
            $_SESSION['error_msg'] = 'You Are Using Inncorrect E-mail & Password';
            header("location:login.php");
            die();
        } elseif ($_SESSION[id] = $row[id]) {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: index.php');
        } else {
            header('Location: login.php');
        }
    }

}



?>