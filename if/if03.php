<?php
echo "Masukkan nama : ";
$nama = trim(fgets(STDIN));
echo "masukkan nilai anda :";
$nilai = trim(fgets(STDIN));

if ($nilai>=80) {
    echo "selamat $nama,Anda lulus";
}else {
    echo "maaf $nama, anda belum lulus";
}

?>