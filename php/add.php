<?php
include('connection.php');
//add_patients
$id = 0;
$nom = "";
$prenom = "";
$date_naissance = "";
$Num_Tel = "";
$Email = "";
$maladie = "";
$update = false;

if (isset($_POST['add_submit'])) {
    session_start();
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $Num_Tel = $_POST['Num_Tel'];
    $Email = $_POST['Email'];
    $maladie = $_POST['maladie'];
    $query = "insert into patients (nom,prenom,date_naissance,Num_Tel,Email,maladie)  values ('$nom','$prenom','$date_naissance','$Num_Tel','$Email','$maladie')";
    $result = mysqli_query($con, $query);
    if ($result) {
        // echo "<script> alert('L'ajoute est bien effectuer.') </script> ";
        $_SESSION['message'] = "Record has been saved";
        $_SESSION['msg_type'] = "success";
        header("location:../dashboard.php");
    } else {
        header("location:../dashboard.php");
        echo "<script> alert('error') </script>";
    }
}


//delete_patients
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query = ("DELETE FROM patients WHERE id=$id");
    $results = mysqli_query($con, $query)
        or die($mysqli->error());
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";
}


//edit_patients

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $query = ("SELECT * FROM patients  WHERE id=$id") or die($mysqli->error());
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = $result->fetch_array();
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $date_naissance = $row['date_naissance'];
        $Num_Tel = $row['Num_Tel'];
        $Email = $row['Email'];
        $maladie = $row['maladie'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $Num_Tel = $_POST['Num_Tel'];
    $Email = $_POST['Email'];
    $maladie = $_POST['maladie'];
    // $mysqli_query = ("UPDATE patients SET nom='$nom', prenom='$prenom', date_naissance='$date_naissance', 
    // Num_Tel='$Num_Tel', Email= '$Email', maladie='$maladie' WHERE id=$id") or die($mysqli->error());

    $query = ("UPDATE patients SET nom='$nom', prenom='$prenom', date_naissance='$date_naissance', 
    Num_Tel='$Num_Tel', Email= '$Email', maladie='$maladie' WHERE id=$id");
    $results = mysqli_query($con, $query)
        or die($mysqli->error());

    $_SESSION['message'] = "Record has been Updated!";
    $_SESSION['msg_type'] = "warning";
    header("location:../dashboard.php");
}
