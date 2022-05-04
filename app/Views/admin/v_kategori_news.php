<?php echo view('admin/v_header') ?>
<?php echo view('admin/v_sidebar') ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

          <div class="card-body">
          <a href="<?= base_url('add-kategory') ?>" class="badge badge-warning">+ Tambah Data </a>    
            <h4 class="card-title"></h4>
            <p class="card-title">DATA SEMUA KATEGORI</p>
            <div class="table-responsive">
              <table id="myTable" class="expandable-table table">
                <thead>
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      Kategori
                    </th>
                    <th>
                      Aktif
                    </th>
                    <th>
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no=1;
                  foreach ($kategori as $key) {
                ?>
                  <tr>
                    <td class="py-1">
                      <?= $no++ ?>
                    </td>
                    <td><?= $key->category; ?></td>
                    <td> <?= $key->active; ?> </td>
                    <td>
                        <a href="<?= base_url('edit-category/'. $key->category_id) ?>" onclick="return  confirm('Yakin Mau Edit Data?')" class="badge badge-success">Edit </a>       
                        <a href="<?= base_url('delete-category/'.$key->category_id) ?>" onclick="return  confirm('Yakin Mau Hapus Data?')" class="badge badge-danger">Hapus </a>         
                    </td>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
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