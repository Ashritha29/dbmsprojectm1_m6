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

$sql = "SELECT * FROM `passengerinfo`";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);



if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['name'];
        echo "<br>";
    }
    echo "<br>";
}
//usage of where clause to update data
$sql = "UPDATE `passengerinfo` SET `name` = 'hanishupdate' WHERE `name`='hanish'";
$result = mysqli_query($conn,$sql);//returns bool value
$aff = mysqli_affected_rows($conn);
echo "no.of affected rows : " . $aff ;
if($result){
    echo "update row";
}else{
    echo "update failed";
}
?>