
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

//on stocke dans des array les info des activity
$my_activities_photos = array();
$my_activities_title = array();
$my_activities_description = array();
$my_activities_id = array();
$my_activities_category = array();
$my_activities_city = array();
$my_activities_country = array();
//je parcours ma table activity
while ($donnees = $rep->fetch())
{
  //je remplis mon array d'id d'activités
  $my_activities_photos [] = $donnees ['activity_photo'];
  $my_activities_title [] = $donnees ['activity_title'];
  $my_activities_description [] = $donnees['activity_description'];
  $my_activities_id [] = $donnees['activity_id'];
  $my_activities_category [] = ['activity_category'];
  $my_activities_city [] = ['activity_city'];
  $my_activities_country [] = ['activity_country'];
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
              <img src="img/icons/profile_default.png" alt="user" width="20px" height="20px" class="img-fluid">
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

        <div class="card mx-auto shadow wow slideInLeft">
          <a href="#" class="badge badge-success">
            <h3>Fun</h3>
          </a>
        </div>
        <br>
        <div class="card mx-auto shadow wow slideInLeft">
          <a href="#" class="badge text-white" style="background-color:blueviolet">
            <h3>Sightseeing & Walks</h3>
          </a>
        </div>
        <br>
        <div class="card mx-auto shadow wow slideInLeft">
          <a href="#" class="badge text-white" style="background-color:coral">
            <h3>Gastronomy</h3>
          </a>
        </div>
        <br>
        <div class="card mx-auto shadow wow slideInLeft">
          <a href="#" class="badge badge-danger">
            <h3>Sports</h3>
          </a>
        </div>
        <br>

      </div>

      <div class="container">

        <div id="carouselHome" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner rounded">
            <div class="carousel-item active">
              <a href="act_details.php">
                <!---NOT WORKING HAVE TO CHECK-->
                <img src="img/louvre.jpg" class="d-block w-100" alt="louvre">
              </a>
              <div class="card-img-overlay text-white">
                <h5 class="card-title">Louvre, Paris, France</h5>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="act_details.php">
                <img src="img/cubajosemarti.jpg" class="d-block w-100" alt="cubajosemartinmemorial">
              </a>
              <div class="card-img-overlay text-white">
                <h5 class="card-title">José Martí Memorial, Havana, Cuba</h5>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="act_details.php">
                <img src="img/germanydresden.jpg" class="d-block w-100" alt="semperorper">
              </a>
              <div class="card-img-overlay text-white">
                <h5 class="card-title">Semperoper, Dresden, Germany</h5>
                <p class="card-text">Last updated 3 mins ago</p>
              </div>
            </div>
          </div>


          <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <br>
        <br>
        <br>
          <div class="card-deck wow zoomIn">

          <div class="card mb-3">
            <a href="act_details.php?temp_activity_id=<?php echo $my_activities_id [0]; ?>">
              <img class="card-img-top" src="img/<?php echo "$my_activities_photos[0]" ?>" alt="Card image cap">
              <?php
                $_SESSION['temp_activity_id'] = $my_activities_id [0];
              ?>
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo "$my_activities_title[0]" ?></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

          </div>


          <div class="card mb-3">
            <a href="act_details.php?temp_activity_id=<?php echo $my_activities_id [1]; ?>">
              <img class="card-img-top" src="img/<?php echo "$my_activities_photos[1]" ?>" alt="Card image cap">
              <?php
                $_SESSION['temp_activity_id'] = $my_activities_id [1];
              ?>
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo "$my_activities_title[1]" ?></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

          </div>

          <div class="card mb-3">
            <a href="act_details.php?temp_activity_id=<?php echo $my_activities_id [2]; ?>">
              <img class="card-img-top" src="img/<?php echo "$my_activities_photos[2]" ?>" alt="Card image cap">
              <?php
                $_SESSION['temp_activity_id'] = $my_activities_id [2];
              ?>
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo "$my_activities_title[2]" ?></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

          </div>
        </div>
        <div class="card-deck wow zoomIn">

          <div class="card mb-3">
            <a <a href="act_details.php?temp_activity_id=<?php echo $my_activities_id [3]; ?>">
              <img class="card-img-top" src="img/<?php echo "$my_activities_photos[3]" ?>" alt="Card image cap">
              <?php
                $_SESSION['temp_activity_id'] = $my_activities_id [3];
              ?>
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo "$my_activities_title[3]" ?></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

          </div>

          <div class="card mb-3">
            <a href="act_details.php?temp_activity_id=<?php echo $my_activities_id [4]; ?>">
              <img class="card-img-top" src="img/<?php echo "$my_activities_photos[4]" ?>" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo "$my_activities_title[4]" ?></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

          </div>

        </div>



        <div class="card-deck wow zoomIn">

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/toureiffel.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Tour Eiffel</h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/miamibeach.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Miami Beach</h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/japon1.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Japan</h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>

        <div class="card-deck wow zoomIn">

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/notredame.jpeg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Notre Dame de Paris</h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/nycstockexchange.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">New York Stock Exchange</h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/arcdetriomphe2.jpeg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Arc de Triomphe</h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>

        <div class="card-deck wow zoomIn">

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/akihabara.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">Akihabara</h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/les2alpes2.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/chateaudammarieenpuisaye.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>

        <div class="card-deck wow zoomIn">

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/chateau1.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/templekoyasan1.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <a href="act_details.php">
              <img class="card-img-top" src="img/vueempirestate.jpg" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>


        </div>


      </div>

    </div>

  </div>

  <br>

  <div class="container">
    <nav aria-label="...">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>


  </div>

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
<?php
  if(isset($_POST['activity_nb_1']))
  {
      $_SESSION['temp_activity_id'] = $my_activities_id [0];
  }

  if(isset($_POST['activity_nb_2']))
  {
      $_SESSION['temp_activity_id'] = $my_activities_id [1];
  }
  if(isset($_POST['activity_nb_3']))
  {
      $_SESSION['temp_activity_id'] = $my_activities_id [2];
  }
  if(isset($_POST['activity_nb_4']))
  {
      $_SESSION['temp_activity_id'] = $my_activities_id [3];
  }
  if(isset($_POST['activity_nb_5']))
  {
      $_SESSION['temp_activity_id'] = $my_activities_id [4];
  }
?>

<!--        <a href="">
          <div class="container animated tada">
            <div class="row">

              <div class="card bg-dark text-white mx-auto" style="max-width: 800px">

                <img class="card-img" src="img/rosalindparkbendigo.jpg" alt="rosalindparkbendigo">

                <div class="card-img-overlay">
                  <h5 class="card-title">Today's featured attraction: Rosalind Park Bendigo, Australia</h5>
                  <p class="card-text"></p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>

              </div>
            </div>
          </div>
        </a>
      -->
