<?php
$file = fopen("halo.txt","w");

$teks ="halo \n";
fwrite($file,$teks);

$teks ="saya sedang belajar PHP.";
fwrite($file,$teks);
fclose($file);

?>