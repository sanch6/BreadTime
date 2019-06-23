<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:breadtime.database.windows.net,1433; Database = foodshare", "tohacksbread", "tohacks!1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "tohacksbread@breadtime", "pwd" => "tohacks!1", "Database" => "foodshare", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:breadtime.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn === false){
	die(print_r(sqlsrv_errors(),true));
}
$user_info = "INSERT INTO REGISTRATION (NAME, ATTENDING) VALUES ('$_POST[NAME]', '$_POST[ATTENDING]')"; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

echo "Your information was added to the database.";

mysql_close($connect); ?>