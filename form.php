<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PASSENGER</title>
    <link rel="stylesheet" href="./passenger.css">
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
                    <a href="http://127.0.0.1:5500/openPage.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:5500/passenger.html" class="nav-link">Enter-Baggage-Details</a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:5500/adminstration.html" class="nav-link">Administration</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/dbmsp/baggagedetails.php" class="nav-link"> Display-Baggage-Details</a>
                </li>
            </ul>
        </div>
        </button>
    </nav>
    <!-- navbar end -->
    <!-- alert starting -->
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $passengerName = $_POST['passengerName'];
            $bookingReference = $_POST['bookingReference'];
            //submit to a database

            //connecting to a database
            $servername = "localhost";
            $username = "root";
            $password="";
            $database = "testingproject";
            //creating a connection
            $conn = mysqli_connect($servername,$username,$password,$database);

            //die if connection was not successful
            if(!$conn){
                die("sorry we failed to connect : ". mysqli_connect_error());
            }else{
                //echo "connection was successful to database<br>";
                //submitting to a database
                //query being excecuted
                $sql= "INSERT INTO passengerinfo (`name`,`reference`) VALUES ('$passengerName','$bookingReference')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>Details of '. $passengerName .' and  have been taken successfully...Go to next page
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden = "true">&times;</span>
                    </button>
                    </div>';
                }else{
                    echo "entry unsucessful";
                }
            }
        }
    ?>

    <!-- alert ending -->
    <!-- form starting -->
    <form action="/DBMSP/form.php" method="post">
    <div class="form-group w-50 d-block mx-auto mt-5">
        <div class="mb-3 p-3">
            <h2 class=" text-center">PASSENGER DETAILS</h2>

            <label for="passengerName"  class="setBold form-label">Passenger Name</label>
            <input type="text" id="passengerName" name="passengerName" class="form-control" placeholder="Enter Passenger Name">

            <label for="bookingReference"  class="setBold form-label">Booking Reference</label>
            <input type="text" id="bookingReference" name="bookingReference" class="form-control" placeholder="Enter Booking Reference ID">

            <!-- start of submit button -->
            <button type="SUBMIT" class="btn btn-primary">NEXT</button>
            <!-- end of submit button -->
        </div>
    </div>
    </form>
    <!-- form ending -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

