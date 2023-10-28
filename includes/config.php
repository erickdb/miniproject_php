<?php
session_start();
$db = 'contact_person';
$host = 'localhost';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$db";

try 
{
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    die("Connection failed: " . $e->getMessage());
}
?>
