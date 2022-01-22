<?php 
include('connection.php');
session_start();

//add_patients
if(isset($_POST['add_submit']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date_naissance=$_POST['date_naissance'];
    $Num_Tel=$_POST['Num_Tel'];
    $Email=$_POST['Email'];
    $maladie=$_POST['maladie'];
    $query="insert into patients (nom,prenom,date_naissance,Num_Tel,Email,maladie)  values ('$nom','$prenom','$date_naissance','$Num_Tel','$Email','$maladie')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        // echo "<script> alert('L'ajoute est bien effectuer.') </script> ";
		$_SESSION['message'] = "Record has been saved"; 
		$_SESSION['msg_type'] = "success"; 
        header("location:../dashboard.php");
    }
	else
    {
        header("location:../dashboard.php");
        echo "<script> alert('error') </script>";
    }
}



//delete_patients
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query=("DELETE FROM patients WHERE id=$id");
    $results=mysqli_query($con,$query)
    or die($mysqli->error());
    $_SESSION['message'] = "Record has been deleted"; 
    $_SESSION['msg_type'] = "danger"; 
}

?>