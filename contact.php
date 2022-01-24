<?php include('./php/connection.php');?>
<?php include('./php/message.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/contact.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/3d49ef96c0.js" crossorigin="anonymous"></script>

    <title>CABINET REHBANI RAFIK TRAUMATOLOGIQUE|CONTACT</title>
</head>

<body>
    <!-- <div class="header-top">
        <div class="phone">
            <i class="fas fa-phone-alt"></i>
            <p>Appelez-nous : 08 08 08 08 08 08 | 06 29 10 39 40</p>
        </div>
        <div class="social-media">
            <ul>
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-instagram"></i></li>
            </ul>
        </div>
    </div> -->
    <div class="header-bottom">
        <nav>
            <a class="logo" href="index.html"><img src="images/logo.png"></a>
            <div class="toggle">
                <div class="ouvre">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="ferme">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
            <div class="nav-links">
                <ul>
                    <li> <a href="index.php">Home</a></li>
                    <li><a href="a_propos.php">À PROPOS</a></li>
                    <li><a href="login.php">dashbord</a></li>
                    <li><a href="contact.php"><b>Contact</b></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="titre">
        <h3>Contact Us</h3>
    </div>
    <div class="bg-container">
        <form action="./php/message.php" class="left-side" method="post">
        <?php
        if (isset($_SESSION['message'])) : ?>
          <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
            <?php echo $_SESSION['message']; unset($_SESSION['message']);?>
          </div>
        <?php endif ?>
            <input type="text" name="text" placeholder="Full Name"></input>
            <input type="email" name="mail" placeholder="Email"></input>
            <input type="text"  name="message"  placeholder="Message"></input>
            <button class="leftButton" name="message_submit">ENVOYER</button>
        </form>
        <div class="rght-side">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1201.0755326104013!2d-9.23490970392838!3d32.29267017429246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac211719897669%3A0x6f59fa5bb517f58a!2sYoucode%20Safi!5e0!3m2!1sen!2sma!4v1642103269118!5m2!1sen!2sma" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <br>
            <div class="right-side-text">
                <p><b>Horaies:</b> <br>
                    Lun - Sam 09:00-18:00</p>
            </div>
            <br>
            <div class="right-side-text">
                <p> <b>Offive: </b> <br>
                    294 reu hanae 47829 SAFI</p>
            </div>
            <br>
            <div class="right-side-text">
                <p><b>For quick inquiries</b></p>
                <p>
                    <i class="fab fa-font-awesome-flag"></i>
                    08 08 08 08 08 08<br>
                    <i class="fab fa-font-awesome-flag"></i>
                    06 29 10 39 40 30
                </p>
            </div>
            <div class="subscribe">
                <h3>Join Our newsletter</h3>
                <div class="subscribe-form-r">
                    <input type="email" class="tbox" placeholder="Enter you email">
                    <button type="button" class="botna" name="button"><i class="fas fa-check"></i></button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="left">
            <a href="#">ACCUEIL</a>
            <a href="#">À PROPOS</a>
            <a href="#">CONTACT</a>
        </div>
        <div class="middle-section">

            <div class="middle">
                <p><i class="fas fa-phone-alt"></i>
                    <b>Appelez-nous :</b> 08 08 08 08 08 08 | 06 29 10 39 40 30
                </p>
            </div>
            <br>
            <div class="middle">
                <p><b>Horaies:</b>
                    Lun - Sam 09:00-18:00</p>
            </div>
            <br>
            <div class="middle">
                <p> <b>Offive: </b>
                    294 reu hanae 47829 SAFI</p>
            </div>
            <br>
            <div class="social-media">
                <ul>
                    <li><i class="fab fa-facebook"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
        </div>
        <div class="subscribe">
            <h3>Join Our newsletter</h3>
            <div class="subscribe-form">
                <input type="email" class="tbox" placeholder="Enter you email">
                <button type="button" class="botona" name="button"><i class="fas fa-check"></i></button>
            </div>
        </div>
    </footer>
    <script src="/js/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>