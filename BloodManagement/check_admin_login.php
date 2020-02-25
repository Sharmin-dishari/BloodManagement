<body  style=" background:url(0.JPG) no-repeat; background-size: full auto">
<?php 

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if ($username=='admin' && $password=='admin'){
		session_start();
		$_SESSION['admin']=$username;
		$_SESSION['password']=$password;
		
		header("location:adminhome.php");
	}else
	{
		echo "Access denied";
	}

?>