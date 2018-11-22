<?php
$user = $_POST["userid"];
$passw = $_POST["psw"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "web";

echo $_POST["userid"];
echo "<br>";
echo $_POST["psw"];
echo "<br>";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("connetion failed: " . mysqli_connect_error());
}
echo "conneted successfully";

$query = "SELECT * from users where user='$user' and password='$passw'";
$result = mysqli_query($conn, $query);

//var_dump($result);
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

echo $row[0];