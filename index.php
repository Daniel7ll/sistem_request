<?php
require_once 'Controllers/Mahasiswa.php';

if (!isset($_GET['page'])) {
    $controller = new Mahasiswa();
    $controller->index();
    
} else if (isset($_GET['page']) && $_GET['page'] == "hapus") {
    $controller = new Mahasiswa();
    $controller->hapus();

} else if (isset($_GET['page']) && $_GET['page'] == "tambahData") {
    $controller = new Mahasiswa();
    $controller->viewTambahData();

} else if (isset($_GET['page']) && $_GET['page'] == "insertDataMahasiswa") {
    $controller = new Mahasiswa();
    $data = [];
    $data['nim'] = $_POST['nim'];
    $data['nama'] = $_POST['nama'];
    $data['prodi'] = $_POST['prodi'];
    $controller->tambahData($data);
    
}  

?>
