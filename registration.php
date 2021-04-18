<?php

session_start();

$server = "localhost";
$username = "root";
$password = "rikashi009";
$dbname = "userregistration";


$conn = mysqli_connect('localhost','root','rikashi009','userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where username = '$name'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username already taken";
}else{
    $reg= "insert into usertable(username , password) values ('$name' , '$pass')";
    mysqli_query($conn, $reg);
    $_SESSION['username'] = $name;
    header('location:search.php');
}


?>