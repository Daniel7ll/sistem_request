<?php
    class Database
    {
        private $servername = "localhost"; 
        private $username = "root"; 
        private $password = "";
        private $database = "sistem_request";
        private $conn;
        function __construct()
        {
            $this->conn = new mysqli($this->servername, $this->username, 
            $this->password, $this->database);
        }
        public function execute($sql)
        {
            $result = mysqli_query($this->conn, $sql); // Menggunakan $this->conn sebagai koneksi database

            if ($result === TRUE) {
            // Jika query berhasil dieksekusi (biasanya untuk query INSERT, UPDATE, DELETE)
            return true;
            } else if ($result === FALSE) {
            // Jika query gagal dieksekusi
            return false;
            } else {
                // Jika query berhasil dieksekusi dan mengembalikan hasil (biasanya untuk query SELECT)
                $data = [];
                while ($row = mysqli_fetch_array($result)){
                    $data[] = $row;
                }
                return $data;
            }
        }

        public function delete($table,$where)
        {
            $status=false;
            $query = "DELETE FROM $table WHERE $where";
            //echo $query;
            $result = mysqli_query($this->conn, $query);

            if($result){
                // Check the number of affected rows
                $affectedRows = mysqli_affected_rows($this->conn);
                if($affectedRows > 0){
                    $status = true;
                }
            }else{
                $status = false;
            }
            return $status;
        }

        public function insert($table, $col, $values){
            $status=false;
            // print_r($col);
            $f="";
            foreach($col as $val){
                $f.=$val.',';
            }
            $f = rtrim($f,",");
            $v="";
            foreach($values as $val){
                $v.= "'".$val."',";
            }
            $v = rtrim($v,",");
            // echo $v;
            $query = "INSERT INTO $table ($f) VALUES ($v)";
            // echo query;
            $result = mysqli_query($this->conn, $query);

            if($result){
                // Check the number of affected rows
                $affectedRows = mysqli_affected_rows($this->conn);
                if ($affectedRows > 0){
                    $status = true;
                }
            }else{
                $status = false;
            }
            return $status;
        }
        
        public function getConnection()
        {
            return $this->conn;
        }
    }
?>
