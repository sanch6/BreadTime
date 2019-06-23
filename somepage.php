<?php
 $username = filter_input(INPUT_POST, 'fname');
 $password = filter_input(INPUT_POST, 'lname');
  $age = filter_input(INPUT_POST, 'age');
  
 if (!empty($username)){
if (!empty($password)){
$servername = "sql163.main-hosting.eu";
$username = "u603110860_user";
$password = "PCg9zUCvJYq9";
$dbname = "u603110860_data";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (username, password, age)
values ('$username','$password','$age')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>