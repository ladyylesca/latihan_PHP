<?php
$matrix = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matrix[$i][$j] = rand(1, 9);
    }
}
echo "Matriks 3x3:<br>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix[$i][$j] . " ";
        $total += $matrix[$i][$j];
    }
    echo "<br>";
}
echo "<br>Jumlah total semua elemen: $total";
?>
