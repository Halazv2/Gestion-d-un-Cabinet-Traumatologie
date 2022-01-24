<?php 
include('connection.php');

session_start();

//add_patients
if(isset($_POST['message_submit']))
{

    $FullName=$_POST['text'];
    $Email=$_POST['mail'];
    $Message=$_POST['message'];
    $query="insert into contact (full_name,email,message)  values ('$FullName','$Email','$Message')";
    $result = mysqli_query($con,$query);
    if (empty($_POST['text']) || empty($_POST['mail'])) {
        // header("location:../login.php");
        $_SESSION['message'] = "please complete the form"; 
		$_SESSION['msg_type'] = "danger"; 
        header("location:../contact.php");
    }
    if($result)
    {
        $_SESSION['message'] = "message has been sent"; 
		$_SESSION['msg_type'] = "success"; 
        header("location:../contact.php");
    }
	else
    {
        header("location:../contact.php");
    }
}

?>
