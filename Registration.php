<?php
session_start();
require_once 'db.php';


//geting data
$Username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];
$Retype_password = $_POST['Retype_password'];
$phone_number= $_POST['phone_number'];

  // chacking possword
 $after_sanitize_email = filter_var($email,FILTER_SANITIZE_EMAIL);
  // chacking possword format
    $if_capital = preg_match("@[A-Z]@",$password);
    $if_small = preg_match("@[a-z]@",$password);
    $if_number = preg_match("@[0-9]@",$password);

  // chacking name
    $if_name = preg_match("/^[a-zA-Z]*$/",$Username);
    // chacking email vaild

      if (!filter_var($after_sanitize_email, FILTER_VALIDATE_EMAIL))
        {
          $_SESSION['err_msg_email'] = "This is an invalid email";
          header("location: registor.php");
        }

        else
          {
            if ($if_capital == 1 && $if_small == 1 && $if_number == 1 && strlen($password)>=8)
            {
              // chacking phone_number
                if (strlen($phone_number)<=11)
                {
                  if ($password == $Retype_password)
                  {
                    // password in MD5
                    $encrepted_password = md5($password);

                    //chacking Email exists or not
                    $checking_query = "SELECT COUNT(*) AS total_count FROM users WHERE email='$after_sanitize_email'";
                    $after_checking = mysqli_query($db_connent,$checking_query);
                    $after_assoc = mysqli_fetch_assoc($after_checking);

                    if($after_assoc['total_count'] == 0)
                      {
                        $insert_query = "INSERT INTO users( Name, email, password, phone_number) VALUES('$Username', '$email', '$encrepted_password', '$phone_number')";
                        mysqli_query($db_connent,$insert_query);
                        $_SESSION['success_msg_Done'] = "Done";
                        header("Location: registor.php");
                      }
                      else
                      {
                        $_SESSION['err_msg'] = "This NO symbol";
                        header("location: registor.php");
                      }
                  }
                  else
                    {
                      $_SESSION['err_msg'] = "This no Number";
                      header("location: registor.php");
                    }

                }
                else
                {
                  $_SESSION['err_msg_Retype_password'] = "This Retype_password";
                  header("location: registor.php");
                }

            }
            else
              {
                $_SESSION['err_msg_password'] = "your password showld have 1 capitel,1samll and at lest 8 char";
                header("location: registor.php");
              }
          }


 ?>
