<?php

require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Business\businessForm.php";

?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
   <link rel="stylesheet" href="css/service.css">
    
   <title>LORDSTRIDE</title>
   <link rel="icon" href="../HOME/multimedia/logo.png">
   
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
            <a class="nav-link" href="service.php">TELL US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../BLOG/blog.php">BLOG</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../CONTACTO/contact.php">CONTACT</a>
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
    <section>
    <div class="container-fluid">
       <div class="row">
         <div class="col">
          <h2>EXPLÍCANOS TU PROYECTO</h2>
          <form method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Nombre" name="firstName">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apellido" name="lastName">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Telf" name="phone">
                </div>
              </div>
              <div class="form-group">
                <input onfocusout="apareceForm()" class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="¿Qué tipo de página quieres? ¿Qué te interesa? ¿Precio?"  name="texto"></input>
              </div>
              <button type="submit" class="btn btn-primary" name="send">SEND</button>
            </form>
          </div>
        </div>
      </div>
    </section>

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
                <a href="service.php"><li>TELL US</li></a>
                <a href="../BLOG/blog.php"><li>BLOG</li></a>
              </ul>
            </div>
            <div class="col">
              <ul>
                <a href="../CONTACTO/contact.php"><li>CONTACT</li></a>
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
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/myfunctions.js"></script>
  </body>
</html>
<?php

if(isset($_POST["send"]) & isset($_POST["texto"]) & isset($_POST["firstName"]) & isset($_POST["lastName"]) & isset($_POST["email"]) & isset($_POST["phone"])){
  
  $texto = $_POST["texto"];
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  
  $newFormulario = new Form(null,$texto,  $firstName, $lastName,  $email, $phone);
  $enviaBD = $newFormulario->insertFormulario();
}

?>