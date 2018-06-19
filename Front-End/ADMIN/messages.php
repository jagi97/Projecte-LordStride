<?php
    require_once "/Applications/MAMP/htdocs/LordStride/Business/businessMessage.php";
    require_once "/Applications/MAMP/htdocs/LordStride/Business/businessUser.php";

    session_start();

    $users = new User();
    $allUsers = $users->viewAllusers();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/messages.css">
    <link rel="stylesheet" href="css/chat.css">

  </head>
  <body class="d-flex justify-content-center align-items-center flex-column">
    <a class="arrow"href="admin.php"><i class="fas fa-arrow-alt-circle-left fa-4x"></i></a>
    <h1>MESSAGES</h1>
    <div class="container card rare-wind-gradient chat-room">
            <div class="card-body">
        
                <!-- Grid row -->
                <div class="row px-lg-2 px-2">
        
                    <!-- Grid column -->
                    <div class="col-md-4 col-xl-2 px-0">
        
                        <h6 class="font-weight-bold mb-3 text-center text-lg-left">Member</h6>
                        <div class="white z-depth-1 px-2 pt-3 pb-0 members-panel-1 scrollbar-light-blue">
                            <ul class="list-unstyled friend-list">
                                <?php
                                foreach($allUsers as $user){ ?>
                                <li class="p-2">
                                    <a href="#" class="d-flex pl-2">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">
                                            <strong class="float-left pl-3"><?php echo $user->getName() ?></strong>
                                        </div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
        
                    </div>
                    <!-- Grid column -->
        
                    <!-- Grid column -->
                    <div class="col-md-8 col-xl-10 pl-md-5 px-lg-auto px-0">
        
                        <div class="chat-message">
        
                            <ul class="list-unstyled chat-1 scrollbar-light-blue">
                                <li class="d-flex justify-content-between mb-4">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                    <div class="chat-body white p-3 ml-2 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Brad Pitt</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between mb-4">
                                    <div class="chat-body white p-3 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Lara Croft</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                                        </p>
                                    </div>
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5" alt="avatar" class="avatar rounded-circle mr-0 ml-3 z-depth-1">
                                </li>
                                <li class="d-flex justify-content-between mb-4">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                    <div class="chat-body white p-3 ml-2 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Brad Pitt</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between mb-4">
                                    <div class="chat-body white p-3 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Lara Croft</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                                        </p>
                                    </div>
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5" alt="avatar" class="avatar rounded-circle mr-0 ml-3 z-depth-1">
                                </li>
                                <li class="d-flex justify-content-between mb-4 pb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                    <div class="chat-body white p-3 ml-2 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Brad Pitt</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="white">
                                <div class="form-group basic-textarea">
                                    <textarea class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here..."></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-pink btn-rounded btn-sm waves-effect waves-dark float-right">Send</button>
        
                        </div>
        
                    </div>
                    <!-- Grid column -->
        
                </div>
                <!-- Grid row -->
        
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>