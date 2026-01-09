<?php

class BukuController {
    public function index() {
        include 'views/buku/index.php';
    }
    public function tambah() {
        include 'views/buku/tambah.php';
    }
    public function simpan() {
        include 'models/Buku.php';

        $buku = new Buku();
        $buku->insert($_POST);

        header("Location: index.php");
    }
    public function hapus() {
        include 'models/Buku.php';

        $id = $_GET['id'];

        $buku = new Buku();
        $buku->delete($id);

        header("Location: index.php");
    }
}