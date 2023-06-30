<?php
 $id = $_POST['id'];
$role = $_POST['role'];
$username = $_POST['username'];
 $password = $_POST['password'];
// $password_encrypted = sha1($password.$salt);
$name = $_POST['name'];

$conn = new mysqli('sql303.epizy.com','epiz_34024433','dm6oiY3zktFVv','epiz_34024433_my_db');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}
else{
    $stmt =$conn->prepare("insert into users(id , role ,username,password ,name)
    values(?,?,?,?,?)");
    $stmt->bind_param("issss",$id ,$role,$username,$password,$name);
    $stmt->execute();
     echo "registration successful";
    header('Location: index.php');
    $stmt->close();
    $conn->close();
}
?>