<!-- Main content -->
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-5">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?= base_url('product/update/' . $product['product_id']); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Product Name">Product Name</label>
                            <input type="text" name="product_name" value="<?= $product['product_name']; ?>" class="form-control" id="Product Name" placeholder="Input Product Name" required>
                        </div>
                        <div class="form-group">
                            <label for="Product Description">Product Description</label>
                            <input type="text" value="<?= $product['product_description']; ?>" name="product_description" class="form-control" id="Product Description" placeholder="Input Product Description" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->

</section>
<!-- /.content -->