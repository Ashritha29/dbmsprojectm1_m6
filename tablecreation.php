<?php

//connecting to a database
$servername = "localhost";
$username = "root";
$password="";
$database = "test12";
//creating a connection
$conn = mysqli_connect($servername,$username,$password);


//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect : ". mysqli_connect_error());
}else{
    echo "connection was successful<br>";
}
//creating a table
$tablec ="CREATE TABLE `phpmytable` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `test` VARCHAR(6) NOT NULL ,
 PRIMARY KEY (`sno`))";

$res = mysqli_query($conn , $tablec);

//check for the table creation
if($res){
    echo "table created succesfully!<br>";
}else{
    echo "table was not created because of error-->".mysqli_error($conn);
}

?>