
<?php include('../config/constants.php'); ?>

<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet"  href="admin.css">
</head>
<body>
<div class="login">
<h1 class="text-center">Admin Login</h1>
<br>
<?php
if(isset($_SESSION['login'])) {echo $_SESSION['login']; unset($_SESSION['login']);}
if(isset($_SESSION['no-login-message'])) {echo $_SESSION['no-login-message']; unset($_SESSION['no-login-message']);}
?>
<br>
<form action="" method="POST">
<table class="tbl-30 table">
<tr>
<td>Username:</td>
<td><input type="text" name="username" placeholder="Enter Your Username"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password" placeholder="Enter Your Password"></td>
</tr>

<tr>
<td colspan="2">
<input type="submit" name="submit" value="Login" class="btn-third">
</td>

</tr>
</table>

</form>
<div class="text-center">Are You User? => <a href="../User/index.php" class="link-secondary">Sign Up</a></div>

<!-- <p class="text-center">Create By - <a href="https://github.com/deepkhatri">DEEPKHATRI</a></p> -->
</body>
</html>


<?php
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);

if($count==1)
{ 
$_SESSION['login'] = "<div class='text-center'>Login Successful.</div>";

$_SESSION['user'] = $username;

header("location:".SITEURL.'admin/index.php');
}
else{
$_SESSION['login'] = "<div class='text-center'>Login Failed.</div>";
header("location:".SITEURL.'admin/admin_login.php');
}
}
?>