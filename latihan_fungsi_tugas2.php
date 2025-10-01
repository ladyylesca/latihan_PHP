<?php
echo "Penentuan tanggal saat ini dengan getdate()<br>";
$sekarang = getdate();
echo "Hari ini Tanggal : " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
echo "<br><br>"
?>