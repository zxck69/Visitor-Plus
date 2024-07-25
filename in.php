
<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header('location:http://localhost/Visitor+/login.php');
}
?>
<?php

$insert = false;

// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "visitor";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
//$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
     if($_SERVER['REQUEST_METHOD']=='POST'){
        $vname = $_POST['vname'];
        $pno = $_POST['pno'];
        $add = $_POST['add'];
        $flatno = $_POST['flatno'];
        $wing = $_POST['wing'];
        $wtm = $_POST['wtm'];
        $rtm = $_POST['rtm'];
         
        
        // Sql query to be executed
  $sql = "INSERT INTO `visitor` (`sno`, `VisitorName`, `PhoneNumber`, `Address`, `FlatNo`, `Wing`, `Whomtomeet`, `ReasonToMeet`, `CheckIn`) VALUES (NULL, '$vname', ' $pno', '$add', '$flatno', '$wing ', '$wtm', '$rtm', current_timestamp());";
  $result = mysqli_query($conn, $sql);
  
  if($result){
    //echo "The record has been  inserted successfully because of this error ---> ";
    $insert =true;
    
    
} 
   
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

// Close the database connection

} 



  
?>
<!doctype html>
<html lang="en">
  <head>
    
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script>if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
    </script>
    <script src="icons.js"></script>

    

    <title>Check In</title>
    
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button id="sidebarCollapse" class="btn navbar-btn">
      <i class="fas fa-lg fa-bars"></i>
    </button>
    <a class="navbar-brand" href="">
      <h3 id="logo">Visitor +</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="link" href="http://localhost/Visitor+/login.php">
          <i class="fas fa-sign-out-alt"></i>
          LogOut<span class="sr-only">(current) </span></a>
        </li>
      </ul>
    </div>
  </nav>
  
 
 

  <div class="wrapper left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><i class="fas fa-user"></i>User</h3>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="index.php"><i class="fas fa-home"></i>Home</a>
        </li>
        <li>
          <a href="in.php"><i class="fas fa-id-badge"></i>Check In</a>
        </li>
        <li>
          <a href="out.php"><i class="fas fa-id-badge"></i>Check Out</a>
        </li>
        <li>
          <a href="contact.php"><i class="fas fa-id-card"></i>Contact Us</a>
        </li>
      
        </ul>
    </nav>

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    function showOwner() {
        const flats = [
          { number: "101",wing: "A", owner: "Jaysantosh Yadav" },
          { number: "102",wing: "A", owner: "Raj Shendkar" },
          { number: "103",wing: "A", owner: "Radha Sharma" },
          { number: "104",wing: "A", owner: "Avinash Singh" },
          { number: "105",wing: "A", owner: "Vyom Pandey" },
          { number: "106",wing: "A", owner: "Chinmay Toke" },
          { number: "201",wing: "A", owner: "Riya Chakraborty" },
          { number: "202",wing: "A", owner: "Farhan Salim" },
          { number: "203",wing: "A", owner: "Sanil Jain" },
          { number: "204",wing: "A", owner: "Prashat Thange" },
          { number: "205",wing: "A", owner: "Prabhat Tiwari" },
          { number: "206",wing: "A", owner: "Abhinesh Singh" },
          { number: "301",wing: "A", owner: "Anshu Sinha" },
          { number: "302",wing: "A", owner: "Yash Rajput" },
          { number: "303",wing: "A", owner: "Omkar Lashkare" },
          { number: "304",wing: "A", owner: "Rohan Wadekar" },
          { number: "305",wing: "A", owner: "Manoj Ghodke" },
          { number: "306",wing: "A", owner: "Rudhra Sharma" },
          { number: "101",wing: "B", owner: "Nisha Nair" },
          { number: "102",wing: "B", owner: "Anoop Yadav" },
          { number: "103",wing: "B", owner: "Neeraj Prajapati" },
          { number: "104",wing: "B", owner: "Chetas Chaudhary" },
          { number: "105",wing: "B", owner: "Sudarshan Naidu" },
          { number: "106",wing: "B", owner: "Vishal Sharma" },
          { number: "201",wing: "B", owner: "Aarav Sharma" },
          { number: "202",wing: "B", owner: "Sana Khan" },
          { number: "203",wing: "B", owner: "Rudra Sharma" },
          { number: "204",wing: "B", owner: "Priya Gupta" },
          { number: "205",wing: "B", owner: "Arjun Singh" },
          { number: "205",wing: "B", owner: "Sanjay Kumar" },
          { number: "205",wing: "B", owner: "Ananya Desai" },
          { number: "205",wing: "B", owner: "Rakesh Reddy" },
          { number: "206",wing: "B", owner: "Simran Kaur" },
          { number: "301",wing: "B", owner: "Aditya Mehta" },
          { number: "302",wing: "B", owner: "Rajeshwari Nair" },
          { number: "303",wing: "B", owner: "Sahil Chakraborty" },
          { number: "304",wing: "B", owner: "Nisha Singhania" },
          { number: "305",wing: "B", owner: "Vikram Khanna" },
          { number: "306",wing: "B", owner: "Maya Menon" },
          { number: "101",wing: "C", owner: "Arvind Gupta" },
          { number: "102",wing: "C", owner: "Ishaan Verma" },
          { number: "103",wing: "C", owner: "Shreya Tiwari" },
          { number: "104",wing: "C", owner: "Rahul Choudhary" },
          { number: "105",wing: "C", owner: "Nandini Banerjee" },
          { number: "106",wing: "C", owner: "Rohit Sharma" },
          { number: "201",wing: "C", owner: "Anjali Gupta" },
          { number: "202",wing: "C", owner: "Shreya Singhania" },
          { number: "203",wing: "C", owner: "Aditya Iyer" },
          { number: "204",wing: "C", owner: "Prachi Desai" },
          { number: "205",wing: "C", owner: "Karan Mehra" },
          { number: "206",wing: "C", owner: "Swati Patel" },
          { number: "301",wing: "C", owner: "Abhinav Chatterjee" },
          { number: "302",wing: "C", owner: "Tanvi Banerjee" },
          { number: "303",wing: "C", owner: "Ritesh Mishra" },
          { number: "304",wing: "C", owner: "Sonal Sharma" },
          { number: "305",wing: "C", owner: "Rohini Sengupta" },
          { number: "306",wing: "C", owner: "Arjun Nair" },

        ];

        const flatNo = document.getElementById("flatnumber").value;
        const wing = document.getElementById("wing").value;

        const selectedFlat = flats.find(flat => flat.number === flatNo && flat.wing === wing);
        if (selectedFlat) {
        document.getElementById("Whomtomeet").value = selectedFlat.owner;
        } else {
        document.getElementById("Whomtomeet").value = "Flat not found!";
        }

      }
    </script>
    
    <div class="container my-5">
    
    <div class="container">
    
     <div class="card mt-5">
     <?php
    if($insert){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Visitor entry details has been added
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>x</span>
      </button>
    </div>";
   
    }
    ?>
      <div class="card-body">
        <h2 style="text-align:center"><strong>New Visitor</strong> </h2>
        <hr>
        <br>
        <form action="in.php" method="POST">

            <div class="row mb-4">
                <label for="inputtext" class="col-sm-2 col-form-label">Visitor Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputtext" name="vname" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="phonenumber" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="phonenumber" name="pno" pattern="^\d{10}$" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="address" rows="3" name="add" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="flatnumber" class="col-sm-2 col-form-label">Flat No.</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="flatnumber" name="flatno" onblur="showOwner()" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="wing" class="col-sm-2 col-form-label">Wing</label>
                <div class="col-sm-10">
                    <input type class="form-control" id="wing" rows="3" name="wing" onblur="showOwner()" required>
                </div>

            </div>
            <div class="mb-3 row">
                <label for="Whom to meet" class="col-sm-2 col-form-label">Whom to Meet</label>
                <div class="col-sm-10">
                    <input type class="form-control" id="Whomtomeet" rows="3" name="wtm" required >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Reason To Meet" class="col-sm-2 col-form-label">Reason To Meet</label>
                <div class="col-sm-10">
                    <input type class="form-control" id="ReasonToMeet" rows="3" name="rtm" required>
                </div>
            </div>
            
            <div class="d-grid gap-2 col-6 mx-auto">

                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Add</button>

            </div>

        </form>

    </div>
    </div>
    </div>
    </div>
    

  </div>
   <footer class="bg-dark text-center text-white">

  
  <div class="text-center p-3" style="background-color:#030d16">
  &#169; 2023 Copyright: All Rights Reserved

  </div>
  <div class="text-center p-3" style="background-color:#030d16">

  </div>
  

</footer>
 
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>