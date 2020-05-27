<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peopledata";
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$phone=$_POST['contact'];
$email =$_POST['ename'];
$uname =$_POST['uname'];
$pass=$_POST['pass'];
$country=$_POST['country'];
$gender=$_POST['radio1'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

$sql = "INSERT INTO Friends(firstname,lastname ,country,gender,phone ,email,uname ,password ) 
values('$fname' ,'$lname' ,'$country','$gender','$phone' ,'$email' ,'$uname ','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location:log.html');
?>