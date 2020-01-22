<?php
session_start();
$title = "Deshboared";

require_once 'check_access.php';
require_once '../header.php';
require_once 'navbar.php';
require_once '../db.php';

$get_query = "SELECT id, name, email, phone_number FROM users";
$from_db = mysqli_query($db_connent,$get_query);



 ?>
 <div class="container">
   <div class="row">
     <div class="col-12">
       <div class="card bg-light mt-4">
         <div class="card-header">Admin List</div>
         <div class="card-body">
           <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone_Number</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($from_db as $imran):
                  // {
                 ?>
                <tr>
                  <th><?=$imran['id']?></th>
                  <th><?=$imran['name']?></th>
                  <th><?=$imran['email']?></th>
                  <th><?=$imran['phone_number']?></th>

                </tr>
                  <?php
                  //}
                endforeach;
                   ?>
              </tbody>
            </table>
         </div>
       </div>

     </div>

   </div>

 </div>

<?php
  require_once '../footer.php';
 ?>
