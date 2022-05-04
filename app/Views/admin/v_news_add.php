<?php echo view('admin/v_header') ?>
<?php echo view('admin/v_sidebar') ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">
            <h4 class="card-title">Tambah Data Berita</h4>
          <form action="<?= base_url('insert-news') ?>" method="POST" enctype="multipart/form-data" class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Judul</label>
                <input type="text" name="judul" class="form-control" id="exampleInputName1" placeholder="Juudl Berita">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Kategori </label>
                <select name ="kategori" class="form-control form-control-sm" id="exampleFormControlSelect3">
                    <?php
                    foreach ($itemkategori as $row) {
                    ?>
                        <option value="<?php echo $row->category_id ?>"><?php echo $row->category ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Berita Utama</label>
                <div class="col-md-6">
                  <div class="form-group row">

                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="radiobutama" id="membershipRadios1" value="Ya" checked>
                          Ya
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="radiobutama" id="membershipRadios2" value="Tidak">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Isi Berita 2</label>
                <textarea name="isiberita" class="ckeditor" id="editor-custom" rows="4"></textarea>
              </div>



              <div class="form-group">
                <label>File upload</label>
                <div class="input-group col-xs-12">
                  <input name="gambar" type="file" id="userfile" onchange="tampilkanPreview(this,'preview')" class="form-control file-upload-info" placeholder="Upload Image">
                </div>
                <img id="preview" width="100px" height="100px" >
              </div>

              <div class="form-group">
                <label for="exampleSelectGender">Penulis</label>
                <select name="penulis" class="form-control" id="exampleSelectGender">
                    <?php
                    foreach ($itempenulis as $row) {
                    ?>
                        <option value="<?= $row->writer_id ?>"><?= $row->writer ?></option>
                    <?php } ?>
                </select>
              </div>

              <button type="submit" class="btn btn-primary mr-2">TAMBAHKAN</button>
              <button class="btn btn-light">Cancel</button>
            </form>
           
       
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>

<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<?php echo view('admin/v_footer') ?>