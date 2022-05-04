<!-- PREVIEW INSERT OR UPDATE GAMBAR -->
<script type="text/javascript">
        function tampilkanPreview(userfile, idpreview) {
            var gb = userfile.files;
            for (var i = 0; i < gb.length; i++) {
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();
                if (gbPreview.type.match(imageType)) {
                    //jika tipe data sesuai
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);
                    //membaca data URL gambar
                    reader.readAsDataURL(gbPreview);
                } else {
                    //jika tipe data tidak sesuai
                    alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
                }
            }
        }
    </script>

    <!-- CK EDITOR  -->

<script type="text/javascript">
  CKEDITOR.replace('editor-custom', {
    uiColor: '#ffffff'
  });
</script>
<script src="<?= base_url('ckeditor/ckeditor.js'); ?>"></script>
<!-- plugins:js -->
<script src="<?= base_url() ?>/assets/template/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url() ?>/assets/template/vendors/chart.js/Chart.min.js"></script>
<!-- <script src="<?= base_url() ?>/assets/template/vendors/datatables.net/jquery.dataTables.js"></script> -->
<!-- <script src="<?= base_url() ?>/assets/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
<!-- <script src="<?= base_url() ?>/assets/template/js/dataTables.select.min.js"></script> -->

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url() ?>/assets/template/js/off-canvas.js"></script>
<script src="<?= base_url() ?>/assets/template/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>/assets/template/js/template.js"></script>
<script src="<?= base_url() ?>/assets/template/js/settings.js"></script>
<script src="<?= base_url() ?>/assets/template/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>/assets/template/js/dashboard.js"></script>
<script src="<?= base_url() ?>/assets/template/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

<!-- UNTUK DATATABLE   -->
<script>
  $(document).ready(function() {
    var t = $('#myTable').DataTable();
  });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


</body>

</html>