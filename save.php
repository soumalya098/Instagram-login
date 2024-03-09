<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hack";

//connection building

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

//start

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `test`(`email`, `password`) VALUES ('$email','$password')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submitted";
}
else
{
    echo "query failed......!";
}
?>
