<?php

$host = '192.168.2.222';
$port = '5432';
$username = 'sundaya';
$password = 'sundaya2019';
$dbname = 'demo';
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password}";

$conn = pg_connect($connection_string);

if (!$conn) {
    echo "<marquee>Not connected to db</marquee> \n";
}
