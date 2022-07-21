<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="./baggagedetails.css">
    <style>
   
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
    
    
    <h1 class=" text-center p-5 text-white">BAGGAGE DETAILS</h1>
    <!-- input field -->
    <div class="bg-light mx-auto col-4 p-5">
        <label for="ticketNumber">TICKET NUMBER</label>
        <input class="ms-2" type="text" name="ticketNumber" id="ticketNumber" placeholder="Enter Ticket Number">
        <button class="btn w-100 mt-3 bg-info" name="submit-Button">SUBMIT</button>
        <!-- php code start-->
        <?php
        echo "yes";
        if(isset($_POST['submit-Button'])){
            echo "yes1";
            $ticketNumber = $_POST['ticketNumber'];
            echo "$ticketNumber";
            $servername="localhost";
            $username = "root";
            $password = "";
            $database = "mainproject";
            $conn = mysqli_connect($servername,$username,$password,$database);
            if($conn){
            echo "connected to database";
            $sql = "SELECT * from `baggageinfo` WHERE `ticketNumber`='$ticketNumber'";
                        $result = mysqli_query($conn,$sql);
                        $num= mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        echo $num;
                        echo $row['allowance'];
            }else{
            echo "not connected to database";
            } 
        }
       ?>
        <!-- php code end -->
        <!-- modal class -->
        <!-- <div class="modal fade" id="baggage">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                     hlo
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end of modal class -->
    </div>
    <!-- test -->
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>