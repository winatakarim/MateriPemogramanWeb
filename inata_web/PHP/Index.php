<?php
    $nilai = ;

    if ($nilai > 85 && $nilai <= 100) {
        echo "Selamat, Anda Mendapat nilai A ";
    } elseif ($nilai > 60 && $nilai < 84) {
        echo "Anda Mendapat nilai B";
    } elseif ($nilai > 45 && $nilai < 59) {
        echo "Anda Mendapat nilai C";
    } elseif ($nilai > 35 && $nilai < 44) {
        echo "Anda Mendapat nilai D";
    } elseif ($nilai >= 0 && $nilai < 34) {
        echo "Anda Mendapat Nilai E";
    } else {
        echo "input tidak sesuai";
    }
?>