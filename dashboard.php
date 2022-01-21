<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./style/dashboard.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <div class="header">
    <nav>
      <a class="logo" href="index.php"><img src="./image/logo.png" /></a>
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
      <div class="add-patient">
        <p style="margin-left: 15%"><b>Ajouter un patinent :</b></p>
        <div class="input-patient">
          <div class="input-group1">
            <div class="inputClass">
              <h6>Prenom:</h6>
              <input type="text" name="prenom" />
            </div>
            <div class="inputClass">
              <h6>Nom:</h6>
              <input type="text" name="nom" />
            </div>
          </div>
          <div class="input-group2">
            <div class="inputClass">
              <h6>Telephone:</h6>
              <input type="text" name="Num_Tel" />
            </div>
            <div class="inputClass">
              <h6>Maladie:</h6>
              <input type="text" name="maladie" />
            </div>
          </div>
          <div class="input-group4">
            <div class="inputClass">
              <h6 style="width: 35%;">Date de naissance :</h6>
              <input type="text" name="date_naissance" />
            </div>
            <div class="inputClass">
              <h6>Email :</h6>
              <input type="text" name="Email" />
            </div>
          </div>
          <div class="input-group3">
            <div class="btn1">
              <button class="btn btn-primary" name="add_submit">submit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="arr-patients">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Full Name</th>
              <th scope="col">Telephone</th>
              <th scope="col">Maladie</th>
              <th scope="col">Date de la visite</th>
              <th scope="col">Edit / Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Amine SALAMI</td>
              <td>+212650809899</td>
              <td>rhumatisme</td>
              <td>16-06-2019</td>
              <td>
                <button class="btn btn-warning"><b>Edit</b></button>
                <button class="btn btn-danger"><b>Delete</b></button>
              </td>
            </tr>
            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>
                <button class="btn btn-warning"><b>Edit</b></button>
                <button class="btn btn-danger"><b>Delete</b></button>
              </td>
            </tr>
            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>
                <button class="btn btn-warning"><b>Edit</b></button>
                <button class="btn btn-danger"><b>Delete</b></button>
              </td>
            </tr>
            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>
                <button class="btn btn-warning"><b>Edit</b></button>
                <button class="btn btn-danger"><b>Delete</b></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
  </div>
  <script src="./js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>