<html>
<head><link rel="stylesheet" type="text/css" href="style4.css"></head>
<boby>
<div class="sign-up-form">
<?php
	session_start();
$conn = new mysqli('localhost','root','','wordpress');

$email = $_POST['email'];
$password = $_POST['password'];
$Name = $_POST['Name'];

$s="select * from admin where email='$email' && password='$password' && Name='$Name'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['Name']=$Name;
 	header('location:test.php');
}
else
{
	header('location:connect4.php');
}
?>
</div>
</body>
</html>