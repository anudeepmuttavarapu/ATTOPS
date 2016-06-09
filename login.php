<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect('localhost','','','logintest');
// To protect MySQL injection for Security purpose

if (!$connection) {
  die('Could not connect: ' . mysqli_error($conn));
echo "<p>Could not contact server</p>";
}

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$sqlquery="select * from login where password='$password' AND username='$username'";

$query = mysqli_query($connection,$sqlquery);
$rows = mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
$type=$row['type'];
if ($rows == 1) {

 if($type == 1){

$_SESSION['login_user']=$username; // Initializing Session

header("location: admin.php"); // Redirecting To Other Page

}

else{

$_SESSION['login_user']=$username; // Initializing Session

header("location: user.php");


}




} 
else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>

