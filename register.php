<?php
//$conn = new mysqli('localhost', 'root', '', 'ali');
//if ($conn->connect_error) {
  die('connection failed:' . $conn->connect_error);
//}

 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ali";

 try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 } catch (PDOException $e){
 echo "Connection Failed with error=>" . $e->getMessage();
 }


$firstname = $_POST['firstname'];
$stmt = $conn->prepare("INSERT INTO registration (firstname) VALUES (?)");
$stmt->bind_param("s", $firstname);
$stmt->execute();
echo "registration succsesfully...";

