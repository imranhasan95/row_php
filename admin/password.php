<!-- <?php
  session_start();

require_once '../header.php';
require_once 'navbar.php';
require_once '../db.php';

  $change_query =
  $from_db = mysqli_query($db_connent,$change_query);
  $after_assoc = mysqli_fetch_assoc($from_db);
?>


  <div class="container">
      <div class="row">
         <div class="col-12">
           <div class="card bg-light mt-4">
             <div class="card-header bg-info">
               Password Change
             </div>
             <div class="card-body">
                <form method="post" action="password_change.php">
                  <div class="form-group">
                    <label>Existing Password</label>
                    <input type="password" class="form-control" placeholder="existing password"  name="old_password" value="<?=$after_assoc['old_password']?>">
                  </div>
                  <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" placeholder="new password" name="new_password">
                  </div>
                  <div class="form-group">
                    <label>Re_New Password</label>
                    <input type="password" class="form-control" placeholder="Re-new password" name="confirmnew_password">
                  </div>
                    <button type="submit" class="btn btn-primary" value="<?=$after_assoc['Update_Password']?>" name="Update_Password">Update Password</button>
                  </form>
             </div>
           </div>

         </div>

       </div>

     </div>
<!-- value="<?=$after_assoc['old_password']?>" -->

     <?php
       require_once '../footer.php';
      ?> -->
