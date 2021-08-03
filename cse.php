<?php
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number'];
$aadharNumber = $_POST['aadharNumber'];
$college = $_POST['college'];
$place = $_POST['place'];
$address = $_POST['address'];
$courses = $_POST['courses'];
$Timing = $_POST['Timing'];


$conn = new mysqli('localhost','root','','register'); if($conn->connect_error){
die('connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into information(name, fathername, gender, email, number, aadharNumber, college, place, address, courses, Timing) values(?, ?, ?, ?, ?, ?, ?, ?,
?, ?, ?)");
$stmt->bind_param("ssssiisssss",$name, $fathername, $gender, $email, $number,
$aadharNumber, $college, $place, $address, $courses, $Timing);
$stmt->execute(); echo"Registraiton successfully... ";
$stmt->close();
$conn->close();}
?>
