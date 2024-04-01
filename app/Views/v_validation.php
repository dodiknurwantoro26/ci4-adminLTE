<!-- notifikasi input data berhasil -->
<?php
if (!empty(session()->getFlashdata('success'))) { ?>
    <div class="alert alert-success">
        <?php
        echo session()->getFlashdata('success');
        ?>
    </div>
<?php } ?>

<?php
$inputs = session()->getFlashdata('inputs');
$errors = session()->getFlashdata('errors');

if (!empty($errors)) { ?>
    <div class='alert alert-success'>
        Kesalahan salah input
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li> <?= esc($error) ?> </li>
            <?php }  ?>
        </ul>


    </div>


<?php } ?>


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
            <input name="nis" class="form-control" placeholder="NIS">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Gambar/Foto</label>
            <input type="file" name="foto_siswa" class="form-control">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Upload</button>
    </div>
    <?= form_close(); ?>


</div>