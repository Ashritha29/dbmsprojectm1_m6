<?php

//connecting to a database
$servername = "localhost";
$username = "root";
$password="";
//creating a connection
$conn = mysqli_connect($servername,$username,$password);

//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect : ". mysqli_connect_error());
}else{
    echo "connection was successful<br>";
}
//creating a database
$sql = "CREATE DATABASE test12";
$result = mysqli_query($conn , $sql);

//check for the database creation
if($result){
    echo "db created succesfully!<br>";
}else{
    echo "db was not created because of error-->".
    mysqli_error($conn) ;
}


?>