<?php
if(!session_id()) session_start();
$db = mysqli_connect('localhost','id3265483_admin','admin','id3265483_userlistdb')	or die('Error connecting to MySQL server.');
$fname = htmlentities($_POST['fname']);
$lname = htmlentities($_POST['lname']);
$uname = htmlentities($_POST['userid']);
$pass = htmlentities($_POST['password']);
$type = "User";
$query = "INSERT INTO `userlisttable`(`username`, `password`, `First Name`, `Last Name`, `AccountType`) VALUES ('$uname','$pass','$fname','$lname','$type');";
mysqli_query($db, $query) or die('Error querying database.');
$msg = "New User Created Successfully";
echo "<script type='text/javascript'>alert('$msg'); window.location.href='index.html';</script>";
//header("Location: index.html");
?>
