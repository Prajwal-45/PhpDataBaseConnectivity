<?php

//connection variables
$server="localhost";
$username="root";
$password="";

//connection
$con=mysqli_connect($server,$username,$password);

//checking connections
if(!$con){
    die("Connection is failed due to".mysqli_connect_error());
}

//collect post 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$otherInfo = $_POST['otherInfo'];

//sql query

$sql="INSERT INTO `travelManagement`.`travelinfo` ( `name`, `email`, `phone`, `gender`, `otherInfo`, `date`) VALUES ('$name', '$email', '$phone', '$gender', '$otherInfo', current_timestamp())";

//query fired
if($con->query($sql) == true){
    echo"<h1 style='color:green'> Data Saved Sucessfully. Thank You! </h1>";

}
else{
   
}
//connection is closed



$con->close();



?>




