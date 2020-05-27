<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peopledata";
$uname =$_POST['uname'];
$pass=$_POST['pass'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    echo "Connection failed: " . $conn->connect_error;
}

$result = mysqli_query($conn,"SELECT * FROM friends where uname='$uname' and password='$pass'");
$count  = mysqli_num_rows($result);
if ($count==1) 
{       header('location:devicelist.html');
        echo "Match Found";
}
else
{
        echo "No user";

}
$conn->close();

?>