<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
     
    <title>LORDSTRIDE</title>
    <link rel="icon" href="multimedia/logo.png">
  </head>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg nav-down" id="nav">
      <a class="navbar-brand" href="../HOME/lordstride.php">LORDSTRIDE</a>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link" href="../SERVICIOS/service.php">TELL US</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../BLOG/blog.php">BLOG</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ACCOUNT
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link" href="../SIGNIN/index.php">ENTRAR</a>
              <a class="nav-link" href="../LOGIN/index.php">CREATE ACCOUNT</a>
          </div>
          </li>
        </ul>
        </div>
      </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row caja">
              <div class="col">
                <section>
                  <h2>¿DÓNDE ESTAMOS?</h2>
                  <h4>BARCELONA</h4>
                  <p>Passeig de Sant Joan Bosco, 42, 08017 Barcelona</p>
                  <p>Email: salesianssarria.com</p>
                  <p>Telf: 932 03 11 00</p>
                  <p>Horario: 8:00 - 21:00</p>
                </section>
              </div>
              <div id="map"></div>
          </div>
        </div>
    </main>
    <footer>
      <div class="container-fluid">
        <div class="row footer">
          <div class="col">
            <ul>
                <a href="../HOME/lordstride.php"><li>
                <img src="multimedia/logo.png" alt="" class="logo">
                LORDSTRIDE
              </li></a> 
            </ul>
          </div>
          <div class="col">
            <ul>
              <a href="../SIGNIN/index.php"><li>SIGN IN</li></a>
              <a href="../LOGIN/index.php"><li>SIGN UP</li></a>
            </ul>
          </div>
          <div class="col">
            <ul>
              <a href="../SERVICIOS/service.php"><li>TELL US</li></a>
              <a href="../BLOG/blog.php"><li>BLOG</li></a>
            </ul>
          </div>
          <div class="col">
            <ul>
              <a href="contact.php"><li>CONTACT</li></a>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid iconos">
        <div class="row">
          <a href="https://es-es.facebook.com/"><i class="fab fa-facebook fa-2x"></i></a> 
          <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square fa-2x"></i></a> 
          <a href="https://www.20minutos.es/rss/tecnologia/"><i class="fas fa-rss fa-2x"></i></a> 
          <a href="https://accounts.google.com/ServiceLogin"><i class="fab fa-google-plus-square fa-2x"></i></a> 
          <a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram fa-2x"></i></a> 
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="row">
          <p><i class="far fa-copyright"></i> Copyright. All rights reserved.</p>
        </div>
      </div>
      <a class="admin" href="../ADMIN/log.php">ADMIN</a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1pXPwjFhk5yeIRfQY_mdOakqRdVTWDiQ&callback=initMap"
      async defer></script>
</body>
</html>