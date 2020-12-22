<?php
include "HTMLPage1.html";
$servername ="localhost";
$user="root";
$password="";
$dbname="firsttry";
$conn = mysqli_connect($servername,$user,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
echo "connected succesful";
/*$sql = "CREATE TABLE users(
username VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL
)";
if (mysqli_query($conn,$sql))
{
 echo "table users created successully";
}
else{
    echo "error createing table".mysqli_error($conn);
}*/
$username=$_POST['username'];
$lastname=$_POST['lastname'];
$sql="INSERT INTO users(username,lastname) VALUES($username,$lastname)";
if (mysqli_query($conn,$sql))
{
echo "new record added successful";
}
else
{
echo "error";
}
mysqli_close($conn);
?>
