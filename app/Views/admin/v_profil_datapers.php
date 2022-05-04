<?php echo view('admin/v_header') ?>
<?php echo view('admin/v_sidebar') ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">
            <h4 class="card-title">DATA PERS</h4>
          <form action="<?= base_url('update-data/'.$profile->profile_id) ?>" method="POST" enctype="multipart/form-data" class="forms-sample">
             
            <div class="form-group">
                <label for="exampleInputName1">NAMA</label>
                <input type="text" name="namapers" class="form-control" id="exampleInputName1" value="<?= $profile->name ?>">
            </div>
            
            <div class="form-group">
                <label for="exampleTextarea1">DESKRIPSI</label>
                <textarea name="deskripsi" class="ckeditor" id="editor-custom" rows="4"><?= $profile->description ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">EMAIL</label>
                <input type="text" name="email" value="<?= $profile->email ?>" class="form-control" id="exampleInputName1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">ALAMAT</label>
                <textarea name="alamat" class="ckeditor" id="editor-custom" rows="4"><?= $profile->address ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">KONTAK HP</label>
                <input type="text" name="kontakhp" value="<?= $profile->phone ?>" class="form-control" id="exampleInputName1" placeholder="Kontak Hp">
            </div>
             
              <button type="submit" class="btn btn-primary mr-2">EDIT</button>
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