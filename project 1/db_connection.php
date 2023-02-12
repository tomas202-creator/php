<?php
$sName="localhost"; //server name
$uName="sqluser";//user name
$pass = "password"; 
$dbName="student";
try{
    $conn = new PDO("mysql:host = $sName; dbName= $dbName", $uName, $pass);
    $conn -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

}
catch(PDOException $e) {
    echo"connection failed:".$e->getMessage();
}


?>
