<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/comments.css">
    <link rel="stylesheet" href="css/chatcomment.css">

  </head>
  <body class="d-flex justify-content-center align-items-center flex-column">
        <a class="arrow" href="admin.php"><i class="fas fa-arrow-alt-circle-left fa-4x"></i></a>
    <h1>LAST COMMENTS</h1>
    <div class="container">
            <h2>All</h2>           
            <table class="table table-striped table-hover btn-table">
                <thead>
                <tr>
                    <th>Post</th>
                    <th>Comments</th>
                    <th>GO</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img class="img-thumbnail" src="../BLOG/multimedia/audrey-jackson-260657.jpg" alt="img"></td>
                    <td>4</td>
                    <td><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-arrow-alt-circle-right fa-2x"></i></button></td>                    
                </tr>
                <tr>
                    <td><img class="img-thumbnail" src="../BLOG/multimedia/pexels-photo-370474.jpeg" alt="img"></td>
                    <td>2</td>
                    <td><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-arrow-alt-circle-right fa-2x"></i></button></td>
                  
                </tr>
                <tr>
                    <td><img class="img-thumbnail" src="../BLOG/multimedia/blog-1-1000x600.jpg" alt="img"></td>
                    <td>3</td>
                    <td><button type="button" class="btn btn-link" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-arrow-alt-circle-right fa-2x"></i></button></td>
                </tr>
                </tbody>
            </table>
        </div>

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
            <li class="comment author-comment">
                <div class="info">
                    <a href="#">Jack Smith</a>
                    <span>3 hours ago</span>
                </div>
                <a class="avatar" href="#">
                    <img src="multimedia/avatar_author.jpg" width="35" alt="Profile Avatar" title="Jack Smith" />
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse gravida sem sit amet molestie portitor.</p>
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
                    <textarea placeholder="Write your comment here" name="comment"></textarea>
                    <div>
                        <img src="multimedia/avatar_user_2.jpg" width="35" alt="Profile of Bradley Jones" title="Bradley Jones" />
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
  </div>
</div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>