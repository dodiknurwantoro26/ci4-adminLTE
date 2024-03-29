<div class="col-sm-12">
    <a href="<?= base_url() ?>/product/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <?php
    if (!empty(session()->getFlashdata())) {

    ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success', 'Data Berhasil Ditambahkan'); ?>

        </div>
    <?php } ?>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name Product</th>
                <th>Deskripsi Product</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($product as $key => $value) : ?>
                <tr>
                    <th><?= $no++; ?></th>
                    <th><?= $value['product_name']; ?></th>
                    <th><?= $value['product_description'] ?></th>
                    <th>
                        <a href="<?= base_url('/product/edit/' . $value['product_id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('/product/delete/' . $value['product_id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah benar akan delete data?')">Delete</a>
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>