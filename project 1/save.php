<?php
include "db_connection.php";
if(isset ($POST ["name"]) ){
    $name = $_POST["name"];
    $SQL = "INSERT INTO names(name)VALUES(?)";
    $STMT = $conn ->prepare($SQL);
    $STMT -> execute([$name]);
}
?>