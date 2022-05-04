<?php echo view('admin/v_header') ?>
<?php echo view('admin/v_sidebar') ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">
            <h4 class="card-title">LOGO PERS</h4>
          <form action="<?= base_url('update-logo/'.$profile->profile_id) ?>" method="POST" enctype="multipart/form-data" class="forms-sample">
             

              <div class="form-group">  
                <img src="<?= base_url('profil/' . $profile->logo) ?>" id="preview" width="400px" height="300px" >
                <h5 style="margin-top: 40px;">File Logo : <?= $profile->logo ?></h5>
                

                <div class="input-group col-xs-12">
                  <input name="gambar" type="file" id="userfile" onchange="tampilkanPreview(this,'preview')" class="form-control file-upload-info" placeholder="Upload Image">
                </div>
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