<?php 
include('./connection.php');


//add_patients
if(isset($_POST['message_submit']))
{
    $FullName=$_POST['text'];
    $Email=$_POST['mail'];
    // $Message=$_POST['message'];
    $Message = trim($_POST['message']);
    $query="insert into contact (full_name,email,message)  values ('$FullName','$Email','$Message')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "<script> alert('L'ajoute est bien effectuer.') </script> ";
		// $_SESSION['message'] = "Address saved"; 
        header("location:../contact.php");
    }
	else
    {
        header("location:../contact.php");
        echo "<script> alert('error') </script>";
    }
}

?>
