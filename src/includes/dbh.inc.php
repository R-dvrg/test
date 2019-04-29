<?php

$dbServername = "mboardloginDB";
$dbUsername = "mboardlogin";
$dbPassword = "FedUlQ8Hbl5KGxeF";
$dbName = "mboardlogin";



$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if(mysqli_connect_error()){

echo "Error Connecnting to database" . mysqli_connect_error();

}
