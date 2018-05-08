<html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <title>Hi There !!!</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"/> 
            <link href="CSS/style.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    </head>
    <body>
      <?php
        session_start();
        if(isset($_POST['bttn_login']))
        {
          require 'connection.php';
          $username = $_POST['username'];
          $password = $_POST['password'];
          $fetchQuery = mysqli_query($conn, 'select * from reportgenerator.tb_logindetails where col_userID="'.$username.'" and col_password="'.$password.'"');
          if(mysqli_num_rows($fetchQuery)==1)
          {
             $_SESSION['username']=$username;
             header('Location: welcome.php'); 
          }
          else
            echo "account invalid";
        }
      ?>
            <div class="container-fluid bg">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="container">
                                    <form class="form-container" method="post">
                                        <h1>Login</h1>
                                      <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">LoginID</label>                                        
                                        <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="LoginID">
                                      </div>
                                      <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>                            
                                        <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                                      </div>                            
                                      <div class="form-group row">                                        
                                          <button type="submit" name="bttn_login" class="btn btn-success btn-block">Sign in</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                </div>
            </div>

    </body>
</html>