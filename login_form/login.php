<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>
<body>

<div>
<form action="#" method="post">
<input type="text" name="email" placeholder="Email">
<br><br>
<input type="password" name="password" placeholder="Password">
</div>
<br>
<div>
    <input type="submit" name="submit" value="Login">
</div>
<?php
if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["password"]))
{
	
	$email=$_POST["email"];
	$password=$_POST["password"];
	include "connection.php";
	$db=new connection();
	$query=$db->search("select * from users where email='$email' and password='$password'");
	if($query!="1")
	{
		 if($email=="admin@gmail")
		 header('Location:login.php');
		 else 
	 echo("<script> alert('Invalid username or password')</script>");
		
	}
	else
	{
	 
		
	 
		$_SESSION['SEemail']=$email;
	 if($email=="admin@gmail.com")
				echo("<script> window.open('admin.php','_parent')</script>");
		 else
		echo("<script> window.open('next_user.php','_parent')</script>");
	}
	
}


 ?>
 </form>
</body>
</html>