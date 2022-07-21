<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ADMINISTRATION</title>
    <link rel="stylesheet" href="./administration.css">
    <style>
        .parentCard{
            margin-top: 4rem;
        }
        .card{
            box-shadow: 8px 8px 8px rgb(165, 141, 187);
            transition: 0.5s ease-in-out;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .card:hover{
            transform: scale(1.1);
        }
        .form-field{
           position: relative;
           margin: 32px 0;
        }
        .input-text{
            display: block; 
            width:100%;
            height : 36px;
            border-width: 0 0 2px 0;
            border-color: #5543ca;
            font-size: 18px;
            line-height: 26px;
            font-weight: 400;
        } 
        .input-text:focus + .label,
        .input-text.not-empty + .label{
            transform: translateY(-24);
        }
        .input-text:focus{
            outline: none;
        }
        .label{
            position: absolute;
            left: 20px;
            bottom: 11px;
            font-size: 18px;
            line-height: 26px;
            font-weight: 400;
            color: #5543ca;
            cursor:text;
            text-transform: capitalize;
            transition: transform 0.2s ease-in-out;
        }
        .submit-btn{
            border-color: rgb(16, 187, 187);
            text-transform: uppercase;
            text-size-adjust: 10px;
            background: none;
            color: rgb(16, 187, 187);
        }
        .submit-btn:hover{
            background-color: rgb(16, 187, 187);
            color: snow;
            border:3px solid black;
        }
        .card-body{
            font-weight: bold;
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

    <!-- heading -->
    <div>
        <h1 class="text-center text-white mt-5">ADMINISTRATION</h1>
    </div>
    <!-- heading end -->

    <!-- cards creation -->
    <div class=" parentCard  d-flex justify-content-evenly row">
        <div class="card col-md-3 col-10 bg-light">
           <div class="card-body text-center">Display employee details</div>
           <!-- id entry -->
           <div class="form-field">

               <h5>EMPLOYEE ID</h5>
               <label for="employeeID"  class="label"></label>
               <input type="text" id="employeeID" name="employeeID" class="input-text">

               <!-- button -->
               <div class="form-field">
                   <input type="submit" class="submit-btn w-100 " value="submit" name="">
               </div>
               <!-- button end -->
           </div>
           <!-- id entry end -->
        </div>
        <!-- employee status -->
        <div class="card col-md-3 col-10 bg-light">
            <div class="card-body text-center">Check employee status</div>
            <!-- id entry -->
            <form action="/DBMSP/administration.php" method="post">
           <div class="form-field">

               <h5>EMPLOYEE ID</h5>
               <label for="employeeID" class="label"></label>
               <input type="text" id="employeeID" name="employeeID" class="input-text" >

               <!-- button -->
               <!-- <div class="form-field">
                <input type="submit" class="submit-btn w-100 " data-bs-toggle="modal" data-bs-target="#statusemployee" value="submit">
                </div> -->
                <!-- button end -->
                
                </div>
                </form>
                <input type="submit" class="submit-btn w-100 " data-bs-toggle="modal" data-bs-target="#statusemployee" >
                <button>

                </button>
            </div>
        <!-- employee status end -->
        <!-- php code start -->
        <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $employeeID = $_POST['employeeID'];
                //    echo "$employeeID <br>";
                    //connecting to a database
                    $servername = "localhost";
                    $username = "root";
                    $password="";
                    $database="mainproject";
                    //creating a connection
                    $conn = mysqli_connect($servername,$username,$password,$database);
                    if(!$conn){
                        echo "sorry! failed to connect to database";
                    }else{
                        $sql = "SELECT * from `administration` WHERE `employeeID`='$employeeID'";
                        $result = mysqli_query($conn,$sql);
                        $num= mysqli_num_rows($result);
                        $row = mysqli_fetch_assoc($result);
                        //echo $row['status'];
                        //echo "$num";
                       // echo
                       /*if($row['status'] == "present"){
                           //echo "present";

                       }else{
                           echo "absent";
                       }*/
                    }
                }
                ?>
                <!-- php code end -->
                
         <div class="card col-md-3 col-10 bg-light">
            <div class="card-body text-center">Increment Employee SALARY!!</div>
            <!-- id entry -->
           <div class="form-field">

               <h5>EMPLOYEE ID</h5>
               <label for="employeeID" class="label"></label>
               <input type="text" id="employeeID" name="employeeID" class="input-text">

               <!-- button -->
               <div class="form-field">
               <input type="submit" class="submit-btn w-100 " value="submit" name="">
               </div>
            <!-- button end -->
            </div>
           <!-- id entry end -->
         </div>
    </div>
    <!-- cards end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>