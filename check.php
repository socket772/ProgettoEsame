<?php 
	
	include './Gestore/libs.php';
	session_start();
	
	//admin
	//77e2edcc9b40441200e31dc57dbb8829
	
	// Create connection
	$conn = mysqli_database("Utenti");
	
	
	$usr = remove_injections($_POST['username']);
    $psw = remove_injections($_POST['password']);
	$rmb = isset($_POST['rmb']);

	$pswHash = md5(md5(md5($psw)));

	$sql = "SELECT username, password FROM Utenti WHERE username='$usr'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	$chk = password_verify($pswHash, $row['password']);

	mysqli_close($conn);
	$rmb = isset($_POST['rmb']);
	if($row['username']==$usr && $chk)
	{
		setcookie("username", $row['username'], time()+60*60, "/");
		setcookie("password", md5(md5($psw)), time()+60*60, "/");

		if($rmb)
		{
			setcookie(session_name(),session_id(),TimeLeft(true), "/");
			setcookie("remember", true, TimeLeft(true), "/");
			setcookie("username", $row['username'], TimeLeft(true), "/");
			setcookie("password", md5(md5($psw)), TimeLeft(true), "/");
		}
			
			header("Location: ./Gestore");
	}
    else
	{
	    header("Location: ./");
    }
?>