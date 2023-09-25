<?php
$server_name="127.0.0.1";
$username="root";
$password="";
$dbname="bafta";

$conn=mysqli_connect($server_name,$username);

if(!$conn){
    die("Connection Failed!". mysqli_connect_error());
}

$sql="CREATE DATABASE IF NOT EXISTS bafta";
$conn->query($sql);

$conn->select_db($dbname);

$sql="CREATE TABLE IF NOT EXISTS comments(id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(70)NOT NULL,comment VARCHAR(520)NOT NULL)";
$conn->query($sql);

$sql="CREATE TABLE IF NOT EXISTS booked_orders(id INT(10)UNSIGNED AUTO_INCREMENT PRIMARY KEY,apartment VARCHAR(30)NOT NULL, full_name TEXT(20)NOT NULL,email VARCHAR(70)NOT NULL,contact VARCHAR(60)NOT NULL,date VARCHAR(20)NOT NULL, gender TEXT(10)NOT NULL, payment_method TEXT(10)NOT NULL)";
$conn->query($sql);
?>