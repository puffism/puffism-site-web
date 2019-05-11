<?php
//Pour vos informations
// Starting session
session_start();

//My activities

 // connexion à la base de donnée
 try
{
 	$bdd = new PDO('mysql:host=localhost;dbname=puffism;charset=utf8', 'root', '',
 				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
 	die('Erreur : ' . $e->getMessage());
}

$rep = $bdd->query('SELECT * FROM image');
//je parcours ma table image
while ($donnees = $rep->fetch())
{
  //si l'id de l'image correspond à une de la bdd on récupère le nom de l'image
  if($_SESSION['image_user_id']==$donnees['image_id']){
    $avatar = $donnees['image_name'];
  }
  else {
    $erreur = "Erreur L'id ne correspond à aucune image " ;
  }

}
$my_reservation_activity = array();
$my_reservation_datetime = array();

$rep_2 = $bdd->query('SELECT * FROM reservation');
//je parcours ma table de reservation
while ($donnees = $rep_2->fetch())
{
  //si l'id du compte connecté est le même que le celui de la réservation actuelle
  if ($_SESSION['user_id'] == $donnees['user_id'] ) {
    //je remplis mon array d'id d'activités
    $my_reservation_activity [] = $donnees ['activity_id'];
    $my_reservation_datetime [] = $donnees ['reservation_date_time'];
  }
}
$my_activities_users = array();
$my_activities_photos = array();
$my_activities_title = array();
$my_activities_description = array();

$rep_3 = $bdd->query('SELECT * FROM activity');
//je parcours ma table d'activité
while ($donnees = $rep_3->fetch())
{
  //si l'id de l'activité actuelle est égale à celle stockée
  if ($my_reservation_activity[0] == $donnees['activity_id'] ) {
    //je remplis mon array d'id d'activités
    $my_activities_users [] = $donnees ['user_id'];
    $my_activities_photos [] = $donnees ['activity_photo'];
    $my_activities_title [] = $donnees ['activity_title'];
    $my_activities_description [] = $donnees['activity_description'];
  }
}
$guide_phone = array();
$guide_first_name = array();
$guide_last_name = array();

$rep_4 = $bdd->query('SELECT * FROM user');
//je parcours ma table d'activité
while ($donnees = $rep_4->fetch())
{
  //si l'id de l'activité actuelle est égale à celle stockée
  if ($my_activities_users[0] == $donnees['user_id'] ) {
    //je récupère son nom et son numéro de téléphone
    $guide_phone [] = $donnees ['user_phone'];
    $guide_last_name [] = $donnees ['user_last_name'];
    $guide_first_name [] = $donnees ['user_first_name'];
  }
}
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--Meta tag pour librairie de animate.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


  <title>Puffism</title>
  <link rel="icon" href="img/puffism_logo.png">
</head>


<body style="background: -webkit-linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(240, 229, 81, 0.69) 100%);">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <a class="navbar-brand" href="index.php">
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

        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="join.php">Join</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>

      <div class="col offset-6" style="margin-left:850px">
        <a href="profile.php">
          <img src="/img/icons/user.png" alt="user" width="20px" height="20px" class="img-fluid">
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

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <br>

  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <div class="card mx-auto shadow-lg" style="max-width: 30rem; max-height: 50rem">
          <div class="card-header text-center">
            <h5>Personal Info</h5>
          </div>
          <div class="card-body">
            <img src="img/icons/<?php echo $avatar ?>" width="200px" height="200px"
              class="img-fluid rounded mx-auto d-block">

            <br>
            <div class="px-6 py-2">
              <div class="input-group mb-3 col-8 mx-auto d-block">
                <div class="form-group">
                  <label>First name</label>
                  <br>
                  <strong>
                  <?php
                    echo $_SESSION["user_first_name"];
                   ?>
                 </strong>
                 </br>
                </div>
              </div>

              <div class="input-group mb-3 col-8 mx-auto d-block">
                <div class="form-group">
                  <label>Last name</label>
                  <br>
                  <strong>
                  <?php
                    echo $_SESSION["user_last_name"];
                   ?>
                 </strong>
                 </br>
                </div>
              </div>

              <div class="input-group mb-3 col-8 mx-auto d-block">
                <div class="form-group">
                  <label>Gender</label>
                  <br>
                  <strong>
                  <?php
                    echo $_SESSION["user_gender"];
                   ?>
                 </strong>
                 </br>
                </div>
              </div>
            </div>

            <div class="input-group mb-3 col-8 mx-auto d-block">
              <div class="form-group">
                <label>Phone number</label>
                <br>
                <strong>
                <?php
                  echo $_SESSION["user_phone"];
                 ?>
               </strong>
               </br>
              </div>
            </div>


            <div class="input-group mb-3 col-8 mx-auto d-block">
              <div class="form-group">
                <label>Email address</label>
                <br>
                <strong>
                <?php
                  echo $_SESSION["user_mail"];
                 ?>
               </strong>
               </br>
              </div>
            </div>


            <div class="input-group mb-3 col-8 mx-auto d-block">
              <div class="form-group">
                <label>Password</label>
                <br>
                <strong>
                <?php
                  echo $_SESSION["user_password"];
                 ?>
               </strong>
               </br>
              </div>
            </div>


            <div class="input-group mb-3 col-8 mx-auto d-block">
              <div class="form-group">
                <label>Status</label>
                <br>
                <strong>
                <?php
                  echo $_SESSION["user_privilege"];
                 ?>
               </strong>
               </br>
              </div>
            </div>
            <br>

            <div class="text-center">
              <form action="/action_page.php">
                <button class="btn btn-primary" type="submit"> Edit</button>
              </form>

            </div>

          </div>
        </div>
      </div>

      <div class="col-7">
        <div class="card mx-auto shadow-lg">
          <div class="card-header text-center">
            <h5>My Reservations</h5>
          </div>
        </div>
        <br>
        <div class="card mx-auto shadow-lg">
          <div class="card-body">

            <div class="row">

              <div class="col-6">
                <h4><?php echo "$my_activities_title[0]" ?></h4>
                <br>
                <a href="act_details.php">
                  <img class="img-fluid card-img-top rounded d-block" src="img/<?php echo "$my_activities_photos[0]" ?>">
                </a>
                <br>
                <div>
                  <p><b>Date of reservation:</b> <?php echo "$my_reservation_datetime[0]" ?></p>
                </div>
                <div>
                  <p><b>Contacter le guide:</b> <?php echo "$guide_first_name[0] $guide_last_name[0] au $guide_phone[0]" ?></p>
                </div>
              </div>

              <div class="col">
                <br>
                <br>

                <p class="text-left">
                  <b>Description: </b><?php echo "$my_activities_description[0]" ?>
                  <br>
                  <!--Write description here-->
                </p>
              </div>
            </div>
          </div>

          <p class="card-text text-right px-3"><small class="text-muted">Last updated 3 mins ago</small></p>

          <br>


        </div>
      </div>
    </div>
  </div>



  <br>

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
