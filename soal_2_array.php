<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $total += $buah[$i][1] * $buah[$i][2];
}
echo "Total nilai stok semua buah: Rp " . number_format($total, 0, ',', '.');
?>
