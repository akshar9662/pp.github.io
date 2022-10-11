<html>
<head><link rel="stylesheet" type="text/css" href="style4.css"></head>
<boby>
<div class="sign-up-form">
<?php
	session_start();

$conn = new mysqli('localhost','root','','wordpress');

$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$City = $_POST['City'];
$Name = $_POST['Name'];

$s="select * from admin where email='$email'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);



if($num == 1)
{
	header('location:connect1.php');
}
else
{
$stmt =("insert into admin(email,password,number,City,Name)
values('$email','$password','$number','$City','$Name')");
mysqli_query($conn,$stmt);
	header('location:connect2.php');

}
?>
</div>
</body>
</html>