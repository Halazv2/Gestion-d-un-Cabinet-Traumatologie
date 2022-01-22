<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cabinet doctor rahmani | profile</title>
    <!-- <link rel="stylesheet" href="./style/dashboard.css" /> -->
    <link rel="stylesheet" href="./style/dashboard.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="header">
        <nav>
            <a class="logo" href="index.php"><img src="./image/logo.png" /></a>
            <div class="nav-links">
                <ul>
                    <li>
                        <i class="fas fa-hospital-user"></i>
                        <a href="dashboard.php"><b>Dashboard</b></a>
                    </li>
                </ul>
            </div>
            <div class="nav-logout">
                <a href="./login.php"><img src="./image/Vector logout.png" alt="" /></a>
                <p>Log out</p>
            </div>
        </nav>
    </div>
    <div class="container" style=" margin-top:20px;">
        <div class="profile" style=" justify-content: space-around; display: flex;">
            <div class="profile-image">
                <img src="/images/pi.jpg">
            </div>
            <div class="profile-info" style="margin-top: auto; margin-bottom: auto;">
                <h5><i class="far fa-id-badge"></i> Nom et Prenom : <span style="font-size: 17px;">Rahbani Rafik</span> </h5>
                <h5><i class="fas fa-home" style="font-size: 15px;"></i> Address : <span style="font-size: 17px;">Village Lazari Rue Aouniya ,Oujda</span> </h5>
                <h5><i class="fas fa-phone" style="font-size: 15px;"></i> numéro de téléphone :<span style="font-size: 17px;"> 0608257819</span> </h5>
                <h5><i class="fas fa-user-md"></i> Specialite  :<span style="font-size: 17px;"> Traumatologue</span> </h5>
            </div>
        </div>
    </div>
</body>

</html>