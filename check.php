<?php
	session_start();
	include './Gestore/libs.php';
	//admin
	//77e2edcc9b40441200e31dc57dbb8829
	
	// Create connection
	$conn = mysqli_database("Utenti");
//	header("Location: ./Gestore");
	
	
	$usr = remove_injections($_POST['username']);
    $psw = remove_injections($_POST['password']);
	$rmb = isset($_POST['rmb']);

	$psw = md5(md5(md5($psw)));

	$sql = "SELECT username, password FROM Utenti WHERE username='$usr'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);


	$chk = password_verify($psw, $row['password']);

	mysqli_close($conn);

	if($row['username']==$usr && $chk)
	{
		if($rmb)
			setcookie("username", md5($row['username']), time()+60*60*24*7);
		
		$_SESSION["username"] = $row['username'];
		header("Location: ./Gestore");
	}
    else
	{
      header("Location: ./");
    }

	
?>