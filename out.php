<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header('location:http://localhost/Visitor+/login.php');
}
?>
<?php
//INSERT INTO `visitor` (`sno`, `Visitor Name`, `Phone Number`, `Address`, `Flat No`, `Wing`, `Whom to meet`, `Reason To Meet`, `Check_In`, `Check Out`) VALUES ('1', 'Jay', '123456', 'Chikhali', '201', 'C', 'Jay', 'Personal', current_timestamp(), current_timestamp());
//INSERT INTO `visitor` (`sno`, `Visitor Name`, `Phone Number`, `Address`, `Flat No`, `Wing`, `Whom to meet`, `Reason To Meet`, `Check_In`, `Remark`, `Check Out`) VALUES (NULL, 'lal', '123', 'Dehu', '401', 'B', 'Jay', 'Personal', current_timestamp(), NULL, NULL);
//UPDATE `visitor` SET `Visitor Name` = 'SIRI', `Phone Number` = '13134', `Address` = 'CHIKHALI', `Flat No` = '101', `Wing` = 'B', `Whom to meet` = 'Lal', `Reason To Meet` = 'Meeting', `Remark` = 'In' WHERE `visitor`.`sno` = 32;
$update = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "visitor";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset( $_POST['snoEdit'])){
      // Update the record
      $sno = $_POST["snoEdit"];
      //$vname = $_POST["editvname"];
      //$pno = $_POST["editpno"];
      //$add = $_POST["editadd"];
      //$flatno = $_POST["editflatno"];
     // $wing = $_POST["editwing"];
     // $wtm = $_POST["editwtm"];
      //$rtm = $_POST["editrtm"];
      $remark = $_POST["editremark"];
      
  
    // Sql query to be executed
    $sql = "UPDATE `visitor` SET  `Remark` = '$remark' WHERE `visitor`.`sno` = $sno";
    $result = mysqli_query($conn, $sql);
    if($result){
      $update = true;
  }
  else{
    echo "We could not update the record successfully";
}
     
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <script src="icons.js"></script>
 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function () {
    $('#myTable').DataTable();
}); 
 </script> 

    <title>Check Out</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
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

  <div class="wrapper fixed-left">
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
       <!-- Modal -->
       <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Visitor Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <form action="#" method="POST">
                    <div class="modal-body">
                    <input type="hidden" name="snoEdit" id="snoEdit">
                    

                        <div class="row mb-4">
                            <label for="inputtext" class="col-sm-2 col-form-label">Visitor Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="editvname" name="editvname" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phonenumber" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="editpno" name="editpno" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="editadd" rows="3" name="editadd" disabled></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="FlatNo" class="col-sm-2 col-form-label">Flat No.</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="editflatno" name="editflatno" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="wing" class="col-sm-2 col-form-label">Wing</label>
                            <div class="col-sm-10">
                                <input type class="form-control" id="editwing" rows="3" name="editwing" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Whom to meet" class="col-sm-2 col-form-label">Whom to meet</label>
                            <div class="col-sm-10">
                                <input type class="form-control" id="editwtm" rows="3" name="editwtm" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Reason To Meet" class="col-sm-2 col-form-label">Reason To Meet</label>
                            <div class="col-sm-10">
                                <input type class="form-control" id="editrtm" rows="3" name="editrtm" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Check In" class="col-sm-2 col-form-label">Check In</label>
                            <div class="col-sm-10">
                                <input type class="form-control" id="editcheckin" rows="3" name="editcheckin" disabled> 
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Remark" class="col-sm-2 col-form-label">Remark</label>
                            <div class="col-sm-10">
                                <input type class="form-control" id="editremark" rows="3" name="editremark" required>
                            </div>
                        </div>
                    
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                    
                </form>
        </div>
        </div>
    </div>

    <div id="content">
    <?php

if($update){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Success!</strong> Visitor Remark has been Upadated.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>×</span>
</button>
</div>";
}

?>
    <div class="container my-4">

        <div class="card mt-4">
        
            <div class="card-body">
            <table class="table" id="myTable"  class="table table-striped table-bordered" style="width:100%">
            <h2 style="text-align:center"> <strong>Visitor Details</strong></h2>
            <hr>
            <thead class="table-light">
                    <tr>
                        <th scope="col">S No.</th>
                        <th scope="col">Visitor Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Flat No.</th>
                        <th scope="col">Wing</th>
                        <th scope="col">Whom to Meet</th>
                        <th scope="col">Reason To Meet</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                            $sql = "SELECT * FROM `visitor`";
                        $result = mysqli_query($conn, $sql);
                            $sno = 0;
                            while($row = mysqli_fetch_assoc($result)){
                            $sno = $sno + 1;
                            echo "<tr>
                            <th scope='row'>". $sno . "</th>
                            <td>". $row['VisitorName'] . "</td>
                            <td>". $row['PhoneNumber'] . "</td>
                            <td>". $row['Address'] . "</td>
                            <td>". $row['FlatNo'] . "</td>
                            <td>". $row['Wing'] . "</td>
                            <td>". $row['Whomtomeet'] . "</td>
                            <td>". $row['ReasonToMeet'] . "</td>
                            <td>". $row['CheckIn'] . "</td>
                            <td>". $row['CheckOut'] . "</td>
                            <td>". $row['Remark'] . "</td>
                            <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button></td>
                </tr>";
                } 
                ?>  
                
                </tbody>
            </table>
            
            </div>
        </div>
        <hr>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   

        <script>
            edits = document.getElementsByClassName('edit');
            Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit",);
                tr = e.target.parentNode.parentNode;
                vname = tr.getElementsByTagName("td")[0].innerText;
                pno = tr.getElementsByTagName("td")[1].innerText;
                add = tr.getElementsByTagName("td")[2].innerText;
                flatno = tr.getElementsByTagName("td")[3].innerText;
                wing = tr.getElementsByTagName("td")[4].innerText;
                wtm = tr.getElementsByTagName("td")[5].innerText;
                rtm = tr.getElementsByTagName("td")[6].innerText;
                cin = tr.getElementsByTagName("td")[7].innerText;
                rem = tr.getElementsByTagName("td")[9].innerText;
                console.log(vname, pno,add,flatno,wing,wtm,rtm,cin,rem);
                editvname.value = vname;
                editpno.value = pno;
                editadd.value = add;
                editflatno.value = flatno;
                editwing.value = wing;
                editwtm.value = wtm;
                editrtm.value = rtm;
                editcheckin.value = cin;
                editremark.value = rem;
                snoEdit.value = e.target.id;
                console.log(e.target.id)
                $('#editModal').modal('toggle');
            
            })
            })
        </script>
      
    </div>
    

  </div>
 <!-- <footer class="bg-dark text-center text-white">

   Copyright 
  <div class="text-center p-3" style="background-color:#030d16">
  &#169; 2023 Copyright: All Rights Reserved

  </div>
  

</footer> -->

  
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script> 
  </body>
</html>