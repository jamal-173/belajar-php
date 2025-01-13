<?php
$siswa = [
    "siswa1" =>[
        "nama" => "Irengmennn",
        "kelas" => 12
    ],
    "siswa2" =>[
        "nama" => "Suparmennn",
        "kelas" => 10
    ]    
    ];
foreach($siswa as $murid => $santri){
    echo strtoupper($murid).PHP_EOL;
    foreach($santri as $data => $isi){
        echo ucwords($data)." \t: ". $isi . PHP_EOL;
    }
}
?>