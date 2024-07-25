
<?php
error_reporting(0);

session_start();
$error=''; //Variable to Store error message;
if($_SERVER["REQUEST_METHOD"]=="POST"){

 if(empty($_POST['username']) || empty($_POST['password']))
 {

 $error = "Username or Password is Invalid";
 }
 else
 {

 //Define $user and $pass
 $username=$_POST['username'];
 $password=$_POST['password'];

 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");

 //Selecting Database
 $db = mysqli_select_db($conn, "visitor");

 //sql query to fetch information of registerd user and finds user match.
 $sql="select * from login where username='".$username."' AND password='".$password."' ";
 $query = mysqli_query($conn,$sql);
 
 $rows = mysqli_fetch_array($query);

 if($rows["usertype"]=="user")
 {
   $_SESSION["username"]=$username;  
   header("location:index.php"); // Redirecting to other page
 }
 elseif($rows["usertype"]=="admin")
 {
    $_SESSION["username"]=$username;
		
    header("location:http://localhost/Visitor+/admin/index.php");
 
 }
 else
   {
		$error = "Username of Password is Invalid";
	}
 mysqli_close($conn); // Closing connection
 }
}
 
?>

