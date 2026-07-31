<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "imcBanco";
$port = 3306;

$con = mysqli_connect($hostname, $username, $password, $dbname, $port)
    or
    die("<html>
   <sript languege ='JavaScript'>
    alert('Um erro inesperado ocorreu.')
    </script>
    </html>");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
