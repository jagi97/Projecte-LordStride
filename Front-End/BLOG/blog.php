<?php
   require "/Applications/MAMP/htdocs/LordStride/Business/businessPost.php";
   require "/Applications/MAMP/htdocs/LordStride/Business/businessComment.php";


  $posts = new Post();
  $mostrarPost1 = $posts->viewPost(1);
  $mostrarPost2 = $posts->viewPost(2);
  $mostrarPost3 = $posts->viewPost(3);

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

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/modal.css">
  
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
            <a class="nav-link" href="../SERVICIOS/service.php">TELL US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="blog.php">BLOG</a>
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
        <div class="slider">
          <div>
            <p>For </p>
            <p>Web Designers</p>
            <p>Web Developers</p>
          </div>
        </div>
      </header>
    <main>
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
                          <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-comment"></i><?php echo $comments1 ?></a></li>
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
                          <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-comment"></i><?php echo $comments2 ?></a></li>
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
                        <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-comment"></i><?php echo $comments3 ?></a></li>
                        <li><a href="#"><i class="fas fa-eye"></i><?php echo $likes3 ?></a></li>
                      </ul>
        
                    </div><!-- single-post -->
                  </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->
                
              </div><!-- row -->
            </div><!-- container -->
          </section><!-- section -->
    
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <ul class="comment-section">
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
        <li class="comment user-comment">

                  <div class="info">
                      <a href="#">Bradley Jones</a>
                      <span>1 hour ago</span>
                  </div>

                  <a class="avatar" href="#">
                      <img src="multimedia/avatar_user_2.jpg" width="35" alt="Profile Avatar" title="Bradley Jones" />
                  </a>

                  <p>Suspendisse gravida sem sit amet molestie portitor?</p>

        </li>
        <li class="comment author-comment">

            <div class="info">
                <a href="#">Jack Smith</a>
                <span>1 hour ago</span>
            </div>

            <a class="avatar" href="#">
                <img src="multimedia/avatar_author.jpg" width="35" alt="Profile Avatar" title="Jack Smith" />
            </a>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisee gravida sem sit amet molestie porttitor.</p>

        </li>

        <li class="write-new">

            <form action="#" method="post">

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
    </main>
    <footer>
        <div class="container-fluid">
          <div class="row footer">
            <div class="col">
              <ul>
                  <a href="../HOME/lordstride.php"><li>
                  <img src="../HOME/multimedia/logo.png" alt="" class="logo">
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
                <a href="blog.php"><li>BLOG</li></a>
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

  </body>
</html>