<?php
  session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>
      Register
    </title>
  </head>
  <body>
        <div class="container mx-atou bg-light">
          <div class="row">
            <div class="col-md-4"></div>
              <div  class="col-md-4">
                <h3  class=" text-center mt-2  mb-4 bg-success">Registration Form</h3>
                  <div class="cade">
                      <div class="cade-body">
                        <form method="post" action="Registration.php">

                             <div class="form-group">
                               <label class="text-info">Name</label>
                               <input type="text" class="form-control" placeholder="Username" name="Username">
                             </div>

                             <div class="form-group">
                               <label class="text-info">email</label>
                               <input type="text" class="form-control" placeholder="Email" name="email">
                               <?php
                                 if(isset($_SESSION['err_msg_email']))
                                 {
                                 ?>
                                     <spen class="text-danger">
                                       <?php
                                         echo $_SESSION['err_msg_email'];
                                         unset($_SESSION['err_msg_email']);
                                       ?>
                                    </spen>
                                 <?php
                               }
                            ?>
                             </div>

                              <div class="form-group">
                                    <label class="text-info">Number</label>
                                    <input type="Number" class="form-control" placeholder="Enter your Number" name="phone_number">
                              </div>
                             <div class="form-group">
                               <label class="text-info">password</label>
                               <input type="Password" class="form-control" placeholder="Password" name="password">

                               <?php
                                 if(isset($_SESSION['err_msg_password']))
                                 {
                                 ?>
                                     <spen class="text-danger">
                                       <?php
                                         echo $_SESSION['err_msg_password'];
                                         unset($_SESSION['err_msg_password']);
                                       ?>
                                    </spen>
                                 <?php
                               }
                            ?>

                             </div>

                             <div class="form-group">
                               <label class="text-info">Retype password</label>
                               <input type="Password" class="form-control" placeholder="Enter Retype Password" name="Retype_password">

                               <?php
                                 if(isset($_SESSION['err_msg_Retype_password']))
                                 {
                                 ?>
                                     <spen class="text-danger">
                                       <?php
                                         echo $_SESSION['err_msg_Retype_password'];
                                         unset($_SESSION['err_msg_Retype_password']);
                                       ?>
                                    </spen>
                                 <?php
                               }
                            ?>

                             </div>

                                <button type="submit" class="btn btn-dark" value="SIGNUP">Register</button>
                                <a href="login.php" class="btn btn-success">Login</a>
                          </form>
                        </div>
                        <?php
                          if(isset($_SESSION['err_msg_Done']))
                          {
                          ?>
                              <div class="alert alert- succes" role="alert">
                                <?php
                                  echo $_SESSION['err_msg_Done'];
                                  unset($_SESSION['err_msg_Done']);
                                ?>
                             </div>
                          <?php
                        }
                     ?>

                      </div>
                    </div>
                  <div class="col-md-4"></div>
                </div>
              </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
