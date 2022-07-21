<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PASSENGER</title>
    <link rel="stylesheet" href="./passenger.css">
    <style>
        
        body{
        background-image:linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://cdn.businesstraveller.com/wp-content/uploads/fly-images/819021/Passenger-airplane-taking-o-916x516.jpg');
        background-repeat:no-repeat;
        background-size:cover;
        }
        /* */
        .heading1{
            /* background-color:black; */
            color:white;
            border-style:solid;
            border-color:black;
            border-radius:1rem;
        }
        .form{
            background-color: none;
            box-shadow: 1rem 1rem 1rem  none;
            border : 0.3rem solid black;
        }
        .nextButton{
            margin-left: 92% ;
            background-color:navy;
        }
        .setBold{
            font-weight:bolder;
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

    <!-- php code start -->
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $passengerName = $_POST['passengerName'];
            $bookingReference = $_POST['bookingReference'];
            $ticketNumber = $_POST['ticketNumber'];
            $flightClass = $_POST['flightClass'];
            $flightName = $_POST['flightName'];
            //submit to a database

            //connecting to a database
            $servername = "localhost";
            $username = "root";
            $password="";
            $database = "mainproject";
            //creating a connection
            $conn = mysqli_connect($servername,$username,$password,$database);

            //die if connection was not successful
            if(!$conn){
                die("sorry we failed to connect : ". mysqli_connect_error());
            }else{
                //echo "connection was successful to database<br>";
                //submitting to a database
                //query being excecuted
                $sql= "INSERT INTO passengerinfo (`passengerName`,`bookingReference`,`ticketNumber`,`flightClass`,`flightName`) VALUES ('$passengerName',
                '$bookingReference','$ticketNumber','$flightClass','$flightName')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>Details of '. $passengerName .'  have been taken successfully...Go to next page
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
    <!-- php code end -->

    <!-- form starting -->
    <form action="/DBMSP/passenger.php" method="post">
    <div class="form w-50 d-block mx-auto mt-5">
        <div class="mb-3 p-3">
            <h2 class="heading1 text-center bg-dark"><b>PASSENGER DETAILS<b></h2>

            <label for="passengerName" class="setBold form-label text">Passenger Name</label>
            <input type="text" id="passengerName"  " name="passengerName"   class="form-control" placeholder="Enter Passenger Name">

            <label for="bookingReference" class="setBold form-label text">Booking Reference</label>
            <input type="text" id="bookingReference" name="bookingReference" class="form-control" placeholder="Enter Booking Reference ID">

            <label for="ticketNumber" class="setBold form-label text-light">Ticket Number</label>
            <input type="text" id="ticketNumber" name="ticketNumber" class="form-control" placeholder="Enter Ticket Number">

            <label for="flightClass" class="setBold form-label text">Class</label>
            <input type="text" id="flightClass" name="flightClass" class="form-control" placeholder="(First/Business/Economy)">

            <label for="flightName" class="setBold form-label text">Flight Name</label>
            <input type="text" id="flightName" name="flightName" class="form-control" placeholder="Enter Flight Name">

            <!-- start of submit button -->
            <button type="SUBMIT" class="btn btn-dark w-50 d-block mx-auto mt-3">SUBMIT</button>
            <!-- end of submit button -->
            <div class="p-3 ">
                <button class="nextButton text-white bg-dark"><a class="text-white" style="text-decoration: none" href="http://localhost/DBMSP/baggage.php" target="_self">NEXT</a></button>
            </div>
        </div>
    </div>
    </form>
    <!-- form ending -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>