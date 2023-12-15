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
function uploadFoto()
{
   $namaFile = $_FILES['foto']['name'];
   $ukuranFile = $_FILES['foto']['size'];
   $error = $_FILES['foto']['error'];
   $tmpName = $_FILES['foto']['tmp_name'];

   if ($error === 4) {
      echo "<script>alert('Anda belum memilih Gambar!, Silahkan klik choos file')</script>";
      return false;
   }
   $tipeFileValid = ['jpg', 'jpeg', 'png'];
   $tipeFile = explode('.', $namaFile);
   $tipeFile = strtolower(end($tipeFile));
   if (!in_array($tipeFile, $tipeFileValid)) {
      echo "<script>alert('Tipe file gambar tidak valid!, Silahkan pilih gambar jpg/jpeg/png')</script>";
      return false;
   }
   if ($ukuranFile > 1000000) {
   echo "<script>alert('Ukuran Gambar Terlalu besar!, Silahkan pilih gambar dengan ukuran 2 mb')</script>";
   return false;
   }
   $namaFileBaru = uniqid();
   $namaFileBaru .= '.';
   $namaFileBaru .= $tipeFile;
   move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);
   return $namaFileBaru;
}
   function insertDataUser($data)
{
   global $conn;
   $nama_user = htmlspecialchars($data['nama_user']);
   $nm_lengkap_user = htmlspecialchars($data['nm_lengkap_user']);
   $password = htmlspecialchars($data['password']);
   $role = htmlspecialchars($data['role']);
   $status = htmlspecialchars($data['status']);
   
   $foto = uploadFoto();
   if (!$foto) {
   return false;
   }
   $newPass = password_hash($password, PASSWORD_DEFAULT);
   $query = "INSERT INTO tbl_user
   VALUES('','$nama_user','$nm_lengkap_user','$newPass','$role','$status','$foto')";
   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);
}
   function updateDataUser($data)
{
   global $conn;
   $id_user = ($data['id_user']);
   $nama_user = htmlspecialchars($data['nama_user']);  
   $nm_lengkap_user = htmlspecialchars($data['nm_lengkap_user']);
   $role = htmlspecialchars($data['role']);
   $status = htmlspecialchars($data['status']);
   $password = htmlspecialchars($data['password']);
   $foto_lama = htmlspecialchars($data['foto_lama']);
   $pass_lama = ($data['pass_lama']);
   if ($_FILES['foto']['error'] === 4) {
      $foto = $foto_lama;
   }  else {
      if ($foto_lama != '') {
         unlink("../assets/img/$foto_lama");
      }
      $foto = uploadFoto();
   }
   $newPass = "";
   if (empty($password)) {
   $newPass = $pass_lama;
   } else {
   $newPass = password_hash($password, PASSWORD_DEFAULT);
   }
   $query = "UPDATE tbl_user SET nama_user = '$nm_user',
                              nm_lengkap_user = '$nm_lengkap',
                              pass_user = '$newPass',
                              role_user = '$role',
                              status_user = '$status',
                              foto_user='$foto'
                                 WHERE id_user='$id_user'";
   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);
}
   function deleteDataUser($id)
{
   global $conn;
      $result = getAll("SELECT * FROM tbl_user WHERE id_user=$id")[0];
   $fotolama = $result['foto_user'];
   if ($fotolama != '') {
   unlink("../assets/img/$fotolama");
   }
   $query = "DELETE FROM tbl_user WHERE id_user = '$id'";
   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);
}