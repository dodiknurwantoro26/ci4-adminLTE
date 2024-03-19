<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($mahasiswa as $key => $value) : ?>
            <tr>
                <th><?= $no++; ?></th>
                <th><?= $value['nama_mhs']; ?></th>
                <th><?= $value['name_fakultas'] ?></th>
                <th><?= $value['name_jurusan']; ?></th>
                <th><?= $value['alamat'] ?></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>