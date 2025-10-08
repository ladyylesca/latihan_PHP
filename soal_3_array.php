<?php
$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.7],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 6000000, "rating" => 4.5],
    ["nama" => "Kamera", "kategori" => "Fotografi", "harga" => 9500000, "rating" => 4.8]
];
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}
echo "Produk dengan harga tertinggi: {$tertinggi['nama']} (Rp " . number_format($tertinggi['harga'], 0, ',', '.') . ")";
?>
