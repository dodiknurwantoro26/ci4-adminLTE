<div class="col-sm-12">
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
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>