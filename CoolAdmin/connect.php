<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);

date_default_timezone_set('America/New_York');


    $mysqlUserName      = "techbyfr_portfolio";
    $mysqlPassword      = "TECHBYfrancis$$";
    $mysqlHostName      = "localhost";
    $DbName             = "techbyfr_portfolio";


@ $conn = mysqli_connect($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName);

if (!$conn)

{

echo 'Could not connect to host';

exit;

}

if(!$conn){
    echo 'Failed to connect to DB';
}
?>
