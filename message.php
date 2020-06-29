<?php
$Username = $_POST['name'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

 $conn = new mysqli('localhost', 'root','','portfolio');
 if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
 }
 else
 {
  $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) values(?,?,?,?)");
  $stmt->bind_param("ssss",$Username, $Email, $Subject, $Message);
  $stmt->execute();
  sleep(3);
  echo "Submited Successfully...";
  $stmt->close();
  $conn->close();
 }

 
?>