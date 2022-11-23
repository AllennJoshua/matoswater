<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "userreg";

// $db['db_host'] = "sql105.epizy.com"; //	MySQL Host Name
// $db['db_user'] = "epiz_33063259"; //	MySQL User Name
// $db['db_pass'] = "wgam70WsWsAc"; // vpanel password
// $db['db_name'] = "epiz_33063259_userreg"; // MySQL DB Name


foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($connection){
   echo "Website is conected to database!" . "<br>" . "<br>";
} else {
    echo " WE not connected to db";
}

?>

