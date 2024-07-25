<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}



input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<span style='color: red'><?php echo $error; ?></span>
<input type="text" placeholder="Username" id="user" name="username"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="password"><br/><br/>
<input type="submit" style="font-family: Times New Roman;"  value="Login" name="submit">
<!-- Error Message -->

</body>
</html>