<?php
$fullName = $_POST['firstName'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];
$massage = $_POST['massage'];

$conn = new mysqli('localhost', 'root','','yatra');
if($conn->connect_error){
  die('Connection Failed :'.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into registration (fullName,contact,email,address,massage)
  values(?,?,?,?,?)");
  $stmt->bind_param("sisss",$fullName,$contact,$email,$address,$massage);
  $stmt->execute();
  echo "Registration Success";
  $stmt->close();
  $conn->close();
}
?>