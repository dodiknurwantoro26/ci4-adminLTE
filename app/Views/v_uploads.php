<div class="col-md-12">

    <!-- notifikasi jika upload berhasil -->
    <?php
    if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php  }   ?>


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Upload Gambar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?= form_open_multipart(base_url('multiupload/save')); ?>
        <div class="card-body">
            <div class="form-group">
                <label>Judul</label>
                <input name="judul" class="form-control" placeholder="Keterangan" required>
            </div>
            <div class="form-group">
                <label>Gambar/Foto</label>
                <input type="file" name="file_upload[]" class="form-control" multiple="true" required>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>