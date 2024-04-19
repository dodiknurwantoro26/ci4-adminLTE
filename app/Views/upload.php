 <!-- left column -->
 <div class="col-md-12">

     <!-- notifikasi jika upload berhasil -->
     <?php
        if (!empty(session()->getFlashdata('success'))) { ?>
         <div class="alert alert-success">
             <?= session()->getFlashdata('success') ?>
         </div>
     <?php  }   ?>

     <!-- notifikasi jika upload gagal -->
     <?php
        $error = $validation->getErrors();
        if (!empty($error)) { ?>
         <div class="alert alert-danger">
             <?= $validation->listErrors(); ?>
         </div>
     <?php  }   ?>

     <!-- general form elements -->
     <div class="card card-primary">
         <div class="card-header">
             <h3 class="card-title">Upload Gambar</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <?= form_open_multipart(base_url('fileupload/save')); ?>
         <div class="card-body">
             <div class="form-group">
                 <label>Keterangan?Label</label>
                 <input name="ket" class="form-control" placeholder="Keterangan" required>
             </div>
             <div class="form-group">
                 <label>Gambar/Foto</label>
                 <input type="file" name="gambar" class="form-control" required>
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
             <button type="submit" class="btn btn-primary">Upload</button>
         </div>
         <?= form_close(); ?>


     </div>
     <br>
     <!-- /.card -->

     <table class="table table-bordered table-striped">
         <thead>
             <tr>
                 <th>No</th>
                 <th>Keterangan</th>
                 <th>Gambar/Foto</th>
             </tr>
         </thead>
         <tbody>
             <?php $no = 1;
                foreach ($data as $key => $value) :
                ?>
                 <tr>
                     <th><?= $no++; ?></th>
                     <th><?= $value['ket']; ?></th>
                     <th><img src="<?= base_url('img/' . $value['gambar']); ?>" width="200px"></th>
                 </tr>
             <?php endforeach;
                ?>
         </tbody>
     </table>

 </div>