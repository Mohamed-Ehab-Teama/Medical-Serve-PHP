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


function db_update($sql)
{

    global $conn;
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return "Data Updated Successfully";
    }
    return false;
}





// Get data from database
function getRow($table, $field, $value)
{
    global $conn;

    $sql = "SELECT * FROM `$table` WHERE `$field` = '$value' ";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $rows = [];

        if (mysqli_num_rows($result) > 0) {

            $rows = mysqli_fetch_assoc($result);
            return $rows;
        }
    }
    return false;
}

// Delete Row from database
function deleteRow($table, $field, $value)
{
    global $conn;

    $sql = "DELETE FROM `$table` WHERE `$field` = '$value' ";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        return true;
    } else {

        return false;
    }
}




// Get Rows From Database:
function getRows($table)
{
    global $conn;

    $sql = "SELECT * FROM `$table` ";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $rwos = [];

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
        }
    }

    return $rows;
}





// Get number of rows in table
function NumOfRows($table, $id)
{

    global $conn;
    $sql = "SELECT COUNT(`$id`) FROM $table";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $num = mysqli_fetch_array($result);
    }

    return $num[0];
}



// get data from two tables
function getDataFromTwoTables($tble1,$table2){

    $sql = "s";

}