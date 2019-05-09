<?php
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

$rep = $bdd->query('SELECT * FROM activity');
//je parcours ma table activity
while ($donnees = $rep->fetch())
{
  //je récupère les informations de l'activité
  if($_SESSION['temp_activity_id'] == $donnees ['activity_id']){

    $temp_activity_photo = $donnees ['activity_photo'];
    $temp_activity_title = $donnees ['activity_title'];
    $temp_activity_description = $donnees['activity_description'];
    $temp_activity_category = ['activity_category'];
    $temp_activity_city = ['activity_city'];
    $temp_activity_country = ['activity_country'];

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
  <link rel="stylesheet" href="./css/custom.css">
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
        <li class="nav-item active">
          <a class="nav-link active" href="activities.php">Activities</a>
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
            <a href="profile.php">
              <img src="/img/icons/profile_default.png" alt="user" width="20px" height="20px">
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

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-auto">

        <div class="card mx-auto shadow">

          <nav class="navbar navbar-light bg-light rounded">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search by category" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>

        </div>

        <br>

        <div class="card mx-auto shadow">
          <a href="#" class="badge badge-success">
            <h3>Fun</h3>
          </a>
        </div>
        <br>
        <div class="card mx-auto shadow">
          <a href="#" class="badge text-white" style="background-color:blueviolet">
            <h3>Sightseeing & Walks</h3>
          </a>
        </div>
        <br>
        <div class="card mx-auto shadow">
          <a href="#" class="badge text-white" style="background-color:coral">
            <h3>Gastronomy</h3>
          </a>
        </div>
        <br>
        <div class="card mx-auto shadow">
          <a href="#" class="badge badge-danger">
            <h3>Sports</h3>
          </a>
        </div>
        <br>

      </div>

      <div class="container">

        <div class="card mx-auto shadow-lg">
          <div class="card-header text-center">
            <h4><?php echo "$temp_activity_title" ?></h4>
          </div>
          <div class="card-body">

            <div class="row">

              <div class="col-6">
                <a href="act_details.php">
                  <img class="card-img-top rounded d-block" src="img/<?php echo "$temp_activity_photo" ?>" alt="Card image cap">
                </a>
                <br>
                <div>
                  <p><b>Contacter le guide:</b> username</p>
                </div>
              </div>


              <div class="col-3">
                <p class="text-left">
                  <b>Description: </b>
                  <?php echo "$temp_activity_description" ?>
                  <br>
                  <!--Write description here-->
                </p>
              </div>

            </div>

            <p class="card-text text-right"><small class="text-muted">Last updated 3 mins ago</small></p>


            <br>

          </div>
        </div>

        <br>

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
