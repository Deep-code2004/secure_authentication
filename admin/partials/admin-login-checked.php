
<?php
if(!isset($_SESSION['user'])) 
{
  $_SESSION['no-login-message'] = "<div class='text-center'>Please login here to access Admin DashBoard.</div>";
  header('location:'.SITEURL.'admin/admin_login.php');
}
?>
