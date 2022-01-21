<?php 
include('./connection.php');


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
        echo "<script> alert('L'ajoute est bien effectuer.') </script> ";
    }
	else
    {
        echo "<script> alert('error') </script>";
    }
}

?>