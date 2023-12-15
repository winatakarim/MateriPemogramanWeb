<?php
// menampilkan hasil input
$nama = $_POST['namaMahasiswa'];
$nilaiMahasiswa = $_POST['nilaiMahasiswa'];

// hitung nilai

if ($nilaiMahasiswa > 75) {
    $keterangan = "Selamat Anda Lulus";
} else {
    $keterangan = "Maaf Anda Gagal";
}

// menampilkan
echo "Hasil Perhitungan Nilai Mahasiswa<br>";
echo "Nama Mahasiswa : $nama<br>";
echo "Nilai Mahasiswa : $nilaiMahasiswa <br>";
echo "Keterangan : $keterangan <br>";