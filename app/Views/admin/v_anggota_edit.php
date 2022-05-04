<?php echo view('admin/v_header') ?>
<?php echo view('admin/v_sidebar') ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">
            <h4 class="card-title">Edit Data Anggota</h4>
          <form action="<?= base_url('update-anggota/'.$post['team_id']) ?>" method="POST" enctype="multipart/form-data" class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Nama</label>
                <input type="text" name="nama" value="<?php echo $post['name'] ?>" class="form-control" id="exampleInputName1" placeholder="Nama Anggota">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Jabatan </label>
                <select name ="jabatan" class="form-control form-control-sm" id="exampleFormControlSelect3">
                    <?php
                    foreach ($position as $row) {
                    ?>
                        <option value="<?php echo $row->position_id ?>"><?php echo $row->position ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Jenis Kelamin</label>
                <div class="col-md-8">
                  <div class="form-group row">

                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="radiojk" id="membershipRadios1" value="" checked>
                          Perempuan
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="radiojk" id="membershipRadios2" value="option2">
                          Laki-laki
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">No Hp</label>
                <input type="text" name="nohp" value="<?php echo $post['phone'] ?>" class="form-control" id="exampleInputName1" placeholder="No Hp">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Jurusan</label>
                <input type="text" name="jurusan" value="<?php echo $post['major'] ?>" class="form-control" id="exampleInputName1" placeholder="Jurusan">
              </div>

              <div class="form-group">
                <label>Foto Anggota</label>
                <div class="input-group col-xs-12">
                  <input name="foto" type="file" id="userfile" onchange="tampilkanPreview(this,'preview')" class="form-control file-upload-info" placeholder="Upload Image">
                </div>
                <img src="" id="preview" width="100px" height="100px" >
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