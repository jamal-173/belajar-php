<?php
session_start();
$_SESSION["username"]= "joko";
$_SESSION["password"]= "rahasia";

echo "berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>
Cek Session</a>";
?>