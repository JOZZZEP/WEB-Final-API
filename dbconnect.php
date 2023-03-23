<?php
    $servername = "202.28.34.197";
    $username = "web65_64011212020";
    $password = "64011212020@csmsu";
    $dbname = "web65_64011212020";

    $dbconn = new mysqli($servername,$username,$password,$dbname);
    if($dbconn->connect_error){
        dir("Error:".$dbconn->connect_error);
    }
?>