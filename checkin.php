<?php
//INSERT INTO `visitor` (`sno`, `Visitor Name`, `Phone Number`, `Address`, `Flat No`, `Wing`, `Whom to meet`, `Reason To Meet`, `Check_In`, `Check Out`) VALUES (NULL, 'xzy', '123', '', '101', 'a', 'Jay', 'Personal', current_timestamp(), current_timestamp());// Connect to the Database 


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
  $sql = "INSERT INTO `visitor` (`sno`, `Visitor Name`, `Phone Number`, `Address`, `Flat No`, `Wing`, `Whom to meet`, `Reason To Meet`, `Check_In`) VALUES (NULL, '$vname', ' $pno', '$add', '$flatno', '$wing ', '$wtm', '$rtm', current_timestamp());";
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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

      

      document.getElementById("flatnumber").addEventListener("blur", showOwner);
    </script>

    <title>Check In</title>


 </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkin.php">Check In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admincheckout.php">Check Out</a>
                
                <li class="nav-item">
                    <a class="nav-link" href="report.php">Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

            </ul>

            <form class="form-inline my-2 my-lg-0">
            <form class="form-inline my-2 my-lg-0">
            
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="logout.php">Logout</button>
            </form>
        </div>
    </nav>
    <?php
 
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Visitor entry details has been added
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
 
  }
  
  ?>
 


    <div class="container my-4">
     <div class="card mt-4">
      <div class="card-body">
        <h2 style="text-align:center"><strong>New Visitor</strong> </h2>
        <hr>
        <br>
        <form action="checkin.php" method="POST">

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
                    <input type="number" class="form-control" id="flatnumber" name="flatno" onsubmit="showOwner()" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="wing" class="col-sm-2 col-form-label">Wing</label>
                <div class="col-sm-10">
                    <input type class="form-control" id="wing" rows="3" name="wing" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Whom to meet" class="col-sm-2 col-form-label">Whom to meet</label>
                <div class="col-sm-10">
                    <input type class="form-control" id="Whom to meet" rows="3" name="wtm" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Reason To Meet" class="col-sm-2 col-form-label">Reason To Meet</label>
                <div class="col-sm-10">
                    <input type class="form-control" id="Reason To Meet" rows="3" name="rtm" required>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">

                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Add</button>

            </div>

        </form>

    </div>
    </div>
    </div>
    

 </body>
</html>

<!-- ]  <form>
      <label for="flatNo">Flat No:</label>
      <input type="text" id="flatNo" name="flatNo"><br><br>

      <label for="whomToMeet">Whom to Meet:</label>
      <input type="text" id="whomToMeet" name="whomToMeet"><br><br>

      <input type="button" value="Submit" onclick="showOwner()">
    </form>
] -->