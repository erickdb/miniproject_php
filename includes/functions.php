<?php
function is_password_used($dbh, $password) 
{
    $stmt = $dbh->prepare("SELECT COUNT(*) FROM users WHERE password = :password");
    $stmt->execute(array(':password' => $password));
    $count = $stmt->fetchColumn();
    return $count > 0;
}
function logout() 
{
    session_start();
    session_destroy();
    header ('location: index.php');
}
?>
