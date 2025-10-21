<?php
class Buku {
    private $dataBuku = [
        ["id" => 1, "judul" => "The Tokyo Zodiac Murders", "pengarang" => "Soji Shimada", "tahun_terbit" => 1981],
        ["id" => 2, "judul" => "Teka Teki Rumah Aneh", "pengarang" => "Uketsu", "tahun_terbit" => 2021],
        ["id" => 3, "judul" => "Black Showman dan Pembunuhan di Kota Tak Bernama", "pengarang" => "Keigo Higashino", "tahun_terbit" => 2021],
    ];

    // Mengambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
