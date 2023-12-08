<?php
// koneksi php dan mysql
$server = "localhost";
$host = "root";
$pass = "";
$db = "db_web_programing";
$conn = mysqli_connect($server, $host, $pass, $db);
function getAll($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
     }
     return $rows;
}

function insertDataMahasiswa($data)
{
   global $conn;

   $nama = htmlspecialchars($data["nama"]);
   $nim = htmlspecialchars($data["nim"]);
   $email = htmlspecialchars($data["email"]);
   $jurusan = htmlspecialchars($data["jurusan"]);

   $query = "INSERT INTO tbl_mahasiswa VALUES('','$nama','$nim','$email','$jurusan')";

   mysqli_query($conn,$query);
   return mysqli_affected_rows($conn);
}
function updateDataMahasiswa($data)
{
   global $conn;

   $nama = htmlspecialchars($data["nama"]);
   $nim = htmlspecialchars($data["nim"]);
   $email = htmlspecialchars($data["email"]);
   $jurusan = htmlspecialchars($data["jurusan"]);
   $id = htmlspecialchars($data["id"]);

   $query = "UPDATE tbl_mahasiswa SET nama='$nama'
                                       nim='$nim',
                                       email='$email',
                                       jurusan='$jurusan' 
                                       WHERE id='$id')";

   mysqli_query($conn,$query);
   return mysqli_affected_rows($conn);
}