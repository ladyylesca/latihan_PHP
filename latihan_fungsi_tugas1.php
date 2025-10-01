<?php
echo "Fungsi untuk menentukan bilangan terbesar<br>";
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}
$bil1 = 145;
$bil2 = 132;
echo "Di antara kedua bilangan $bil1 dan $bil2 yang terbesar adalah: " . terbesar($bil1, $bil2);
echo "<br><br>"
?>