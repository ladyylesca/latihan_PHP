<?php
$siswa = [
    ["Andi", 80, 85],
    ["Budi", 75, 90],
    ["Citra", 88, 78]
];
echo "Nilai Bahasa siswa ke-2 ({$siswa[1][0]}) : {$siswa[1][2]}<br><br>";
echo "Daftar Nilai Siswa:<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . 
         " | Matematika: " . $siswa[$i][1] . 
         " | Bahasa: " . $siswa[$i][2] . "<br>";
}
?>
