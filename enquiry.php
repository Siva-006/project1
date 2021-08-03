<?php
$firstName = $_POST['firstName'];
$email	= $_POST['email'];
$phone	= $_POST['phone'];
$courses = $_POST['courses'];
$conn = new mysqli('localhost','root','','enquiry'); if($conn->connect_error){
die('connection failed :' .$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into details(firstName, email, phone, courses) values(?,
?, ?, ?)");
$stmt->bind_param("ssis",$firstName, $email, $phone, $courses);
$stmt->execute();
echo "registration successfully...";
$stmt->close();
$conn->close();
}
?>
