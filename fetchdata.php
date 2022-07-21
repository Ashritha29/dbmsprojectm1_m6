<?php
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
    echo "connection was successful<br>";
}
$sql= "SELECT * from `passengerinfo`";
$result = mysqli_query($conn,$sql);
//finding no of records
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

/*if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo var_dump($row);
        echo "<br>";
    }
}*/

if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['name'];
        echo $row['reference'];
        echo "<br>";
    }
}

?>