<?php include('./php/authentification.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="./style/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <div class="header">
    <nav>
      <a class="logo" href="index.html"><img src="./image/logo.png" /></a>
      <div class="toggle">
        <div class="ouvre">
          <i class="fa-solid fa-bars"></i>
        </div>
        <div class="ferme">
          <i class="fa-solid fa-x"></i>
        </div>
      </div>
      <div class="nav-links">
        <ul style="margin-bottom: 0;">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li><a href="./a_propos.php">À PROPOS</a></li>
          <li><a href="gallerie.php"><b>Dashboard</b></a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
    <div class="image-header"></div>
  </div>
  <div class="background">
    <div class="login-input">
      <?php
        if (isset($_SESSION['message'])) : ?>
          <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
          </div>
        <?php endif ?>
      
      <form style="width: 100%;" method="post" action="./php/authentification.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="UserName">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="PassWord">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" style="padding: 10px 35px;" name="login_submit">Submit</button>
      </form>
    </div>
  </div>
  <script src="./js/navbar.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>