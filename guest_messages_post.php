<?php
  require_once "db.php";


  $guest_name = $_POST['guest_name'];
  $guest_email = $_POST['guest_email'];
  $guest_message = $_POST['guest_messages'];

  $insert_query = "INSERT INTO messages(id, guest_name, guest_email, guest_messages) VALUES ('$guest_name','$guest_email','$guest_message')";
  mysqli_query($db_connent,$insert_query);
  header("location: index.php");
