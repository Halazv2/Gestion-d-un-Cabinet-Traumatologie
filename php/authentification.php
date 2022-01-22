<?php
include('Connection.php');
session_start();

if (isset($_POST['login_submit'])) {
    if (empty($_POST['UserName']) || empty($_POST['PassWord'])) {
        // header("location:../login.php");
    } else {
        $query = "select * from authentification where username='" . $_POST['UserName'] . "' and password='" . $_POST['PassWord'] . "'";
        $result = mysqli_query($con, $query);
        header("location:../dashboard.php");
        if (mysqli_fetch_assoc($result)) {
            $_SESSION['admin'] = $_POST['UserName'];
            header("location:../dashboard.php");
        } else {

            header("location:../login.php");
            //send user back to the login page.
            $_SESSION['message'] = "Username or password is incorrect"; 
            $_SESSION['msg_type'] = "danger"; 
        }
    }
}

?>
