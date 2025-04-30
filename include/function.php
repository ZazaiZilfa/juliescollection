<?php

//koneksi database
$conn = mysqli_connect('127.0.0.1', 'root', '', 'db_julies');
// $conn = mysqli_connect('javatechnic.co.id','javatechnic_jtcoid','1qjlkTA.Bbf@', 'javatechnic_jt');
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// echo "Koneksi berhasil";
// mysqli_close($conn);

function query($query)
{
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
        }
        return $rows;
}