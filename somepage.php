<?php
$username = $_POST['fname'];
$password = $_POST['lname'];
$gender = $_POST['age'];

if (!empty($username) || !empty($password) || !empty($gender) ) {
 $host = "sql163.main-hosting.eu";
    $dbUsername = "u603110860_user";
    $dbPassword = "PFba9TXY70gI";
    $dbname = "u603110860_data";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into register (username, password, gender) values(?, ?, ?)";

      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $username, $password, $gender);
      $stmt->execute();
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>