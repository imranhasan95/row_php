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
         <div class="card-header bg-info">
           Profile Edit

         </div>
         <div class="card-body">
            <form method="post" action="profile_edit_post.php">
              <div class="form-group">
                <label>Name</label>
                <input type="hidden" class="form-control" value="<?=$after_assoc['email']?>" name="email">
                <input type="text" class="form-control" value="<?=$after_assoc['name']?>" name="user_name">
              </div>
              <div class="form-group">
                <label>Phone_Number</label>
                <input type="text" class="form-control" value="<?=$after_assoc['phone_number']?>" name="phone_number">
              </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
         </div>
       </div>

     </div>

   </div>

 </div>


 <?php
   require_once '../footer.php';
  ?>
