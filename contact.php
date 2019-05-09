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
          <a class="nav-link" href="services.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link active" href="contact.php">Contact</a>
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

  <br>

  <br>

  <div class="card mx-auto shadow-lg" style="max-width: 30rem; max-height: 50rem">
    <div class="card-header text-center">
      <h5>Contact Us</h5>
    </div>
    <div class="card-body">
      <img src="img/puffism_logo.png" width="200px" height="200px" class="img-fluid rounded mx-auto d-block animated rotateIn">

      <br>
      <form class="px-6 py-2">
        <div class="input-group mb-3 col-8 mx-auto d-block">
          <div class="form-group">
            <label for="First name">First name</label>
            <input type="First name" class="form-control" id="First name" placeholder="Charlie">
          </div>
        </div>

        <div class="input-group mb-3 col-8 mx-auto d-block">
          <div class="form-group">
            <label for="Last name">Last name</label>
            <input type="Last name" class="form-control" id="Last name" placeholder="Brown">
          </div>
        </div>

        <div class="input-group mb-3 col-8 mx-auto d-block">
          <div class="form-group">
            <label for="Email address">Email address</label>
            <input type="email" class="form-control" id="Email address" placeholder="charliebrown@example.com">
          </div>
        </div>
        <div class="input-group mb-3 col-8 mx-auto d-block">
          <div class="form-group">
            <label for="Message">Message</label>
            <textarea class="form-control" id="Message" rows="3"></textarea>
          </div>
        </div>

        <br>

        <div class="text-center">
          <button class="btn btn-primary" type="submit"> Send Message </button>
        </div>
      </form>
    </div>
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

<!--
  <div class="container">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your message has been sent!</strong> We will reply shortly.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
-->
