<?php
include "../function.php";
$idMahasiswa = $_GET['id'];
$mhs = getAll("SELECT * FROM tbl_mahasiswa WHERE id='$idMahasiswa' ")[0];

if (isset($_POST['rubah'])){
    if (updateDataMahasiswa($_POST) > 0) {
        echo 
        "
            <div class='alert alert-success' role='alert'> Data Mahasiswa Berhasil di Rubah!! </div>
            <script>
            setTimeout(function(){
             document.location='index.php'
            },1000);
            </script>
        ";
    }
    else{
        echo 
        "
            <div class='alert alert-danger' role='alert'> Data Mahasiswa Gagal di Rubah!! </div>
            <script>
            setTimeout(function(){
             document.location='index.php'
            },1000);
            </script>
        ";
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


