
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

$rep_2 = $bdd->query('SELECT * FROM activity');

$my_activities_photos = array();
$my_activities_title = array();
$my_activities_description = array();

//je parcours ma table activities
while ($donnees = $rep_2->fetch())
{
  //si l'id du compte connecté est le même que le celui du propriétaire de l'activité
  if ($_SESSION['user_id'] == $donnees['user_id'] ) {
    //je remplis mon array d'id d'activités
    $my_activities_photos [] = $donnees ['activity_photo'];
    $my_activities_title [] = $donnees ['activity_title'];
    $my_activities_description [] = $donnees['activity_description'];
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


<body style="background-color:rgb(114, 198, 236);">

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
          <a class="nav-link" href="services.html">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="join.php">Join</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>

      <div class="col offset-6" style="margin-left:850px">
        <a href="">
          <img src="/img/icons/user.png" alt="user" width="20px" height="20px">
        </a>
        <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <h6 class="card-text text-white">User</h6>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="profile.php">My profile</a>
          <a class="dropdown-item" href="#">Activites</a>
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
            <img src="img/icons/<?php echo $avatar ?>" width="200px" height="200px" class="rounded mx-auto d-block" />

            <br>
            <div class="px-6 py-2">
              <div class="input-group mb-3 col-8 mx-auto d-block">
                <div class="form-group">
                  <label for="exampleFormControlInput1">First name</label>
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
                  <label for="exampleFormControlInput1">Last name</label>
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
                  <label for="exampleFormControlInput1">Gender</label>
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
                <label for="exampleFormControlInput1">Phone number</label>
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
                <label for="exampleFormControlInput1">Email address</label>
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
                <label for="exampleFormControlInput1">Password</label>
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
                <label for="exampleFormControlInput1">Status</label>
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
            <h5>My Activities</h5>
          </div>
        </div>
        <br>
        <div class="card mx-auto shadow-lg">
          <div class="card-body">
          <h4><?php echo "$my_activities_title[0]" ?></h4>
          <img src="img/<?php echo "$my_activities_photos[0]" ?>" width="500px" class="rounded d-block">

          <br>
          <div class="px-6 py-2">
            <div class="input-group mb-3 col-8 d-block">
              <div class="form-group">
                <label for="exampleFormControlInput1"><b>Description: </b><?php echo "$my_activities_description[0]" ?></label>
              </div>
            </div>

            <div class="input-group mb-3 col-8 d-block">
              <div class="form-group">
                <label for="exampleFormControlInput1"><b>Contacter le guide:</b> username</label>
              </div>
            </div>
          </div>
          <br>
          </div>
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
