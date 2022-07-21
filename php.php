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