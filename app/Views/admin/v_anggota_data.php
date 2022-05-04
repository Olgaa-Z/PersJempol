<?php echo view('admin/v_header') ?>
<?php echo view('admin/v_sidebar') ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">



            <div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h6 class="card-title">
                            <a href="<?= base_url('add-anggota') ?>" class="badge badge-warning">+ Tambah Data </a>       
                            </h6>
                        </div>

                        <!-- table advance -->
                        <p class="card-title">DATA SEMUA ANGGOTA</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="myTable2"  class="expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Jabatan</th>
                              <th>Hp</th>
                              <th>Foto</th>
                              <th>Aksi</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                              $no = 1;
                              foreach ($data_anggota as $row) {
                            ?>
                          <tr>
                              <td> <?= $no++ ?></td>
                              <td>  <?= $row->name; ?>  </td>
                              <td> <?= $row->position; ?></td>
                              <td> <?= $row->phone; ?></td>
                              <td> <img src="<?= base_url('profil/'. $row->picture)  ?>" width="60px"> </td>
                              <td>
                                <a href="<?= base_url('edit-anggota/'. $row->team_id) ?>" onclick="return  confirm('Yakin Mau Edit Data?')" class="badge badge-success">Edit </a>       
                                <a href="<?= base_url('delete-anggota/'.$row->team_id) ?>" onclick="return  confirm('Yakin Mau Hapus Data?')" class="badge badge-danger">Hapus </a>             
                              </td>
                          </tr>

                          <?php    } ?>
                          </tbody>
                      </table>
                      
                      </div>
                    </div>
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

<script>
  $(document).ready(function() {
    var t = $('#myTable2').DataTable();
  });
</script>

<?php echo view('admin/v_footer') ?>