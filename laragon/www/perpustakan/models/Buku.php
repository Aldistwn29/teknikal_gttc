<?php

class Buku {

    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        return mysqli_query($this->conn, "SELECT * FROM buku");
    }

    public function insert($data) {
        $judul = $data['judul'];
        $pengarang = $data['pengarang'];
        $penerbit = $data['penerbit'];
        $tahun = $data['tahun'];
        $stok = $data['stok'];

        $query = "INSERT INTO buku (judul, pengarang, penerbit, tahun, stok)
                  VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', '$stok')";

        mysqli_query($this->conn, $query);
    }

    public function delete($id) {
        $query = "DELETE FROM buku WHERE id = $id";
        mysqli_query($this->conn, $query);
    }
}
