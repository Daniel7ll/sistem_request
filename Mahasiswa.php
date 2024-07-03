<?php
include_once 'Models/Mahasiswa_model.php';

class Mahasiswa{
    var $db;
    function __construct(){
        $this->db = new Mahasiswa_model();
    }
    function index(){
        $data = $this->db->getAllData();
        require_once 'Views/header.php';
        require_once 'Views/navBar.php';
        require_once 'Views/mahasiswa/index.php';
        require_once 'Views/footer.php';
    }

    function viewTambahData(){
        require_once 'Views/header.php';
        require_once 'Views/navBar.php';
        require_once 'Views/mahasiswa/tambahData.php';
        require_once 'Views/footer.php';
    }

    function tambahData($data){
        $this->db->tambahData($data);
    }

    function hapus(){
        $id = $_GET['id'];
        $this->db->hapusData($id);
    }

}
?>
