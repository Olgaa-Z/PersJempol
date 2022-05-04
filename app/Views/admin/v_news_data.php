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
                            <a href="<?= base_url('add-news') ?>" class="badge badge-warning">+ Tambah Data </a>    
                            </h6>

                        </div>
                        <p class="card-title">DATA SEMUA BERITA</p>

                        <div class="table-responsive pt-3">
                            <table id="myTable" class="expandable-table table">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>

                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Kategori
                                        </th>
                                        <th>
                                            Gambar
                                        </th>
                                        <th>
                                            Penulis
                                        </th>
                                        <th>
                                            Aksi
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_news as $row) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $no++ ?>
                                            </td>
                                            <td>
                                                <?= $row->title; ?>
                                            </td>
                                            <td>
                                                <?= $row->category_id; ?>
                                            </td>
                                            <td>
                                                <img src="<?= base_url('newsimage/' . $row->thumbnail)  ?>" width="60px">
                                            </td>
                                            <td>
                                                <?= $row->writer_id; ?>
                                            </td> 
                                            <td>
                                                <a href="<?= base_url('edit-news/' . $row->news_id) ?>" onclick="return  confirm('Yakin Mau Edit Data?')" type="button" class="btn btn-success">Edit</a>
                                                <a href="<?= base_url('delete-news/' . $row->news_id) ?>" onclick="return  confirm('Yakin Hapus Data ?')" type="button" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php }  ?>

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