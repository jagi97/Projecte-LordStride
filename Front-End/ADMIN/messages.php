<?php
   require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Business\businessUser.php";
   require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Business\businessMessage.php";
   require "C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Front-End\redirect.php";
   session_start();

   $idChat= $_GET["id"];

   $users = new User();
   $allUsers = $users->viewAllusers();
   
   $viewMessage = new Message();

   if($idChat){
       $allMessages = $viewMessage->viewMessages($idChat);
   }

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
                            <select class="list-unstyled friend-list" id="select" onchange="cambiaChat()">
                                <?php
                                foreach($allUsers as $user){
                                    if($user->getId() != 1){ ?>
                                        
                                        <option class="p-2" value="<?php echo $user->getId() ?>">
                                        <a href="#" class="d-flex pl-2">
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                            <div class="text-small">
                                                <strong class="float-left pl-3">
                                                    <?php
                                                        echo $user->getName();
                                                    ?>
                                                </strong>
                                            </div>
                                        </a>
                                    </option> 
                                <?php } } ?>
                            </select>
                        </div>
        
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-8 col-xl-10 pl-md-5 px-lg-auto px-0">
        
                        <div class="chat-message" id="formulario">
        
                            <ul class="list-unstyled chat-1 scrollbar-light-blue">
                            <?php
                                foreach($allMessages as $message){
                                    if($message->getIdUsuario() == 1){ ?>
                                    <!-- justify-content-between -->
                                        <li class="d-flex  mb-4">
                                            <img src="multimedia/jagi.jpg" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                            <div class="chat-body white p-3 ml-2 z-depth-1">
                                                <div class="header">
                                                    <strong class="primary-font"> <?php echo $nameUser ?></strong>
                                                    <small class="pull-right text-muted"><i class="fa fa-clock-o"></i><?php echo $message->getHora() ?></small>
                                                </div>
                                                <hr class="w-100">
                                                <p class="mb-0">
                                                    <?php echo $message->getTexto() ?>
                                                </p>
                                            </div>
                                        </li> <?php
                                    }
                                    else{ ?>
                                        <li class="d-flex mb-4">
                                            <div class="chat-body white p-3 z-depth-1">
                                                <div class="header">
                                                    <strong class="primary-font">
                                                        <?php
                                                            $idChat = $message->getIdUsuario();

                                                            $userChat = new User();
                                                            $mostrarUserChat = $userChat->viewUser($idChat);

                                                            $nameUserChat = $mostrarUserChat->getName();

                                                            echo $nameUserChat;
                                                        ?>
                                                    </strong>
                                                    <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                                                </div>
                                                <hr class="w-100">
                                                <p class="mb-0">
                                                    <?php echo $message->getTexto() ?>
                                                </p>
                                            </div>
                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5" alt="avatar" class="avatar rounded-circle mr-0 ml-3 z-depth-1">
                                        </li><?php
                                    }
                                  }
                            ?>
                            </ul>
                            <form method="post">
                                <div class="white">
                                    <div class="form-group basic-textarea">
                                        <input class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here..." name="text"></textarea>
                                    </div>
                                </div>
                                <button name="send" type="submit" class="btn btn-outline-pink btn-rounded btn-sm waves-effect waves-dark float-right">Send</button>
                            </form>
        
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
    <script>
        function cambiaChat() {
            var x = document.getElementById("select").value;
            console.log(x);
            
            // window.location.reload();
            window.location.href = "http://localhost:8888/LordStride/Front-End/ADMIN/messages.php?id="+x;
        }                            
    </script>
  </body>
</html>


<?php
$text = $_POST['text'];

if(isset($_POST["send"]) & isset($_POST["text"])){
  // echo "vamos a insertar </br>";
  $message = new Message( null, $idUser,  $text);
  $newMessage = $message->insertMessage();
  if($newMessage){
    echo "enviado ";
  }
}
?>