<?php
$dsn = 'mysql:host=localhost;dbname=lpproject';
$user = 'root';
$password = '123456';

try {
    $conn = new PDO($dsn, $user, $password);
    // echo '<center class="message">You are connected</center>';
} catch (PDOException $e) {
    echo '<center class="message">Could not connect</center>' . $e->getMessage();
}
?>
