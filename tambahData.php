<div class="container-md p-2">
    <form method="POST" enctype="multipart/form-data" action="index.php?page=insertDataMahasiswa">
        <input type="number" name="nim" class="form-control mb-3" value="" required placeholder="NIM">
        <input type="text" name="nama" class="form-control mb-3" value="" required placeholder="Nama Lengkap">
        <select class="form-select form-control mb-3" aria-label="Default select example" name="prodi" required>
            <option selected value="">Pilih Prodi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>