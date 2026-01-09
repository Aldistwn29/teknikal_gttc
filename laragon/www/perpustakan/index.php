<?php
require_once 'config/database.php';
require_once 'controllers/BukuController.php';

$controller = new BukuController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'tambah':
        $controller->tambah();
        break;

    case 'simpan':
        $controller->simpan();
        break;

    case 'hapus':
        $controller->hapus();
        break;

    default:
        $controller->index();
        break;
}
