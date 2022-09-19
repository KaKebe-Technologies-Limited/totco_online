<?php
if (isset($_SESSION['user_data'])) {
  if (isset($_POST['submit-logout'])) {
    // remove all session variables
    session_unset();
    session_destroy();
    header("Location:http://localhost/totco/login.php");
    die;
  }
} else {
  //already logged in
}
