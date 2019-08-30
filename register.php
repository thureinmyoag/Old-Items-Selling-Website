<?php   include("confs/config.php");

$name = $_POST['username'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$password= sha1($_POST['password']);
// $password= $_POST['password'];
$sql = "INSERT INTO users (username, email, phone, address,password)
		VALUES ('$name', '$email', '$phone', '$address','$password')";

mysqli_query($conn, $sql);

header("location: index.php")

?>
