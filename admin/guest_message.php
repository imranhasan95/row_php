<?php
session_start();
$title = "Deshboared";

require_once 'check_access.php';
require_once '../header.php';
require_once 'navbar.php';
require_once '../db.php';

$get_query = "SELECT * FROM messages";
$from_db = mysqli_query($db_connent,$get_query);



 ?>
 <div class="container">
   <div class="row">
     <div class="col-12">
       <div class="card bg-light mt-4">
         <div class="card-header bg-dark text-with">Guest Message</div>
         <div class="card-body">
           <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Guest Name</th>
                  <th>Guest Email</th>
                  <th>Guest Message</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($from_db as $imran):
                  // {
                 ?>
                <tr class="<?=($imran['read_status'] ==1)?"bg-info":""?>">
                  <th><?=$imran['id']?></th>
                  <th><?=$imran['guest_name']?></th>
                  <th><?=$imran['guest_email']?></th>
                  <th><?=$imran['guest_message']?></th>
                    <td>
                      <?php

                        if ($imran['read_status'] ==1) {

                       ?>
                        <a class="btn btn-sm btn-success" name="button">Mark as Read</button>

                          <?php
                            }
                           ?>
                    </td>
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
