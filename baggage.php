<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>BAGGAGE</title>
    <link rel="stylesheet" href="./baggage.css">
    <style>
        .heading1{
            /* background-color:black; */
            color:white;
            border-style:solid;
            border-color:black;
            border-radius:1rem;
        }
        body{
        background-image:linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url('https://cdn.businesstraveller.com/wp-content/uploads/fly-images/819021/Passenger-airplane-taking-o-916x516.jpg');
        background-repeat:no-repeat;
        background-size:cover;
        }
        
        .form{
            background-color: none;
            border : 0.3rem solid black;
        }
        .setBold{
            font-weight:bolder;
        }
        .submitButton{
            background-color:navy;
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
    <!-- starting of php code -->
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $passengerName = $_POST['passengerName'];
            $ticketNumber = $_POST['ticketNumber'];
            $flightName = $_POST['flightName'];
            $allowance = $_POST['allowance'];
            $baggageTag = $_POST['baggageTag'];
            $baggageWeight = $_POST['baggageWeight'];
            $compartment = $_POST['compartment'];
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
                $sql= "INSERT INTO baggageinfo (`passengerName`,`ticketNumber`,`flightName`,`allowance`,`baggageTag`,`baggageWeight`,`compartment`) VALUES
                 ('$passengerName','$ticketNumber','$flightName','$allowance','$baggageTag','$baggageWeight','$compartment')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>Baggage Details of '. $passengerName .'  have been taken successfully...
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
    <!-- ending of php code -->
    <!-- starting of form -->
    <form action="/DBMSP/baggage.php" method="post">
    <div class="form w-50 d-block mx-auto mt-5">
        <div class="mb-3 p-3">
            <h2 class="heading1 text-center bg-dark">BAGGAGE DETAILS</h2>

            <label for="passengerName" class="setBold form-label">Passenger Name</label>
            <input type="text" id="passengerName" name="passengerName"  class="form-control" placeholder="Enter Passenger Name">

            <label for="ticketNumber" class="setBold form-label">Ticket Number</label>
            <input type="text" id="ticketNumber" name="ticketNumber"  class="form-control" placeholder="Enter Ticket Number">

            <label for="flightName" class="setBold form-label text-light">Flight</label>
            <input type="text"  id="flightName" name="flightName" class="form-control" placeholder="Enter Flight Name">

            <div>
                <label for="allowance" class=" setBold me-2 mt-3 mb-3">Select Baggage Allowance</label>
                <select name="allowance" id="allowance" class="llowance Selection">
                    <option value="First">First(40 Kgs)</option>
                    <option value="Business">Business(35 Kgs)</option>
                    <option value="Economy">Economy(25 Kgs)</option>
                </select>
            </div>

            <label for="baggageTag" class="setBold form-label">Baggage-Tag</label>
            <input type="text" id="baggageTag" name="baggageTag" class="form-control" placeholder="Enter Baggage-Tag">

            <label for="baggageWeight" class="setBold form-label">Baggage-Weight</label>
            <input type="text" id="baggageWeight" name="baggageWeight"  class="form-control" placeholder="Enter Baggage-Weight">

            <label for="compartment" class="setBold form-label">Compartment Number</label>
            <input type="text" id="compartment" name="compartment" class="form-control" placeholder="Enter allocated Compartment Number">

            <div class="p-3 ">
                <button class="submitButton  w-100 bg-dark text-light">SUBMIT</button>
            </div>
        </div>
    </div>
    </form>
    <!-- ending of form -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>