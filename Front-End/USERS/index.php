<?php
   require "/Applications/MAMP/htdocs/LordStride/Business/businessUser.php";
   require "/Applications/MAMP/htdocs/LordStride/Front-End/redirect.php";
   session_start();

  $User = new User();
  $mostrarUser = $User->viewUser($_SESSION['username']);

  $usernameUser = $mostrarUser->getUsername();
  $nameUser = $mostrarUser->getName();
  $emailUser = $mostrarUser->getEmail();
  $passwordUser = $mostrarUser->getPassword();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
            <h2 class="h5"><?php echo $nameUser ?></h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>L</strong><strong class="text-primary">S</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"><i class="fas fa-home"></i>User's Info                             </a></li>
            <li><a href="message.php"><i class="fas fa-comments"></i>Messages                             </a></li>
            <li><a href="cart.php"> <i class="fas fa-shopping-cart"></i>Cart                             </a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fas fa-bars"></i></a><a href="index.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Lordstride</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                <li class="nav-item">
                    <a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fas fa-sign-out-alt"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            
            <!-- To Do List-->
            <div class="col-lg-3  pt-3">
              <div class="card to-do">
                <h2 class="display h4">Info</h2>
                <form method="post">
                  <div class="form-group">
                      <label for="exampleUser">Username:</label>
                      <input type="text" class="form-control" id="exampleUser" aria-describedby="emailHelp" value="<?php echo $usernameUser ?>" name="username">
                      
                  </div>
                  <div class="form-group">
                      <label for="exampleName">Name:</label>
                      <input type="text" class="form-control" id="exampleName" aria-describedby="emailHelp" value="<?php echo $nameUser ?>" name="name">
                      
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $emailUser ?>" name="email">
                    
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $passwordUser ?>" name="pass">
                    
                  </div>
                  <button type="submit" class="btn btn-primary" name="modify">MODIFICA</button>
                  <button type="submit" class="btn btn-danger" name="delete">ELIMINAR CUENTA</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>

<?php
  if(isset($_POST["btnlogout"])){
		header("Location: ../SIGNIN/index.php");
  }

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["pass"];
  $name = $_POST["name"];

  $idUser = $mostrarUser->getId();

	if(isset($_POST["modify"])& isset($_POST["username"]) & isset($_POST["email"]) & isset($_POST["pass"])& isset($_POST["name"])){
    //$User->setId($idUser);
    $User=new User($idUser, $username, $name, $email, $password);
		$modificado = $User->modifyUser();

		if($modificado){
			echo "Modificado ";
		
		}
		else{
			echo "no modificado";
		}
  }
  
  if(isset($_POST["delete"])){

    $User=new User($idUser, $username, $name, $email, $password);
    $deleteado = $User->deleteUser();
    
		if($deleteado){
      echo "Eliminado ";
      redirect("../LOGIN/index.php");

		}
		else{
			echo "no eliminado ";
		}
  }

  
?>