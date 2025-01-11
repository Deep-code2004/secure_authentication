<?php include('partials/menu.php'); ?>

<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "auth_db";


try {
    $conn2 = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
?>

<div class="main-content">
<h1 class="text-center">DASHBOARD</h1>

<?php

if(isset($_SESSION['login'])){
  echo $_SESSION['login'];
  unset($_SESSION['login']);
}

?>

<div class="wrapperbox">

<div class="col-2 text-center">

<?php
$sql ="SELECT * FROM tbl_admin";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);

?>

<h1><?php echo $count;?></h1>
<br>
<p>Admin</p>
</div>

<div class="col-2 text-center">
<?php
$stmt = $conn2->prepare("SELECT * FROM users");
$stmt->execute();
$count = $stmt->rowCount();
?>

<h1><?php echo $count;?></h1>
<br>
<p>Users</p>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php include('partials/footer.php'); ?>