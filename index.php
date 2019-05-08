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
  <!-- Meta tag pour notre fichier .css personalise
  <link rel="stylesheet" href="./css/custom.css">-->

  <!--Meta tag pour librairie de animate.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <title>Puffism</title>
  <link rel="icon" href="img/puffism_logo.png">
</head>

<body style="background-color:rgb(114, 198, 236);">
  <!--
  <div class="container">
    <h1>Puffism</h1>
    <p>The best way to discover, have fun</p>
  </div>
  -->
  <div class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark animated slideInRight">
      <a class="navbar-brand" href="index.php">
        <h2>Puffism</h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="activities.html">Activities</a>
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

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>

    </nav>
  </div>

  <!--<hr> WEBSITE BODY-->

  <br><br>

  <div class="container">


    <div class="container">
      <div class="row">
        <div class="card-group bg-light mx-auto rounded">
          <div class="card-mb-3">
            <img src="img/puffism_logo.png" width="200px" class="rounded mx-auto d-block animated rotateIn">
          </div>

          <div class="card bg-light">
            <div class="card-header">Services and activities are currently unavailable</div>
            <!--<<TO REMOVE-->
            <div class="card-body">
              <h1 class="card-title">Welcome to Puffism!</h1>
              <p5 class="card-text">We are building a platform so that tourists and
                guides alike can meet, exchange, discover and have fun!</p5>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>

  <br>

  <div class="container">
    <h3 class="text-white text-center">What is Puffism?</h3>
    <div class="embed-responsive embed-responsive-16by9 w-75 mx-auto rounded">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cnbyQtC1K1M" frameborder="0"
        allowfullscreen></iframe>
    </div>
  </div>

  <br><br><br><br><br><br>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mb-3 bg-light wow fadeIn">
          <div class="card-body">
            <h5 class="card-title">Tourists</h5>
            <p class="card-text text-justify">The tourist aka the Puffin can be anyone, whether a student or a
              professional with a passion for travelling, exploring new cities and meeting locals. All it takes a few
              clicks and you can be creating your own unique travelling experience. Surrounded with locals with similar
              interests.<br><br>Puffism creates an interaction between tourists and locals to create bonds and exchange
              experiences.When the tourist is home the roles may be inversed, the tourist becomes the local and the
              local becomes the tourist!<br><br>It is our ultimate goal to give the tourist and the local guide the
              ultimate touristic experience.</p>
          </div>
          <footer class="card-footer text-justify">Want to know more? <a href="services.html">See our services</a><br>
            Need to contact us? <a href="contact.html"> Contact us</a><br>
            Want to start creating your adventure? <a href="join.php">Join as tourist</a>
          </footer>
        </div>
      </div>
      <div class="col-5">
        <div class="card mb-3 bg-light wow zoomIn">
          <img class="card-img-top rounded" src="img/tourists.jpg">
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br><br><br>


  <div class="container">
    <div class="row">
      <div class="col-5">
        <div class="card mb-3 bg-light shadow wow zoomIn">
          <img class="card-img-top rounded" src="img/tourist_and_locals.jpg">
        </div>
      </div>
      <div class="col">
        <div class="card mb-3 bg-light shadow wow fadeIn">
          <div class="card-body">
            <h5 class="card-title">Local Guides</h5>
            <p class="card-text text-justify">The local guide is a local that knows the terrain, the city in which
              he/she lives in and is willing to interact, accompany and help the tourist in their travels. The local can
              be seen as an acquaintance that can share knowledge, experiences with the tourist to help them navigate a
              new city, country.<br><br>The local can very well be a tourist in another country or continue being a
              guide if he/she has lived there long enough.
            </p>
          </div>
          <footer class="card-footer text-justify">Want to know more? <a href="services.html">See our services</a><br>
            Need to contact us? <a href="contact.html"> Contact us</a><br>
            Want to start sharing your experience? <a href="join.php">Join as local guide</a>
          </footer>
        </div>
      </div>
    </div>
  </div>




  <!--WEBSITE FOOTER-->
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


<!--  <div class="container-fluid bg-dark">
    <div id="carouselHome" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner rounded w-50 my-auto mx-auto">
        <div class="carousel-item active">
          <img src="img/louvre.jpg" class="d-block w-100" alt="louvre">
        </div>
        <div class="carousel-item">
          <img src="img/cubajosemarti.jpg" class="d-block w-100" alt="cubajosermartimonument">
        </div>
        <div class="carousel-item">
          <img src="img/germanydresden.jpg" class="d-block w-100" alt="germanydresden">
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
  </div>
-->

<!--  <script>
    var wow = new WOW({
      boxClass: 'wow', // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset: 0, // distance to the element when triggering the animation (default is 0)
      mobile: true, // trigger animations on mobile devices (default is true)
      live: true, // act on asynchronously loaded content (default is true)
      callback: function (box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null, // optional scroll container selector, otherwise use window,
      resetAnimation: true, // reset animation on end (default is true)
    });
    wow.init();
  </script>-->

<!--
    <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="img/louvre.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/louvre.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/louvre.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
-->


<!--<ul>
  <li><a href="Home.asp"</a></li>
  <li><a href="Activites.asp"</a></li>
  <li><a href="Services.asp"</a></li>
  <li><a href="About.asp"</a></li>
  <li><a href="Contact.asp"</a></li>
</ul>

<div class="row">
    <div class="col-sm-4">.col-sm-4</div>
    <div class="col-sm-8">.col-sm-8</div>
  </div>

  <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>-->

<!-- frffffffffffffffffffffffffffff <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>-->
