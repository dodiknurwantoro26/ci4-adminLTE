<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Validasi</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= form_open_multipart(base_url('siswa/save')); ?>
    <div class="card-body">
        <div class="form-group">
            <label>NIS</label>
            <input name="nis" class="form-control" placeholder="NIS" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label>Gambar/Foto</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Upload</button>
    </div>
    <?= form_close(); ?>


</div>