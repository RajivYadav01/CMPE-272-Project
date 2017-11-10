<?php
if(!session_id()) session_start();
	$username = htmlentities($_POST['userid']);
	$password = htmlentities($_POST['password']);
	$db = mysqli_connect('localhost','id3265483_admin','admin','id3265483_userlistdb') or die('Error connecting to MySQL server.');
	$query = "SELECT * FROM userlisttable";
	mysqli_query($db, $query) or die('Error querying database.');
	$result = mysqli_query($db, $query);
	$flag = 0;
	while ($row = mysqli_fetch_array($result)) 
	{
 		$userId = $row['username'];
 		$pass = $row['password'];
 		$accType = $row['AccountType'];
 		if($username == $userId && $password == $pass && $accType == 'admin')
 		{
 			$flag = 1;
 			break;
 		}
	}
	if($flag == 1)
	{
		header("Location: user.php");
	}
	else 
	{
		//if(isset($_SESSION['error']))
		{
			$_SESSION['error'] = "Invalid Username/Password";
			header("Location: secure.php");
		}
	}
?> 