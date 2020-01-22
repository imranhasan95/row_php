<?php
session_start();
$title = "profile_edit";
require_once 'check_access.php';
require_once '../header.php';
require_once 'navbar.php';
require_once '../db.php';

$email = $_SESSION['user_email'];
$get_query = "SELECT name, email, phone_number FROM users WHERE email='$email'";
$from_db = mysqli_query($db_connent,$get_query);
$after_assoc = mysqli_fetch_assoc($from_db);
 ?>


 <div class="container">
   <div class="row">
     <div class="col-12">
       <div class="card bg-light mt-4">
         <div class="card-header bg-warning">
           Password Change

         </div>
         <div class="card-body">
            <form method="post" action="Change_password_post.php">
              <div class="form-group">
                <label>Old Password</label>
                <input type="hidden" class="form-control" value="<?=$after_assoc['email']?>" name="email">
                <input type="password" class="form-control" name="old_password">
              </div>
              <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control" name="new_password">
              </div>
                <button type="submit" class="btn btn-primary">Change</button>
              </form>
         </div>
       </div>

     </div>

   </div>

 </div>


 <?php
   require_once '../footer.php';
  ?>
