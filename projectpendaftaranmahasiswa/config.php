<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaranmahasiswa";

$db = mysqli_connect($server, $user, $password, $nama_database);
$conn = mysqli_connect("localhost", "root", "", "pendaftaranmahasiswa");

if( !$db ){
    die("Database Gagal terhubung : " . mysqli_connect_error());
}
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) <= 0) {
        echo mysqli_error($conn);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


?>
