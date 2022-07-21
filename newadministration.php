<!-- connecting to database -->
<?php
$servername="localhost";
$username = "root";
$password = "";
$database = "mainproject";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Connected to  server 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>';
}else{
    echo "connection failed to $database server";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DETAILS(DISPLAY)</title>
    <style>
        .box{
            border:0.3rem solid black;
        }
        body{
        background-image:url('https://cdn.businesstraveller.com/wp-content/uploads/fly-images/819021/Passenger-airplane-taking-o-916x516.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
    </style>
</head>
<body style="background-color:deepskyblue">
    <!-- nav bar creation -->
    <nav class="navbar navbar-expand-md  navbar-light bg-light ">
        <a href="#" class="navbarHead navbar-brand"><h1 class="p-3">AIRPORT</h1></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#datamenu">
            <span class="  navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="datamenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="http://localhost/dbmsp/homepage.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/dbmsp/passenger.php" class="nav-link">Enter-Baggage-Details</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/dbmsp/newadministration.php" class="nav-link">Administration</a>
                </li>
            </ul>
        </div>
        </button>
    </nav>
    <!-- navbar end -->
    <div class="mt-5 d-flex m-4">
    <!-- input field1 creation -->
    <div class="box mx-auto col-5 p-5 mt-5">
        <h5 class="text-center ">CLICK HERE TO GET PASSENGER BAGGAGE DETAILS</h5>
        <button class="btn w-100 mt-3 bg-info" name="submit-Button" data-bs-toggle="modal" data-bs-target="#baggage">PASSENGERS</button>
        <!-- modal start -->
        <div class="modal fade " id="baggage">
            <div class="modal-dialog modal-lg modal-dialog-centered" >
                <div class="modal-content">
                        <!-- table -->
                <table class="table table-hover table-dark">
                    <thead>
                    <tr class="table-dark">
                    <th scope="col">TickerNumber</th>
                    <th scope="col">PassengerName</th>
                    <th scope="col">FlightName</th>
                    <th scope="col">Allowance</th>
                    <th scope="col">BaggageTag</th>
                    <th scope="col">BaggageWt</th>
                    <th scope="col">Compartment</th>
                    </tr>
                   </thead>

                   <?php
                   $sql= "SELECT * FROM `baggageinfo`";
                   $result =  mysqli_query($conn,$sql);
                   while($row = mysqli_fetch_array($result))
                   {
                   ?>

                   <tbody>

                    <tr class="table-dark">
                    <th scope="row"><?php echo $row['passengerName']?></th>
                    <td><?php echo $row['ticketNumber']?></td>
                    <td><?php echo $row['flightName']?></td>
                    <td><?php echo $row['allowance']?></td>
                    <td><?php echo $row['baggageTag']?></td>
                    <td><?php echo $row['baggageWeight']?></td>
                    <td><?php echo $row['compartment']?></td>
                    </tr>
                   <?php } ?>
                   </tbody>

                </table>
                    </div>
            </div>
        </div>
        <!-- modal end -->
    </div>
    <!-- end of input1 fields -->
    <!-- input field 2 creation -->
    <div class="box mx-auto col-5 p-5 mt-5">
    <h5 class="text-center ">CLICK HERE TO GET EMPLOYEE DETAILS</h5>
        <button class="btn w-100 mt-3 bg-info" name="submit-Button" data-bs-toggle="modal" data-bs-target="#employee">EMPLOYEE</button>
        <!-- modal start -->
        <div class="modal fade " id="employee">
            <div class="modal-dialog modal-lg modal-dialog-centered" >
                <div class="modal-content">
                        <!-- table -->
                <table class="table table-hover table-dark">
                    <thead>
                    <tr class="table-dark">
                    <th scope="col">S.no</th>
                    <th scope="col">EmployeeID</th>
                    <th scope="col">EmployeeName</th>
                    <th scope="col">Age</th>
                    <th scope="col">Post</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Status</th>
                    </tr>
                   </thead>

                   <?php
                   $sql= "SELECT * FROM `administration`";
                   $result =  mysqli_query($conn,$sql);
                   while($row = mysqli_fetch_array($result))
                   {
                   ?>

                   <tbody>

                    <tr class="table-dark">
                    <th scope="row"><?php echo $row['sno']?></th>
                    <td><?php echo $row['employeeID']?></td>
                    <td><?php echo $row['employeeName']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['post']?></td>
                    <td><?php echo $row['salary']?></td>
                    <td><?php echo $row['status']?></td>
                    </tr>
                   <?php } ?>
                   </tbody>

                </table>
                    </div>
            </div>
        </div>
        <!-- modal end -->
    </div>
    <!-- end of input field 2 -->
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>