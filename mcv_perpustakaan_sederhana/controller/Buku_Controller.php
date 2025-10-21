<?php
require_once "model/Buku.php";
require_once "view/BukuView.php";

class BukuController {
    public function index() {
        // Buat objek model dan view
        $model = new Buku();
        $view = new BukuView();

        // Ambil data dari model
        $bukuList = $model->getAllBuku();

        // Kirim data ke view
        $view->tampilkan($bukuList);
    }
}
