<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Meta tag necessaire pour adapter a mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Meta tag pour librairie Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Meta tag pour librairie de animate.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <title>Puffism</title>
  <link rel="icon" href="img/puffism_logo.png">
</head>

<body style="background: -webkit-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(240, 229, 81, 0.69) 100%);">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <a class=navbar-brand href="index.php">
      <h2>Puffism</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activities.php">Activities</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link active" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <?php
          if(!isset($_SESSION['user_id']))
          { // Si l'utilisateur est déconnecté on lui affiche l'inscription et la connexion
        ?>
            <li class="nav-item">
              <a class="nav-link" href="join.php">Join</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
        <?php
          }
          else
          {
        ?>
          <div class="col offset-6" style="margin-left:850px">
            <a href="profile.php" style="text-decoration: none">
              <img src="/img/icons/profile_default.png" alt="user" width="20px" height="20px" class="img-fluid">
            </a>
            <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <h6 class="card-text text-white">User</h6>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="profile.php">My profile</a>
              <a class="dropdown-item" href="#">Activities</a>
              <a class="dropdown-item" href="log_out.php">Log out</a>
            </div>
          </div>
        <?php
          }
        ?>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <br><br>


  <div class="container">
    <div class="row-fluid">
      <div class="card-deck">

        <div class="col-sm-5 animated slideInLeft">
          <div class="card mx-auto bg-dark shadow-lg">
            <div class="card-header text-light">
              <h5>About Us</h5>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="aboutus-tab" data-toggle="tab" href="#aboutus" role="tab"
                    aria-controls="aboutus" aria-selected="true">English</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="infosurnous-tab" data-toggle="tab" href="#infosurnous" role="tab"
                    aria-controls="infosurnous" aria-selected="false">French</a>
                </li>
              </ul>

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">

                  <div class="card-body">
                    <p class="card-text text-light">
                      We are students that currently attend ECE Paris-Lyon, we are a multicultural team that is quite
                      dynamic and motivated to accomplish a not so simple project, but that is humanly possible. <br>
                      Our dream?<br>
                      We want our platform to enable millions of puffins to discover the world with clarity, while
                      learning about the local’s culture.<br>
                      Thank you for supporting us, like, comment and share, so that this adventure becomes your own.<br>
                    </p>
                    <a href="https://www.facebook.com/puffism/">
                      <img src="img/icons/facebook.svg" width="38px">
                    </a>
                    <a href="https://www.instagram.com/_puffism_/">
                      <img src="img/icons/instagram.svg" width="38px">
                    </a>
                    <br>
                    <p class="card-text text-light">
                      <b>Benjamin Tan</b> : CEO of Puffism, developer.<br>
                      <b>Simon Zhang</b> : Chief of Mediation, developer.<br>
                      <b>Noor Kardache</b> : Marketing Director.<br>
                      <b>Ilan Saidi</b> : Communications Director.<br>
                      <b>Quentin Lanot</b> : Human resources Director.<br>
                      <b>Valentin Genter</b> : Human resources Assistant.
                    </p>

                  </div>
                </div>

                <div class="tab-pane fade" id="infosurnous" role="tabpanel" aria-labelledby="infosurnous-tab">
                  <div class="card-body">
                    <p class="card-text text-light">
                      Nous sommes tous étudiants à l’ECE Paris-Lyon, nous sommes une équipe multiculturelle, dynamique
                      et motivée dans l’accomplissement non pas d’un simple projet, mais d’une épopée humaine.<br>
                      Notre rêve
                      ?<br>
                      Que notre plateforme permette à des millions de d'utilisateurs (puffins) de découvrir les réelles
                      nuances du monde
                      qui nous entoure et la culture des locaux passionnés par le partage.<br>
                      Merci de nous soutenir, liker, partager et commenter, pour que cette aventure devienne aussi la
                      vôtre.
                    </p>
                    <a href="https://www.facebook.com/puffism/">
                      <img src="img/icons/facebook.svg" width="38px">
                    </a>
                    <a href="https://www.instagram.com/_puffism_/">
                      <img src="img/icons/instagram.svg" width="38px">
                    </a>
                    <br>
                    <p class="card-text text-light">
                    <b>Benjamin Tan</b> : PDG de Puffism, développeur<br>
                      <b>Simon Zhang</b> : Responsable médiation, développeur<br>
                      <b>Noor Kardache</b> : Directrice marketing<br>
                      <b>Ilan Saidi</b> : Directeur communication<br>
                      <b>Quentin Lanot</b> : Directeur ressources humaines<br>
                      <b>Valentin Genter</b> : Assistant ressources humaines
                    </p>
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>

        <div class="col-sm-7 animated slideInRight">
          <div class="card mx-auto bg-dark shadow-lg" style="max-width: 772px">
            <img class="card-img-top" src="img/lateam.jpg" alt="Team">
            <div class="card-body">
              <h5 class="card-title text-center text-light">La Team</h5>
              <p class="card-text text-center text-light"><i>From left to right Quentin, Simon, Valentin,
                  Ilan,
                  Noor and Benjamin</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

  <br><br><br><br><br><br><br><br><br>

  <hr>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card mb-3 bg-dark">
            <div class="copyright-info">
              <h5 class="my-auto text-center text-white">
                2018-<script type="text/JavaScript">document.write(new Date().getFullYear());</script> © Puffism
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Optionnel JavaScript-->
  <!--Ces scripts sont necessaire pour ajouter jQuery, Popper.js et JavaScript a bootstrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <!--Script pour ajouter des animations stylees-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <!--Script pour initialiser les aninmaitons de "fade"-->
  <script>
    new WOW().init();
  </script>

</body>

</html>
