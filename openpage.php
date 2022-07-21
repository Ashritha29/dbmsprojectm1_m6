<?php
echo 'WELCOME';
$servername = "localhost";
$username = "root";
$password="";
$conn = mysqli_connect($servername,$username,$password);
//die if connection was not success
if(!$conn){
    die("sorry we failed to connect : ". mysqli_connect_error());
}else{
    echo "connection was successful";
}
?>

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
                    <a href="http://127.0.0.1:5500/baggagedetails.html" class="nav-link"> Display-Baggage-Details</a>
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
            $bookingReference = $_POST['bookingRefernece'];
            $tickerNumber = $_POST['tickerNumber'];
            $flightName = $_POST['flightName'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>Details of '. $passengerName .' have been taken successfully...Go to next page
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden = "true">&times;</span>
            </button>
            </div>';
        }
    ?>
    <!-- alert ending -->
    <!-- form starting -->
    <form action="DBMSP/openpage.php" method="post">
    <div class="form-group w-50 d-block mx-auto mt-5">
        <div class="mb-3 p-3">
            <h2 class=" text-center">PASSENGER DETAILS</h2>

            <label for="passengerName" name="passengerName" class="setBold form-label">Passenger Name</label>
            <input type="text" id="passengerName"  class="form-control" placeholder="Enter Passenger Name">

            <label for="bookingReference" name="bookingReference" class="setBold form-label">Booking Reference</label>
            <input type="text" id="bookingReference" class="form-control" placeholder="Enter Booking Reference ID">

            <label for="ticketNunber" name="ticketNunber" class="setBold form-label">Ticket Number</label>
            <input type="text" id="ticketNumber" class="form-control" placeholder="Enter Ticket Number">

            <!-- <div>
                <label for=" " class=" setBold me-2 mt-3 mb-3">Select Class</label>
                <select name="Class" id=" " class="Class Selection">
                    <option value="First">First</option>
                    <option value="Business">Business</option>
                    <option value="Economy">Economy</option>
                </select>
            </div> -->

            <label for="flightName" name="flightName" class="setBold form-label">Flight</label>
            <input type="text" id="flightName" class="form-control" placeholder="Enter Flight Name">
            <!-- next button -->
            <div class="p-3 ">
                <button class="nextButton text-white"><a class="text-white" style="text-decoration: none" href="http://127.0.0.1:5500/baggage.html" target="_self">NEXT</a></button>
            </div>
            <!-- end of  next button -->
        </div>
    </div>
    </form>
    <!-- form ending -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>