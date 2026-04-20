<?php
$server="localhost";
$dbname="educsync";
$dbuser="root";
$dbpasw="";
try {
    $conn=new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpasw);
} catch (PDOException $e) {
    echo $e->getMessage();
}