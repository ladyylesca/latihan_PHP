<?php
// Cek umur
$umur = 20;
if ($umur < 12) {
    echo "Kategori: Anak-anak<br>";
} elseif ($umur < 18) {
    echo "Kategori: Remaja<br>";
} elseif ($umur < 60) {
    echo "Kategori: Dewasa<br>";
} else {
    echo "Kategori: Lansia<br>";
}
?>