<div class="container-md p-2">
    <div class="d-flex justify-content-end">
    <a href="index.php?page=tambahData"><button class='btn btn-primary mb-3 mt-3 d-flex justify-content-end'>Tambah data</button></a>
    </div>
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //print_r($data);
                $i=1;
                foreach($data as $row){
                    echo "<tr><td>$i</td>
                    <td>".$row['nim']."</td>
                    <td>".$row['nama']."</td>
                    <td>".$row['prodi']."</td>
                    <td><a href='index.php?page=edit&nim=".$row['nim']."' class='btn btn-info'>Ubah</a>
                        <a href='index.php?page=hapus&id=".$row['nim']."' class='btn btn-danger' onclick='return confirm(\"Yakin?\")'>Hapus</a>
                    </td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>