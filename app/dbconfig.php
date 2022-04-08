<?php
if (getenv('DATABASE_URL') != "") {
//    $dbopts = parse_url(getenv('DATABASE_URL'));
//    $type = "pgsql";
//    $servername = $dbopts["host"];
//    $username = $dbopts["user"];
//    $password = $dbopts["pass"];
//    $database = ltrim($dbopts["path"], '/');
    // db free hosting
    $type = "mysql";
    $servername = "sql11.freemysqlhosting.net";
    $username = "sql11484545";
    $password = "YfLaic23fH";
    $database = "sql11484545";
} else {
    $type = "mysql";
    $servername = "mysql";
    $username = "root";
    $password = "secret123";
    $database = "developmentdb";
}
