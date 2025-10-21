<?php
class BukuView {
    public function tampilkan($bukuList) {
        echo "<h2>Daftar Buku Perpustakaan</h2>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>No</th><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th></tr>";

        $no = 1;
        foreach ($bukuList as $b) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$b['judul']}</td>
                    <td>{$b['pengarang']}</td>
                    <td>{$b['tahun']}</td>
                  </tr>";
            $no++;
        }

        echo "</table>";
    }
}
