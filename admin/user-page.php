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
<html>
  <head>
    <title>AdminPage</title>
    <link rel="stylesheet" href="../admin/admin.css">
  </head>

<body>
  
<div class="menu text-center">

<div class="wrapper">
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="admin-page.php">ADMIN</a></li>
  <li><a href="user-page.php">USER</a></li>
</ul>
</div>
  
</div>

<div class="main-content">
<h1 class="text-center">Our Users</h1>

<?php 
if(isset($_SESSION['delete'])){
  echo $_SESSION['delete'];
  unset($_SESSION['delete']);
}

?>

<div class="wrapperbox">


<table class="tbl-full">
  <tr>
    <th>S.N</th>
    <th>Profile Picture</th>
    <th>Fullname</th>
    <th>Username</th>
    <th>Action</th>
    </tr>
 
<?php
    $sql = "SELECT * FROM users";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $count = $stmt->rowCount();
   $result = $conn->query($sql);

   $sn=1;
    if($count>0)
    {
       while($row=$stmt->fetch(PDO::FETCH_ASSOC))
       {
        $id = $row['id'];
        $fname = $row['fname'];
        $username = $row['username'];
        $pp = $row['pp'];

        ?>
    <tr>
    <td><?php echo $sn++; ?></td>
    <td>
      <?php 
          if($pp!="")
          {
               ?>
               <img src="<?php echo SITEURL; ?>User/upload/<?php echo $pp;?>" width ="100px" alt="<?php echo $username;?>">
               <?php
          }
          else
          {
            echo "Image Is Not Uploaded";
          }
      ?>
  </td>
    <td><?php  echo $fname; ?></td>
    <td><?php echo $username; ?></td>
    <td>
    <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>" class="btn-secondary">Delete User</a>
    </td>
  </tr>
        <?php

       }
    }
    else
    {
        ?>
        
        <tr>
          <td colspan="4">No User Are Registered.</td>
        </tr>
        
        <?php
    }
?>

 

</table> 

</div>
</div>


<?php include('partials/footer.php'); ?>