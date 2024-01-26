<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelola Stok Bahan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo site_url('Login') ?>" class="h1"><b>Kelola</b>Bahan</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masukan Username dan Password</p>
      <?php if ($this->session->flashdata('salah')):?>
        <div class="alert alert-danger" role="alert">
          Username atau Password Salah!
        </div>        
      <?php endif?>

      <form action="<?php echo site_url('Login/validasi')?>" method="post" class="text-center">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="username">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fa solid fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" name="password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mx-auto"> <!-- Menggunakan mx-auto untuk mengatur posisi ke tengah -->
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
    </div>
</form>


         <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
