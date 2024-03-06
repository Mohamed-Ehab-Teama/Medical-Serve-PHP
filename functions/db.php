<?php


$server = "localhost";
$user = "root";
$db_pass = "";
$db_name = "medical_serv";

$conn = mysqli_connect($server, $user, $db_pass, $db_name);

if (!$conn) {
    die("Connection Error : " . mysqli_connect_error());
}

function db_insert($sql)
{

    global $conn;
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return "Data added Successfully";
    }
    return false;
}



// Get data from database
function getRow($table, $filed, $value)
{
    global $conn;

    $sql = "SELECT * FROM `$table` WHERE `$filed` = '$value' ";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $rows = [];

        if(mysqli_num_rows($result) > 0 ){

            $rows = mysqli_fetch_assoc($result);
            return $rows;
        }

    }
    return false;
}
