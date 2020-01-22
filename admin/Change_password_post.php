<?php
require_once 'check_access.php';
require_once '../db.php';
$email = $_POST['email'];
$old_password = md5($_POST['old_password']);
$new_password = md5($_POST['new_password']);


if ($_POST['old_password'] == $_POST['new_password']) {
  echo "your new password can not be your old password";
}
else {
  $checking_qurey = "SELECT COUNT(*) AS total_count FROM users WHERE email = '$email' AND password = '$old_password'";
  $from_db = mysqli_query($db_connent,$checking_qurey);
  $after_assoc = mysqli_fetch_assoc($from_db);
  if ($after_assoc['total_count'] == 1) {
    $update_query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
    mysqli_query($db_connent,$update_query);
    echo "dane";
  }
  else {
    echo "old password is wrong";
  }
}
 ?>
