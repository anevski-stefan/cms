<?php

    //DEVELOPMENT CONNECTION
    // $db['db_host'] = "localhost";
    // $db['db_user'] = "root";
    // $db['db_pass'] = "";
    // $db['db_name'] = "cms";

    //REMOTE DATABASE CONNECTION
    $db['db_host'] = "sql11.freemysqlhosting.net";
    $db['db_user'] = "sql11497285";
    $db['db_pass'] = "YkKiVqkeDx";
    $db['db_name'] = "sql11497285";

    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//    if($connection){
// echo "We are connected!";
// } 
?>
