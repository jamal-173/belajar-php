<?php

$siswa = [
    "nama" => "Dita Leni ravia",
    "kelas" => 1,
    "jurusan" => "pplg",
    "alamat" => [
        "desa" => "rejosari",
        "kec" => "kebonsari",
        "kab" => "madiun"
    ]
];

echo "nama \t: ".$siswa["nama"].PHP_EOL;
echo "kelas \t: ".$siswa["kelas"].PHP_EOL;
echo "jurusan : ".$siswa["jurusan"].PHP_EOL;
echo "desa \t: ".$siswa["alamat"]["desa"].PHP_EOL;
echo "kec \t: ".$siswa["alamat"]["kec"].PHP_EOL;
echo "kota \t: ".$siswa["alamat"]["kab"].PHP_EOL;

?>
