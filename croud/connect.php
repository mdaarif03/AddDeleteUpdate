<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='student';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if (!$con) {
    echo "Not Connection";
    // echo "Connection Successfull";
}
?>