<?php 

define('SITEURL', 'http://localhost/S_A/');

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "auth_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
?>

<?php

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();

if($stmt==true){
$_SESSION['delete'] = "<div class='text-center'>User Deleted Successfully.</div>";
header("location:".SITEURL.'admin/user-page.php');
}
else{
$_SESSION['delete'] = "<div class='text-center'>Failed To Delete User.</div>";
header("location:".SITEURL.'admin/user-page.php');
}


?>