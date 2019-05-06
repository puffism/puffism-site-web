<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!--<link rel="stylesheet" href="styles.css">-->
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


<body style="background-color:rgb(114, 198, 236);">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

        <li class="nav-item active">
          <a class="nav-link active" href="login.php">Login</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <br>

  <br>

  <div class="card mx-auto" style="max-width: 25rem; max-height: 50rem">
    <div class="card-header text-center">
      <h5>Login</h5>
    </div>
    <div class="card-body">
      <img src="img/puffism_logo.png" width="200px" height="200px" class="rounded mx-auto d-block animated rotateIn">

      <br>

      <form class="px-4 py-3" action="traitement_login.php" method="post">
        <div class="input-group mb-3 col mx-auto">
          <input type="text" class="form-control" name="user_mail" placeholder="Email" aria-label="Email"
            aria-describedby="basic-addon1">
        </div>

        <br>

        <div class="input-group mb-3 col mx-auto">
          <div class="input-group-prepend">
          </div>
          <input type="text" class="form-control"name="user_password" placeholder="Password" aria-label="Password"
            aria-describedby="basic-addon1">
        </div>

        <div class="input" style="text-align:center">
          <input type="checkbox" class="form-check-input" id="dropdownCheck"> Keep me signed in
        </div>
        <br>

        <div class="text-center mx-auto">
          <a href="index.php">Forgot your password?</a>
        </div>

        <br>

        <div class="text-center">
          <!--CALL SIMON-->
          <button type="submit" class="btn btn-primary"> Login </button>
      </form>

    </div>

    <!--<div class="clearfix" style="color:coral">
      <div class="spinner-border float-right" role="status">
      </div>
    </div>-->
  </div>

  </div>

  <br>


  <!--Optionnel JavaScript-->
  <!--Ces scripts sont necessaire pour ajouter jQuery, Popper.js et JavaScript a bootstrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
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
    <form class="px-4 py-3">
        <div class="form-group">
          <label for="exampleDropdownFormEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
        </div>
        <div class="form-group">
          <label for="exampleDropdownFormPassword1">Password</label>
          <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="dropdownCheck">
          <label class="form-check-label" for="dropdownCheck">
            Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">New around here? Sign up</a>
      <a class="dropdown-item" href="#">Forgot password?</a>
    -->
<!--
    <form action="/action_page.php">
CALL SIMON
      <button type="submit" class="btn btn-primary">
          Login<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></button>
    </form>
    -->
