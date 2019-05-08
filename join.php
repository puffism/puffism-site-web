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

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link active" href="join.php">Join</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
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

  <div class="container">

    <div class="row">

      <div class="col mb-3">
        <div class="card mx-auto shadow-lg" style="max-width: 25rem; max-height: 50rem">
          <div class="card-header text-center">
            <h5>Join as a tourist</h5>
          </div>
          <div class="card-body">

            <img src="img/puffism_logo.png" width="200px" height="200px"
              class="rounded mx-auto d-block animated rotateIn">

            <br>

            <form class="px-4 py-3" form class="px-4 py-3" action="traitement_join.php" method="post">

              <div class="input-group mb-3 col mx-auto">
                <input type="text" class="form-control" name="user_first_name" placeholder="First name" aria-label="First name"
                  aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3 col mx-auto">
                <input type="text" class="form-control" name="user_last_name" placeholder="Last name" aria-label="Last name"
                  aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3 col mx-auto">
                <input type="email" class="form-control" name="user_mail" placeholder="Email" aria-label="Email"
                  aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3 col mx-auto">
                <input type="tel" class="form-control input-medium bfh-phone" name="user_phone" data-format="+33 dd dd dd dd dd"
                  placeholder="Phone number" aria-label="Phone number" aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3 col mx-auto">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                </div>
                <select class="custom-select" name="user_gender" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <br>

              <div class="input-group mb-3 col mx-auto">
                <input type="password" class="form-control" name="user_password" placeholder="Password" aria-label="Password"
                  aria-describedby="basic-addon1">
              </div>

              <div class="input-group mb-3 col mx-auto">
                <input type="password" class="form-control" name="validate_password" placeholder="Re-enter password"
                  aria-label="Re-enter password" aria-describedby="basic-addon1">
              </div>

              <br>

              <div class="text-center">
                  <button class="btn btn-outline-success mb-3" type="submit" id="button-addon4"> Become a Puffin </button>
              </div>
              <?php
              if (isset($erreur)) {
                echo $erreur;
              }
              ?>

            </form>
          </div>
        </div>
      </div>

      <div class="col-8">

        <div class="card mx-auto shadow-lg">
          <div class="card-header text-center">
            <h5>Become a guide</h5>
          </div>

          <div class="card-body">



            <img src="img/puffism_logo.png" width="200px" height="200px"
              class="rounded mx-auto d-block animated rotateIn">

            <br>
            <div class="row">
              <div class="col" style="max-width: 25rem; max-height: 50rem">
                <form class="px-4 py-3">

                  <div class="input-group mb-3 col mx-auto">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                      aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3 col mx-auto">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                      aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3 col mx-auto">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                      aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3 col mx-auto">
                    <input type="tel" class="form-control input-medium bfh-phone" data-format="+33 dd dd dd dd dd"
                      placeholder="Phone number" aria-label="Phone number" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3 col mx-auto">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Other</option>
                    </select>
                  </div>

                  <br>

                  <div class="input-group mb-3 col mx-auto">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                      aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3 col mx-auto">
                    <input type="password" class="form-control" placeholder="Re-enter password"
                      aria-label="Re-enter password" aria-describedby="basic-addon1">
                  </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="Message">Why do you want to become a Local Guide?</label>
                  <textarea class="form-control" id="Message" rows="14"></textarea>
                </div>
              </div>

            </div>

          </div>

          <div class="text-center">
            <form action="/action_page.php">
              <button class="btn btn-outline-success mb-3" type="submit" id="button-addon4"> Send Application
              </button>
            </form>
          </div>

          </form>
        </div>
      </div>
    </div>

  </div>

  </div>

  <br>


  <!--Optionnel JavaScript-->
  <!--Ces scripts sont necessaire pour ajouter jQuery, Popper.js et JavaScript a bootstrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js">
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

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>-->

<!--      <div class="form-group mb-3 col mx-auto d-block">
          <label for="exampleFormControlInput1">First name</label>
        <input type="text" class="form-control" placeholder="First name" aria-label="First name"
          aria-describedby="basic-addon1">
      </div>
    -->
