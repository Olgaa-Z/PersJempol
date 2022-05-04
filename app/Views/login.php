<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Pers</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>/assets/template/images/fav.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="<?= base_url() ?>/assets/template/images/fav.png" alt="logo" width="60px" height="80px" > -->
                <!-- <div style='color: #000099; font-weight: bolder; font-size:35px'>PERS JEMPOL</div>  -->
                <h4 style='color: #000099; font-weight: bolder; font-size:35px'>PERS JEMPOL</h4>
              </div>
              <h4>Halo! Selamat Datang,</h4>
              <h6 class="font-weight-light">Masuk untuk melanjutkan</h6>
              <form class="pt-3" action="proses_login" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="username"  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" value="MASUK" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                  Tidak Punya Akun? <a href="register.html" class="text-primary">Buat</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- SWEET ALERT -->
  <script>
    document.querySelector(".second").addEventListener('click', function(){
      Swal.fire("Our First Alert", "With some body text!");
    });
  </script>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url() ?>/assets/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url() ?>/assets/template/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>/assets/template/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>/assets/template/js/template.js"></script>
  <script src="<?= base_url() ?>/assets/template/js/settings.js"></script>
  <script src="<?= base_url() ?>/assets/template/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
