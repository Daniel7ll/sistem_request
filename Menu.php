<?php
include_once 'Core/Database.php';
class Mahasiswa_model extends Database
{
    private $db;
    function __construct()
    {
        $this->db = new Database();
    }

    function getAllData()
    {
        $query = "SELECT * FROM mahasiswa ORDER BY created DESC";
        $data = $this->db->execute($query);
        return $data;
    }

    function hapusData($id)
    {
        $where = 'nim='.$id;
        $status = $this->db->delete('mahasiswa', $where);
        if($status){
            echo "<script>
            alert('Data Berhasil dihapus!');
            window.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
            alert('Data Gagal dihapus!');
            </script>";
        }
    }

    function tambahData($data)
    {
        $col = ['nim', 'nama', 'prodi'];
        $status = $this->db->insert('mahasiswa',$col,$data);
        if($status){
            echo "<script>
            alert('Data Berhasil ditambahkan!');
            window.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
            alert('Data Gagal ditambahkan!');
            </script>";
        }
    }

    function getDataByNim($nim)
    {
        $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        $result = $this->db->execute($query);
        return $result[0]; 
    }

    function updateDataMahasiswa($data)
    {
        $nim = $data['nim'];
        $nama = $data['nama'];
        $prodi = $data['prodi'];

        $query = "UPDATE mahasiswa SET nama='$nama', prodi='$prodi' WHERE nim='$nim'";
        $status = $this->db->execute($query);
        if($status){
            echo "<script>
            alert('Data Berhasil diupdate!');
            window.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
            alert('Data Gagal diupdate!');
            </script>";
        }
    }
}
?>
