<?php
function sapa($nama){
    echo "selamat pagi $nama".PHP_EOL;
}
echo "Masukkan Nama : ";
$nama = trim(fgets(STDIN));
sapa("$nama");
?>