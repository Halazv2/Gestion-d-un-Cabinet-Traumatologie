<?php include('./php/connection.php'); ?>
<?php include('./php/message.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>cabinet doctor rahmani</title>
  <!-- <link rel="stylesheet" href="./style/dashboard.css" /> -->
  <link rel="stylesheet" href="./style/dashboard.css?v=<?php echo time(); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <?php require_once './php/add.php'; ?>
  <div class="header">
    <nav>
      <a class="logo" href="index.php"><img src="./image/logo.png" /></a>
      <div class="nav-links">
        <ul>
          <li> <i class="fas fa-user"></i>
            <a href="profile.php"><b>Profile</b></a>
          </li>
        </ul>
      </div>
      <div class="nav-logout">
        <a href="./login.php"><img src="./image/Vector logout.png" alt="" /></a>
        <p>Log out</p>
      </div>
    </nav>
    <div class="image-header"></div>
  </div>
  <div class="main">
    <div class="hello-text">
      <p>Bonjour Mr rafik rahbani</p>
    </div>
    <?php
    if (isset($_SESSION['message'])) : ?>
      <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>
    <?php endif ?>
    <div class="ajouter-patient">
      <div class="icons">
        <div class="open">
          <i class="fa-solid fa-angle-down"></i>
        </div>
        <div class="close">
          <i class="fa-solid fa-angle-up"></i>
        </div>
      </div>
      <button class="btn btn-primary">Ajouter un patient</button>
    </div>
    <form action="./php/add.php" method="POST">
      
      <input type="hidden" name="id" value="<?php echo $id;?>">

      <div class="add-patient">
        <p style="margin-left: 15%"><b>Ajouter un patinent :</b></p>
        <div class="input-patient">
          <div class="input-group1">
            <div class="inputClass">
              <h6>Prenom:</h6>
              <input type="text" name="prenom" " value="<?php echo $prenom; ?>" />
            </div>
            <div class="inputClass">
              <h6>Nom:</h6>
              <input type="text" name="nom"  value="<?php echo $nom; ?>" />
            </div>
          </div>
          <div class="input-group2">
            <div class="inputClass">
              <h6>Telephone:</h6>
              <input type="text" name="Num_Tel"  value="<?php echo $Num_Tel; ?>" />
            </div>
            <div class="inputClass">
              <h6>Maladie:</h6>
              <input type="text" name="maladie"  value="<?php echo $maladie; ?>" />
            </div>
          </div>
          <div class="input-group4">
            <div class="inputClass">
              <h6 style="width: 16%;">Date de naissance :</h6>
              <input type="text" name="date_naissance"  value="<?php echo $date_naissance; ?>" />
            </div>
            <div class="inputClass">
              <h6>Email :</h6>
              <input type="text" name="Email" value="<?php echo $Email; ?>" />
            </div>
          </div>
          <div class=" input-group3">
              <div class="btn1">
                <?php 
                if ($update == true):
                  ?>
                  <button class="btn btn-info" name="update">Update</button>
                <?php else : ?>
                <button class="btn btn-primary" name="add_submit">submit</button>
                <?php endif;?>
              </div>
            </div>
          </div> 
        </div>

        <div class="arr-patients">
          <h3>Patients List :</h3>
          <?php $results = mysqli_query($con, "SELECT * FROM patients"); ?>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">Maladie</th>
                <th scope="col">Date de la visite</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['Num_Tel']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['maladie']; ?></td>
                <td><?php echo $row['date_naissance']; ?></td>
                <td>
                  <a href="dashboard.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                  <a href="dashboard.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php } ?>
          </table>

          <?php $result = mysqli_query($con, "SELECT * FROM contact"); ?>
          <h3><br><br> Boite Mail:</h3>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom et Prenom</th>
                <th scope="col">Mail address</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
              <tr>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['message']; ?></td>
              </tr>
            <?php } ?>
          </table>
        </div>
    </form>
  </div>
  <script src="./js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>