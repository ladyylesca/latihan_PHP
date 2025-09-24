<?php
// Cek nilai mahasiswa
$nilai = 85;
if ($nilai >= 80) {
    echo "Grade: A<br>";
} elseif ($nilai >= 70) {
    echo "Grade: B<br>";
} elseif ($nilai >= 60) {
    echo "Grade: C<br>";
} elseif ($nilai >= 50) {
    echo "Grade: D<br>";
} else {
    echo "Grade: E<br>";
}
?>