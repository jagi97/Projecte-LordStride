<?php
  require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Business\businessPost.php";
  require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Business\businessComment.php";
  require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Business\businessUser.php";
  require 'C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Front-End\redirect.php';
  session_start();

  $idChat= $_GET["idNumPost"];

  $User = new User();
  $mostrarUser = $User->viewUser($_SESSION['username']);

  $usernameUser = $mostrarUser->getUsername();
  $idUser = $mostrarUser->getId();
  $nameUser = $mostrarUser->getName();
  $emailUser = $mostrarUser->getEmail();
  $passwordUser = $mostrarUser->getPassword();

  $posts = new Post();
  $mostrarPost1 = $posts->viewPost(1);
  $mostrarPost2 = $posts->viewPost(2);
  $mostrarPost3 = $posts->viewPost(3);

  $numPost1 = $mostrarPost1->getNumPost();
  $numPost2 = $mostrarPost2->getNumPost();
  $numPost3 = $mostrarPost3->getNumPost();


  $likes1 = $mostrarPost1->getLikes();
  $viewed1 = $mostrarPost1->getViewed();

  $likes2 = $mostrarPost2->getLikes();
  $viewed2 = $mostrarPost2->getViewed();

  $likes3 = $mostrarPost3->getLikes();
  $viewed4 = $mostrarPost3->getViewed();

  $comments = new Comment();
  $comments1 = $comments->numComments(1);
  $comments2 = $comments->numComments(2);
  $comments3 = $comments->numComments(3);

  $allComments1 = $comments->viewComments($idChat);
  $allComments2 = $comments->viewComments(2);
  $allComments3 = $comments->viewComments(3);

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
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/posts.css">    
    <link rel="stylesheet" href="css/modal.css">
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
            <li><a href="posts.php"><i class="fab fa-blogger"></i>Posts                             </a></li>
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
                <li class="nav-item"><a href="../SIGNIN/index.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fas fa-sign-out-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Header Section-->
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">User</a></li>
            <li class="breadcrumb-item active">Posts       </li>
          </ul>
        </div>
      </div>
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- Pie Chart-->
              <div class="slider">
                <div>
                  <p>For </p>
                  <p>Web Designers</p>
                  <p>Web Developers</p>
                </div>
              </div>
          </div>
          <section class="blog-area section">
            <div class="container">
        
              <div class="row">
        
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100">
                    <div class="single-post post-style-1">
        
                      <div class="blog-image"><img src="multimedia/blog-1-1000x600.jpg" alt="Blog Image"></div>
        
                      <div class="avatar"><img src="multimedia/jagi.jpg" alt="Profile Image"></div>
        
                      <div class="blog-info">
        
                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                        Concepts in Physics?</b></a></h4>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                          ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        
                        <ul class="post-footer">
                          <li><a href="#"><i class="fas fa-heart"></i><?php echo $likes1 ?></a></li>
                          <li><a href="posts.php?idNumPost=1" ><i class="fas fa-comment"></i><?php echo $comments1 ?> <span style="display: none">1</span></a></li>
                          <li><a href="#"><i class="fas fa-eye"></i><?php echo $viewed1 ?></a></li>
                        </ul>
                      </div><!-- blog-info -->
                    </div><!-- single-post -->
                  </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
        
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100">
                    <div class="single-post post-style-1">
        
                      <div class="blog-image"><img src="multimedia/audrey-jackson-260657.jpg" alt="Blog Image"></div>
        
                      <div class="avatar"><img src="multimedia/jagi.jpg" alt="Profile Image"></div>
        
                      <div class="blog-info">
                        <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                          Concepts in Physics?</b></a></h4>

                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        
                        <ul class="post-footer">
                          <li><a href="#"><i class="fas fa-heart"></i><?php echo $likes2 ?></a></li>
                          <li><ahref="posts.php?idNumPost=2" ><i class="fas fa-comment"></i><?php echo $comments2 ?></a></li>
                          <li><a href="#"><i class="fas fa-eye"></i><?php echo $likes2 ?></a></li>
                        </ul>
                      </div><!-- blog-info -->
        
                    </div><!-- single-post -->
        
                  </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
        
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100">
                    <div class="single-post post-style-1">
        
                      <div class="blog-image"><img src="multimedia/pexels-photo-370474.jpeg" alt="Blog Image"></div>
        
                      <div class="avatar"><img src="multimedia/jagi.jpg" alt="Profile Image"></div>
        
                      <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                        Concepts in Physics?</b></a></h4>
                      
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                          ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        
                      <ul class="post-footer">
                        <li><a href="#"><i class="fas fa-heart"></i><?php echo $likes3 ?></a></li>
                        <li><a  href="posts.php?idNumPost=3"><i class="fas fa-comment"></i><?php echo $comments3 ?></a></li>
                        <li><a href="#"><i class="fas fa-eye"></i><?php echo $likes3 ?></a></li>
                      </ul>
        
                    </div><!-- single-post -->
                  </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
                
              </div><!-- row -->
            </div><!-- container -->
          </section><!-- section -->
    
  <div id="myModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <ul class="comment-section">
        <?php
          foreach($allComments1 as $viewComment){ ?>
             <li class="comment user-comment">
              <div class="info">
                  <a href="#">Anie Silverston</a>
                  <span>4 hours ago</span>
              </div>
              <a class="avatar" href="#">
                  <img src="multimedia/avatar_user_1.jpg" width="35" alt="Profile Avatar" title="Anie Silverston" />
              </a>
              <p>Suspendisse gravida sem?</p>
            </li>
        <?php } ?>
        <!-- 
        <li class="comment author-comment">
          <div class="info">
              <a href="#">Jack Smith</a>
              <span>1 hour ago</span>
          </div>
          <a class="avatar" href="#">
              <img src="multimedia/avatar_author.jpg" width="35" alt="Profile Avatar" title="Jack Smith" />
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisee gravida sem sit amet molestie porttitor.</p>
        </li> -->

        <li class="write-new">
          <form method="post">
              <input placeholder="Write your comment here" name="comment"></input>
              <div>
                  <img src="multimedia/avatar_user_2.jpg" width="35" alt="Profile of Bradley Jones" title="Bradley Jones" />
                  <button type="submit" name="send">Submit</button>
              </div>
          </form>
        </li>
      </ul>
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
$comment = $_POST['comment'];

if(isset($_POST["send"]) & isset($_POST["comment"])){
  // echo "vamos a insertar </br>";
  $newComment = new Comment(null, $numPost1, $idUser, $comment);
  $sentComment = $newComment->insertComment();
  if($sentComment){
    echo "enviado ";
  }
}

if($idChat){ ?>
  <script>
    console.log("okey");
    $('#myModal').modal('show');
  </script>
<?php
}

?>